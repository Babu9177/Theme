<?php

// Top9 Menu

add_action( 'widgets_init', 'tv9_top9_menu_load_widgets' );

function tv9_top9_menu_load_widgets() {
	register_widget( 'tv9_top9_menu_trending' );
}

class tv9_top9_menu_trending extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function __construct() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'tv9_top9_menu_trending', 'description' => esc_html__('A widget that allows you to show the menu in the header part.', 'tv9-news') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 50, 'height' => 50, 'id_base' => 'tv9_top9_menu_trending' );

		/* Create the widget. */
		parent::__construct( 'tv9_top9_menu_trending', esc_html__('Top9 Menu Widget', 'veegam'), $widget_ops, $control_ops );
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
			<div class="FullCont">
  <div class="MainCont">
			<div class="top9MenuBox flex">
   
	<?php 
        $tags = get_tags(array(
            'smallest'                  => 10, 
            'largest'                   => 22,
            'unit'                      => 'px', 
            'number'                    => 10,  
            'format'                    => 'flex',
            'separator'                 => " ",
            'orderby'                   => 'count', 
            'order'                     => 'DESC',
            'show_count'                => 1,
            'echo'                      => false
        ));
		
        echo '<div class="top9Menu">'.$title.'</div>';
        echo '<ul class="top9MenuLink">';
        foreach ($tags as $tag) {
        echo '<li><a href="#">' . $tag->name . '</a></li>';
        }
        echo '</ul>';
		echo '</div>';
     
                
                    
            
				?>
				</div>
				</div>
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