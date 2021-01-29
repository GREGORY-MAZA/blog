



<?php

//blogPosttpl
debug($onePost); ?>
<?php debug($comments);?>



<h3> <?php echo $onePost['title']?> </h3> <?php echo $onePost['text'] ?> <br> <br> <?php echo $onePost['pseudo']
?>
<br>
<?php if (!empty($comments)): ?>
    <?php foreach ($comments as $read):?>
        <div>
            <?=$read['text']?> <br>
            <?=$read['pseudo']?>
            <br>
            <br>
        </div>
    <?php endforeach; ?>
<?php endif; ?>



