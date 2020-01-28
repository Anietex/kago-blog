<?php


namespace Kago\App\Controllers;


use Kago\App\Repositories\PostRepository;
use Kago\App\Utils\Auth;
use Kago\App\Utils\FileUploader;
use Kago\Core\System\BaseRequestController;

class PostController extends BaseRequestController
{

    private $postRepository;

    public function __construct()
    {
        $this->postRepository = new PostRepository();
        $this->auth = new Auth();
    }

    public function showCreatePost(){

        $this->loadView('admin/pages/create-post');
    }

    public function showManagePost(){

        $data['posts'] = $this->postRepository->getAllPosts();
        $this->loadView('admin/pages/manage-post', $data);

    }


    public function createPost()
    {
        $fileUploader = new FileUploader('post_image');

        $fileUploader->setAllowedFileTypes(['jpg', 'png']);
        $fileUploader->setMaxFileSize(2000000);
        $fileUploader->setFilename(slugify($_REQUEST['title']));
        $fileUploader->setUploadDirectory('/' . $_SERVER['DOCUMENT_ROOT'] . '/posts');


        if ($this->postFormIsValid($fileUploader)) {

            try{
                $fileUploader->uploadFile();
            }catch (\Exception $exception){
                $_SESSION['errors']['post_image'] = $exception->getMessage();
            }
            $post = $this->postRepository->createPost([
                "title" => $_REQUEST['title'],
                "body" => $_REQUEST['body'],
                "slug" => slugify($_REQUEST['title']),
                'post_image' => $fileUploader->getUploadFileName()
            ]);

            if ($post) {
                $_SESSION['success'] = "Post was created successfully";
                return $this->redirect('/admin/post/create');
            } else {
                $this->redirect('/admin/post/create');
            }
        }
    }


    public function updatePost($id){

        $post = $this->postRepository->getPostById($id);

        $fileUploader = new FileUploader('post_image');
        $fileUploader->setAllowedFileTypes(['jpg', 'png']);
        $fileUploader->setMaxFileSize(2000000);
        $fileUploader->setFilename(slugify($_REQUEST['title']));
        $fileUploader->setUploadDirectory('/' . $_SERVER['DOCUMENT_ROOT'] . '/posts');




        $data = [
            "title" => $_REQUEST['title'],
            "body" => $_REQUEST['body'],
            "slug" => slugify($_REQUEST['title']),
        ];

        if($fileUploader->getFileSize() > 0){

            if ($this->postFormIsValid($fileUploader, false)) {

                try{
                    $fileUploader->uploadFile();
                }catch (\Exception $exception){
                    $_SESSION['errors']['post_image'] = $exception->getMessage();
                }
                $post = $this->postRepository->updatePost($post['id'],[
                    "title" => $_REQUEST['title'],
                    "body" => $_REQUEST['body'],
                    "slug" => slugify($_REQUEST['title']),
                    'post_image' => $fileUploader->getUploadFileName()
                ]);

                if ($post) {
                    $_SESSION['success'] = "Post was updates successfully";
                    $this->redirect('/admin/post/edit/'.$post['id']);
                } else {
                    $this->redirect('/admin/post/edit/'.$post['id']);
                }
            }

        }else{
            if ($this->postFormIsValid(null, false)) {
               $this->postRepository->updatePost($post, $data);
                    $_SESSION['success'] = "Post was updates successfully";
                    $this->redirect('/admin/post/edit/'.$post['id']);
            }

        }


    }


    public function editPost($id){
        $post = $this->postRepository->getPostById($id);
        $this->loadView('admin/pages/edit-post', ['post' => $post]);
    }

    public function deletePost($id){
        $this->postRepository->deletePost((int)$id);
        $_SESSION['success'] = "Post deleted successfully";
        return $this->redirect('/admin/post/manage');
    }


    private function postFormIsValid(FileUploader $uploader = null, $checkDups = true){

        $errors = [];

        if(empty($_REQUEST['title'])){
            $errors['title'] = "Post title is required";
        }else{
            if($checkDups){
                if($this->postRepository->getPostByTitle($_REQUEST['title'])){
                    $errors['title'] = 'A post with the same title already exist';
                }
            }
        }

        if(empty($_REQUEST['body'])){
            $errors['body'] = 'Post body is required';
        }



        if($uploader){
            if(empty($_FILES['post_image'])){
                $errors['post_image'] = "A post  image is required";
            }else{
                if(!$uploader->isValidFileType()){
                    $errors['post_image'] = "Only Images are allowed";
                }
            }
        }






        if(count($errors) !== 0){
            $_SESSION['errors'] = $errors;
            return false;
        }else{
            unset($_SESSION['errors']);
            return true;
        }
    }
}