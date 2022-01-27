<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description"
    content="This Is The Personal Website Of One NoobDev - Programmer, Developer & Gamer. Enjoy!!! Styles Used In This Website Are Licensed To Me.">
  <meta name="author" content="Author - NoobDev">

  <link rel="shortcut icon" href="assets/img/logo.ico" type="image/x-icon">

  <?php 
  wp_head();
  ?>
</head>

<body id="page-top">

  <!-- Navigation-->
  <header class="site-header">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
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
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <?php 
            wp_nav_menu(
              array(
                'container' => '',
                'theme_location' => 'primary',
                'item_wrap' => '<ul id="" class="navbar-nav ml-auto">%3$s</ul>'
              )
            );
          ?>
          <!-- <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#resume">Resumĕ</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
          </ul> -->
        </div>
      </div>
    </nav>
  </header>
  <!-- Masthead-->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold"><?php the_title();?></h1>
          <hr class="divider" />
        </div>
      </div>
    </div>
  </header>
  









