<?php include '../tamplate/header.php';?>

<h2>Update Article</h2><br>


<?php  require '../asets/messages/validateMessage.php';?>


<form action="updateArticle.php?id=<?php echo $getArticle->id;?>" method="POST" enctype="multipart/form-data">
    <p>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="<?php echo $getArticle->title;?>" class="form-control" />
    </p>
    <p>
        <label for="section">Section</label>
        <textarea name="section" id="section" class="form-control" ><?php echo $getArticle->section;?></textarea>
    </p>
    <p>
        <label for="image">Image:</label>
        <input type="file" name="image" id="image" />
    </p>
    <p>
        <input type="submit" name="submit" value="Update" class="btn btn-primary" />
    </p>
</form>




<?php include '../tamplate/footer.php';?>

