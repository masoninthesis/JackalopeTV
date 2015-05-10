<!--<?php dynamic_sidebar('sidebar-primary'); ?>-->
<ul class="brand">
  <li>
    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><svg width="30" height="33" class="logo"><?php get_template_part( 'assets/svg/inline', 'logo.svg' ); ?></svg></a>
  </li>
  <li class="primary-nav">
    <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
    endif;
    ?>
  </li>
</ul>
