
<?php if(isset($messages)):?>
        
    <?php if($article->id == $messages['article'] ):?>

    <ul class="alert alert-primary">
        
        <?php foreach($messages as $message):?>

            <?php if(is_string($message)):?>

                <li><?php echo $message;?></li>

            <?php endif;?>

        <?php endforeach?>

    </ul>    

    <?php endif;?>
        
<?php endif;?>
       
 



