<?php include '../tamplate/header.php' ?>


<h2>Create User:</h2><br>


<?php require '../asets/messages/validateMessage.php';?>



<form action="" method="POST">
    <p>
        <label for="firstName">First Name:</label>
        <input type="text" name="firstName" id="firstName" class="form-control" />
    </p>
    <p>
        <label for="lastName">Last name:</label>
        <input type="text" name="lastName" id="lastName" class="form-control" />
    </p>
    <p>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" class="form-control" />
    </p>
    <p>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" class="form-control" />
    </p>
    <p>
        <label>User: </label>
        <select name="userType" class="form-control">
            
            <?php foreach($userTypes as $userType):?>
            
                <option value="<?php echo $userType->id;?>"><?php echo $userType->name;?></option>
                
            <?php endforeach;?>
                
        </select>
    </p><br>
    <p>
        <input type="submit" name="submit" value="Create" class="btn btn-primary" />
    </p>
</form>




<?php include '../tamplate/footer.php' ?>



