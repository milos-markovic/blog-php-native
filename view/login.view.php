<?php include 'tamplate/header.php';?>

<div class="login">
    
    <h2>Login:</h2><br>

    
    <?php require 'asets/messages/validateMessage.php';?>
    
    
    <form action="" method="POST">
        <p>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" class="form-control"  />
        </p>
        <p>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control" />
        </p>
        <p>
            <input type="submit" name="submit" value="Login" class="btn btn-primary" />
        </p>
    </form>

</div>


<?php include 'tamplate/footer.php';?>


