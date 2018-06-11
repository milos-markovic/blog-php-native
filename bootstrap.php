<?php
   /* require 'class/Session.php';
    require 'class/Database.php';
    require 'class/User.php';
    require 'class/Article.php';
  */

    require 'vendor/autoload.php';

    $database = new Database();
    
    
    
    $db = $database->connectDB();
    
    $session = new Session($db);
    $user = new User($db);
    $article = new Article($db);
    $comment = new Comment($db);
    $validate = new Validation();
   
    
    //   Get login user 
    if(isset($_SESSION['userId'])){
        $logInUser = $user->getUser($_SESSION['userId']);
    }