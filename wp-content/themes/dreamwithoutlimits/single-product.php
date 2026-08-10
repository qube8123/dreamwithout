<?php
/*Default Template*/
get_header();
?>

  <main id="main">

      <div class="container">
        <div class="row">
          <div class="col-md-12 mt-30 mb-30">
   

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

          </div>
        </div>
      </div>
  </main><!-- End #main -->


<?php
get_footer();?>