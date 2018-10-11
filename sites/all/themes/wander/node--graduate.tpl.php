<?php

//if ($classes) {
  $classes .= ' ' . $field_tile_style[0]['value'];
  $classes = ' class="'. $classes . ' "';
//}

hide($content['comments']);
hide($content['links']);

?>

<div class="graduate">

    <?php echo render($content['field_graduate']); ?>

    <?php echo render($content['field_graduate_name']); ?>

    <?php echo render($content['field_facebook']); ?>

    <?php echo render($content['body']); ?>


    <!--        --><?php //print render($content);?>



</div>
