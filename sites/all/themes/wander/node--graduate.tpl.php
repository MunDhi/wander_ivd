<?php

//if ($classes) {
  $classes .= ' ' . $field_tile_style[0]['value'];
  $classes = ' class="'. $classes . ' "';
//}

hide($content['comments']);
hide($content['links']);

?>

<div class="graduate">


      <h2<?php print $title_attributes; ?>>
          <div class="title"><?php print $title; ?>
          </div>
      </h2>

        <?php print render($content);?>



</div>
