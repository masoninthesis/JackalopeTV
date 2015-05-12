<!--Custom Image Post Format Below-->
  <article <?php post_class(); ?>>
    <div class="col-lg-4 col-xs-12">
      <header>
        <div class="thumbnail">
          <?php the_post_thumbnail( 'featured-img-thumb' ); ?>
          <div class="caption">
            <h3><?php the_title(); ?></h3>
            <?php get_template_part('templates/entry-meta'); ?>
            <?php the_excerpt(); ?>
            <p><a href="#" class="btn btn-primary" role="button">Read More</a></p>
          </div>
        </div>
      </header>
    </div>
  </article>
