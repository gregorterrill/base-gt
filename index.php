<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 */
?>
<?php get_template_part('parts/header'); ?>

<section class="page-index">

	<?php if ( have_posts() ): ?>

		<h1>Recent Posts</h1>

		<?php while ( have_posts() ) : the_post(); 		
			get_template_part('parts/content-box');
		endwhile; ?>

	<?php else: ?>

		<h1>No posts to display</h1>

	<?php endif; ?>

	<?php get_template_part('parts/pagination'); ?>

</section>

<?php get_template_part('parts/footer'); ?>