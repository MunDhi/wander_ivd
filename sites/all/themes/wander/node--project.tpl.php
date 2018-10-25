<?php

//if ($classes) {
  $classes .= ' ' . $field_tile_style[0]['value'];
  $classes = ' class="'. $classes . ' "';
//}

hide($content['comments']);
hide($content['links']);

?>

<a href="/projects" class="back-to-proj">&larr; Projects</a>

<div class="project">

    <div class="project-info">

    <?php echo render($content['field_project_logo']); ?>

        <div class="project-details">


        <?php if ($content['field_project_title']): ?>
        <h4><?php echo render($content['field_project_title']); ?></h4>
    <?php endif; ?>

    <?php if ($content['field_project_by']): ?>
        <h5>By<?php echo render($content['field_project_by']); ?></h5>
    <?php endif; ?>

    <?php echo render($content['body']); ?>

        </div>

    </div>

    <?php echo render($content['field_project']); ?>


</div>
