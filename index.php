    
<?php
get_header();
?>

</head> 

<body>
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
         

        </div>
      </div>
    </div>
  </section>
    
   
    <?php 
      get_footer();
    ?>
    

</body>
</html> 

