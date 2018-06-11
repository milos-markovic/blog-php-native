<?php
    require 'bootstrap.php';
    
    if($session->logout()){
        header("Location: login.php");
        exit;
    }

