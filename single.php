<?php 
//get the header
get_header();

//the content
if(have_posts()){
    while (have_posts()){
        the_post();?>
        <h1><?php the_title(); ?></h1>
        <?php
        the_content();
    }
}

 //get sidebar
 get_sidebar();
//get the footer
get_footer();
?>