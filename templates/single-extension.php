<?php get_header(); ?>

<div class="row">
	<div class="col-md-3">
		<?php get_sidebar(); ?>
	</div>

	<div class="col-md-9" role="main">
		<?php if ( have_posts() ) : ?>
		
			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php get_template_part( 'templates/content-extension' ); ?>	
	        
			<?php endwhile; ?>

		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>