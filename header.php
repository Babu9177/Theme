<!DOCTYPE html>
<html <?php language_attributes('te'); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		<?php wp_head(); ?>
</head>
<body>
<div class="Header" id="Header">
    <div class="MainCont">
      <div id="mySidenav" class="sidenav"> 
          <div class="overlay" onclick="openNav()"></div>
          <div class="navigation">
              <div class="nav-head">
                <div class="navigation-header">
                  <div class="subMenu-logo">
                    <img src="images/logo.png">
                  </div>
                  <div class="download-link">
                    <span>Download App </span>
                    <a href="#"><img src="images/AndroidIcon.png"></a> 
                    <a href="#"><img src="images/AppleIcon.png"></a>
                     <a href="javascript:void(0)" class="openNav" onclick="openNav()"><img src="images/CloseIcon.png"></a>
                  </div>
                  
              </div>
              <!--<div class="nav-language">
                <img src="images/LanguageIcon.png"> <span>Language</span>
                <ul class="language-btn">
                  <li>
                      <a href="#">ABC</a>
                  </li>
                  <li class="active">
                      <a href="#">English</a>
                  </li>
                </ul>
              </div>-->
            </div>
            <div class="navigation-tab">
                <div class="tab-box">
                    <div class="tab-headding active"  >
                        <img src="images/SectionNewsIcon.png">  <span>News Sections</span>
                    </div>
                    <div class="tab-content active">
                    <ul class="menu">
                      <li><a href="#">राज्य</a> <span></span>
                          <ul class="submenu">
                            <li><a href="#">उत्तर प्रदेश</a> </li>
                            <li><a href="#">उत्तराखंड</a> </li>
                            <li><a href="#">गुजरात</a> </li>
                            <li><a href="#">झारखंड</a> </li>
                            <li><a href="#">बिहार</a> </li>
                            <li><a href="#">मध्य प्रदेश</a> </li>
                            <li><a href="#">महाराष्ट्र</a> </li>
                            <li><a href="#">राजस्थान</a> </li>

                          </ul>
                      </li>
                      <li><a href="#">मनोरंजन</a> <span></span>
                          <ul class="submenu">
                            <li><a href="#">बॉलीवुड</a> </li>
                            <li><a href="#">मूवी रिव्यूज़</a> </li>
                            <li><a href="#">ओटीटी</a> </li>
                           </ul>
                      </li>
                      <li><a href="#">लाइफस्‍टाइल</a> </li>
                      <li><a href="#">ब्यूटी</a> </li>
                    </ul>
 
                    </div>
                </div>
                <div class="tab-box">
                    <div class="tab-headding" >
                        <img src="images/MoreNewsIcon.png">  <span><a href="#">More Links</a></span>
                    </div>
                     
                </div>
                <div class="tab-box">
                    <div class="tab-headding" >
                        <img src="images/TvShowsIcon.png">  <span><a href="#">TV Shows</a></span>
                    </div>
                     
                </div>              
                <div class="tab-box">
                    <div class="tab-headding" >
                        <img src="images/TrendingIcon.png">  <span><a href="#">Trending</a></span>
                    </div>
                     
                </div>

            </div>
          </div>
        
        
      </div>
      <ul class="TopLMenu">
        <li><span class="MenuBtn" onclick="openNav()"><i></i><i></i><i></i></span></li>
        <li class="VideoM"><a href="#"><i class="icon"></i> वीडियो</a></li>
        <li class="StateM"><a href="#"><i class="icon"></i> राज्य चुने</a>ं</li>
        <li class="downloadBtn"><a href="#"><i class="icon"></i> Download App</a></li>
        <li class="downloadBtn moble"><a href="#"><i class="icon"></i> App</a></li>
      </ul>
      <div class="LogoPart"><a href="#"><img src="images/logo.png" alt="" /></a></div>
      <div class="TopRMenu">
        <ul>
          <li><a href="#"><img src="images/livetv.png" alt="" /></a></li>
          <li class="TOPShare"><a href="#" ><i class="icon HShareBTN"></i></a>
            <ul class="socialTop">
              <li><a href="#" class="icon fBtn" title="facebook" target="_blank"><i>Facebook</i></a> </li>
              <li><a href="#" class="icon twitBtn" title="Twitter" target="_blank"><i>Twitter</i></a> </li>
              <li><a href="#" class="icon tubeBtn" title="youtube" target="_blank"><i>Youtube</i></a> </li>
              <li><a href="#" class="icon instaBtn" title="instagram" target="_blank"><i>instagram</i></a> </li>
            </ul>
          </li>
          <li class="langMenu">
          <span>Select Language</span>
            <ul class="langDrop">
            <li><a href="https://tv9kannada.com/" target="_blank">ಕನ್ನಡ - Kannada</a></li>
            <li><a href="https://tv9telugu.com/" target="_blank">తెలుగు - Telugu</a></li>
            <li><a href="http://tv9marathi.com/" target="_blank">मराठी - Marathi</a></li>
            <li><a href="http://tv9gujarati.com/" target="_blank">गुजराती - Gujarati</a></li>
            </ul>           
          </li>
          
          <li>
            <div class="search-icon"><i class="icon search_btn"></i></div>
            <form action="#" method="post" id="headerSearch" class="search">
              <div class="search-box"> <div class="search-icon"><img src="images/CloseIcon.png"></div>
                <input autocomplete="off" placeholder="Search" type="text" id="searchText2" name="searchText2">
              <button id="clickSearchValue" type="submit" disabled="" class="icon search_btn"><i class="icon search_btn"></i></button>
              </div>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </div> <!--Header CLose-->
		
		<?php if ( is_active_sidebar( 'header-widget' ) ) { ?>
			<?php dynamic_sidebar( 'header-widget' ); ?>
		<?php } ?>

		