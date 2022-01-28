
<?php
get_header();
?>
<?php wp_head()?>
  
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
          <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="blog-sidebar" class="blog-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #blog-sidebar -->
<?php endif; ?>
          
         

        </div>
      </div>
    </div>
  </section>
<?php wp_footer();?>





 

  <?php
  get_footer();
  
  ?>
 <?php wp_footer()?>
</body>

</html>