<?php get_header();?>
<?php wp_link_pages();?>

<html>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;200;300;400;500;600;700&family=Karla:wght@300;400;500;600;700;800&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">

<?php wp_head()?>
<!-- site content -->
<div class="site-content clearfix">

    <!-- main column -->
    <div class="main-column">
    <?php
//the content
while (have_posts()) {
    the_post();?>
            <div class='col-md-4 mx-auto my-4 d-flex flex-column justify-content-center align-items-start border-bottom' style="top: 25vh; bottom:5vh;";>
            <div>
                <p style="color:#333333; text-transform: capitalize; font-family: 'Barlow Condensed', Montserrat; font-size:13px; font-weight:400; line-height:35px; "><a href="#" style=" text-decoration: none; color:#CEAC92; list-style:none;" >BLOG</a> &nbsp; /&nbsp; <span style="text-transform: uppercase;"><?php echo get_the_date(get_option('date_format')); ?></span> </li>
                </p>

                </div>
            <div class="my-1">
                <h2 class="has-text-color text-left" style="color:#333333; text-transform: capitalize; font-family: 'Barlow Condensed', Montserrat; font-size:26px; font-weight:400; line-height:35px;"><a href="<?php the_permalink()?>" style=" text-decoration: none; color:#333333;"><?php the_title();?> </a></h2>

            </div>
            <div>
                <p style="text-transform: capitalize; font-family: 'Karla', Montserrat; font-size:15px; font-weight:400; line-height:27px; color: #595959; text-decoration: none;">
                <?php the_excerpt();?>

                </p>

            </div>
            <div class="mb-4">

            <a href="<?php the_permalink()?>" style=" text-decoration: none; color:white;">
            <button type="button" class="btn btn-custom">Read More</button>
            </a>
            </div>
        </div>
            <?php

}

?>
    </div>
    <?php get_sidebar();?>
</div>

<?php
get_footer();
?>
<?php wp_link_pages?>


