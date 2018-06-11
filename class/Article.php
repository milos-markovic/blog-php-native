<?php
  // namespace App;
    
    require_once 'Query.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Article
 *
 * @author TSPCC
 */
class Article extends Query {
    //put your code here
    public function getAll($user){
       
       $userUserType = $user->getUserType($_SESSION['userId']);
       
       if($userUserType->name === 'admin'){
            $articles = $this->returnRows("SELECT * FROM articles");
       }else{
            $articles = $this->returnRows("SELECT * FROM articles WHERE user_id = :userId", [':userId' => $_SESSION['userId'] ]);
       }
       return $articles ? $articles : [];
    }
    public function getArticle($id){
       $article = $this->returnRows("SELECT articles.id,articles.title,articles.section,articles.image,users.first_name,users.last_name,users.email FROM articles JOIN users ON users.id = articles.user_id WHERE articles.id = :id", [':id' => $id], true);
       return $article ? $article : array();
    }
    public function updateArticle($inputFields,$uploadImage,$articleId){
      
        if(isset($uploadImage)){
             $fileName = $uploadImage['name'];
             $tmp_file =  $uploadImage['tmp_name'];

             $destination = "../asets/images";

             move_uploaded_file($tmp_file, $destination.'/'.$fileName);
        }
        if(empty($uploadImage['error'])){
           
            $query = "UPDATE articles SET title = :title,section = :section,image = :image,updated_at = :updated_at WHERE id = :id";
            $array = [
                ':title' => $inputFields['title'],
                ':section' => $inputFields['section'],
                ':image' => trim($fileName),
                ':updated_at' => date('Y-m-d H:i:s'),
                ':id' => $articleId
            ];
        }else {
            $query = "UPDATE articles SET title = :title,section = :section,updated_at = :updated_at WHERE id = :id";
            $array = [
                ':title' => $inputFields['title'],
                ':section' => $inputFields['section'],
                ':updated_at' => date('Y-m-d H:i:s'),
                ':id' => $articleId
            ];
        }
        return $this->runQuery($query, $array);      
    }   
    public function deleteArticle($articleId){
        
        $deleteComments = $this->runQuery("DELETE FROM comments WHERE article_id = :articleId", [':articleId' => $articleId]);
        
        if($deleteComments){
            return $this->runQuery("DELETE FROM articles WHERE id = :id", [':id' => $articleId]);
        }
    }
    public function storeArticle($uploadImage, $inputFields ){
        
       $fileName =  $uploadImage['name'];
       $tmp_file =  $uploadImage['tmp_name'];
       
       $destination = "../asets/images";
       
       if(move_uploaded_file($tmp_file, $destination.'/'.$fileName)){
           $query = "INSERT INTO articles(title,section,image,created_at,updated_at,user_id)VALUES(:title,:section,:image,:created_at,:updated_at,:user_id)";
           $array = [
               ':title' => trim($inputFields['title']),
               ':section' => trim($inputFields['section']),
               ':image' => $fileName,
               ':created_at' => date('Y-m-d H:i:s'),
               ':updated_at' => ' ',
               ':user_id' => $_SESSION['userId']
           ];
           return $this->runQuery($query, $array);
       }
    }
    public function getAllArticles(){
        $AllArticles = $this->returnRows("SELECT * FROM articles");
        
        foreach($AllArticles as $article){
            $article->user = $this->getUsers($article->user_id);
            $article->comments = $this->getComments($article->id);
        }
                
        return $AllArticles ? $AllArticles : array();
    }
    public function getUsers($userId){

       $query = "SELECT first_name,last_name,email FROM users WHERE id = :userId";
       $array = [
           ':userId' => $userId
       ];
       $user = $this->returnRows($query, $array, true);
       return $user ? $user : array();
    }
    public function getComments($articleId){
        
        $query = "SELECT name,comment FROM comments WHERE article_id = :articleId";
        $array = [
            ':articleId' => $articleId
        ];
        $comments = $this->returnRows($query, $array);
        return $comments ? $comments : array();
    }
    public function getArticleDetails($articleId){
        
        $query = "SELECT * FROM articles WHERE id = :articleId";
        $array = [
            ':articleId' => $articleId
        ];
        $article = $this->returnRows($query, $array, true);
        $article->user = $this->getArticleUser($article->user_id);
        return $article;
    }
    public function getArticleUser($userId){
        $query = "SELECT * FROM users WHERE id = :userId";
        $array = [
            ':userId' => $userId
        ];
        return $this->returnRows($query, $array, true);
    }
}
