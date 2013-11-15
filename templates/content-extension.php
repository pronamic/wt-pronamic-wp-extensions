<?php 

global $post;

$extension = new Pronamic_WP_ExtensionsPlugin_ExtensionInfo( $post );

?>
<div class="plugin" itemtype="http://schema.org/SoftwareApplication" itemscope="">
	<div class="plugin-header">
		<div class="plugin-title">
			<h1 itemprop="name"><?php the_title(); ?></h1>
		</div>
		
		<?php if ( has_post_thumbnail() ) : ?>
		
			<?php the_post_thumbnail( 'full' ); ?>
		
		<?php endif; ?>

		<div class="row">
			<div class="col-md-9">
				<p class="plugin-description" itemprop="description">
					
				</p>
			</div>
	
			<div class="col-md-3">
				<div class="plugin-meta">
					<?php 
					
					$version = $extension->get_version();
					$url     = $extension->get_download_link();
					
					?>
					<a href="<?php echo esc_attr( $url ); ?>" class="btn btn-primary"><?php _e( 'Download', 'pwe' ); ?> <span itemprop="softwareVersion"><?php echo $version; ?></span></a>
					
				</div>
			</div>
		</div>
		
		<ul class="plugin-nav nav nav-tabs">
			<li class="active" >
				<a href="#description" data-toggle="tab"><?php _e( 'Description', 'pwe' ); ?></a>
			</li>
			<li>
				<a href="#developers" data-toggle="tab"><?php _e( 'Developers', 'pwe' ); ?></a>
			</li>
		</ul>
	</div>

	<div class="row">
		<div class="col-md-9">
			<div class="tab-content">
				<div class="tab-pane active" id="description">
					<?php the_content(); ?>
				</div>
				<div class="tab-pane" id="developers">
					<?php get_template_part( 'templates/extension-developers' ); ?>
				</div>
			</div>
		</div>
	
		<div class="col-md-3">
			<?php get_template_part( 'templates/sidebar-extension' ); ?>
		</div>
	</div>

</div>