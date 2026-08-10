<?php
/*Default Template*/
get_header();
?>

  <main id="main">

      <div class="container">
        <div class="row">
          <div class="col-md-12 mt-50 mb-30">
              <?php the_content();?>
          </div>
        </div>
      </div>
  </main><!-- End #main -->


<?php
get_footer();?>