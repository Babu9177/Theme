<?php

// Breaking News

add_action( 'widgets_init', 'tv9_home_feat1_load_widgets' );

function tv9_home_feat1_load_widgets() {
	register_widget( 'tv9_home_feat1_widget' );
}

class tv9_home_feat1_widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function __construct() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'tv9_home_feat1_widget', 'description' => esc_html__('A widget that allows you to either display posts in a row.', 'tv9-news') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 50, 'height' => 50, 'id_base' => 'tv9_home_feat1_widget' );

		/* Create the widget. */
		parent::__construct( 'tv9_home_feat1_widget', esc_html__('Breaking Widget', 'veegam'), $widget_ops, $control_ops );
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
		$tagcat = $instance['tagcat'];
		$enterslug = $instance['enterslug'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */

		

		?>
           
			<?php if ($showhide == 'show') { ?>
				
	<div class="BreakingN">
	<b class="BNMainHD"><?php echo $title ?></b>
	<?php if ($tagcat == 'ID') { ?>
								<?php global $post; $recent = new WP_Query(array( 'ID' => $enterslug, 'posts_per_page' => '1' )); 
								while($recent->have_posts()) : $recent->the_post(); { ?>
      <div class="BNimgCont">
        <div class="socialHov"><span class="icon shareIcon"></span>
          <ul class="socialTop">
            <li><a href="<?php the_permalink(); ?>" class="icon fBtn" title="facebook" target="_blank"><i>Facebook</i></a> </li>
            <li><a href="<?php the_permalink(); ?>" class="icon twitBtn" title="Twitter" target="_blank"><i>Twitter</i></a> </li>
            <li><a href="<?php the_permalink(); ?>" class="icon whatsBtn" title="youtube" target="_blank"><i>Whatsapp</i></a> </li>
            <li><a href="<?php the_permalink(); ?>" class="icon emailBtn" title="Email" target="_blank"><i>Email</i>&nbsp;</a> 
          </ul>
        </div>
		<a href="<?php the_permalink();?>"><?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { 
												echo '<img src='.the_post_thumbnail(array(457, 251)).'>'; 
												echo '</img>';
											 } 
											if ( has_post_format( 'video' )) { 
												echo '<div class="tv9-vid-box-wrap tv9-vid-box-mid tv9-vid-marg">';
												echo '<i class="fa fa-2 fa-play" aria-hidden="true"></i>';
												echo '</div>';
											} else if ( has_post_format( 'gallery' )) { 
												echo '<div class="tv9-vid-box-wrap tv9-vid-box-mid">';
												echo '<i class="fa fa-2 fa-camera" aria-hidden="true"></i>';
												echo '</div>';
											 }

											 ?></a> 
      
		</div>
      <div class="BnewsCont"> <a href="<?php the_permalink(); ?>" class="BnewsHD"><?php the_title(); ?></a>
        <div class="catTime flex"><a href="#"><?php echo $title ?></a><span style="font-size:12px;"><?php printf( esc_html__( '%s ago', 'veegam-news' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span></div>
        <p><?php echo wp_trim_words(get_the_content(), 50, false); ?></p>
      <a href="#" class="BNCrossbtn">x</a> 
	  </div> 
	  	<?php } endwhile; wp_reset_postdata(); ?>
							
							<?php } ?>
							
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
		$instance['tagcat'] = strip_tags( $new_instance['tagcat'] );
		$instance['enterslug'] = strip_tags( $new_instance['enterslug'] );

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
		

		<!-- Cat/Tag -->
		<p>
			<label for="<?php echo $this->get_field_id('tagcat'); ?>">SELETCT POST:</label>
			<select id="<?php echo $this->get_field_id('tagcat'); ?>" name="<?php echo $this->get_field_name('tagcat'); ?>" style="width:100%;">
				<option value='ID' <?php if ('ID' == $instance['tagcat']) echo 'selected="selected"'; ?>>POST ID</option>
			</select>
		</p>

		<!-- Enter Cat/Tag -->
		<p>
			<label for="<?php echo $this->get_field_id( 'enterslug' ); ?>">Enter POST ID:</label>
			<input id="<?php echo $this->get_field_id( 'enterslug' ); ?>" name="<?php echo $this->get_field_name( 'enterslug' ); ?>" value="<?php echo $instance['enterslug']; ?>" style="width:90%;" />
		</p>

	<?php
	}
}
?>