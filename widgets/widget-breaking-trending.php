<?php

// Trending News

add_action( 'widgets_init', 'tv9_home_breaking_load_widgets' );

function tv9_home_breaking_load_widgets() {
	register_widget( 'tv9_home_trending' );
}

class tv9_home_trending extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function __construct() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'tv9_home_trending', 'description' => esc_html__('A widget that allows you to either display tags in a row.', 'tv9-news') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 50, 'height' => 50, 'id_base' => 'tv9_home_trending' );

		/* Create the widget. */
		parent::__construct( 'tv9_home_trending', esc_html__('Veegam News: Trending News Widget', 'veegam'), $widget_ops, $control_ops );
	}

	/**
	 * How to display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		global $post;
		$title = apply_filters('widget_title', $instance['title'] );
		
		$showhide = $instance['showhide'];
		

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */

		

		?>
           
			<?php if ($showhide == 'show') { ?>
			<div class="trending" style="display:block;">
			<nav class="navbar navbar-expand-md navbar-light  trending">
			            
	<?php 
        $tags = get_tags(array(
            'smallest'                  => 5, 
            'largest'                   => 22,
            'unit'                      => 'px', 
            'number'                    => 5,  
            'format'                    => 'flex',
            'separator'                 => " ",
            'orderby'                   => 'count', 
            'order'                     => 'DESC',
            'show_count'                => 1,
            'echo'                      => false
        ));
		

        echo '<button type="button" class="btn btn-trending"><span class="navbar-brand middle">' .$title. '</span></button>';
        echo '<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>';
        echo '<div class="collapse navbar-collapse" id="navbarCollapse">';
		echo '<div class="navbar-nav hashtagmenu">';
        foreach ($tags as $tag) {
        echo '<a href="#" class="nav-item menu nav-link">' . $tag->name . '</a>';
        }
        echo '</div>';
		echo '</div>';

                
                    
            
				?>
             </nav>
			 </div>
				<?php } ?>
				<?php if ($showhide == 'hide') { ?>
				<div class="trending" style="display:none;">
				<nav class="navbar navbar-expand-md navbar-light  trending">
			<?
				
				$tags = get_tags(array(
            'smallest'                  => 5, 
            'largest'                   => 22,
            'unit'                      => 'px', 
            'number'                    => 5,  
            'format'                    => 'flat',
            'separator'                 => " ",
            'orderby'                   => 'count', 
            'order'                     => 'DESC',
            'show_count'                => 1,
            'echo'                      => false
        ));

        echo '<button type="button" class="btn btn-trending"><span class="navbar-brand middle">' .$title. '</span></button>';
        echo '<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>';
        echo '<div class="collapse navbar-collapse" id="navbarCollapse">';
		echo '<div class="navbar-nav hashtagmenu">';
        foreach ($tags as $tag) {
        echo '<a href="#" class="nav-item menu nav-link">' . $tag->name . '</a>';
        }
        echo '</div>';
		echo '</div>';
		?>
					</nav>
					</div>
				<?php } ?>
				
			
			
	
          
		<?php

		/* After widget (defined by themes). */
		echo $after_widget;

	}

	/**
	 * Update the widget settings.
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );

		$instance['showhide'] = strip_tags( $new_instance['showhide'] );


		return $instance;
	}


	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 'title' => 'Title' );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:90%;" />
		</p>

		
		
		<!-- SHOW AND HIDE DIV -->
		<p>
		<label for="<?php echo $this->get_field_id('showhide'); ?>">SHOW AND HIDE DIV</label>
		<select id="<?php echo $this->get_field_id('showhide'); ?>" name="<?php echo $this->get_field_name('showhide'); ?>" style="width:100%;">
				<option value='show' <?php if ('show' == $instance['showhide']) echo 'selected="selected"'; ?>>SHOW</option>
				<option value='hide' <?php if ('hide' == $instance['showhide']) echo 'selected="selected"'; ?>>HIDE</option>
		
			</select>
		</p>
		

		

	<?php
	}
}
?>