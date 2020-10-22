<?php

// Breaking News

add_action( 'widgets_init', 'tv9_section_newstop9_load_widgets' );

function tv9_section_newstop9_load_widgets() {
	register_widget( 'tv9_section_newstop9_widget' );
}

class tv9_section_newstop9_widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function __construct() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'tv9_section_newstop9_widget', 'description' => esc_html__('Top section display posts in a row.', 'tv9-news') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 50, 'height' => 50, 'id_base' => 'tv9_section_newstop9_widget' );

		/* Create the widget. */
		parent::__construct( 'tv9_section_newstop9_widget', esc_html__('NEWSTOP9 SECTION Widget', 'veegam'), $widget_ops, $control_ops );
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
		
		<?php if ($showhide == 'show') { 
        $textnum = 
        array("one",
        "two","three","four","five","six",
        "seven","eight","nine");
        
        ?>
  
    <div class="LeftCont">
      <div class="newsTop9">
        <div class="commonHD">
          <h2> <a href="#"><b>News</b> <span>Top 9</span></a> </h2>
          <a class="moreNews" href="#"><span>और पढ़ें <span>&gt;</span></span></a> </div>
        <div class="topNewscomp">
        <?php if ($tagcat == 'tag') { 
             $cond = array( 
				'tag' => $enterslug, 
				'posts_per_page' => '9', 
                'post__not_in'=>$do_not_duplicate );
             }elseif ($tagcat == 'category') { 
            $cond = array( 
                   'category_name' => $enterslug, 
                   'posts_per_page' => '9', 
                   'post__not_in'=>$do_not_duplicate );
                }
				global $do_not_duplicate; 
				global $post; 
				$recent = new WP_Query($cond);
				if($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; 
				if (isset($do_not_duplicate)) { ?>
          <div class="BigStory">
            <div class="FirstS">
              <div class="imgCont">
                <div class="socialHov"><span class="icon shareIcon"></span>
                  <ul class="socialTop">
                    <li><a href="<?php the_permalink();?>" class="icon fBtn" title="facebook" target="_blank"><i>Facebook</i></a> </li>
                    <li><a href="<?php the_permalink();?>" class="icon twitBtn" title="Twitter" target="_blank"><i>Twitter</i></a> </li>
                    <li><a href="<?php the_permalink();?>" class="icon whatsBtn" title="youtube" target="_blank"><i>Whatsapp</i></a> </li>
                    <li><a href="<?php the_permalink();?>" class="icon emailBtn" title="Email" target="_blank"><i>Email</i>&nbsp;</a> </li>
                  </ul>
                </div>
                <a href="<?php the_permalink();?>"><?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { 
												echo '<img src='.the_post_thumbnail(array(280, 157)).'>'; 
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

											 ?></a> </div>
              <div class="newsCount one"></div><h3 class="h3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            
            </div>
            
            <div class="p1LiveBlog">
              <div class="catTime flex liveBlogHd"><i class="blnk"></i><a href="<?php the_permalink(); ?>">Live</a> <span><?php printf( esc_html__( '%s ago'), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span></div>
              <ul>
                <li>
                  <h3 class="h3"><a href="#">blog update 1</a></h3>
                  <div class="catTime flex"><a href="#">Breaking News</a> <span>02 Min Ago</span> </div>
                </li>
                <li>
                  <h3 class="h3"><a href="#">blog update 2</a></h3>
                  <div class="catTime flex"><a href="#">Breaking News</a> <span>02 Min Ago</span> </div>
                </li>
              </ul>
            </div>
          </div>
        <?php 
        } 
        endif;
        ?>                               
          <div class="smallStory col2">
            <ul>
            <?php 
            $i=1;
            while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; 
				if (isset($do_not_duplicate)) { ?>
              <li>
                <div class="imgCont"><a href="<?php the_permalink();?>"><?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { 
												echo '<img src='.the_post_thumbnail(array(102, 57)).'>'; 
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

                                             ?></a></div>
                                             <div class="newsCount <?=$textnum[$i++]?>"></div>
                <h3 class="h3"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                <div class="catTime flex"><a href="#"><?php $category = get_the_category(); echo esc_html( $category[0]->cat_name ); ?></a> <span><?php printf( esc_html__( '%s ago'), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span>
                  <div class="socialHov"><span class="icon shareIcon"></span>
                    <ul class="socialTop">
                      <li><a href="<?php the_permalink();?>" class="icon fBtn" title="facebook" target="_blank"><i>Facebook</i></a> </li>
                      <li><a href="<?php the_permalink();?>" class="icon twitBtn" title="Twitter" target="_blank"><i>Twitter</i></a> </li>
                      <li><a href="<?php the_permalink();?>" class="icon whatsBtn" title="youtube" target="_blank"><i>Whatsapp</i></a> </li>
                      <li><a href="<?php the_permalink();?>" class="icon emailBtn" title="Email" target="_blank"><i>Email</i>&nbsp;</a> </li>
                    </ul>
                  </div>
                </div>
              </li>
                                            <?php } endwhile; ?>
            </ul>
          </div>
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
			<label for="<?php echo $this->get_field_id('tagcat'); ?>">Display Posts By Category Or Tag:</label>
			<select id="<?php echo $this->get_field_id('tagcat'); ?>" name="<?php echo $this->get_field_name('tagcat'); ?>" style="width:100%;">
				<option value='category' <?php if ('category' == $instance['tagcat']) echo 'selected="selected"'; ?>>Category</option>
				<option value='tag' <?php if ('tag' == $instance['tagcat']) echo 'selected="selected"'; ?>>Tag</option>
			</select>
		</p>

		<!-- Enter Cat/Tag -->
		<p>
			<label for="<?php echo $this->get_field_id( 'enterslug' ); ?>">Enter Category/Tag Slug Name:</label>
			<input id="<?php echo $this->get_field_id( 'enterslug' ); ?>" name="<?php echo $this->get_field_name( 'enterslug' ); ?>" value="<?php echo $instance['enterslug']; ?>" style="width:90%;" />
		</p>

	<?php
	}
}
?>