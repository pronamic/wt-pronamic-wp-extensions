<?php get_header(); ?>

<div class="row">
	<div class="col-md-3">
		<?php get_sidebar(); ?>
	</div>

	<div class="col-md-9" role="main">
		<?php if ( have_posts() ) : ?>
		
			<table class="table">
				<thead>
					<tr>
						<th scope="col"><?php _e( 'Title', 'pwe' ); ?></th>
						<th scope="col"><?php _e( 'Slug', 'pwe' ); ?></th>
						<th scope="col"><?php _e( 'WordPress.org', 'pwe' ); ?></th>
						<th scope="col"><?php _e( 'Stable Version', 'pwe' ); ?></th>
					</tr>
				</thead>
	
				<tbody>
	
					<?php while ( have_posts() ) : the_post(); ?>
					
						<tr>
							<td>
								<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a>
							</td>
							<td>
								<?php echo $post->post_name; ?>
							</td>
							<td>
								<?php 
								
								$slug = get_post_meta( $post->ID, '_pronamic_extension_wp_org_slug', true );
								
								if ( empty( $slug ) ) {

								} else {
									printf(
										'<a href="%s" target="_blank">%s</a>',
										sprintf( 'http://wordpress.org/plugins/%s/', $slug ),
										__( 'WordPress.org', 'pwe' )
									);
								}
								
								?>
							</td>
							<td>
								<?php echo get_post_meta( $post->ID, '_pronamic_extension_stable_version', true ); ?>
							</td>
						</tr>
	        
					<?php endwhile; ?>

				</tbody>
			</table>

		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>