<?php get_header();?>
<html>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;200;300;400;500;600;700&family=Karla:wght@300;400;500;600;700;800&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">

<?php wp_head()?>

    <?php
//the content
while (have_posts()) {
    the_post();?>
            <div class='col-md-10 mx-auto mb-4 d-flex flex-column justify-content-center align-items-start' style="top: 15vh; bottom:5vh;";>
            <div class="my-1">
                <h2 class="has-text-color text-left" style="color:#333333; text-transform: capitalize; font-family: 'Barlow Condensed', Montserrat; font-size:26px; font-weight:400; line-height:35px;"><a href="<?php the_permalink()?>" style=" text-decoration: none; color:#333333;"><?php the_title();?> </a></h2>

            </div>
            <div class="mx-auto col-md-8">
                <p style="text-transform: capitalize; font-family: 'Karla', Montserrat; font-size:15px; font-weight:400; line-height:27px; color: #595959; text-decoration: none;">
                <?php the_content();?>

                </p>

            </div>
            
        </div>
            <?php

}

?>


<?php
get_footer();
?>


