<?php 



function team_blocks() {
	
	if( ! function_exists( 'acf_register_block_type' ) )
		return;
	acf_register_block_type( array(
		'name'			=> 'team-member',
		'title'			=> __( 'Team Member', 'clientname' ),
		'render_template'	=> 'view-team-member.php',
		'category'		=> 'formatting',
		'icon'			=> 'admin-users',
		'mode'			=> 'auto',
		'keywords'		=> array( 'profile', 'user', 'author' )
	));
}
add_action('acf/init', 'team_blocks' );