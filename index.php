<?php get_header();?>
<html>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;200;300;400;500;600;700&family=Karla:wght@300;400;500;600;700;800&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">

    <body>
        <div class='col-md-3 mx-auto d-flex flex-column justify-content-center align-items-start'>
            <div>
                <p style="color:#333333; text-transform: capitalize; font-family: 'Barlow Condensed', Montserrat; font-size:13px; font-weight:400; line-height:35px;"><a href="<?php the_permalink()?>" style=" text-decoration: none; color:#CEAC92;" >BLOG</a> &nbsp; /&nbsp; DECEMBER 29, 2021</p>
                
                </div>
            <div class="mt-1 mb-3">
                <h2 class="has-text-color text-left" style="color:#333333; text-transform: capitalize; font-family: 'Barlow Condensed', Montserrat; font-size:26px; font-weight:400; line-height:35px;"><a href="<?php the_permalink()?>" style=" text-decoration: none; color:#333333;"><?php the_title();?> </a></h2>

            </div>
            <div>
                <p style="text-transform: capitalize; font-family: 'Karla', Montserrat; font-size:15px; font-weight:400; line-height:27px; color: #595959; text-decoration: none;">Magazines & BLogs Are you looking for more resources? Perhaps technical ones? Let’s say you…

                </p>

            </div>
            <div>

            <button type="button" class="btn text-white" style ="background-color: #CEAC92; text-transform: uppercase; font-family: 'Barlow Condensed', Montserrat; font-size:13px; letter-spacing: 0.2em; font-weight:400; line-height:25px; border-radius:0 !important;">Read More</button>
            </div>
        </div>
    </body>
</html>
