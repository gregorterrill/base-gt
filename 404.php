<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
?>

<?php get_template_part('parts/header'); ?>

<section class="page-404">

	<h1>404: Page Not Found</h1>
	<p>The page you were looking for could not be found. Try searching for the content you were looking for:</p>
	<?php get_search_form(); ?>
	
</section>

<?php get_template_part('parts/footer'); ?>