<?php if (!empty($tenLastPosts)): ?>
    <?php foreach ($tenLastPosts as $read):?>
        <div>
            <h3> <?=$read['title']?> </h3> <br>
            <?=$read['text']?> <br>
            <?=$read['pseudo']?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

