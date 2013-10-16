<?php
/**
 * Search results page
 * 
 */
?>
<?php get_template_part('parts/header'); ?>

<section class="page-search-results">

	<?php if ( have_posts() ): ?>
		
		<h1>Search Results for '<?php echo get_search_query(); ?>'</h1>	
		
		<?php while ( have_posts() ) : the_post(); 
			get_template_part('parts/content-box');
		endwhile; ?>

	<?php else: ?>

		<h1>No results found for '<?php echo get_search_query(); ?>'</h1>

	<?php endif; ?>

	<?php get_template_part('parts/pagination'); ?>

</section>

<?php get_template_part('parts/footer'); ?>