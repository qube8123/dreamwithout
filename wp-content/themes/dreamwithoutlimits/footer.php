  <!-- ======= Footer ======= -->

  
  <footer id="footer">
<?php   if (!is_page('cart') && !is_page('checkout')) { ?>
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 ">   
             <?php dynamic_sidebar('sidebar-2'); ?>        
          </div>

          <div class="col-lg-4 col-md-6 menu-links">
            <?php dynamic_sidebar('sidebar-3'); ?> 
          </div>

          <div class="col-lg-4 col-md-6 news">

           <?php dynamic_sidebar('sidebar-4'); ?>
			  <!-- <section class="widget_text widget widget_custom_html">
			  <h4 class="footer_item_title" >SIGN UP FOR OUR NEWSLETTER</h4>
			  <?php// echo do_shortcode('[contact-form-7 id="596" title="NEWSLETTER"]');?>
			  </section>-->
          </div>


        </div>
      </div>
    </div>
<?php } ?>
    <div class="container py-4">
      <div class="copyright">
      <!-- &copy; Copyright 2010-2021 Dream without limits. -->
      </div>
      <div class="credits">
          <?php dynamic_sidebar('sidebar-7'); ?>     
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <!-- Vendor JS Files -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/aos/aos.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/purecounter/purecounter.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>

 

  <!-- Template Main JS File -->
  <script type="text/javascript">
      
  jQuery('.testimonial_slider').slick({
        infinite: true,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 2,
        variableWidth: true,
        arrows : false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 3000,
    });

  jQuery('.portfolio-details-slider').slick({
        infinite: true,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 3,
        slidesToScroll: 3,
        arrows : false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 3000,
    });

jQuery('.slider-for').slick({
   slidesToShow: 1,
   slidesToScroll: 1,
   arrows: false,
   fade: true,
   asNavFor: '.slider-nav'
 });
 jQuery('.slider-nav').slick({
   slidesToShow: 5,
   slidesToScroll: 1,
   asNavFor: '.slider-for',
   dots: false,
   arrows : false,
   focusOnSelect: true
 });

 jQuery('a[data-slide]').click(function(e) {
   e.preventDefault();
   var slideno = jQuery(this).data('slide');
   jQuery('.slider-nav').slick('slickGoTo', slideno - 1);
 });

  </script>
   <script type="text/javascript">

      jQuery(document).ready(function($){   

         $('form.cart').on( 'click', 'button.plus, button.minus', function() {

            // Get current quantity values
            var qty = $( this ).closest( 'form.cart' ).find( '.qty' );
            var val   = parseFloat(qty.val());
            var max = parseFloat(qty.attr( 'max' ));
            var min = parseFloat(qty.attr( 'min' ));
            var step = parseFloat(qty.attr( 'step' ));

            // Change the value if plus or minus
            if ( $( this ).is( '.plus' ) ) {
               if ( max && ( max <= val ) ) {
                  qty.val( max );
               } else {
                  qty.val( val + step );
               }
            } else {
               if ( min && ( min >= val ) ) {
                  qty.val( min );
               } else if ( val > 1 ) {
                  qty.val( val - step );
               }
            }
         });
         /* $('form.woocommerce-cart-form').on( 'click', 'button.plus, button.minus', function() {

            // Get current quantity values
            var qty = $( this ).closest( 'form.woocommerce-cart-form' ).find( '.qty' );
            var val   = parseFloat(qty.val());
            var max = parseFloat(qty.attr( 'max' ));
            var min = parseFloat(qty.attr( 'min' ));
            var step = parseFloat(qty.attr( 'step' ));

            // Change the value if plus or minus
            if ( $( this ).is( '.plus' ) ) {
               if ( max && ( max <= val ) ) {
                  qty.val( max );
               } else {
                  qty.val( val + step );
               }
            } else {
               if ( min && ( min >= val ) ) {
                  qty.val( min );
               } else if ( val > 1 ) {
                  qty.val( val - step );
               }
            }

         });*/
          
          $( document ).on( 'click', '.minus', function() {
             var $input = $(this).parent().find('input');
             var count = parseInt($input.val()) - 1;
             count = count < 1 ? 1 : count;
             $input.val(count);
             $input.change();
             $( 'div.woocommerce > form input[name="update_cart"]' ).prop( 'disabled', false );
             return false;
        });


        $( document ).on( 'click', '.plus', function() {
             var $input = $(this).parent().find('input');
             $input.val(parseInt($input.val()) + 1);
             $input.change();
             $( 'div.woocommerce > form input[name="update_cart"]' ).prop( 'disabled', false );
             return false;
        });

        $('.woocommerce-Tabs-panel').hide();
          $('.woocommerce-Tabs-panel:first').show();
          $('.tabs li:first').addClass('tab-active');

          // Change tab class and display content
          $('.tabs a').on('click', function(event){
            event.preventDefault();
            $('.tabs li').removeClass('tab-active');
            $(this).parent().addClass('tab-active');
            $('.woocommerce-Tabs-panel').hide();
            $($(this).attr('href')).show();
          });

      });

    
      $('.navbar-toggler').on('click', function(e) {
        $('#navbar').toggleClass("show"); //you can list several class names 
        e.preventDefault();
      });
	   $( document ).ajaxComplete(function() {
		   $('.hubspot-link__container.sproket').attr("display","none");
	   });
      </script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>


<?php wp_footer(); ?>
<style>
	.hubspot-link__container.sproket {
    display: none;
}
</style>
</body>

</html>