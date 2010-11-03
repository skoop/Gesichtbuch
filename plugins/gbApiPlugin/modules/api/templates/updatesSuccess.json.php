[
    <?php foreach($gb_updates as $gb_update) : ?>
        { "content": "<?php echo $gb_update->getContent(); ?>" },
    <?php endforeach; ?>
]