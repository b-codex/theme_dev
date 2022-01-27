<?php get_header();?>

<<section class='page-wrap'>
    <<div class='container'>

    <?php get_template_part('includes/section', 'archive');?>

    <?php previous_post_link();?>
    <?php next_post_link();?>
    <a href="">
        <button type="button" class="btn btn-custom" ><?php previous_post_link();?></button>
    </a>
    <a href="">
        <button type="button" class="btn btn-custom" ><?php next_post_link();?></button>
    </a>


    </div>

</section>
<?php get_footer();?>