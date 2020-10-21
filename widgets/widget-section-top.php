<?php

// Breaking News

add_action( 'widgets_init', 'tv9_section_top_load_widgets' );

function tv9_section_top_load_widgets() {
	register_widget( 'tv9_section_top_widget' );
}

class tv9_section_top_widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function __construct() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'tv9_section_top_widget', 'description' => esc_html__('Top section display posts in a row.', 'tv9-news') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 50, 'height' => 50, 'id_base' => 'tv9_section_top_widget' );

		/* Create the widget. */
		parent::__construct( 'tv9_section_top_widget', esc_html__('Veegam News: Top SECTION Widget', 'veegam'), $widget_ops, $control_ops );
	}

	/**
	 * How to display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		global $post;
		$title = apply_filters('widget_title', $instance['title'] );
		$layout = $instance['layout'];
		$showhide = $instance['showhide'];
		$tagcat = $instance['tagcat'];
		$enterslug = $instance['enterslug'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */

		

		?>
		
		
		
           
			<?php if ($showhide == 'show') { ?>
				<?php if ($layout == 'small'){ ?>
				
				<div class="container" style="display:block">
                   <div class="row">
            <div class="col-sm-12">
                <div class="newstop9">
                   
                    <div class="d-inline  bg-gray800 text-white">
                        <span class="h6"><?php echo $title ?></span>
                    </div>
					<span style="float: right;"><?php echo $title ?> <i class="fa fa-angle-right" aria-hidden="true"></i></span>
                </div>

                <div class="row mt-3">
				<?php if ($tagcat == 'tag') { ?>
				<?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'tag' => $enterslug, 'posts_per_page' => '1', 'post__not_in'=>$do_not_duplicate )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>
                    <div class="col-md-3">
					
                     <a href="<?php the_permalink(); ?>">
                 <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
												<?php the_post_thumbnail('top-news-big', array( 'class' => 'img-responsive' )); ?>
												
											<?php } ?>
											<?php if ( has_post_format( 'video' )) { ?>
												<div class="tv9-vid-box-wrap tv9-vid-box-mid tv9-vid-marg">
													<i class="fa fa-2 fa-play" aria-hidden="true"></i>
												</div><!--tv9-vid-box-wrap-->
											<?php } else if ( has_post_format( 'gallery' )) { ?>
												<div class="tv9-vid-box-wrap tv9-vid-box-mid">
													<i class="fa fa-2 fa-camera" aria-hidden="true"></i>
												</div><!--tv9-vid-box-wrap-->
											<?php } ?>
                 
                        </a>

                        <div class="share-button sharer" style="display: block;">
                            <div class="shareicons share-btn">
                                <i class="fa fa-share-square-o shareicons"></i>
                            </div>

                        </div>
                        <div class="mt-4">
                            <div class="col-sm-12 px-0">
                                <h4 class="post-title d-inline">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                                </h4>
                                <p class="post-details post-details-one">
                                    <span style="color:red; font-size:12px">LIVE</span> |
                                    <span style="font-size:12px;"><?php printf( esc_html__( '%s ago', 'veegam-news' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span>

                                </p>

                            </div>
                        </div>
                    </div>
                    <?php } endwhile; wp_reset_postdata(); ?>
                    <div class="col-md-3">
				<?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'tag' => $enterslug, 'posts_per_page' => '3', 'post__not_in'=>$do_not_duplicate )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>

                        <div class="row no-gutter">

                            <div class="col-sm-8 px-0">
                                <h4 class="post-title topnews">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                                </h4>
                               

                            </div>
                            <div class="col-sm-4 px-left">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
												<?php the_post_thumbnail('top-news', array( 'class' => 'img-responsive' )); ?>
												
											<?php } ?>
											<?php if ( has_post_format( 'video' )) { ?>
												<div class="tv9-vid-box-wrap tv9-vid-box-mid tv9-vid-marg">
													<i class="fa fa-2 fa-play" aria-hidden="true"></i>
												</div><!--tv9-vid-box-wrap-->
											<?php } else if ( has_post_format( 'gallery' )) { ?>
												<div class="tv9-vid-box-wrap tv9-vid-box-mid">
													<i class="fa fa-2 fa-camera" aria-hidden="true"></i>
												</div><!--tv9-vid-box-wrap-->
											<?php } ?>
                                </a>
                            </div>
							<p class="post-details post-details-one">
                                    <span style="color:red; font-size:12px"> <?php $category = get_the_category(); echo esc_html( $category[0]->cat_name ); ?></span> |
                                    <span style="font-size:12px;"><?php printf( esc_html__( '%s ago', 'veegam-news' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span>
                                    <span class="fa fa-share-square-o post-icons"></span>
                                </p>
                        </div>
                        <hr>

                        

                <?php } endwhile; wp_reset_postdata(); ?>
                    </div>
					                    <div class="col-md-3">
				<?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'tag' => $enterslug, 'posts_per_page' => '3', 'post__not_in'=>$do_not_duplicate )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>

                        <div class="row no-gutter">

                            <div class="col-sm-8 px-0">
                                <h4 class="post-title topnews">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                                </h4>
                               

                            </div>
                            <div class="col-sm-4 px-left">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
												<?php the_post_thumbnail('top-news', array( 'class' => 'img-responsive' )); ?>
												
											<?php } ?>
											<?php if ( has_post_format( 'video' )) { ?>
												<div class="tv9-vid-box-wrap tv9-vid-box-mid tv9-vid-marg">
													<i class="fa fa-2 fa-play" aria-hidden="true"></i>
												</div><!--tv9-vid-box-wrap-->
											<?php } else if ( has_post_format( 'gallery' )) { ?>
												<div class="tv9-vid-box-wrap tv9-vid-box-mid">
													<i class="fa fa-2 fa-camera" aria-hidden="true"></i>
												</div><!--tv9-vid-box-wrap-->
											<?php } ?>
                                </a>
                            </div>
							<p class="post-details post-details-one">
                                    <span style="color:red; font-size:12px"> <?php $category = get_the_category(); echo esc_html( $category[0]->cat_name ); ?></span> |
                                    <span style="font-size:12px;"><?php printf( esc_html__( '%s ago', 'veegam-news' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span>
                                    <span class="fa fa-share-square-o post-icons"></span>
                                </p>
                        </div>
                        <hr>

                        

                <?php } endwhile; wp_reset_postdata(); ?>
                    </div>
					                    <div class="col-md-3">
				<?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'tag' => $enterslug, 'posts_per_page' => '3', 'post__not_in'=>$do_not_duplicate )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>

                        <div class="row no-gutter">

                            <div class="col-sm-8 px-0">
                                <h4 class="post-title topnews">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                                </h4>
                               

                            </div>
                            <div class="col-sm-4 px-left">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
												<?php the_post_thumbnail('top-news', array( 'class' => 'img-responsive' )); ?>
												
											<?php } ?>
											<?php if ( has_post_format( 'video' )) { ?>
												<div class="tv9-vid-box-wrap tv9-vid-box-mid tv9-vid-marg">
													<i class="fa fa-2 fa-play" aria-hidden="true"></i>
												</div><!--tv9-vid-box-wrap-->
											<?php } else if ( has_post_format( 'gallery' )) { ?>
												<div class="tv9-vid-box-wrap tv9-vid-box-mid">
													<i class="fa fa-2 fa-camera" aria-hidden="true"></i>
												</div><!--tv9-vid-box-wrap-->
											<?php } ?>
                                </a>
                            </div>
							<p class="post-details post-details-one">
                                    <span style="color:red; font-size:12px"> <?php $category = get_the_category(); echo esc_html( $category[0]->cat_name ); ?></span> |
                                    <span style="font-size:12px;"><?php printf( esc_html__( '%s ago', 'veegam-news' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span>
                                    <span class="fa fa-share-square-o post-icons"></span>
                                </p>
                        </div>
                        <hr>

                        

                <?php } endwhile; wp_reset_postdata(); ?>
                    </div>
					
								
							<?php } else { ?>
								
								<?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'category_name' => $enterslug, 'posts_per_page' => '1', 'post__not_in'=>$do_not_duplicate )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>
								                    <div class="col-md-3">
					
                     <a href="<?php the_permalink(); ?>">
                 <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
												<?php the_post_thumbnail('top-news-big', array( 'class' => 'img-responsive' )); ?>
												
											<?php } ?>
											<?php if ( has_post_format( 'video' )) { ?>
												<div class="tv9-vid-box-wrap tv9-vid-box-mid tv9-vid-marg">
													<i class="fa fa-2 fa-play" aria-hidden="true"></i>
												</div><!--tv9-vid-box-wrap-->
											<?php } else if ( has_post_format( 'gallery' )) { ?>
												<div class="tv9-vid-box-wrap tv9-vid-box-mid">
													<i class="fa fa-2 fa-camera" aria-hidden="true"></i>
												</div><!--tv9-vid-box-wrap-->
											<?php } ?>
                 
                        </a>

                        <div class="share-button sharer" style="display: block;">
                            <div class="shareicons share-btn">
                                <i class="fa fa-share-square-o shareicons"></i>
                            </div>

                        </div>
                        <div class="mt-4">
                            <div class="col-sm-12 px-0">
                                <h4 class="post-title d-inline">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                                </h4>
                                <p class="post-details post-details-one">
                                    <span style="color:red; font-size:12px">LIVE</span> |
                                    <span style="font-size:12px;"><?php printf( esc_html__( '%s ago', 'veegam-news' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span>

                                </p>

                            </div>
                        </div>
                    </div>
					<?php } endwhile; wp_reset_postdata(); ?>
                    
                    <div class="col-md-3">
                   <?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'category_name' => $enterslug, 'posts_per_page' => '3', 'post__not_in'=>$do_not_duplicate )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>
                        <div class="row no-gutter">

                            <div class="col-sm-8 px-0">
                                <h4 class="post-title topnews">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                                </h4>
                               

                            </div>
                            <div class="col-sm-4 px-left">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
												<?php the_post_thumbnail('top-news', array( 'class' => 'img-responsive' )); ?>
												
											<?php } ?>
											<?php if ( has_post_format( 'video' )) { ?>
												<div class="tv9-vid-box-wrap tv9-vid-box-mid tv9-vid-marg">
													<i class="fa fa-2 fa-play" aria-hidden="true"></i>
												</div><!--tv9-vid-box-wrap-->
											<?php } else if ( has_post_format( 'gallery' )) { ?>
												<div class="tv9-vid-box-wrap tv9-vid-box-mid">
													<i class="fa fa-2 fa-camera" aria-hidden="true"></i>
												</div><!--tv9-vid-box-wrap-->
											<?php } ?>
                                </a>
                            </div>
							<p class="post-details post-details-one">
                                    <span style="color:red; font-size:12px"> <?php $category = get_the_category(); echo esc_html( $category[0]->cat_name ); ?></span> |
                                    <span style="font-size:12px;"><?php printf( esc_html__( '%s ago', 'veegam-news' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span>
                                    <span class="fa fa-share-square-o post-icons"></span>
                                </p>
                        </div>
                        <hr>

                        

<?php } endwhile; wp_reset_postdata(); ?>
                    </div>
            
			<div class="col-md-3">
                   <?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'category_name' => $enterslug, 'posts_per_page' => '3', 'post__not_in'=>$do_not_duplicate )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>
                        <div class="row no-gutter">

                            <div class="col-sm-8 px-0">
                                <h4 class="post-title topnews">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                                </h4>
                               

                            </div>
                            <div class="col-sm-4 px-left">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
												<?php the_post_thumbnail('top-news', array( 'class' => 'img-responsive' )); ?>
												
											<?php } ?>
											<?php if ( has_post_format( 'video' )) { ?>
												<div class="tv9-vid-box-wrap tv9-vid-box-mid tv9-vid-marg">
													<i class="fa fa-2 fa-play" aria-hidden="true"></i>
												</div><!--tv9-vid-box-wrap-->
											<?php } else if ( has_post_format( 'gallery' )) { ?>
												<div class="tv9-vid-box-wrap tv9-vid-box-mid">
													<i class="fa fa-2 fa-camera" aria-hidden="true"></i>
												</div><!--tv9-vid-box-wrap-->
											<?php } ?>
                                </a>
                            </div>
							<p class="post-details post-details-one">
                                    <span style="color:red; font-size:12px"> <?php $category = get_the_category(); echo esc_html( $category[0]->cat_name ); ?></span> |
                                    <span style="font-size:12px;"><?php printf( esc_html__( '%s ago', 'veegam-news' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span>
                                    <span class="fa fa-share-square-o post-icons"></span>
                                </p>
                        </div>
                        <hr>

                        

<?php } endwhile; wp_reset_postdata(); ?>
                    </div>
					<div class="col-md-3">
                   <?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'category_name' => $enterslug, 'posts_per_page' => '3', 'post__not_in'=>$do_not_duplicate )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>
                        <div class="row no-gutter">

                            <div class="col-sm-8 px-0">
                                <h4 class="post-title topnews">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                                </h4>
                               

                            </div>
                            <div class="col-sm-4 px-left">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
												<?php the_post_thumbnail('top-news', array( 'class' => 'img-responsive' )); ?>
												
											<?php } ?>
											<?php if ( has_post_format( 'video' )) { ?>
												<div class="tv9-vid-box-wrap tv9-vid-box-mid tv9-vid-marg">
													<i class="fa fa-2 fa-play" aria-hidden="true"></i>
												</div><!--tv9-vid-box-wrap-->
											<?php } else if ( has_post_format( 'gallery' )) { ?>
												<div class="tv9-vid-box-wrap tv9-vid-box-mid">
													<i class="fa fa-2 fa-camera" aria-hidden="true"></i>
												</div><!--tv9-vid-box-wrap-->
											<?php } ?>
                                </a>
                            </div>
							<p class="post-details post-details-one">
                                    <span style="color:red; font-size:12px"> <?php $category = get_the_category(); echo esc_html( $category[0]->cat_name ); ?></span> |
                                    <span style="font-size:12px;"><?php printf( esc_html__( '%s ago', 'veegam-news' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span>
                                    <span class="fa fa-share-square-o post-icons"></span>
                                </p>
                        </div>
                        <hr>

                        

<?php } endwhile; wp_reset_postdata(); ?>
                    </div>
            
					
							<?php } ?>
								
                </div>
            </div>

        </div>
    </div>
				<?php } ?>
				<?php } ?>
			
			
	
          			<?php if ($showhide == 'hide') { ?>
				<?php if ($layout == 'small'){ ?>
				
				<div class="container" style="display:none">
                   <div class="row">
            <div class="col-sm-12">
                <div class="newstop9">
                   
                    <div class="d-inline  bg-gray800 text-white">
                        <span class="h6"><?php echo $title ?></span>
                    </div>
					<span style="float: right;"><?php echo $title ?> <i class="fa fa-angle-right" aria-hidden="true"></i></span>
                </div>

                <div class="row mt-3">
				<?php if ($tagcat == 'tag') { ?>
				<?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'tag' => $enterslug, 'posts_per_page' => '1', 'post__not_in'=>$do_not_duplicate )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>
                    <div class="col-md-3">
					
                     <a href="<?php the_permalink(); ?>">
                 <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
												<?php the_post_thumbnail('top-news-big', array( 'class' => 'img-responsive' )); ?>
												
											<?php } ?>
											<?php if ( has_post_format( 'video' )) { ?>
												<div class="tv9-vid-box-wrap tv9-vid-box-mid tv9-vid-marg">
													<i class="fa fa-2 fa-play" aria-hidden="true"></i>
												</div><!--tv9-vid-box-wrap-->
											<?php } else if ( has_post_format( 'gallery' )) { ?>
												<div class="tv9-vid-box-wrap tv9-vid-box-mid">
													<i class="fa fa-2 fa-camera" aria-hidden="true"></i>
												</div><!--tv9-vid-box-wrap-->
											<?php } ?>
                 
                        </a>

                        <div class="share-button sharer" style="display: block;">
                            <div class="shareicons share-btn">
                                <i class="fa fa-share-square-o shareicons"></i>
                            </div>

                        </div>
                        <div class="mt-4">
                            <div class="col-sm-12 px-0">
                                <h4 class="post-title d-inline">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                                </h4>
                                <p class="post-details post-details-one">
                                    <span style="color:red; font-size:12px">LIVE</span> |
                                    <span style="font-size:12px;"><?php printf( esc_html__( '%s ago', 'veegam-news' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span>

                                </p>

                            </div>
                        </div>
                    </div>
                    <?php } endwhile; wp_reset_postdata(); ?>
                    <div class="col-md-3">
				<?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'tag' => $enterslug, 'posts_per_page' => '3', 'post__not_in'=>$do_not_duplicate )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>

                        <div class="row no-gutter">

                            <div class="col-sm-8 px-0">
                                <h4 class="post-title topnews">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                                </h4>
                               

                            </div>
                            <div class="col-sm-4 px-left">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
												<?php the_post_thumbnail('top-news', array( 'class' => 'img-responsive' )); ?>
												
											<?php } ?>
											<?php if ( has_post_format( 'video' )) { ?>
												<div class="tv9-vid-box-wrap tv9-vid-box-mid tv9-vid-marg">
													<i class="fa fa-2 fa-play" aria-hidden="true"></i>
												</div><!--tv9-vid-box-wrap-->
											<?php } else if ( has_post_format( 'gallery' )) { ?>
												<div class="tv9-vid-box-wrap tv9-vid-box-mid">
													<i class="fa fa-2 fa-camera" aria-hidden="true"></i>
												</div><!--tv9-vid-box-wrap-->
											<?php } ?>
                                </a>
                            </div>
							<p class="post-details post-details-one">
                                    <span style="color:red; font-size:12px"> <?php $category = get_the_category(); echo esc_html( $category[0]->cat_name ); ?></span> |
                                    <span style="font-size:12px;"><?php printf( esc_html__( '%s ago', 'veegam-news' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span>
                                    <span class="fa fa-share-square-o post-icons"></span>
                                </p>
                        </div>
                        <hr>

                        

                <?php } endwhile; wp_reset_postdata(); ?>
                    </div>
					                    <div class="col-md-3">
				<?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'tag' => $enterslug, 'posts_per_page' => '3', 'post__not_in'=>$do_not_duplicate )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>

                        <div class="row no-gutter">

                            <div class="col-sm-8 px-0">
                                <h4 class="post-title topnews">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                                </h4>
                               

                            </div>
                            <div class="col-sm-4 px-left">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
												<?php the_post_thumbnail('top-news', array( 'class' => 'img-responsive' )); ?>
												
											<?php } ?>
											<?php if ( has_post_format( 'video' )) { ?>
												<div class="tv9-vid-box-wrap tv9-vid-box-mid tv9-vid-marg">
													<i class="fa fa-2 fa-play" aria-hidden="true"></i>
												</div><!--tv9-vid-box-wrap-->
											<?php } else if ( has_post_format( 'gallery' )) { ?>
												<div class="tv9-vid-box-wrap tv9-vid-box-mid">
													<i class="fa fa-2 fa-camera" aria-hidden="true"></i>
												</div><!--tv9-vid-box-wrap-->
											<?php } ?>
                                </a>
                            </div>
							<p class="post-details post-details-one">
                                    <span style="color:red; font-size:12px"> <?php $category = get_the_category(); echo esc_html( $category[0]->cat_name ); ?></span> |
                                    <span style="font-size:12px;"><?php printf( esc_html__( '%s ago', 'veegam-news' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span>
                                    <span class="fa fa-share-square-o post-icons"></span>
                                </p>
                        </div>
                        <hr>

                        

                <?php } endwhile; wp_reset_postdata(); ?>
                    </div>
					                    <div class="col-md-3">
				<?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'tag' => $enterslug, 'posts_per_page' => '3', 'post__not_in'=>$do_not_duplicate )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>

                        <div class="row no-gutter">

                            <div class="col-sm-8 px-0">
                                <h4 class="post-title topnews">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                                </h4>
                               

                            </div>
                            <div class="col-sm-4 px-left">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
												<?php the_post_thumbnail('top-news', array( 'class' => 'img-responsive' )); ?>
												
											<?php } ?>
											<?php if ( has_post_format( 'video' )) { ?>
												<div class="tv9-vid-box-wrap tv9-vid-box-mid tv9-vid-marg">
													<i class="fa fa-2 fa-play" aria-hidden="true"></i>
												</div><!--tv9-vid-box-wrap-->
											<?php } else if ( has_post_format( 'gallery' )) { ?>
												<div class="tv9-vid-box-wrap tv9-vid-box-mid">
													<i class="fa fa-2 fa-camera" aria-hidden="true"></i>
												</div><!--tv9-vid-box-wrap-->
											<?php } ?>
                                </a>
                            </div>
							<p class="post-details post-details-one">
                                    <span style="color:red; font-size:12px"> <?php $category = get_the_category(); echo esc_html( $category[0]->cat_name ); ?></span> |
                                    <span style="font-size:12px;"><?php printf( esc_html__( '%s ago', 'veegam-news' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span>
                                    <span class="fa fa-share-square-o post-icons"></span>
                                </p>
                        </div>
                        <hr>

                        

                <?php } endwhile; wp_reset_postdata(); ?>
                    </div>
					
								
							<?php } else { ?>
								
								<?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'category_name' => $enterslug, 'posts_per_page' => '1', 'post__not_in'=>$do_not_duplicate )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>
								                    <div class="col-md-3">
					
                     <a href="<?php the_permalink(); ?>">
                 <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
												<?php the_post_thumbnail('top-news-big', array( 'class' => 'img-responsive' )); ?>
												
											<?php } ?>
											<?php if ( has_post_format( 'video' )) { ?>
												<div class="tv9-vid-box-wrap tv9-vid-box-mid tv9-vid-marg">
													<i class="fa fa-2 fa-play" aria-hidden="true"></i>
												</div><!--tv9-vid-box-wrap-->
											<?php } else if ( has_post_format( 'gallery' )) { ?>
												<div class="tv9-vid-box-wrap tv9-vid-box-mid">
													<i class="fa fa-2 fa-camera" aria-hidden="true"></i>
												</div><!--tv9-vid-box-wrap-->
											<?php } ?>
                 
                        </a>

                        <div class="share-button sharer" style="display: block;">
                            <div class="shareicons share-btn">
                                <i class="fa fa-share-square-o shareicons"></i>
                            </div>

                        </div>
                        <div class="mt-4">
                            <div class="col-sm-12 px-0">
                                <h4 class="post-title d-inline">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                                </h4>
                                <p class="post-details post-details-one">
                                    <span style="color:red; font-size:12px">LIVE</span> |
                                    <span style="font-size:12px;"><?php printf( esc_html__( '%s ago', 'veegam-news' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span>

                                </p>

                            </div>
                        </div>
                    </div>
					<?php } endwhile; wp_reset_postdata(); ?>
                    
                    <div class="col-md-3">
                   <?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'category_name' => $enterslug, 'posts_per_page' => '3', 'post__not_in'=>$do_not_duplicate )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>
                        <div class="row no-gutter">

                            <div class="col-sm-8 px-0">
                                <h4 class="post-title topnews">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                                </h4>
                               

                            </div>
                            <div class="col-sm-4 px-left">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
												<?php the_post_thumbnail('top-news', array( 'class' => 'img-responsive' )); ?>
												
											<?php } ?>
											<?php if ( has_post_format( 'video' )) { ?>
												<div class="tv9-vid-box-wrap tv9-vid-box-mid tv9-vid-marg">
													<i class="fa fa-2 fa-play" aria-hidden="true"></i>
												</div><!--tv9-vid-box-wrap-->
											<?php } else if ( has_post_format( 'gallery' )) { ?>
												<div class="tv9-vid-box-wrap tv9-vid-box-mid">
													<i class="fa fa-2 fa-camera" aria-hidden="true"></i>
												</div><!--tv9-vid-box-wrap-->
											<?php } ?>
                                </a>
                            </div>
							<p class="post-details post-details-one">
                                    <span style="color:red; font-size:12px"> <?php $category = get_the_category(); echo esc_html( $category[0]->cat_name ); ?></span> |
                                    <span style="font-size:12px;"><?php printf( esc_html__( '%s ago', 'veegam-news' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span>
                                    <span class="fa fa-share-square-o post-icons"></span>
                                </p>
                        </div>
                        <hr>

                        

<?php } endwhile; wp_reset_postdata(); ?>
                    </div>
            
			<div class="col-md-3">
                   <?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'category_name' => $enterslug, 'posts_per_page' => '3', 'post__not_in'=>$do_not_duplicate )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>
                        <div class="row no-gutter">

                            <div class="col-sm-8 px-0">
                                <h4 class="post-title topnews">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                                </h4>
                               

                            </div>
                            <div class="col-sm-4 px-left">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
												<?php the_post_thumbnail('top-news', array( 'class' => 'img-responsive' )); ?>
												
											<?php } ?>
											<?php if ( has_post_format( 'video' )) { ?>
												<div class="tv9-vid-box-wrap tv9-vid-box-mid tv9-vid-marg">
													<i class="fa fa-2 fa-play" aria-hidden="true"></i>
												</div><!--tv9-vid-box-wrap-->
											<?php } else if ( has_post_format( 'gallery' )) { ?>
												<div class="tv9-vid-box-wrap tv9-vid-box-mid">
													<i class="fa fa-2 fa-camera" aria-hidden="true"></i>
												</div><!--tv9-vid-box-wrap-->
											<?php } ?>
                                </a>
                            </div>
							<p class="post-details post-details-one">
                                    <span style="color:red; font-size:12px"> <?php $category = get_the_category(); echo esc_html( $category[0]->cat_name ); ?></span> |
                                    <span style="font-size:12px;"><?php printf( esc_html__( '%s ago', 'veegam-news' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span>
                                    <span class="fa fa-share-square-o post-icons"></span>
                                </p>
                        </div>
                        <hr>

                        

<?php } endwhile; wp_reset_postdata(); ?>
                    </div>
					<div class="col-md-3">
                   <?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'category_name' => $enterslug, 'posts_per_page' => '3', 'post__not_in'=>$do_not_duplicate )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>
                        <div class="row no-gutter">

                            <div class="col-sm-8 px-0">
                                <h4 class="post-title topnews">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                                </h4>
                               

                            </div>
                            <div class="col-sm-4 px-left">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
												<?php the_post_thumbnail('top-news', array( 'class' => 'img-responsive' )); ?>
												
											<?php } ?>
											<?php if ( has_post_format( 'video' )) { ?>
												<div class="tv9-vid-box-wrap tv9-vid-box-mid tv9-vid-marg">
													<i class="fa fa-2 fa-play" aria-hidden="true"></i>
												</div><!--tv9-vid-box-wrap-->
											<?php } else if ( has_post_format( 'gallery' )) { ?>
												<div class="tv9-vid-box-wrap tv9-vid-box-mid">
													<i class="fa fa-2 fa-camera" aria-hidden="true"></i>
												</div><!--tv9-vid-box-wrap-->
											<?php } ?>
                                </a>
                            </div>
							<p class="post-details post-details-one">
                                    <span style="color:red; font-size:12px"> <?php $category = get_the_category(); echo esc_html( $category[0]->cat_name ); ?></span> |
                                    <span style="font-size:12px;"><?php printf( esc_html__( '%s ago', 'veegam-news' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span>
                                    <span class="fa fa-share-square-o post-icons"></span>
                                </p>
                        </div>
                        <hr>

                        

<?php } endwhile; wp_reset_postdata(); ?>
                    </div>
            
					
							<?php } ?>
								
                </div>
            </div>

        </div>
    </div>
				<?php } ?>
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
		$instance['layout'] = strip_tags( $new_instance['layout'] );
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

		<!-- Layout -->
		<p>
			<label for="<?php echo $this->get_field_id('layout'); ?>">Display section</label>
			<select id="<?php echo $this->get_field_id('layout'); ?>" name="<?php echo $this->get_field_name('layout'); ?>" style="width:100%;">
				
				<option value='small' <?php if ('small' == $instance['layout']) echo 'selected="selected"'; ?>>Small</option>
			</select>
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