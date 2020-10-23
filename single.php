<?php get_header(); ?>
<?php global $author; $userdata = get_userdata($author); ?>

  <!--Middle Section-->

    
    <div class="adsCont"><img src="<?php echo get_template_directory_uri(); ?>/images/ad.png" alt="" /></div>
    <div class="detailBody">
      <div class="DetailSocial leftSidebar">
        <ul class="socialTop">
          <li><a href="#" class="icon fBtn" title="facebook" target="_blank"><i>Facebook</i></a> </li>
          <li><a href="#" class="icon twitBtn" title="Twitter" target="_blank"><i>Twitter</i></a> </li>
          <li><a href="#" class="icon whatsBtn" title="youtube" target="_blank"><i>Whatsapp</i></a> </li>
          <li><a href="#" class="icon emailBtn" title="Email" target="_blank"><i>Email</i>&nbsp;</a> </li>
        </ul>
      </div>
      
      <!--P1 Start Top 9-->
      <div class="LeftCont content">
        <div class="breadcrum">
          <ul>
            <li> <?php get_breadcrumb(); ?></li>
          </ul>
        </div>
        <h1 class="article-HD"><?php the_title(); ?></h1>
        <p class="summery"><?php the_excerpt(); ?></p>
        <ul class="AuthorInfo">
          <li>TV9 Bangla</li>
          <li>Publish Date - <?php the_time( 'g:i a, D, j F y' )?></li>
          <li> Author - <?php the_author();?> </li>
        </ul>
        <div class="ArticleBodyCont">
		 <?php while(have_posts()) : the_post(); ?>
          <div class="articleImg"><img data-src="<?php echo $featured_img_url ;?>">
													<?php if( has_post_thumbnail() ): echo get_the_post_thumbnail(); 
												endif;?>
                        </div>
          <div class="smallSum"><?php the_post_thumbnail_caption();?></div>
         
          <p><?php the_content();?></p>
		  
        </div>
         <?php endwhile; ?>
        <div class="commonHD hdBG">
          <h2> <a href="#"><b>Tags</b> <span>&nbsp;</span></a> </h2>
          <ul class="TrendStripLink">
        <?php $posttags = get_the_tags(); ?>
  
<?php foreach ( $posttags as $tag ) { ?>
   <li class="list-inline-item tags"> <a href="<?php echo get_tag_link( $tag->term_id ); ?> " rel="tag"> | <?php echo $tag->name; ?></a></li>
<?php } ?>
       </ul></div>
        
        <div class="Mgid"><img src="images/mgid.jpg" alt="" /></div>
        
        <div class="RelatedNews">
      <div class="newsTop9 HdRed">
        <div class="commonHD">
          <h2> <a href="#"><b>Related News</b> <span>&nbsp;</span></a> </h2>
          <a class="moreNews" href="#"><span>और पढ़ें <span>&gt;</span></span></a> </div>
        <div class="topNewscomp">
		
		<?php
$tags = wp_get_post_tags($post->ID);
if ($tags) {
$tag_ids = array();
foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
 
$args=array(
'tag__in' => $tag_ids,
'post__not_in' => array($post->ID),
'showposts'=>4,  // Number of related posts that will be shown.
'caller_get_posts'=>1
);
 
$my_query = new wp_query($args);
if( $my_query->have_posts() ) {
echo '<div id="relatedposts"><ul>';
while ($my_query->have_posts()) {
$my_query->the_post();
?>
  
<?php
if ( has_post_thumbnail() ) { ?>
<li><div class="relatedthumb">
<div class="BigStory">
            <div class="FirstS">
              <div class="imgCont">
                <div class="socialHov"><span class="icon shareIcon"></span>
                  <ul class="socialTop">
                    <li><a href="#" class="icon fBtn" title="facebook" target="_blank"><i>Facebook</i></a> </li>
                    <li><a href="#" class="icon twitBtn" title="Twitter" target="_blank"><i>Twitter</i></a> </li>
                    <li><a href="#" class="icon whatsBtn" title="youtube" target="_blank"><i>Whatsapp</i></a> </li>
                    <li><a href="#" class="icon emailBtn" title="Email" target="_blank"><i>Email</i>&nbsp;</a> </li>
                  </ul>
                </div>
<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
<?php the_post_thumbnail(); ?></a>
 <h3 class="h3"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
  <div class="catTime flex"><a href="<?php the_permalink() ?>"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></a> <span><?php echo time_ago(); ?></span></div>
</div>
</li>
<?php } else { ?>
<li><div class="relatedthumb"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><img src="<?php echo get_post_meta($post->ID, 'Image',true) ?>" width="196" height="110" alt="<?php the_title_attribute(); ?>" /><?php the_title(); ?></a></div></li>
<?php }
?>
  
<?php
}
echo '</ul>';
}
}
$post = $backup;
wp_reset_query();
?>
		
          <div class="BigStory">
            <div class="FirstS">
              <div class="imgCont">
                <div class="socialHov"><span class="icon shareIcon"></span>
                  <ul class="socialTop">
                    <li><a href="#" class="icon fBtn" title="facebook" target="_blank"><i>Facebook</i></a> </li>
                    <li><a href="#" class="icon twitBtn" title="Twitter" target="_blank"><i>Twitter</i></a> </li>
                    <li><a href="#" class="icon whatsBtn" title="youtube" target="_blank"><i>Whatsapp</i></a> </li>
                    <li><a href="#" class="icon emailBtn" title="Email" target="_blank"><i>Email</i>&nbsp;</a> </li>
                  </ul>
                </div>
                <a href="#"><img src="images/image.jpg" alt=""></a> </div>
              <h3 class="h3"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
              <div class="catTime flex"><a href="#"></a> <span>02 Min Ago</span></div>
            </div>
             
          </div>
          <div class="smallStory col2">
            <ul>
              <li>
                <div class="imgCont"><a href="#"><img src="images/image.jpg" alt=""></a></div>
                <h3 class="h3"><a href="#">IPL 2020 CSK vs RR Highlights: बटलर के दमदार खेल से चेन्नई पस्त, 7 विकेट से जीता राजस्थान</a></h3>
                <div class="catTime flex"><a href="#">Breaking News</a> <span>02 Min Ago</span>
                  <div class="socialHov"><span class="icon shareIcon"></span>
                    <ul class="socialTop">
                      <li><a href="#" class="icon fBtn" title="facebook" target="_blank"><i>Facebook</i></a> </li>
                      <li><a href="#" class="icon twitBtn" title="Twitter" target="_blank"><i>Twitter</i></a> </li>
                      <li><a href="#" class="icon whatsBtn" title="youtube" target="_blank"><i>Whatsapp</i></a> </li>
                      <li><a href="#" class="icon emailBtn" title="Email" target="_blank"><i>Email</i>&nbsp;</a> </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li>
                <div class="imgCont"><a href="#"><img src="images/image.jpg" alt=""></a></div>
                <h3 class="h3"><a href="#">IPL 2020 CSK vs RR Highlights: बटलर के दमदार खेल से चेन्नई पस्त, 7 विकेट से जीता राजस्थान</a></h3>
                <div class="catTime flex"><a href="#">Breaking News</a> <span>02 Min Ago</span>
                  <div class="socialHov"><span class="icon shareIcon"></span>
                    <ul class="socialTop">
                      <li><a href="#" class="icon fBtn" title="facebook" target="_blank"><i>Facebook</i></a> </li>
                      <li><a href="#" class="icon twitBtn" title="Twitter" target="_blank"><i>Twitter</i></a> </li>
                      <li><a href="#" class="icon whatsBtn" title="youtube" target="_blank"><i>Whatsapp</i></a> </li>
                      <li><a href="#" class="icon emailBtn" title="Email" target="_blank"><i>Email</i>&nbsp;</a> </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li>
                <div class="imgCont"><a href="#"><img src="images/image.jpg" alt=""></a></div>
                <h3 class="h3"><a href="#">IPL 2020 CSK vs RR Highlights: बटलर के दमदार खेल से चेन्नई पस्त, 7 विकेट से जीता राजस्थान</a></h3>
                <div class="catTime flex"><a href="#">Breaking News</a> <span>02 Min Ago</span>
                  <div class="socialHov"><span class="icon shareIcon"></span>
                    <ul class="socialTop">
                      <li><a href="#" class="icon fBtn" title="facebook" target="_blank"><i>Facebook</i></a> </li>
                      <li><a href="#" class="icon twitBtn" title="Twitter" target="_blank"><i>Twitter</i></a> </li>
                      <li><a href="#" class="icon whatsBtn" title="youtube" target="_blank"><i>Whatsapp</i></a> </li>
                      <li><a href="#" class="icon emailBtn" title="Email" target="_blank"><i>Email</i>&nbsp;</a> </li>
                    </ul>
                  </div>
                </div>
              </li>
              
              <li>
                <div class="imgCont"><a href="#"><img src="images/image.jpg" alt=""></a></div>
                <h3 class="h3"><a href="#">IPL 2020 CSK vs RR Highlights: बटलर के दमदार खेल से चेन्नई पस्त, 7 विकेट से जीता राजस्थान</a></h3>
                <div class="catTime flex"><a href="#">Breaking News</a> <span>02 Min Ago</span>
                  <div class="socialHov"><span class="icon shareIcon"></span>
                    <ul class="socialTop">
                      <li><a href="#" class="icon fBtn" title="facebook" target="_blank"><i>Facebook</i></a> </li>
                      <li><a href="#" class="icon twitBtn" title="Twitter" target="_blank"><i>Twitter</i></a> </li>
                      <li><a href="#" class="icon whatsBtn" title="youtube" target="_blank"><i>Whatsapp</i></a> </li>
                      <li><a href="#" class="icon emailBtn" title="Email" target="_blank"><i>Email</i>&nbsp;</a> </li>
                    </ul>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
        
      </div>
      
      <!--RHS of P1-->
      <div class="RightCont rightSidebar">
        <div class="adsCont"><img src="images/300x250.png" alt="" /></div>
        <div class="P1RHS HdRed"><!--Top 9 News Start-->
          <div class="commonHD blue">
            <h2> <a href="#"><b>News</b> <span>Top 9</span></a> </h2>
            <a class="moreNews" href="#"><span>और पढ़ें <span>&gt;</span></span></a> </div>
          <div class="topNewscomp">
            <div class="col2 rhs">
              <ul>
                <li>
                  <div class="imgCont"><a href="#"><img src="images/image.jpg" alt=""></a></div>
                  <div class="newsCount"></div>
                  <h3 class="h3"><a href="#">IPL 2020 CSK vs RR Highlights: बटलर के दमदार खेल से चेन्नई पस्त, 7 विकेट से जीता राजस्थान</a></h3>
                  <div class="catTime flex"><a href="#">Breaking News</a> <span>02 Min Ago</span>
                    <div class="socialHov"><span class="icon shareIcon"></span>
                      <ul class="socialTop">
                        <li><a href="#" class="icon fBtn" title="facebook" target="_blank"><i>Facebook</i></a> </li>
                        <li><a href="#" class="icon twitBtn" title="Twitter" target="_blank"><i>Twitter</i></a> </li>
                        <li><a href="#" class="icon whatsBtn" title="youtube" target="_blank"><i>Whatsapp</i></a> </li>
                        <li><a href="#" class="icon emailBtn" title="Email" target="_blank"><i>Email</i>&nbsp;</a> </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="imgCont"><a href="#"><img src="images/image.jpg" alt=""></a></div>
                  <div class="newsCount two"></div>
                  <h3 class="h3"><a href="#">IPL 2020 CSK vs RR Highlights: बटलर के दमदार खेल से चेन्नई पस्त, 7 विकेट से जीता राजस्थान</a></h3>
                  <div class="catTime flex"><a href="#">Breaking News</a> <span>02 Min Ago</span>
                    <div class="socialHov"><span class="icon shareIcon"></span>
                      <ul class="socialTop">
                        <li><a href="#" class="icon fBtn" title="facebook" target="_blank"><i>Facebook</i></a> </li>
                        <li><a href="#" class="icon twitBtn" title="Twitter" target="_blank"><i>Twitter</i></a> </li>
                        <li><a href="#" class="icon whatsBtn" title="youtube" target="_blank"><i>Whatsapp</i></a> </li>
                        <li><a href="#" class="icon emailBtn" title="Email" target="_blank"><i>Email</i>&nbsp;</a> </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="imgCont"><a href="#"><img src="images/image.jpg" alt=""></a></div>
                  <div class="newsCount three"></div>
                  <h3 class="h3"><a href="#">IPL 2020 CSK vs RR Highlights: बटलर के दमदार खेल से चेन्नई पस्त, 7 विकेट से जीता राजस्थान</a></h3>
                  <div class="catTime flex"><a href="#">Breaking News</a> <span>02 Min Ago</span>
                    <div class="socialHov"><span class="icon shareIcon"></span>
                      <ul class="socialTop">
                        <li><a href="#" class="icon fBtn" title="facebook" target="_blank"><i>Facebook</i></a> </li>
                        <li><a href="#" class="icon twitBtn" title="Twitter" target="_blank"><i>Twitter</i></a> </li>
                        <li><a href="#" class="icon whatsBtn" title="youtube" target="_blank"><i>Whatsapp</i></a> </li>
                        <li><a href="#" class="icon emailBtn" title="Email" target="_blank"><i>Email</i>&nbsp;</a> </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="imgCont"><a href="#"><img src="images/image.jpg" alt=""></a></div>
                  <div class="newsCount four"></div>
                  <h3 class="h3"><a href="#">IPL 2020 CSK vs RR Highlights: बटलर के दमदार खेल से चेन्नई पस्त, 7 विकेट से जीता राजस्थान</a></h3>
                  <div class="catTime flex"><a href="#">Breaking News</a> <span>02 Min Ago</span>
                    <div class="socialHov"><span class="icon shareIcon"></span>
                      <ul class="socialTop">
                        <li><a href="#" class="icon fBtn" title="facebook" target="_blank"><i>Facebook</i></a> </li>
                        <li><a href="#" class="icon twitBtn" title="Twitter" target="_blank"><i>Twitter</i></a> </li>
                        <li><a href="#" class="icon whatsBtn" title="youtube" target="_blank"><i>Whatsapp</i></a> </li>
                        <li><a href="#" class="icon emailBtn" title="Email" target="_blank"><i>Email</i>&nbsp;</a> </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="imgCont"><a href="#"><img src="images/image.jpg" alt=""></a></div>
                  <div class="newsCount five"></div>
                  <h3 class="h3"><a href="#">IPL 2020 CSK vs RR Highlights: बटलर के दमदार खेल से चेन्नई पस्त, 7 विकेट से जीता राजस्थान</a></h3>
                  <div class="catTime flex"><a href="#">Breaking News</a> <span>02 Min Ago</span>
                    <div class="socialHov"><span class="icon shareIcon"></span>
                      <ul class="socialTop">
                        <li><a href="#" class="icon fBtn" title="facebook" target="_blank"><i>Facebook</i></a> </li>
                        <li><a href="#" class="icon twitBtn" title="Twitter" target="_blank"><i>Twitter</i></a> </li>
                        <li><a href="#" class="icon whatsBtn" title="youtube" target="_blank"><i>Whatsapp</i></a> </li>
                        <li><a href="#" class="icon emailBtn" title="Email" target="_blank"><i>Email</i>&nbsp;</a> </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="imgCont"><a href="#"><img src="images/image.jpg" alt=""></a></div>
                  <div class="newsCount six"></div>
                  <h3 class="h3"><a href="#">IPL 2020 CSK vs RR Highlights: बटलर के दमदार खेल से चेन्नई पस्त, 7 विकेट से जीता राजस्थान</a></h3>
                  <div class="catTime flex"><a href="#">Breaking News</a> <span>02 Min Ago</span>
                    <div class="socialHov"><span class="icon shareIcon"></span>
                      <ul class="socialTop">
                        <li><a href="#" class="icon fBtn" title="facebook" target="_blank"><i>Facebook</i></a> </li>
                        <li><a href="#" class="icon twitBtn" title="Twitter" target="_blank"><i>Twitter</i></a> </li>
                        <li><a href="#" class="icon whatsBtn" title="youtube" target="_blank"><i>Whatsapp</i></a> </li>
                        <li><a href="#" class="icon emailBtn" title="Email" target="_blank"><i>Email</i>&nbsp;</a> </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="imgCont"><a href="#"><img src="images/image.jpg" alt=""></a></div>
                  <div class="newsCount seven"></div>
                  <h3 class="h3"><a href="#">IPL 2020 CSK vs RR Highlights: बटलर के दमदार खेल से चेन्नई पस्त, 7 विकेट से जीता राजस्थान</a></h3>
                  <div class="catTime flex"><a href="#">Breaking News</a> <span>02 Min Ago</span>
                    <div class="socialHov"><span class="icon shareIcon"></span>
                      <ul class="socialTop">
                        <li><a href="#" class="icon fBtn" title="facebook" target="_blank"><i>Facebook</i></a> </li>
                        <li><a href="#" class="icon twitBtn" title="Twitter" target="_blank"><i>Twitter</i></a> </li>
                        <li><a href="#" class="icon whatsBtn" title="youtube" target="_blank"><i>Whatsapp</i></a> </li>
                        <li><a href="#" class="icon emailBtn" title="Email" target="_blank"><i>Email</i>&nbsp;</a> </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="imgCont"><a href="#"><img src="images/image.jpg" alt=""></a></div>
                  <div class="newsCount eight"></div>
                  <h3 class="h3"><a href="#">IPL 2020 CSK vs RR Highlights: बटलर के दमदार खेल से चेन्नई पस्त, 7 विकेट से जीता राजस्थान</a></h3>
                  <div class="catTime flex"><a href="#">Breaking News</a> <span>02 Min Ago</span>
                    <div class="socialHov"><span class="icon shareIcon"></span>
                      <ul class="socialTop">
                        <li><a href="#" class="icon fBtn" title="facebook" target="_blank"><i>Facebook</i></a> </li>
                        <li><a href="#" class="icon twitBtn" title="Twitter" target="_blank"><i>Twitter</i></a> </li>
                        <li><a href="#" class="icon whatsBtn" title="youtube" target="_blank"><i>Whatsapp</i></a> </li>
                        <li><a href="#" class="icon emailBtn" title="Email" target="_blank"><i>Email</i>&nbsp;</a> </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="imgCont"><a href="#"><img src="images/image.jpg" alt=""></a></div>
                  <div class="newsCount nine"></div>
                  <h3 class="h3"><a href="#">IPL 2020 CSK vs RR Highlights: बटलर के दमदार खेल से चेन्नई पस्त, 7 विकेट से जीता राजस्थान</a></h3>
                  <div class="catTime flex"><a href="#">Breaking News</a> <span>02 Min Ago</span>
                    <div class="socialHov"><span class="icon shareIcon"></span>
                      <ul class="socialTop">
                        <li><a href="#" class="icon fBtn" title="facebook" target="_blank"><i>Facebook</i></a> </li>
                        <li><a href="#" class="icon twitBtn" title="Twitter" target="_blank"><i>Twitter</i></a> </li>
                        <li><a href="#" class="icon whatsBtn" title="youtube" target="_blank"><i>Whatsapp</i></a> </li>
                        <li><a href="#" class="icon emailBtn" title="Email" target="_blank"><i>Email</i>&nbsp;</a> </li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div><!--Top 9 News End-->
        
        <div class="adsCont"><img src="images/300x250.png" alt="" /></div>
        
        <div class="P1RHS HdRed"> <!--Also Read-->
        <div class="commonHD">
          <h2> <a href="#"><b>Also Read</b><span>&nbsp;</span></a> </h2>
          <a class="moreNews" href="#"><span>और पढ़ें <span>&gt;</span></span></a> </div>
        <div class="topNewscomp">
          <div class="col2 rhs">
            <ul>
			
			<div class="related-entries">
  <div class="block">
    <ul>
      <?php
        //for use in the loop, list 5 post titles related to first tag on current post
        $cats = get_the_category($post->ID);
        if ($cats) {
        echo '';
        $first_cat = $cats[0]->term_id;
        $args=array(
        'category__in' => array($first_cat),
        'post__not_in' => array($post->ID),
        'posts_per_page'=>6,
        'caller_get_posts'=>1
        );
        $my_query = new WP_Query($args);
        if( $my_query->have_posts() ) {
        while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <li>
		<h3 class="h3"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                <div class="catTime flex"><a href="<?php the_permalink() ?>"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></a> <span><?php echo time_ago(); ?></span>
                  <div class="socialHov"><span class="icon shareIcon"></span>
                    <ul class="socialTop">
                      <li><a href="#" class="icon fBtn" title="facebook" target="_blank"><i>Facebook</i></a> </li>
                      <li><a href="#" class="icon twitBtn" title="Twitter" target="_blank"><i>Twitter</i></a> </li>
                      <li><a href="#" class="icon whatsBtn" title="youtube" target="_blank"><i>Whatsapp</i></a> </li>
                      <li><a href="#" class="icon emailBtn" title="Email" target="_blank"><i>Email</i>&nbsp;</a> </li>
                    </ul>
                  </div>
                </div>
		
		
		

        <?php
        endwhile;
        }
        wp_reset_query();
        }
      ?>
    </ul>
  </div>
</div>
              
             
               
             
              
            </ul>
          </div>
        </div>
      </div> <!--Also Read-->
        
        
      </div>
    </div>
 

  
<?php get_footer(); ?>