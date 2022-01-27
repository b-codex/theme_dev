
<?php
get_header();
?>
  
  <!-- About section-->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
         
          <?php 
            if (have_posts()){

              while(have_posts()){
                the_post();
                the_content();
                
              }
            }
            
          ?>
          <?php if ( is_active_sidebar( 'Blog sidebar' ) ) : ?>
	<div id="blog-sidebar" class="blog-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'Blog sidebar' ); ?>
	</div><!-- #blog-sidebar -->
<?php endif; ?>
         

        </div>
      </div>
    </div>
  </section>





 

  <?php
  get_footer();
  
  ?>
 
</body>

</html>