<?php
/*Template Name: Home*/
get_header();
?>

  <main id="main">

    <?php
$banner_section = get_field('banner_section');
if( $banner_section ): ?>
     <section  class="img-slider">
        <div class="testimonials-slider swiper-container " >
         <!--  <div class="swiper-wrapper">

            <div class="swiper-slide" > -->
              <div class="slider-con">
                  <img src="<?php echo $banner_section['banner_image']['url'];?>"  alt="">
                  <div class="banner_text">
                    <div class="inner-text" >
                    <h2><?php echo $banner_section['banner_title'];?></h2>
                    <p class="mb-40"><?php echo $banner_section['banner_description'];?></p>
                    <!-- <p class="mb-10">Flexible, Sleek and Undated </p>
                    <p class="mb-40"><strong>Bundle | Planner | Stickers | Pen | Mug Set </strong></p> -->
                    <a href="<?php echo $banner_section['button_link'];?>" class="yellow_btn "> Shop Now <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                    <div class="side-img" ><img src="<?php echo $banner_section['banner_side_image']['url'];?>"  alt=""></div>
                  </div>

              </div>
           <!--  </div> -->
          <!-- </div> -->
          <!-- <div class="swiper-pagination"></div> -->
        </div>
    </section>
  <?php endif; ?>
    <?php  $thumbnail1 = get_field('shop_image_1'); ?>
    <?php  $thumbnail2 = get_field('shop_image_2'); ?>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="pos-rel">
              <img src="<?php echo $thumbnail1['url']; ?>"  alt="">
              <div class="inner-box"> 
                  <h4 class="mb-10"><?php if( get_field('shop_title_1')): echo get_field('shop_title_1'); endif; ?></h4>
                  <p class="mb-20"><?php if( get_field('shop_description_1')): echo get_field('shop_description_1'); endif; ?></p>
                  <a href="<?php if( get_field('shop_link_1')): echo get_field('shop_link_1'); endif; ?> " class="yellow_btn "> Shop Now </a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="pos-rel">
              <img src="<?php echo $thumbnail2['url']; ?>"  alt=""  >
              <div class="inner-box"> 
                  <h4 class="mb-10"><?php if( get_field('shop_title_2')): echo get_field('shop_title_2'); endif; ?> </h4>
                  <p class="mb-20"><?php if( get_field('shop_description_2')): echo get_field('shop_description_2'); endif; ?> </p>
                  <a href="<?php if( get_field('shop_link_2')): echo get_field('shop_link_2'); endif; ?> " class="yellow_btn "> Shop Now </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php  $thumbnail = get_field('white_logo'); ?>
    <section>
      <div class="container">
        <div class="mid-sec">
          <div class="border-white">
             <img src="<?php echo $thumbnail['url'];?>" class="mt-20">
             <div class="row">
              <div class="col-lg-1"></div>
              <div class="col-lg-10">
              <p><?php if( get_field('middle_description')): echo get_field('middle_description'); endif; ?> </p>
              </div>
              <div class="col-lg-1"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    

    <!-- ======= Featured Services Section ======= -->
    <section id="inside" style='background: url("<?php echo get_template_directory_uri(); ?>/assets/img/bacgray.png") no-repeat left/cover;'>      
      <div class="container" >
           <div class="text-center">
                <h3 class="section_title"><?php if( get_field('whats_inside_title')): echo get_field('whats_inside_title'); endif; ?></h3>
            </div>
        <div class="row">
           <div class="portfolio-details-slider swiper-container">
              <!-- <div class="swiper-wrapper align-items-center"> -->


                <?php  $args = array(  
                'post_type' => 'slidersproduct',
                'post_status' => 'publish',
                'posts_per_page' => -1, 
                'orderby' => 'date', 
                'order' => 'ASC',
            );

            $loop = new WP_Query( $args ); 
                
            while ( $loop->have_posts() ) : $loop->the_post(); 
                $featured_img = get_the_post_thumbnail_url( get_the_ID(), 'full');  ?>                      
                    <a class="icon-box glightbox" href="<?php echo $featured_img; ?>">
                      <img src="<?php echo $featured_img; ?>" >                    
                  </a>           
           <?php             
            endwhile;
            wp_reset_postdata(); 
            ?>

              <!-- </div> -->
              <!-- <div class="swiper-pagination"></div> -->
            </div>  

        </div>
      </div>
    </section><!-- End Featured Services Section -->
   

      <section id="hero" class="d-flex align-items-center" style='background: url(https://dreamwithoutlimitsplanner.com/wp-content/themes/dreamwithoutlimits/assets/img/midbanner.jpg) no-repeat top left/cover;'>
        <div class="container">
         <div class="row ">
           <div class="col-md-12 white text-center">
            <h3 class="mb-10 mt-40"><?php if( get_field('video_title')): echo get_field('video_title'); endif; ?> </h3>
            <p class="mb-40"><?php if( get_field('video_description')): echo get_field('video_description'); endif; ?></p>
          <!--  </div>
           <div class="col-md-8"> -->
			 <iframe width="90%" height="550" class="mb-40" src="https://www.youtube.com/embed/QyXNT3aK0Hk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<!--    <a href="<?php //if( get_field('video_link')): echo get_field('video_link'); endif; ?>" class="glightbox btn-watch-video pull-right"></a>-->
			 </div>
         </div>         
    
        </div>
      </section><!-- End Hero -->

 

    <!-- ======= Testimonials Section ======= -->
   
      <section id="shop" class=" section_box a">
             <div class="container">
              <div class="text-center mb-30" >
                <?php if( get_field('shop_title')): ?> <h3 class="section_title"><?php echo get_field('shop_title');?></h3><?php  endif; ?>
                <p><?php if( get_field('shop_description')): echo get_field('shop_description'); endif; ?> </p>
            </div>

            <?php echo do_shortcode('[products columns="4" orderby="date"]');?>
        <!-- <div class="boxes row mt-30">
              <?php  /*$args = array(  
                'post_type' => 'product',
                'post_status' => 'publish',
                //'posts_per_page' => -1,
                'posts_per_page' => 8, 
                'orderby' => 'date', 
                'order' => 'DESC',
            );

            $loop = new WP_Query( $args ); 
                
            while ( $loop->have_posts() ) : $loop->the_post(); 
                $featured_img = get_the_post_thumbnail_url( get_the_ID(), 'full');  ?>
          <div class="col-md-3  text-center">
            <a href="<?php echo get_the_permalink(); ?>">
              <div class="icon-box" >
                <img src="<?php echo $featured_img; ?>" >               
            </div>
             <h4 class=" mb-10"><?php the_title(); ?></h4>
             <?php if(get_post_meta( get_the_ID(), '_sale_price', true) == "" || get_post_meta( get_the_ID(), '_sale_price', true) == null){ ?>
               <span class="price mb-30"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span><?php echo get_post_meta( get_the_ID(), '_regular_price', true); ?></bdi></span></span>
           <?php }else{ ?>
            <span class="price"><del><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span><?php echo get_post_meta( get_the_ID(), '_regular_price', true); ?></bdi></span></del> <ins><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span><?php echo get_post_meta( get_the_ID(), '_sale_price', true); ?></bdi></span></ins></span>
            
           <?php } ?>
             </a>
          </div>
           <?php             
            endwhile;
            wp_reset_postdata(); */
            ?>
       
        </div> -->
        </div>
    </section>

     <section class="testimonial_section" style='background: url("<?php echo get_template_directory_uri(); ?>/assets/img/background-pattern-gray.png") no-repeat left/cover;'>      
     
          <div class="text-center">
            <h3 class="section_title"><?php if( get_field('testimonial_title')): echo get_field('testimonial_title'); endif; ?></h3>
        </div>  
        <div class="testimonial_slider">
           <?php  $args = array(  
                    'post_type' => 'testimonials',
                    'post_status' => 'publish',
                    'posts_per_page' => -1, 
                    'orderby' => 'title'    , 
                    'order' => 'ASC',
                );

            $loop = new WP_Query( $args ); 
                
            while ( $loop->have_posts() ) : $loop->the_post(); 
                $featured_img = get_the_post_thumbnail_url( get_the_ID(), 'full');  ?>
        
            <div class="t_slide">
                <p><?php echo get_the_content(); ?></p>
                <div class="refrence_profile">
                    <div class="refrence_profile--img">
                        <img src="<?php echo $featured_img; ?>" alt="">
                    </div>
                    <div class="refrence_profile--name">
                       <span class="first_name"><?php the_title(); ?></span>
                        <a href="<?php if( get_field('instagram_link')): echo get_field('instagram_link'); endif;  ?>" class="instagram white"><i class="bx bxl-instagram"></i></a>
                        <!-- <span class="designation"><?php //if( get_field('designation')): echo get_field('designation'); endif; ?></span> -->
                        <!-- <span class="designation">customer contact specialist</span> -->
                    </div>
                </div>
            </div>
             <?php     
            endwhile;
            wp_reset_postdata(); 
            ?>
        
        </div>
      </section>
   
<?php $image1= get_field('ffiliate_image'); $image2= get_field('wholesale_image'); ?>
        <section id="affiliate">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="pos-rel" style='background: url("<?php echo $image1['url'];?>") top left/cover;'>
              <!-- <img src="assets/img/bg1.png"  alt=""> -->
              <div class="inner-box"> 
                  <h4 class="mb-20"><?php if( get_field('ffiliate_title')): echo get_field('ffiliate_title'); endif; ?> </h4>
                  <p class="mb-30"><?php if( get_field('affiliate_description')): echo get_field('affiliate_description'); endif; ?> </p>
                  <a class="sg-popup-id-268 yellow_btn " href="<?php if( get_field('ffiliate_link')): echo get_field('ffiliate_link'); endif; ?>"> SIGN UP FOR AFFILIATE PROGRAM </a>

                
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="pos-rel"  style='background: url("<?php echo $image2['url'];?>") top left/cover;'>
              <!-- <img src="assets/img/bg2.png"  alt=""> -->
              <div class="inner-box"> 
                  <h4 class="mb-20"><?php if( get_field('wholesale_title')): echo get_field('wholesale_title'); endif; ?></h4>
                  <p class="mb-30"><?php if( get_field('whole')): echo get_field('whole'); endif; ?></p>
                  <a class="yellow_btn " href="<?php if( get_field('wholesale_link')): echo get_field('wholesale_link'); endif; ?>" > WHOLESALE OPPORTUNITIES  </a>
              </div>
            </div>  
          </div>
        </div>
      </div>
    </section>
    
      <section class="comapny_section bg-green ">
        <div class="container">
        <div class="text-center">
            <h2 class="section_title white">Follow us @DreamWithoutLimitsPlanner</h2>
        </div>
             <?php echo do_shortcode('[fts_instagram instagram_id=1107729006297438 access_token=IGQVJWTU4yUjI1TzJIZAjFUOE4wTW5vaDlOUHEtazZApYW1xNW1JMzFjLVNwaFBhVWhRbXN3ZA3RBSi0tNFR1WFptQnYxYzMxd2JqUkpyV1pTLVJod19hYjJWMTlRblZAJcjU3YVZAlNTdjdkRId1k3ZAmZA5RgZDZD pics_count=5 type=basic super_gallery=yes columns=5 force_columns=no space_between_photos=15px icon_size=250px hide_date_likes_comments=no]');?>
       <!--      <ul class="companies_block">
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/group1.jpg" alt="">
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/group2.jpg" alt="">
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/group3.jpg" alt="">
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/group4.jpg" alt="">
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/group5.jpg" alt="">
                </li>
            </ul> -->
      </div>
   </section>

  </main><!-- End #main -->


<?php
get_footer();?>