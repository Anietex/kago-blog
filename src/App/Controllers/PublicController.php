<?php
namespace Kago\App\Controllers;

use Kago\App\Repositories\PostRepository;
use Kago\Core\System\BaseRequestController;

class PublicController  extends BaseRequestController
{


    private $postRepository;

    public function __construct()
    {
        $this->postRepository = new PostRepository();
    }

    public function home(){


        $posts = $this->postRepository->getAllPosts();

        $this->loadView('index', [
            "title" => "Home - Kago Blog",
            "posts" => $posts
        ]);
    }
}