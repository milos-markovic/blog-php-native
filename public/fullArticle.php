<?php
    require '../bootstrap.php';

    
    $getArticle =  $article->getArticle($_GET['id']);
   //var_dump($getArticle);exit;


    require "../view/fullArticle.view.php";