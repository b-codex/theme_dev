<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description"
    content="This Is The Personal Website built by NoobDevTeam">

  <link rel="shortcut icon" href="/assets/img/logo.ico" type="image/x-icon">

</head>

  <?php 
  wp_head();
  ?>
</head>

<body id="page-top"<?php body_class( $class ); ?>>
<?php wp_body_open(); ?>

  <!-- Navigation-->
  <header class="site-header">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top pt-5" id="mainNav">
      <div class="container">
        <?php 
         if(function_exists('the_custom_logo')){
          $custom_logo_id = get_theme_mod('custom_logo');
          $logo = wp_get_attachment_image_src($custom_logo_id);

        }
        ?>
        <img class="mb-3 mx-auto logo" src="<?php echo $logo[0]; ?>" alt="logo">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><?php bloginfo('name');?></a>
        <button
        class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
            class="navbar-toggler-icon"></span>
          </button>
        <div class="nav_right collapse navbar-collapse nav-bar-custom" id="navbarResponsive">
          <?php 
            wp_nav_menu(
              array(
                'container' => '',
                'theme_location' => 'primary',
                'items_wrap' => '<ul id="" class="menu ml-auto">%3$s</ul>'
              )
            );
          ?>
         
        </div>
      </div>
    </nav>
  </header>
  
  <!-- Masthead-->
  <header class="masthead" >
    <div class="container h-50">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold"></h1>
          <hr class="divider" />
        </div>
      </div>
    </div>
  </header> -->
  
  <!--Dev Note: removed the gigantic title from the top of the page-->
  
  
  









