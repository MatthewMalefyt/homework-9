<?php

namespace app\models;

//using the database class namespace
use app\core\Database;

class Post
{
    //todo make methods here

    //using the trait, bring in all of its methods
    use Database;

    public function getAllPostsByName($name) {
        $query = "select * from posts WHERE CONCAT(title,' ',description) like :title";

        return $this->queryWithParams($query, ['name' => '%' . $name . '%'], 'app\models\Post');
    }

    public function getAllPosts() {
        $query = "select * from posts";
        return $this->fetchAll($query);
    }

    public function getPostById($id){
        $query = "select * from posts where id = :id";
        return $this->queryWithParams($query, ['id' => $id]);
    }

    public function savePost($inputData){
        $query = "insert into posts (title, description) values (:title, :description);";
        return $this->queryWithParams($query, $inputData);
    }

    public function updatePost($inputData){
        $query = "update posts set title = :title, description = :description where id = :id";
        return $this->queryWithParams($query, $inputData);
    }

    public function deletePost($inputData){
        $query = "DELETE FROM posts where id = :id";
        return $this->queryWithParams($query, $inputData);
    }
}