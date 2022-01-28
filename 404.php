<?php get_header();?>
<html>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;200;300;400;500;600;700&family=Karla:wght@300;400;500;600;700;800&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">




<div class="col-md-10 mx-auto mb-5 d-flex justify-content-center"  style="top:25vh;">
    <div class="col-md-6 page-404-image" >

    place 404 image here
        </div>

    <div class="col-md-6">

    <div class="col  my-auto">
        <div class="row my-2">Page Not Found</div>
        <div class="row">
            <header class="page-header">
                <h1 class="page-title my-2 mt-3"><?php _e( 'Oh No! Error404', 'noobDevTeam' ); ?></h1>
            </header></div>
        <div class="row mt-4"><p style="font-family: 'Poppins', Montserrat; font-size: 18px; font-weight: 500; line-height: 45px; text-align: justify;">"Oops, I screwed up and you discovered my fatal flaw. 
                Well, we're not all perfect, but we try.  Can you try this
            again or maybe visit our <a 
            title="Our Site" href="<?php the_permalink();?>">Home 
            Page</a> to start fresh.  We'll do better next time."</p></div>
        <div class="row d-flex justify-content-start ">
            
            
        <span class="mr-3">
        <a href="<?php previous_post_link();?>" style=" text-decoration: none; color:white;">
            <button type="button" class="btn btn-custom" style='border-radius: 6px !important;'>Back to Homepage</button>
            </a>
        </span>
        <span class="mx-3">
        <a href="<?php the_permalink()?>" style=" text-decoration: none; color:#ceac92 !important;">
            <button type="button" class="btn btn-custom"  style='border-radius: 6px !important;'>Visit our help center</button>
            </a>
        </span>
            
        </div>
        <div class="row"></div></div>
    </div>
</div>



<?php get_footer();?>