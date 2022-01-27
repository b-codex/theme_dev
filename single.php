<?php wp_head()?>
<?php  
//get the header 
get_header(); 

//the content 
if(have_posts()){ 
    while (have_posts()){ 
        the_post();?> 
        <h1><a href="<?php the_permalink()?>"><?php the_title(); ?> </a></h1> 
         
        <?php 
        the_author(); 
        the_category(); 
        the_excerpt(); 
    } 
} 
//get the footer 
get_footer(); 
?> 
<?php get_sidebar(); ?>
<?php wp_footer()?>
