<div class="page-header">
	<h1><?php the_title(); ?></h1>
</div>

<?php if ( has_post_thumbnail() ) : ?>

	<?php the_post_thumbnail( 'full' ); ?>

<?php endif; ?>

<ul class="nav nav-tabs">
  <li><a href="#description" data-toggle="tab"><?php _e( 'Description', 'pwe' ); ?></a></li>
  <li><a href="#developers" data-toggle="tab"><?php _e( 'Developers', 'pwe' ); ?></a></li>
</ul>

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