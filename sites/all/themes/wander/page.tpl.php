<?php
//kpr(get_defined_vars());
//kpr($theme_hook_suggestions);
//template naming
//page--[CONTENT TYPE].tpl.php
?>
<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!-- page0.tpl.php-->
<?php } ?>

<?php print $mothership_poorthemers_helper; ?>

<header role="banner">
  <div class="siteinfo">
    <?php if ($logo): ?>
      <figure>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
      </figure>
    <?php endif; ?>

    <?php if($site_name OR $site_slogan ): ?>
    <hgroup>
      <?php if($site_name): ?>
        <h1><?php print $site_name; ?></h1>
      <?php endif; ?>
      <?php if ($site_slogan): ?>
        <h2><?php print $site_slogan; ?></h2>
      <?php endif; ?>
    </hgroup>
    <?php endif; ?>
  </div>

  <?php if($page['header']): ?>



    <div class="header-region">

        <!--        BURGER MENU-->
        <div class="header-half">
            <div class="burger">
                <div class="burger__patty"></div>
                <div class="burger__patty"></div>
                <div class="burger__patty"></div>
            </div>

            <nav class="menu">
                <div class="menu__brand">
                    <a href="index.php">
                        <div class="logo_full"><img src="sites/default/files/logo_flat.png"></div>
                        <div class="logo_icon"><img src="sites/default/files/icon.png"></div>
                    </a>
                </div>
                <ul class="menu__list">
                    <li class="menu__item">
                        <a href="about.php" class="menu__link" id="link-about">ABOUT</a>
                    </li>
                    <li class="menu__item">
                        <a href="team.php" class="menu__link"  id="link-team">TEAM</a>
                    </li>
                    <li class="menu__item">
                        <a href="/graduates" class="menu__link" id="link-graduates">GRADUATES</a>
                    </li>
                    <li class="menu__item">
                        <a href="projects.php" class="menu__link" id="link-projects">PROJECTS</a>
                    </li>
                    <li class="menu__item">
                        <a href="sponsors.php" class="menu__link" id="link-sponsors">SPONSORS</a>
                    </li>
                    <li class="menu__item">
                        <a href="contact.php" class="menu__link" id="link-contact">CONTACT</a>
                    </li>
                </ul>
            </nav>
        </div>


      <?php print render($page['header']); ?>
    </div>
  <?php endif; ?>

</header>

<div class="hero" data-0="opacity: 1" data-450="opacity: 0">

    <div class="floater_I" style="height: 80px; width: 80px;">
        <img src="sites/default/files/floater_I.png">
    </div>

    <div class="floater_V" style="height: 250px; width: 250px;">
        <img src="sites/default/files/floater_V.png">
    </div>

    <div class="floater_D" style="height: 250px; width: 250px;">
        <img src="sites/default/files/floater_D.png">
    </div>

</div>


<div class="page">

    <div class="container">

        <div role="main" id="main-content">

            <?php print render($page['feature']); ?>



    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>


    <?php if (isset($tabs['#primary'][0]) || isset($tabs['#secondary'][0])): ?>
      <nav class="tabs"><?php print render($tabs); ?></nav>
    <?php endif; ?>

<!--    --><?php //if($page['highlighted'] OR $messages){ ?>
<!--      <div class="drupal-messages">-->
<!--      --><?php //print render($page['highlighted']); ?>
<!--      --><?php //print $messages; ?>
<!--      </div>-->
<!--    --><?php //} ?>


    <?php print render($page['content_pre']); ?>

    <?php print render($page['content']); ?>

    <?php print render($page['content_post']); ?>

  </div><!-- /main-->

  <?php if ($page['sidebar_first']): ?>
    <div class="sidebar-first">
    <?php print render($page['sidebar_first']); ?>
    </div>
  <?php endif; ?>

  <?php if ($page['sidebar_second']): ?>
    <div class="sidebar-second">
      <?php print render($page['sidebar_second']); ?>
    </div>
  <?php endif; ?>


    </div><!-- /container-->

    <?php if ($page['full width image']): ?>
        <div id='full-width-image'><div>
                    <?php print render($page['full width image']); ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if ($page['post content']): ?>
        <div id='post-content'><div>
                <div class="container">
            <?php print render($page['post content']); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <?php if ($page['features']): ?>
        <div id='features'><div class='limiter clearfix'>
                <div class="container">
                <?php print render($page['features']); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>


</div><!-- /page-->


<?php include "php_includes/scripts.php"?>


<footer role="contentinfo">
  <?php print render($page['footer']); ?>
</footer>

