<?php include '../tamplate/header.php';?>

<h2>Article Comments:</h2><br>



<?php if(isset($_GET['message'])):?>

    <p class="alert alert-primary"><?php echo $_GET['message']?></p>

<?php endif;?>

    
    
<?php if(count($getComments)):?>    
    
    
    <ul>


    <?php foreach($getComments as $comment):?>

        <p>
            <?php echo $comment->name.' wrote';?>:&nbsp; <?php echo $comment->comment;?>&nbsp;&nbsp;
            <a class="btn btn-outline-danger" href="deleteComment.php?id=<?php echo $comment->id;?>">Delete</a>
        </p>

    <?php endforeach;?>


    </ul>

    
<?php else:?>    
    
    <h5>No comments for this article</h5>
    
<?php endif;?>
    
    
<?php include '../tamplate/footer.php';?>

