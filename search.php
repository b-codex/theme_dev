<?php

get_header();

if ( have_posts() ) :
	?>
    <h2>Search results for query: "<?php the_search_query(); ?>"</h2>
	<?php
	while ( have_posts() ) : the_post(); ?>

        <article class="post">
            <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
            <p class="post-meta">
				<?php the_author(); ?>
            <p>
				<?php echo get_the_excerpt() ?>
                <a href="<?php the_permalink() ?>">Read more &raquo</a>
            </p>
        </article>
	
	<?php endwhile;

else :
	echo '<p>No search results found!</p>';

endif;

get_footer();

?> 
 
 
