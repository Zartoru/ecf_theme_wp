<?php get_header(); ?>

<main>
	<?php
        if ( have_posts() ) {
            
            the_title();
			the_post_thumbnail();
            the_content();
		}
	?>

</main>

<?php get_footer(); ?>