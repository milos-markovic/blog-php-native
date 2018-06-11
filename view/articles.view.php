
<?php include '../tamplate/header.php';?>


<?php  echo !empty($articles) ? "<h2>Articles:</h2>" : "<h2>Create new article:</h2>";?><br>



<?php require '../asets/messages/message.php';?>



<?php if(count($articles)):?>

    <table class="table table-bordered articles">
        <thead>
            <tr>
                <th>Title</th>
                <th>Section</th>
                <th>Image</th>
                <th>Article details</th>
                <th>Article comments</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($articles as $article):?>
            <tr>
                <td><?php echo ucfirst($article->title);?></td>
                <td class="articleSection"><a class="linkToFullArticle" href="fullArticle.php?id=<?php echo $article->id;?>" ><?php echo substr(ucfirst($article->section),0,300).' ...';?></a></td>
                <td><img class="rounded-circle" src="../asets/images/<?php echo $article->image;?>" /></td>
                <td><a href="articleDetails.php?id=<?php echo $article->id;?>">Details</a></td>
                <td><a href="articleComments.php?id=<?php echo $article->id;?>">Comments</a></td>
                <td><a href="updateArticle.php?id=<?php echo $article->id;?>">Update</a></td>
                <td><a href="deleteArticle.php?id=<?php echo $article->id;?>">Delete</a></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>

<?php endif; ?>




<a class="btn btn-primary" href="createArticle.php">Create Article</a>





<?php include '../tamplate/footer.php';?>

