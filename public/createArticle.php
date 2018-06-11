<?php
    require '../bootstrap.php';
    
    
    if($_POST){
        
        if($validate->validateArticle($_POST, $_FILES['image'])){
        
            if($article->storeArticle($_FILES['image'], $_POST)){
                $message = "Uspesno ste uneli novi članak";
                header("Location: articles.php?message=$message");
                exit;
            }
        }else{
            
            $messages = $validate->messages;
        }
    }
    
    
    require '../view/createArticle.view.php';


