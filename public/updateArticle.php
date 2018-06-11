<?php
    require '../bootstrap.php';

    if(isset($_GET['id'])){
        $getArticle = $article->getArticle($_GET['id']);
    }
    
    
    if($_POST){
           
        
        if($validate->validateUpdateArticle($_POST, $_FILES['image'])){
        
           if($article->updateArticle($_POST, $_FILES['image'], $_GET['id'])){
                $message = "Uspesno ste izvršili update članka";
                header("Location:articles.php?message=$message");
                exit;
            }
         
        }else{
            
            $messages = $validate->messages;
   
        }
    }
    

    
  require '../view/updateArticle.view.php';
