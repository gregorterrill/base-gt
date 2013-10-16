<?php if ($wp_query->max_num_pages > 1) : ?>
<div class="content inner page-nav">

	<?php
	echo paginate_links( array(
		'base' => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages,
		'show_all' => true
	) );
	?>

</div>
<?php endif; ?>