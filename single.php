<?php get_header(); ?>

<main>
	<?php
        if ( have_posts() ) {
            
            the_title();
			the_post_thumbnail();
            the_content();
            ?> publié le <?php the_time('d/m/Y');
		}
	?>

</main>

<?php get_footer(); ?>
