<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <!-- ______________________ HEADER _______________________ -->

  <header id="header">
    <div class="container">
      <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
            </a>
          <?php endif; ?>

          <?php if ($site_name || $site_slogan): ?>
            <div id="name-and-slogan">

              <?php if ($site_name): ?>
                <?php if ($title): ?>
                  <div id="site-name">
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
                  </div>
                <?php else: /* Use h1 when the content title is empty */ ?>
                  <h1 id="site-name">
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
                  </h1>
                <?php endif; ?>
              <?php endif; ?>

              <?php if ($site_slogan): ?>
                <div id="site-slogan"><?php print $site_slogan; ?></div>
              <?php endif; ?>

            </div>
          <?php endif; ?>

          <?php if ($page['header']): ?>
            <div id="header-region">
              <?php print render($page['header']); ?>
            </div>
          <?php endif; ?>      

    <?php if ($main_menu || $secondary_menu): ?>
      <nav id="navigation" class="menu <?php if (!empty($main_menu)) {print "with-primary";}
        if (!empty($secondary_menu)) {print " with-secondary";} ?>">
                <a href="#search" id="search_btn"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve"><path d="M30.527,26.755l-5.901-5.546c1.619-2.208,2.586-4.919,2.586-7.862C27.213,5.987,21.226,0,13.865,0C6.505,0,0.518,5.987,0.518,13.347s5.987,13.347,13.347,13.347c2.212,0,4.295-0.548,6.134-1.505l6.373,5.987C26.958,31.729,27.703,32,28.448,32c0.808,0,1.616-0.321,2.211-0.956C31.807,29.824,31.748,27.903,30.527,26.755z M13.865,21.382c-4.43,0-8.035-3.605-8.035-8.035c0-4.431,3.605-8.036,8.035-8.036c4.431,0,8.037,3.605,8.036,8.036C21.9,17.776,18.295,21.382,13.865,21.382z"/></svg></a>
        <?php print theme('links', array('links' => $main_menu, 'attributes' => array('id' => 'primary', 'class' => array('links', 'clearfix', 'main-menu')))); ?>
        <?php print theme('links', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary', 'class' => array('links', 'clearfix', 'sub-menu')))); ?>
      </nav> <!-- /navigation -->
    <?php endif; ?>

    </div>

  </header> <!-- /header -->



  <!-- ______________________ MAIN _______________________ -->

  <div id="main" class="clearfix">

    <section id="content">

        <?php if ($breadcrumb || $title|| $messages || $tabs || $action_links): ?>
          <div id="content-header">

            <?php print $breadcrumb; ?>

            <?php if ($page['highlighted']): ?>
              <div id="highlighted"><?php print render($page['highlighted']) ?></div>
            <?php endif; ?>

            <?php print render($title_prefix); ?>

            <?php if ($title): ?>
              <h1 class="title"><?php print $title; ?></h1>
            <?php endif; ?>

            <?php print render($title_suffix); ?>
            <?php print $messages; ?>
            <?php print render($page['help']); ?>

            <?php if ($tabs): ?>
              <div class="tabs"><?php print render($tabs); ?></div>
            <?php endif; ?>

            <?php if ($action_links): ?>
              <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>

          </div> <!-- /#content-header -->
        <?php endif; ?>

        <div id="content-area">
          <?php print render($page['content']) ?>
        </div>

        <?php print $feed_icons; ?>

    </section> <!-- /content-inner /content -->

    <?php if ($page['sidebar_first']): ?>
      <aside id="sidebar-first" class="column sidebar first">
        <?php print render($page['sidebar_first']); ?>
      </aside>
    <?php endif; ?> <!-- /sidebar-first -->
    
    <?php if ($page['sidebar_second']): ?>
      <aside id="sidebar-second" class="column sidebar second">
        <?php print render($page['sidebar_second']); ?>
      </aside>
    <?php endif; ?> <!-- /sidebar-second -->

  </div> <!-- /main -->

  <!-- ______________________ FOOTER _______________________ -->

  <?php if ($page['footer']): ?>
    <footer id="footer">
      <?php print render($page['footer']); ?>
    </footer> <!-- /footer -->
  <?php endif; ?>

</div> <!-- /page -->
