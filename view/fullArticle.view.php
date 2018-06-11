<?php include '../tamplate/header.php'; ?>


<article class="fullArticle">
    <h2><?php echo $getArticle->title;?></h2>
    
    <div class="proba">
        <img class="img-thumbnail"  src="../asets/images/<?php echo $getArticle->image;?>" />
    </div>
    <p>
        <?php echo $getArticle->section;?>
    </p>
    <p>
        <?php echo $getArticle->first_name.' '.$getArticle->last_name;?>
    </p>
</article>







<?php include '../tamplate/footer.php'; ?>


