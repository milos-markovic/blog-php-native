<?php
 require_once  'Query.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Comment
 *
 * @author TSPCC
 */
class Comment extends Query {
    
    public function storeComment($articleId, $inputArray){
       
        
       $query = "INSERT INTO comments(name,comment,article_id)VALUES(:name,:comment,:article_id)";
       $array = [
           ':name' => $inputArray['name'],
           ':comment' => $inputArray['comment'],
           ':article_id' => $articleId
       ];
       return $this->runQuery($query, $array);
    }
    public function getArticleComments($articleId){
        
        $query = "SELECT * FROM comments WHERE article_id = :articleId";
        $array = [
            ':articleId' => $articleId
        ];
        return $this->returnRows($query, $array);
    }
    public function deleteComment($commentId){
        
        $query = "DELETE FROM comments WHERE id = :commentId";
        $array = [
            ':commentId' => $commentId
        ];
        return $this->runQuery($query, $array, true);
    }
    public function getComment($commentId){
        
        $query = "SELECT * FROM comments WHERE id = :commentId";
        $array = [
            ':commentId' => $commentId
        ];
        return $this->returnRows($query, $array, true);
    }
}
