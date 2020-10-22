<?php
get_header();
 
 ?>
<?php if ( is_active_sidebar( 'homepage-widget' ) ) { ?>
			<?php dynamic_sidebar( 'homepage-widget' ); ?>
		<?php } ?>
<?php
get_footer(); ?>