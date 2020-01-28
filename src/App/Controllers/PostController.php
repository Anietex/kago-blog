<?php


namespace Kago\App\Controllers;


use Kago\App\Repositories\PostRepository;
use Kago\Core\System\BaseRequestController;

class PostController extends BaseRequestController
{

    private $postRepository;

    public function __construct()
    {
        $this->postRepository = new PostRepository();
    }

    public function showCreatePost(){


        $this->loadView('admin/pages/create-post');
    }

    public function showManagePost(){

        $data['posts'] = $this->postRepository->getAllPosts();
        $this->loadView('admin/pages/manage-post', $data);

    }


    public function createPost(){

        if($this->postFormIsValid()){

            $post = $this->postRepository->createPost([
                "title" => $_REQUEST['title'],
                "body" => $_REQUEST['body'],
                "slug" => slugify($_REQUEST['title'])
            ]);

           if($post){
               $_SESSION['success'] = "Post was created successfully";
               return $this->redirect('/admin/post/create');
           }


        }else{
            $this->redirect('/admin/post/create');
        }
    }


    public function deletePost($id){
        $this->postRepository->deletePost((int)$id);
        $_SESSION['success'] = "Post deleted successfully";
        return $this->redirect('/admin/post/manage');
    }


    private function postFormIsValid(){

        $errors = [];

        if(empty($_REQUEST['title'])){
            $errors['title'] = "Post title is required";
        }else{
            if($this->postRepository->getPostByTitle($_REQUEST['title'])){
                $errors['title'] = 'A post with the same title already exist';
            }
        }

        if(empty($_REQUEST['body'])){
            $errors['body'] = 'Post body is required';
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