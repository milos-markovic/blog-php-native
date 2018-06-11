<?php include '../tamplate/header.php' ?>


<h2>Article: <?php echo $getArticle->title;?></h2><br>


<ul>
    <li>Article: created:&nbsp  <?php echo $getArticle->created_at;?></li>
    <li>Article: updated:&nbsp  <?php echo $getArticle->created_at;?></li>
    <li>Article create: <?php echo ucwords($getArticle->user->first_name.' '.$getArticle->user->last_name);?> </li>
</ul>




<?php include '../tamplate/footer.php' ?>