
<?php get_header();?>
<html>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;200;300;400;500;600;700&family=Karla:wght@300;400;500;600;700;800&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">

<?php
//the content
while (have_posts()) {
    the_post();?>
       
    <?php
    get_template_part('template-parts/content', 'archive');

}
?>
<?php
get_footer();
?>




