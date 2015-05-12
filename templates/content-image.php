<!--Custom Image Post Format Below-->

<article <?php post_class(); ?>>
  <header>
    <div class="col-sm-12 col-xs-12">
      <div class="thumbnail">
        <?php the_post_thumbnail( 'featured-img-thumb' ); ?>
        <div class="caption">
          <h3><?php the_title(); ?></h3>
          <?php get_template_part('templates/entry-meta'); ?>
          <p>...</p>
          <p><a href="#" class="btn btn-primary" role="button">Read More</a></p>
        </div>
      </div>
    </div>
  </header>
</article>
