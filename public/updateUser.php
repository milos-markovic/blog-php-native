<?php
    require '../bootstrap.php';

    if(!$session->issetSession()){
        header("Location: ../login.php");
    }
    
    
    if(isset($_GET['id'])){
        $getUser = $user->getUser($_GET['id']);
    }

    
   
    
    if($_POST){
        
     
        if($validate->validateUser($_POST)){

            if($user->updateUser($_POST,$_GET['id'])){
                $message="Uspesno ste izvrsili update usera";
                header("Location:users.php?message=$message");
                exit;
            }
          
        }else{
            
            $messages = $validate->messages;
    
        }
      
         
    }
   
    require '../view/updateUser.view.php';
