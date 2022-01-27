
<?php get_header();?>
<html>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;200;300;400;500;600;700&family=Karla:wght@300;400;500;600;700;800&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">

<?php
//the content
while (have_posts()) {
    the_post();?>
        <div class='col-md-8 mx-auto  d-flex flex-column justify-content-start align-items-start' style="flex: 6; margin-top: 20vh;">
            <div>
                <p style="color:#333333; text-transform: capitalize; font-family: 'Barlow Condensed', Montserrat; font-size:16px; font-weight:400; line-height:35px; "><a href="#" style=" text-decoration: none; color:#CEAC92; list-style:none;" >BLOG</a> &nbsp; /&nbsp; <span style="text-transform: uppercase;"><?php echo get_the_date(get_option('date_format')); ?></span> </li>
                </p>
            </div>
            <div class="my-1">
                <h2 class="has-text-color text-left" style="color:#333333; text-transform: capitalize; font-family: 'Barlow Condensed', Montserrat; font-size:26px; font-weight:400; line-height:35px;"><?php the_title();?></h2>
            </div>
        </div>
        <div class='col-md-12 justify-content-center mx-auto text-justify'>
            <?php the_content();?>
        </div>

        
        <?php

}
?>
<?php
get_footer();
?>
<?php get_sidebar();?>



