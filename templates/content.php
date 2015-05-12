<article <?php post_class(); ?>>
  <div class="col-lg-12">
    <header>
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php get_template_part('templates/entry-meta'); ?>
      <?php the_post_thumbnail( 'featured-img-thumb', 'img-responsive' ); ?>
    </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
