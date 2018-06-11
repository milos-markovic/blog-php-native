<?php
    require '../bootstrap.php';

    
    
    
    $getComments = $comment->getArticleComments($_GET['id']);
   
    
    
    
    require '../view/articleComments.view.php';