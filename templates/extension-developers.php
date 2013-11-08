<?php

global $post;

$path = get_option( 'pronamic_wp_plugins_path' );
$slug = $post->post_name;

$glob_pattern = ABSPATH . DIRECTORY_SEPARATOR . $path . DIRECTORY_SEPARATOR . $slug . DIRECTORY_SEPARATOR . '*.zip';

$files = glob( $glob_pattern );

$file_versions = array();

foreach ( $files as $file ) {
	$file_versions[] = basename( $file );
}

// @see https://github.com/afragen/github-updater/blob/1.7.4/classes/class-theme-updater.php
usort( $file_versions, 'version_compare' );

if ( empty( $file_versions ) ) : ?>

	<p>
		<?php _e( 'Found nothing', 'pwe' ); ?>
	</p>

<?php else : ?>

	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th scope="col">
					<?php _e( 'File', 'pwe' ); ?>
				</th>
			</tr>
		</thead>
		
		<tbody>

			<?php foreach ( $file_versions as $file ) : ?>
			
				<tr>
					<?php 
					
					$url = home_url( $path . '/' . $slug . '/' . $file );
					
					?>
					<td>
						<a href="<?php echo esc_attr( $url ); ?>">
							<?php echo $file; ?>
						</a>
					</td>
				</tr>

			<?php endforeach; ?>

		</tbody>
	</table>

<?php endif; ?>