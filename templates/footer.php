<footer class="content-info" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</footer>

<section id="recent-work">
    <div class="row text-center">
      <div class="work work-one col-sm-4 col-xs-12">
        <h2>Find the pub.</h2>
      </div>
      <div class="work work-two col-sm-4 col-xs-12">
        <h2>Beer & Food</h2>
      </div>
      <div class="work work-three col-sm-4 col-xs-12">
        <h2>Store</h2>
      </div>
    </div>
</section>

<div class="wrap container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <div class="row">
        <div class="col-sm-4 col-xs-12">
          <div class="thumbnail">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/place-holder.png" alt="<?php bloginfo('name'); ?>" alt="...">
            <div class="caption">
              <h3>Blog Post 1</h3>
              <p>...</p>
              <p><a href="#" class="btn btn-primary" role="button">Read More..</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-xs-12">
          <div class="thumbnail">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/place-holder.png" alt="<?php bloginfo('name'); ?>" alt="...">
            <div class="caption">
              <h3>Blog Post 2</h3>
              <p>...</p>
              <p><a href="#" class="btn btn-primary" role="button">Read More..</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-xs-12">
          <div class="thumbnail">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/place-holder.png" alt="<?php bloginfo('name'); ?>" alt="...">
            <div class="caption">
              <h3>Blog Post 3</h3>
              <p>...</p>
              <p><a href="#" class="btn btn-primary" role="button">Read More..</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="content-info" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</footer>

<section class="text-center">
  <div class="wrap container">
    <p class="p-customers">Call us, or drop in and come talk to us.</p>
    <div class="row">
      <div class="col-sm-6">

      </div>
      <div class="col-sm-6">

      </div>
    </div>
  </div>
</section>

<form class="" action="index.html" method="post">

</form>

<footer>
  <hr>
  <div class="container">
    <div id="footer" class="row text-center">
	    <ul class="bs-docs-footer-links muted">
	      <li>Currently v0.2.2</li>
	      <li>&middot;</li>
	      <li><a href="https://github.com/masoninthesis/">GitHub</a></li>
	      <li>&middot;</li>
	      <li><a href="http://jackalopemedia.com/">Services</a></li>
	      <li>&middot;</li>
	      <li><a href="http://jackalope.io/">Themes</a></li>
	      <li>&middot;</li>
	      <li><a href="http://jackalope.io/">Tutorials</a></li>
	      <li>&middot;</li>
	      <li><a href="http://jackalopemedia.com/">About</a></li>
	      <li>&middot;</li>
	      <li><a href="http://jackalopemedia.com/blog/">Blog</a></li>
	      <li>&middot;</li>
	      <li><a href="http://jackalopemeda.com/contact/">Contact</a></li>
	    </ul>
      <p>&copy; <?php echo date('Y'); ?> Jackalope | all rights reserved.</p>
			<br />
      <a class="" href="<?= esc_url(home_url('/')); ?>"><svg width="30" height="33" class="logo-footer"><?php get_template_part( 'assets/svg/inline', 'logo.svg' ); ?></svg></a>
    </div>
  </div>

</footer>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <center><svg width="30" height="33" class="logo logo-modal"><?php get_template_part( 'assets/img/svg/inline', 'logo.svg' ); ?></center>
      <center><h3>This site is still being developed, be the <br>first to know when it officially launches!</h3></center>
      <div class="modal-body">
        <center>
          <form class="form-inline" id="before_header" action="//jackalope.us9.list-manage.com/subscribe/post?u=74a8ddb6f1ff4b3eeb5966632&amp;id=322fc5ebb8" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <input type="email" value="" name="EMAIL" class="form-control email" id="mce-EMAIL" placeholder="Email address.." required>
            <button id="header-optin-click" name="submit" onClick="ga('send', 'event', 'optin', 'subscribe', 'header optin');" class="btn hero-btn btn-lg" type="submit" value="Submit" tabindex="501">Subscribe</button>
          </form>
        </center>
      </div><!-- /optin -->
    </div>
  </div>
</div>

<script type="text/javascript"
        src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.3.1/jquery.cookie.min.js"></script>
  <script type="text/javascript">
    function showPopup() {
      $('#myModal').modal('show');
    }
    function timeOut() {
      if ($.cookie('foreverjobless') !== '1') {
        setTimeout(function() {
          showPopup();
          jQuery.cookie('foreverjobless', '1', { expires: 7 });
        }, 100);
      }
    }
    $(document).ready(function () {
      timeOut();
      stickyElement();
    });
  </script>
