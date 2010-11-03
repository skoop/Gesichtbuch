<updates>
    <?php foreach($gb_updates as $gb_update) : ?>
        <update>
            <content><?php echo $gb_update->getContent(); ?></content>
        </update>
    <?php endforeach; ?>
</updates>