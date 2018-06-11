<?php require '../tamplate/header.php';?>

<h2>Update User:</h2><br>


<?php  require '../asets/messages/validateMessage.php';?>


<form action="updateUser.php?id=<?php echo $getUser->id;?>" method="POST">
    <p>
        <label for="firstName">First name:</label>
        <input type="text" name="firstName" id="firstName" value="<?php echo $getUser->first_name?>" class="form-control" />
    </p>
    <p>
        <label for="lastName">Last name:</label>
        <input type="text" name="lastName" id="lastName" value="<?php echo $getUser->last_name?>" class="form-control" />
    </p>
    <p>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" value="<?php echo $getUser->email?>" class="form-control" />
    </p>
    <p>
        <input type="submit" name="submit" value="Update" class="btn btn-primary"/>
    </p>
</form>




<?php require '../tamplate/footer.php';?>

