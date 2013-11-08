<?php

$user = get_post_meta( $post->ID, '_pronamic_extension_github_user', true );
$repo = get_post_meta( $post->ID, '_pronamic_extension_github_repo', true );

$ghbtns_url = add_query_arg( array(
	'user'  => $user,
	'repo'  => $repo,
	'type'  => 'watch',
	'count' => 'true',
), 'http://ghbtns.com/github-btn.html' );

?>
<iframe src="<?php echo esc_attr( $ghbtns_url ); ?>" allowtransparency="true" frameborder="0" scrolling="0" width="100" height="20"></iframe>
<?php

$ghbtns_url = add_query_arg( array(
	'user'  => $user,
	'repo'  => $repo,
	'type'  => 'fork',
	'count' => 'true',
), 'http://ghbtns.com/github-btn.html' );

?>
<iframe src="<?php echo esc_attr( $ghbtns_url ); ?>" allowtransparency="true" frameborder="0" scrolling="0" width="102" height="20"></iframe>