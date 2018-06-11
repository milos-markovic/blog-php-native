<?php
    require '../bootstrap.php';

    
    $getComment = $comment->getComment($_GET['id']);
   
    
    
    if($comment->deleteComment($_GET['id'])){
        $message = "Uspesno ste obrisali komentar";
        header("Location: articleComments.php?id=$getComment->article_id&message=$message");
        exit;
    }
    
