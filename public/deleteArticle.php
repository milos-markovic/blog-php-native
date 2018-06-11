<?php
    require '../bootstrap.php';

    
    if($article->deleteArticle($_GET['id'])){
        $message = "Uspesno ste izbrisali članak";
        header("Location: articles.php?message=$message");
        exit;
    }
    