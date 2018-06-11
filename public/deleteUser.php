<?php   require '../bootstrap.php';
    

if($user->deleteUser($_GET['id'])){
    $message = "Uspesno ste obrislali korisnika";
    header("Location: users.php?message=$message");
    exit;
}


