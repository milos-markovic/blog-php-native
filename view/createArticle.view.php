<?php include '../tamplate/header.php' ?>

<h2>Create Article:</h2><br>


<?php require '../asets/messages/validateMessage.php';?>



<form action="" method="POST" enctype="multipart/form-data">
    <p>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" class="form-control" />
    </p>
    <p>
        <label for="section">Section:</label>
        <textarea name="section" id="section" class="form-control" ></textarea>
    </p>
    <p>
        <label for="image">Pick file for upload:</label>
        <input type="file" name="image" id="image" />
    </p>
    <p>
        <input type="submit" name="submit" value="Create" class="btn btn-primary" />
    </p>
</form>






<?php include '../tamplate/footer.php';?>

