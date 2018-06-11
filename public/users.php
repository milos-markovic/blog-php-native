<?php
    require '../bootstrap.php';

    if(!$session->issetSession()){
        header("Location: ../login.php");
    }
   
    
    $users = $user->getAll();

  
    $user_usertype = $user->getUserType($_SESSION['userId']);
  
 
    
    require '../view/users.view.php';

