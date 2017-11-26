<?php

class Post {
    public  function index() {
        $list = PostModel::getAllPosts();
        require_once ADMIN_VIEW_PATH.'/post/index.php';
    }

    public  function delete() {
        if(isset($_GET['id'])) {
            PostModel::deletePostById($_GET['id']);
            header('localtion: ?controller=post&action=index');
        } else {
            header('location:.');
        }
    }

    public function edit() {
        if(isset($_GET['post_id'])) {
            $post = PostModel::getPostData($_GET['post_id']);
            $postId = $_GET['post_id'];
            if($postId == 0) {
            }
            require_once ADMIN_VIEW_PATH.'/post/edit.php';
        } else {
            //header('localtion: ?controller=post&action=index');
        }
    }
}