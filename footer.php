



<!-- footer -->

<footer class="site-footer footIcon text-center text-white mt-5" style=" margin-top: 25vh !important;">
  <!-- Grid container -->
  <div class="container footIcon pt-4">
    <!-- Section: Social media -->
    <section class="mb-4 ">
      <!-- Facebook -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-linkedin"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- footer navbar -->
  <nav class="site-footer ">
      <?php 
        $args = array(
          'theme_location' => 'footer'
        );
        ?>
      <?php wp_nav_menu($args);?>
    </nav>
  <!-- Copyright -->
  <div class="site-footer footIcon text-center text-dark p-3">
  <p?><?php bloginfo('name');?> Copyright &copy <?php echo date('Y');?> . All Rights Reserved.</p>
  </div>
  <!-- Copyright -->
</footer>

<?php
wp_footer();
?>

