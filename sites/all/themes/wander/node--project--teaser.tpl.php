<?php

//if ($classes) {
  $classes .= ' ' . $field_tile_style[0]['value'];
  $classes = ' class="'. $classes . ' "';
//}

hide($content['comments']);
hide($content['links']);

?>

<div class="project-teaser">

    <a href="<?php print $node_url; ?>" <?php print $id_node . $classes .  $attributes; ?>>

        <?php print render($content);?>

        <h2<?php print $title_attributes; ?>>
            <div class="title"><?php print $title; ?>
            </div>
        </h2>

    </a>

</div>
