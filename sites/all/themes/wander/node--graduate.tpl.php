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

    <?php echo render($content['field_graduate_gif']); ?>

    <div class="graduate-info">

        <div class="graduate-details">

        <?php if ($content['field_graduate_name']): ?>
            <h3><?php echo render($content['field_graduate_name']); ?></h3>
        <?php endif; ?>

            <div class="sm-icons">

                <?php if ($content['field_facebook']): ?>
                    <?php print render($content['field_facebook']); ?>
                <?php endif; ?>

                <?php if ($content['field_instagram']): ?>
                    <?php echo render($content['field_instagram']); ?>
                <?php endif; ?>

                <?php if ($content['field_linkedin']): ?>
                    <?php echo render($content['field_linkedin']); ?>
                <?php endif; ?>

            </div>

        </div>

    <?php echo render($content['body']); ?>

    </div>


    <?php if ($content['field_example_works']): ?>
        <?php echo render($content['field_example_works']); ?>
    <?php endif; ?>

    <?php if ($content['field_graduate_project']): ?>
        <?php echo render($content['field_graduate_project']); ?>
    <?php endif; ?>


</div>
