<?php
    require 'bootstrap.php';
    
    
    if($_POST){
        
        if($validate->checkRequireFields($_POST)){
        
            if($session->Login($_POST)){
               $message = "Ulogovani ste";
               header("Location: public/users.php");
               exit;
            }
        }else{
            
            $messages = $validate->messages;
        }
    }
    

    require 'view/login.view.php'; 
