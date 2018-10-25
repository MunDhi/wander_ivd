<?php

//if ($classes) {
  $classes .= ' ' . $field_tile_style[0]['value'];
  $classes = ' class="'. $classes . ' "';
//}

hide($content['comments']);
hide($content['links']);

?>

<a href="/graduates" class="back-to-grad">&larr; Graduates</a>

<div class="graduate">

<!--    --><?php //echo render($content['field_graduate']); ?>

    <?php echo render($content['field_graduate_gif']); ?>

    <div class="graduate-info">

        <div class="graduate-details">

            <div class="graduate-title">

                <?php if ($content['field_graduate_name']): ?>
                    <h3><?php echo render($content['field_graduate_name']); ?></h3>
                <?php endif; ?>

                <?php if ($content['field_role']): ?>
                    <h5><?php echo render($content['field_role']); ?></h5>
                <?php endif; ?>

            </div>

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

                <?php if ($content['field_website']): ?>
                    <?php echo render($content['field_website']); ?>
                <?php endif; ?>

                <?php if ($content['field_behance']): ?>
                    <?php echo render($content['field_behance']); ?>
                <?php endif; ?>

                <?php if ($content['field_youtube']): ?>
                    <?php echo render($content['field_youtube']); ?>
                <?php endif; ?>


                <?php if ($content['field_personal_ig']): ?>
                    <?php echo render($content['field_personal_ig']); ?>
                <?php endif; ?>


            </div>

        </div>




        <?php echo render($content['body']); ?>

        <?php if ($content['field_graduate_project']): ?>
            <?php echo render($content['field_graduate_project']); ?>
        <?php endif; ?>

    </div>


    <?php if ($content['field_example_works']): ?>
        <?php echo render($content['field_example_works']); ?>
    <?php endif; ?>




</div>
