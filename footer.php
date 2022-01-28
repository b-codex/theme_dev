



<!-- footer -->

<footer class=" footIcon  text-center text-white" >

  <div class="container footIcon pt-4">
    


    <!-- checking condition to display footer sidebar -->
    <?php if(is_active_sidebar('sidebar-2')) :?>
    <div class="footer-widget-area">
      <?php dynamic_sidebar('sidebar-2');?>
    </div>
    <?php endif;?>

    <?php if(is_active_sidebar('sidebar-3')) :?>
    <div class="footer-widget-area">
      <?php dynamic_sidebar('sidebar-3');?>
    </div>
    <?php endif;?>
    
    <?php if(is_active_sidebar('sidebar-4')) :?>
    <div class="footer-widget-area">
      <?php dynamic_sidebar('sidebar-4');?>
    </div>
    <?php endif;?>
    
     
  </div>
  

  <!-- Copyright -->
  <div class="copy-right my-5 p-3 text-center">

    <div class=" footIcon   text-dark">
    
    <p?><?php bloginfo('name');?> Copyright &copy <?php echo date('Y');?> . All Rights Reserved.</p>
    </div>
  </div>
  <!-- Copyright -->
</footer>

<?php
wp_footer();
?>

