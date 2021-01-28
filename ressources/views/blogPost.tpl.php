<?php if (!empty($onePost)): ?>
    <?php foreach ($onePost as $read):?>
        <div>
            <h3> <?=$read['id']?> </h3> <br>
            <?=$read['pseudo']?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

