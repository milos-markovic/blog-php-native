<?php
    require '../bootstrap.php';

    $getArticle = $article->getArticleDetails($_GET['id']);
    


    
    require '../view/articleDetails.php';
