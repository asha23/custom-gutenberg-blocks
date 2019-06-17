<?php

$name = get_field( 'name' );
$title = get_field( 'title' );
$photo = get_field( 'photo' );
$description = get_field( 'description' );

?>
<div class="team-member">
	<div class="team-member--header">
		<?php
		if( !empty( $photo ) )
			echo wp_get_attachment_image( $photo['ID'], 'thumbnail', null, array( 'class' => 'team-member--avatar' ) );
	
		if( !empty( $name ) )
			echo '<h4>' . esc_html( $name ) . '</h4>';
			
		
		if( !empty( $title ) )
			echo '<h6 class="alt">' . esc_html( $title ) . '</h6>';
		?>
		
	</div>
	<div class="team-member--content">
		<?php echo apply_filters( 'ea_the_content', $description ); ?>
	</div>

</div>
