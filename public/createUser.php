<?php
    require '../bootstrap.php';
    
    if(!$session->issetSession()){
        header("Location: ../login.php");
    }
    
    $userTypes = $user->getUserTypes();

    
    if($_POST){
        
        
       if($validate->validateUser($_POST)){
           
            if($user->storeUser($_POST)){
                $message = "Uspešno ste uneli novog korisnika";
                header("Location: users.php?message=$message");
                exit;
            }else{
                header("Loaction: users.php");
            }
            
       }else{
                          
               $messages = $validate->messages;

       }
    }
    
    
    require '../view/createUser.view.php';



