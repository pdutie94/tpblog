<?php

class PostModel extends Database {
    public static function getAllPosts() {
        return parent::getAllRows('post');
    }

    public static function editPost($postId) {
    }

    public static function getPostData($postId) {
        return parent::getRowData('post', 'id', $postId);
    }

    public static function deletePostById($postId) {
        return parent::deleteRow('post', 'id', $postId);
    }
}