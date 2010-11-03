



<?php
foreach($friends as $friend) :
  ?>
  The most awesome <a href="<?php echo $friend->url; ?>" target="_blank">
                   <?php echo $friend['username'] ?></a>  <br />
  <?php
endforeach;







