<?php global $woocommerce; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dream Without Limits</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Vendor CSS Files -->

  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css"/>
  <!-- Template Main CSS File -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
 
 
  <?php wp_head(); ?>
</head>

<body>



  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-
  items-center" >
    <div class="container d-flex align-items-center justify-content-between">

       <a href="<?echo home_url(); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt=""></a>
       <?php   if (!is_page('cart') && !is_page('checkout')) { ?>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
          aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
           <i class="fa fa-bars"></i>
        </button>
<?php   wp_nav_menu( array(
          'theme_location' => 'primary',
           'items_wrap' => '<ul >%3$s</ul>', 
           'container_class'           => 'navbar collapse ',
           'container_id'           => 'navbar', 
        ) ); 
        ?>
        <a class="nav-link scrollto cart" href="<?php echo home_url(); ?>/cart" class="yellow_btn"><img src="<?echo home_url(); ?>/wp-content/uploads/2021/04/shopping-cart.png" width="25"><span class="cartvalue"><?php echo WC()->cart->get_cart_contents_count(); ?></span></a>   
      <!-- <nav id="navbar" class="navbar collapse">
        <ul>
          <li><a class="nav-link scrollto active" href="<?php echo home_url(); ?>/#inside">What's Inside</a></li>
          
          <li><a class="nav-link scrollto" href="<?php echo home_url(); ?>/#affiliate">Affiliate Program/Let's Work Together</a></li>
          <li><a class="nav-link scrollto" href="<?php echo home_url(); ?>/shop" class="yellow_btn">Shop Now</a></li>
          <li><a class="nav-link scrollto" href="<?php echo home_url(); ?>/my-account" class="yellow_btn">My Account</a></li>
          <li><a class="nav-link scrollto cart" href="<?php echo home_url(); ?>/cart" class="yellow_btn"><img src="<?echo home_url(); ?>/wp-content/uploads/2021/04/shopping-cart.png" width="25"><span class="cartvalue"><?php echo WC()->cart->get_cart_contents_count(); ?></span></a></li>
        </ul>       
      </nav> --><!-- .navbar -->
      <?php } ?>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
