<?php include '../tamplate/header.php';?>


<h2 class="title">Users:</h2><br>


<?php require '../asets/messages/message.php';?>



<table class="table table-bordered">
    <thead>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Usertype</th>
        </tr>
    </thead>
    <thead>
        <?php foreach($users as $user):?>
        <tr>
            
            <td><?php echo ucfirst($user->first_name);?></td>
            <td><?php echo ucfirst($user->last_name);?></td>
            <td><?php echo $user->email;?></td>
            <td><strong><?php echo $user->name;?></strong></td>
            
            <?php if($user_usertype->name == 'admin'):?>
            
            <td><a href="updateUser.php?id=<?php echo $user->id;?>">Update</a></td>
            <td><a href="deleteUser.php?id=<?php echo $user->id;?>">Delete</a></td>
            
            <?php endif;?>
            
        </tr>
        <?php endforeach;?>
    </thead>
</table>



<?php if($user_usertype->name == 'admin'):?>
 
    <a class="btn btn-primary" href="createUser.php">Create User</a>

<?php endif;?>



<?php include '../tamplate/footer.php';?>




    