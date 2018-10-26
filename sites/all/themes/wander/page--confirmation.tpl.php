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
                        <a href="/team" class="menu__link"  id="link-team">TEAM</a>
                    </li>
                    <li class="menu__item">
                        <a href="/graduates" class="menu__link" id="link-graduates">GRADUATES</a>
                    </li>
                    <li class="menu__item">
                        <a href="/projects" class="menu__link" id="link-projects">PROJECTS</a>
                    </li>
                    <li class="menu__item">
                        <a href="/sponsors" class="menu__link" id="link-sponsors">SPONSORS</a>
                    </li>
                    <li class="menu__item">
                        <a href="/contact" class="menu__link" id="link-contact">CONTACT</a>
                    </li>
                </ul>
            </nav>
        </div>


      <?php print render($page['header']); ?>
    </div>
  <?php endif; ?>

</header>



<div class="page confirmation">

    <div class="container">

        <div role="main" id="main-content">


    <?php if (isset($tabs['#primary'][0]) || isset($tabs['#secondary'][0])): ?>
      <nav class="tabs"><?php print render($tabs); ?></nav>
    <?php endif; ?>


    <?php print render($page['content_pre']); ?>

    <?php print render($page['content']); ?>

    <?php print render($page['content_post']); ?>

  </div><!-- /main-->



</div><!-- /page-->


<footer role="contentinfo">
  <?php print render($page['footer']); ?>
</footer>

