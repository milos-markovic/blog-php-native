<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Blog</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="http://localhost/blog8/asets/css/main.css" />
    </head>
    <body>
        <div class="wrapper">
            
            <div class="header">
                <h2>Blog</h2>
            </div>
            
            <div class="nav">
                <ul>
                    <li><a href="http://localhost/blog8/index.php">Index</a></li>
                    <li><a href="http://localhost/blog8/public/users.php">User</a></li>
                    <li><a href="http://localhost/blog8/public/articles.php">Article</a></li>
                    <?php if(!isset($_SESSION['userId'])):?>
                    <li><a href="http://localhost/blog8/login.php">Login</a></li>
                    <?php else:?>
                    <li><a href="http://localhost/blog8/logout.php">Logout <b><?php echo $logInUser->first_name;?></b></a></li>
                    <?php endif;?>
                </ul>
            </div>
            
            <div class="section">
