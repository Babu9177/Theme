<?php get_header(); ?>
<?php global $author; $userdata = get_userdata($author); ?>
<article id="mvp-article-wrap">
    <section>
        <div class="container">
            <div class="row mt-4">
                <!--Left side body part-->
                <div class="col-sm-9">
                    <!--Home nav body part-->
                    <div class="card card-disply">
                        <span>Home</span> <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span>News one</span> <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span>News two</span>
                    </div>
                    <!--End Home nav body part-->
                    <!--Scoial Media body part-->
                    <div class="icon-bar">
                                     			<?php
                         global $post;

                         $mojoURL = urlencode(get_permalink());
 
        $mojoTitle = str_replace( ' ', '%20', get_the_title());
    
        $mojoThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );

        $twitterURL = 'https://twitter.com/intent/tweet?text='.$crunchifyTitle.'&amp;url='.$mojoURL.'&amp;';
        $facebookURL = 'https://www.facebook.com/sharer.php?u='.$mojoURL;
       // $googleURL = 'https://plus.google.com/share?url='.$mojoURL;
//$linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$mojoURL.'&amp;title='.$mojoTitle;
        $whatsappURL = 'https://wa.me/?text='.$mojoTitle . ' ' . $mojoURL;

        //$variable .= '<div class="entry-social">';
        $variable .= '<a href="'. $twitterURL .'" target="_blank"><i class=" fa fa-twitter"></i></a>';
        $variable .= '<a href="'.$facebookURL.'" target="_blank"><i class=" fa fa-facebook"></i></a>';
        $variable .= '<a href="'.$whatsappURL.'" target="_blank"><i class=" fa fa-whatsapp"></i></a>';
		
     //$variable .= '</div>';
      echo $variable;
        ?>
                    </div>
                    <!--End Scoial Media body part-->
                    <!--Context  body part-->
                    <div class="contect-blog">
                        <p>News two</p>
                        <h1 class="single-post-title"><?php the_title(); ?></h1>
						<p><?php the_excerpt(); ?></p>
                        
                            <span>Tv9 Bangla </span> | <span>Publish - <?php the_time( 'g:i a, D, j F y' )?></span> | <span>Author - <a href="javascript:;"><?php the_author();?> </a></span> |<span> T <i class="fa fa-arrows-v" aria-hidden="true"></i> </span>
                        
                    </div>
					 <?php while(have_posts()) : the_post(); ?>
                    <!--Context  img body part-->
                    <div class="contect-blog">
                        <img data-src="<?php echo $featured_img_url ;?>">
													<?php if( has_post_thumbnail() ): echo get_the_post_thumbnail(); 
												endif;?>
                        <?php the_post_thumbnail_caption();?>
                    </div>
                    <!--Context  img body part-->
                    <div class="contect-blog">
                        <p>
                           <?php the_content();?>
                        </p>
                    </div>

                     <?php endwhile; ?>
                    
                    <!--End Context body part-->
                    <!--Context in nav  body part-->
                    <div class="contect-blog">
					<ul class="list-inline tags">
					<button type="button" class="btn btn-tags list-inline"><span class=" top">Tags</span></button>
					 <?php $posttags = get_the_tags(); ?>
  
<?php foreach ( $posttags as $tag ) { ?>
   <li class="list-inline-item tags"> <a href="<?php echo get_tag_link( $tag->term_id ); ?> " rel="tag"> | <?php echo $tag->name; ?></a></li>
<?php } ?>

</ul>
                       
                    </div>
                    <!--End Context in nav  body part-->
                   
                    
                    <!--Bottom in RELATED NEWS  body part-->
                    <div class="contect-blog">
                        <nav class="navbar navbar-expand-md navbar-light bg-light  btn-t9-border">
                            <button type="button" class="btn btn-danger btn-newscs"><span class="navbar-brand top btn-newscs-txt">RELATED NEWS</span></button>
                        </nav>
                    </div>
                    <div class="contect-blog">
                        <div class="row Relatednews">
                            <div class="col-sm-4">
                                <img src=" images/Coronavirus-vaccine.jpg" alt="" class="Relatednews-img" />


                                <img src=" images/Coronavirus-vaccine.jpg" alt="" class="Relatednews-img" style="padding-top: 3px;" />
                                <!--<i class="fa fa-share-square-o" aria-hidden="true"></i>-->
                                <div class="">
                                    <p class="p-sty">Top News in India: Read Latest News on Sports, Business, Entertainment</p>

                                    <span style="color:red">Top News</span> |
                                    <span>03 min ago</span>
                                    <i class="fa fa-share-square-o" aria-hidden="true"></i>


                                </div>
                            </div>
                            <div class="col-sm-4 related-news-tv9">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <p class="p-sty">Top News in India: Read Latest News on Sports, Business, Entertainment</p>
                                        <span style="color:red">Top News</span> |

                                        <i class="fa fa-share-square-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-sm-3 related-news-3tv9">
                                        <img src=" images/Coronavirus-vaccine.jpg" alt="" class="img-tv9-img-tum" />
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-sm-9">
                                        <p class="p-sty">Top News in India: Read Latest News on Sports, Business, Entertainment</p>
                                        <span style="color:red">Top News</span> |

                                        <i class="fa fa-share-square-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-sm-3 related-news-3tv9">
                                        <img src=" images/Coronavirus-vaccine.jpg" alt="" class="img-tv9-img-tum" />
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-sm-9">
                                        <p class="p-sty">Top News in India: Read Latest News on Sports, Business, Entertainment</p>
                                        <span class="p-m-bottom">Top News</span> |

                                        <i class="fa fa-share-square-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-sm-3 related-news-3tv9">
                                        <img src=" images/Coronavirus-vaccine.jpg" alt="" class="img-tv9-img-tum" />
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <p class="p-sty">Top News in India: Read Latest News on Sports, Business, Entertainment</p>
                                        <p class="p-m-bottom">
                                            <span style="color:red">Top News</span> |
                                            <span>03 min ago</span>
                                            <i class="fa fa-share-square-o" aria-hidden="true"></i>
                                        </p>
                                    </div>
                                    <div class="col-sm-3 related-news-3tv9">
                                        <img src=" images/Coronavirus-vaccine.jpg" alt="" class="img-tv9-img-tum" />
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-sm-9">
                                        <p class="p-sty">Top News in India: Read Latest News on Sports, Business, Entertainment</p>
                                        <p class="p-m-bottom">
                                            <span style="color:red">Top News</span> |
                                            <span>03 min ago</span>
                                            <i class="fa fa-share-square-o" aria-hidden="true"></i>
                                        </p>
                                    </div>
                                    <div class="col-sm-3 related-news-3tv9">
                                        <img src=" images/Coronavirus-vaccine.jpg" alt="" class="img-tv9-img-tum" />
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-sm-9">
                                        <p class="p-sty">Top News in India: Read Latest News on Sports, Business, Entertainment</p>
                                        <p class="p-m-bottom">
                                            <span style="color:red">Top News</span> |
                                            <span>03 min ago</span>
                                            <i class="fa fa-share-square-o" aria-hidden="true"></i>
                                        </p>
                                    </div>
                                    <div class="col-sm-3 related-news-3tv9">
                                        <img src=" images/Coronavirus-vaccine.jpg" alt="" class="img-tv9-img-tum" />
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <!--Bottom in RELATED NEWS  body part-->
                </div>
                <!--Left side body part-->
                <!--right side body part-->
                <div class="col-sm-3">
                    <div class="">
                        <img src=" images/Add-one-img.png" width="257" height="292" alt="" />
                    </div>
                    <div class="contect-blog">
                        <nav class="navbar navbar-expand-md navbar-light bg-light  btn-t9-border">
                            <button type="button" class="btn btn-danger btn-newscs"><span class="navbar-brand  btn-newscs-txt">NEWS</span></button>
                            <button type="button" class="btn btn-t9cs"><span class="navbar-brand middle btn-t9txt">TOP 9</span></button>
                            <span class="navbar-brand middle text-t9news">tv9 news <i class="fa fa-angle-right" aria-hidden="true"></i></span>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 mar-tv9-alig">
                            <div class="row">
                                <div class="col-sm-6 padd-tv9-rev">
                                    <button type="button" class="btn btn-danger btn-newscs"><span class="navbar  navbar-brand-fon">TOP</br/>NEWS</span></button>
                                    <span class="bg-tv9-news-one">1</span>

                                </div>
                                <div class="col-sm-6 padd-tv9-rev-one">
                                    <span> Top News in India: Read Latest News</span>

                                </div>
                            </div>
                           <span style="color:red; font-size:12px; padding:2px;">চালকের </span>|
                           <span style="font-size:12px; padding:2px;"> 03 MIN AGO</span>
                        </div>
                        <div class="col-sm-4 padd-tv9-rev-img">
                            <img src=" images/break-img.jpg" alt="" class="img-icon-tv9" />
                        </div>

                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-8 mar-tv9-alig">
                            <div class="row">
                                <div class="col-sm-6 padd-tv9-rev">
                                    <button type="button" class="btn btn-danger btn-newscs"><span class="navbar top navbar-brand-fon">TOP</br/>NEWS</span></button>
                                    <span class="bg-tv9-news-one">2</span>

                                </div>
                                <div class="col-sm-6 padd-tv9-rev-one">
                                    <span> Top News in India: Read Latest News</span>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 padd-tv9-rev">
                                    <span style="font-size: 14px;color: #dc0000;">News Tv9</span> |
                                </div>
                                <div class="col-sm-6 padd-tv9-ago">
                                    <div class="">
                                        <span>03 min ago</span>
                                        <i class="fa fa-share-square-o" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 padd-tv9-rev-img">
                            <img src=" images/break-img.jpg" alt="" class="img-icon-tv9" />
                        </div>

                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-8 mar-tv9-alig">
                            <div class="row">
                                <div class="col-sm-6 padd-tv9-rev">
                                    <button type="button" class="btn btn-danger btn-newscs"><span class="navbar top navbar-brand-fon">TOP</br/>NEWS</span></button>
                                    <span class="bg-tv9-news-one">3</span>

                                </div>
                                <div class="col-sm-6 padd-tv9-rev-one">
                                    <span> Top News in India: Read Latest News</span>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 padd-tv9-rev">
                                    <span style="font-size: 14px;color: #dc0000;">News Tv9</span> |
                                </div>
                                <div class="col-sm-6 padd-tv9-ago">
                                    <div class="">
                                        <span>03 min ago</span>
                                        <i class="fa fa-share-square-o" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 padd-tv9-rev-img">
                            <img src=" images/break-img.jpg" alt="" class="img-icon-tv9" />
                        </div>

                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-8 mar-tv9-alig">
                            <div class="row">
                                <div class="col-sm-6 padd-tv9-rev">
                                    <button type="button" class="btn btn-danger btn-newscs"><span class="navbar top navbar-brand-fon">TOP</br/>NEWS</span></button>
                                    <span class="bg-tv9-news-one">4</span>

                                </div>
                                <div class="col-sm-6 padd-tv9-rev-one">
                                    <span> Top News in India: Read Latest News</span>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 padd-tv9-rev">
                                    <span style="font-size: 14px;color: #dc0000;">News Tv9</span> |
                                </div>
                                <div class="col-sm-6 padd-tv9-ago">
                                    <div class="">
                                        <span>03 min ago</span>
                                        <i class="fa fa-share-square-o" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 padd-tv9-rev-img">
                            <img src=" images/break-img.jpg" alt="" class="img-icon-tv9" />
                        </div>

                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-8 mar-tv9-alig">
                            <div class="row">
                                <div class="col-sm-6 padd-tv9-rev">
                                    <button type="button" class="btn btn-danger btn-newscs"><span class="navbar top navbar-brand-fon">TOP</br/>NEWS</span></button>
                                    <span class="bg-tv9-news-one">5</span>

                                </div>
                                <div class="col-sm-6 padd-tv9-rev-one">
                                    <span> Top News in India: Read Latest News</span>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 padd-tv9-rev">
                                    <span style="font-size: 14px;color: #dc0000;">News Tv9</span> |
                                </div>
                                <div class="col-sm-6 padd-tv9-ago">
                                    <div class="">
                                        <span>03 min ago</span>
                                        <i class="fa fa-share-square-o" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 padd-tv9-rev-img">
                            <img src=" images/break-img.jpg" alt="" class="img-icon-tv9" />
                        </div>

                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-8 mar-tv9-alig">
                            <div class="row">
                                <div class="col-sm-6 padd-tv9-rev">
                                    <button type="button" class="btn btn-danger btn-newscs"><span class="navbar top navbar-brand-fon">TOP</br/>NEWS</span></button>
                                    <span class="bg-tv9-news-one">6</span>

                                </div>
                                <div class="col-sm-6 padd-tv9-rev-one">
                                    <span> Top News in India: Read Latest News</span>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 padd-tv9-rev">
                                    <span style="font-size: 14px;color: #dc0000;">News Tv9</span> |
                                </div>
                                <div class="col-sm-6 padd-tv9-ago">
                                    <div class="">
                                        <span>03 min ago</span>
                                        <i class="fa fa-share-square-o" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 padd-tv9-rev-img">
                            <img src=" images/break-img.jpg" alt="" class="img-icon-tv9" />
                        </div>

                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-8 mar-tv9-alig">
                            <div class="row">
                                <div class="col-sm-6 padd-tv9-rev">
                                    <button type="button" class="btn btn-danger btn-newscs"><span class="navbar top navbar-brand-fon">TOP</br/>NEWS</span></button>
                                    <span class="bg-tv9-news-one">7</span>

                                </div>
                                <div class="col-sm-6 padd-tv9-rev-one">
                                    <span> Top News in India: Read Latest News</span>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 padd-tv9-rev">
                                    <span style="font-size: 14px;color: #dc0000;">News Tv9</span> |
                                </div>
                                <div class="col-sm-6 padd-tv9-ago">
                                    <div class="">
                                        <span>03 min ago</span>
                                        <i class="fa fa-share-square-o" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 padd-tv9-rev-img">
                            <img src=" images/break-img.jpg" alt="" class="img-icon-tv9" />
                        </div>

                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-8 mar-tv9-alig">
                            <div class="row">
                                <div class="col-sm-6 padd-tv9-rev">
                                    <button type="button" class="btn btn-danger btn-newscs"><span class="navbar top navbar-brand-fon">TOP</br/>NEWS</span></button>
                                    <span class="bg-tv9-news-one">8</span>

                                </div>
                                <div class="col-sm-6 padd-tv9-rev-one">
                                    <span> Top News in India: Read Latest News</span>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 padd-tv9-rev">
                                    <span style="font-size: 14px;color: #dc0000;">News Tv9</span> |
                                </div>
                                <div class="col-sm-6 padd-tv9-ago">
                                    <div class="">
                                        <span>03 min ago</span>
                                        <i class="fa fa-share-square-o" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 padd-tv9-rev-img">
                            <img src=" images/break-img.jpg" alt="" class="img-icon-tv9" />
                        </div>

                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-8 mar-tv9-alig">
                            <div class="row">
                                <div class="col-sm-6 padd-tv9-rev">
                                    <button type="button" class="btn btn-danger btn-newscs"><span class="navbar top navbar-brand-fon">TOP</br/>NEWS</span></button>
                                    <span class="bg-tv9-news-one">9</span>

                                </div>
                                <div class="col-sm-6 padd-tv9-rev-one">
                                    <span> Top News in India: Read Latest News</span>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 padd-tv9-rev">
                                    <span style="font-size: 14px;color: #dc0000;">News Tv9</span> |
                                </div>
                                <div class="col-sm-6 padd-tv9-ago">
                                    <div class="">
                                        <span>03 min ago</span>
                                        <i class="fa fa-share-square-o" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 padd-tv9-rev-img">
                            <img src=" images/break-img.jpg" alt="" class="img-icon-tv9" />
                        </div>

                    </div>

                    <!--Bottom in Also Read NEWS  body part-->
                    <div class="contect-blog">
                        <img src=" images/Add-one-img.png" width="257" height="292" alt="" />
                    </div>
                    <div class="contect-blog">
                        <nav class="navbar navbar-expand-md navbar-light bg-light  btn-t9-border">
                            <button type="button" class="btn btn-danger btn-newscs"><span class="navbar-brand top btn-newscs-txt">ALSO READ</span></button>

                            <span class="navbar-brand middle text-t9news">tv9 news <i class="fa fa-angle-right" aria-hidden="true"></i></span>
                        </nav>
                    </div>


                    <div class="col-sm-12 mar-tv9-alig">
                        <div class="row">
                            <div class="col-sm-7 padd-tv9-rev-one">
                                <span> Top News in India: Read Latest News</span>
                                <p class="p-m-bottom">
                                    <span style="color:red">News</span> |
                                    <span>03 min ago</span>
                                    <i class="fa fa-share-square-o" aria-hidden="true"></i>
                                </p>
                            </div>
                            <div class="col-sm-5">
                                <img src=" images/break-img.jpg" alt="" class="img-icon-tv9 img-icon-tv9-left" />
                            </div>
                        </div>

                    </div>
                    <hr />
                    <div class="col-sm-12 mar-tv9-alig">
                        <div class="row">
                            <div class="col-sm-7 padd-tv9-rev-one">
                                <span> Top News in India: Read Latest News</span>
                                <p class="p-m-bottom">
                                    <span style="color:red">News</span> |
                                    <span>03 min ago</span>
                                    <i class="fa fa-share-square-o" aria-hidden="true"></i>
                                </p>
                            </div>
                            <div class="col-sm-5">
                                <img src=" images/break-img.jpg" alt="" class="img-icon-tv9 img-icon-tv9-left" />
                            </div>
                        </div>

                    </div>
                    <hr />
                    <div class="col-sm-12 mar-tv9-alig">
                        <div class="row">
                            <div class="col-sm-7 padd-tv9-rev-one">
                                <span> Top News in India: Read Latest News</span>
                                <p class="p-m-bottom">
                                    <span style="color:red">News</span> |
                                    <span>03 min ago</span>
                                    <i class="fa fa-share-square-o" aria-hidden="true"></i>
                                </p>
                            </div>
                            <div class="col-sm-5">
                                <img src=" images/break-img.jpg" alt="" class="img-icon-tv9 img-icon-tv9-left" />
                            </div>
                        </div>

                    </div>
                    <hr />
                    <div class="col-sm-12 mar-tv9-alig">
                        <div class="row">
                            <div class="col-sm-7 padd-tv9-rev-one">
                                <span> Top News in India: Read Latest News</span>
                                <p class="p-m-bottom">
                                    <span style="color:red">News</span> |
                                    <span>03 min ago</span>
                                    <i class="fa fa-share-square-o" aria-hidden="true"></i>
                                </p>
                            </div>
                            <div class="col-sm-5">
                                <img src=" images/break-img.jpg" alt="" class="img-icon-tv9 img-icon-tv9-left" />
                            </div>
                        </div>

                    </div>
                    <hr />
                    <div class="col-sm-12 mar-tv9-alig">
                        <div class="row">
                            <div class="col-sm-7 padd-tv9-rev-one">
                                <span> Top News in India: Read Latest News</span>
                                <p class="p-m-bottom">
                                    <span style="color:red">News</span> |
                                    <span>03 min ago</span>
                                    <i class="fa fa-share-square-o" aria-hidden="true"></i>
                                </p>
                            </div>
                            <div class="col-sm-5">
                                <img src=" images/break-img.jpg" alt="" class="img-icon-tv9 img-icon-tv9-left" />
                            </div>
                        </div>

                    </div>
                    <hr />
                    <!--Bottom in Also Read NEWS  body part-->
                    <div class="contect-blog">
                        <img src=" images/Add-one-img.png" width="257" height="292" alt="" />
                    </div>
                </div>
                <!--End right side body part-->
            </div>
        </div>
    </section>
	</article>
  
<?php get_footer(); ?>