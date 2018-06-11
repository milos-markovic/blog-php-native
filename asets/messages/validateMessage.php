
<?php if(isset($messages)) :?>


<ul class="alert alert-primary">

    <?php foreach($messages as $message):?>

            <li><?php echo $message;?></li>
                        
    <?php endforeach;?>

</ul>
        
<?php endif; ?>



