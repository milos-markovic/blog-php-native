<?php require 'bootstrap.php';

$allArticles = $article->getAllArticles();

/* if(isset($_GET['message'])){
    $message = $_GET['message']; 
}
 * 
 */
/*if(isset($_GET['article'])){
    $articleId = $_GET['article'];
}
*/


if(isset($_POST['submit'])){
    
    
    $articleId = $_GET['articleId'];
 
    
    if($validate->checkRequireFields($_POST)){
    
        if($comment->storeComment($articleId, $_POST)){

           $message = "Uspesno ste uneli komentar"; 
           header("Location:index.php?message=$message&article=$articleId");
           exit;
        }
        
    }else{
        
        $messages = $validate->messages;
        $messages['article'] = (int)$articleId;
       
    }
    
}


require 'view/index.view.php';


    
   
    



    



