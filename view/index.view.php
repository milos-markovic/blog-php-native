
<?php include 'tamplate/header.php';?>




<?php foreach($allArticles as $article):?>



<article>
    
          
    <h2><?php echo $article->title;?></h2>
    
    
    
    
    <div class="main_article">
        
        <img width="200" class="img-thumbnail"  src="asets/images/<?php echo $article->image;?>" />
        <p>
            <?php echo $article->section;?>
        </p>
        <p>
            Article wrote: <?php echo $article->user->first_name.' '.$article->user->last_name;?>
        </p>
        
    </div>
    
    
    
    
    <?php if(count($article->comments)):?>
    
        <div class="alert alert-primary" >
             <?php foreach($article->comments as $comment) :?>

            <span class="font-weight-bold" ><?php echo $comment->name.' Say:'; ?></span>&nbsp;  <?php echo $comment->comment;?><br>


        

            <?php endforeach;?>
        </div>
    
    <?php endif;?>
    
    
    
    
    
    <div class="create_article">
        
        <h4>Insert comment:</h4>
        
        
        <?php  require 'asets/messages/validateIndexMessage.php';?>
        
        
        
        <form action="index.php?articleId=<?php echo $article->id;?>" method="POST">
            <p>
                <label for="name">Name:</label>
                <input class="form-control" type="text" name="name" id="name" />
            </p>
            <p>
                <label for="comment">Comment:</label>
                <textarea class="form-control" name="comment"></textarea>
            </p>
            <p>
                <input type="submit" name="submit" value="Create comment" class="btn btn-primary"  />
            </p>
        </form>
        
    </div>
    <br>
    <hr>
   
</article>



<?php endforeach;?>


<?php include 'tamplate/footer.php';?>
