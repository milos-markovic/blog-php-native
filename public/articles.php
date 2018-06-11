<?php    
    require '../bootstrap.php';

    if(!$session->issetSession()){
        header("Location: ../login.php");
        exit;
    }
    
    
    $articles = $article->getAll($user);
 
    
    require '../view/articles.view.php';
