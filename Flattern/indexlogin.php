<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e8728a135bcbb0c9aad650a/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
  <?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>
    Elearning - Better Understanding
       
</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="css/jcarousel.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="skins/default.css" rel="stylesheet" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/elogo1.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/elogo1.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/elogo1.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/elogo1.png" />
</head>

<body>
  <div id="wrapper">
    
    <div class="hidden-top">
      <div class="hidden-top-inner container">
        <div class="row">
          <div class="span12">
         <ul>
              <li><strong>We are available for any custom works</strong></li>
              <li>Main office : Charusat University</li>
              <li>Call us <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <header>
      <div class="container ">
        
        <div id="header-hidden-link">
          <a href="#" class="toggle-link" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Open</a>
        </div>
        
        <div class="row nomargin">
          <div class="span12">
            <div class="headnav">

              <ul>
                <li><a href="#" data-toggle="modal"><i class=""></i>
              <?php        
                 if(isset($_SESSION['email']))
                        {
                          echo "welcome ".$_SESSION['uname'];
                        }
                          else
                        { 
                                header("location:index.php");
                             
                        } 
              ?>
               </a></li>
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo">
              <a href="indexlogin.php"><img style="max-width: 250px;" src="img/elogo.png" alt="" class="logo" /></a>
              <h1>               
  <?php        
        if(isset($_SESSION['email']))
        {
          echo "welcome ".$_SESSION['uname'];
        }
          else
        { 
               header("location:index.php");
        } 
        
        ?>
            </h1>
            </div>
          </div>
           <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="dropdown active">
                      <a href="indexlogin.php">Home</a>
                    </li>
               
                    <li class="dropdown">
                      <a href="#">Department<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Computer Engineering</a>
                            <ul class="dropdown-menu sub-menu-level1">
                            <li><a href="java.php">JAVA Programing</a></li>
                            <li><a href="os.php">Operating System</a></li>
                            <li><a href="dbms.php">Data Base Management</a></li>
                             <li><a href="cpp.php">C++</a></li>
                          </ul>  
                        </li>

                        <li><a href="#">Civil Engineering</a></li>
                        <li><a href="#">Mechanical Engineering</a></li>
                        <li><a href="#">Electrical Engineering</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="contact.php">Contact </a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->
    <section id="featured">
      <!-- start slider -->
      <!-- Slider -->
      <div id="nivo-slider">
        <div class="nivo-slider">
          <!-- Slide #1 image -->
          <img src="img/slides/nivo/elearningwall.jpg" alt="" title="#caption-1" />
          <!-- Slide #2 image -->
          <img src="img/slides/nivo/elearningwall1.png" alt="" title="#caption-2" />
          <!-- Slide #3 image -->
          <img src="img/slides/nivo/elearningwall2.jpg" alt="" title="#caption-3" />
        </div>
    <div class="container">
          <div class="row">
            <div class="span12">
              <!-- Slide #1 caption -->
              <div class="nivo-caption" id="caption-1">
                <div>
                  <h2>Better<strong>Understanding</strong></h2>
                  <p>
                    By fetching better tutuorials from youtube
                  </p>
                  <a href="#" class="btn btn-theme">Read More</a>
                </div>
              </div>
              <!-- Slide #2 caption -->
              <div class="nivo-caption" id="caption-2">
                <div>
                  <h2>Less<strong>Searching Time</strong></h2>
                  <p>
                   By Machine Learning feature,learners can have better videos in less time rather searching in youtube by themselves
                  </p>
                  <a href="#" class="btn btn-theme">Read More</a>
                </div>
              </div>
              <!-- Slide #3 caption -->
              <div class="nivo-caption" id="caption-3">
                <div>
                  <h2>Filterize<strong>video</strong></h2>
                  <p>
                    Using Machine Learning learners can get filterize video based on like count,view count,date,title and comments
                  </p>
                  <a href="#" class="btn btn-theme">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end slider -->
    </section>
    <section class="callaction">
      <div class="container">
       <div class="row">
            <div class="span12">
              <!-- Slide #1 caption -->
              <div class="nivo-caption" id="caption-1">
                <div>
                  <h2>Better<strong>Understanding</strong></h2>
                  <p>
                    By fetching better tutuorials from youtube
                  </p>
                  <a href="#" class="btn btn-theme">Read More</a>
                </div>
              </div>
              <!-- Slide #2 caption -->
              <div class="nivo-caption" id="caption-2">
                <div>
                  <h2>Less<strong>Searching Time</strong></h2>
                  <p>
                   By Machine Learning feature,learners can have better videos in less time rather searching in youtube by themselves
                  </p>
                  <a href="#" class="btn btn-theme">Read More</a>
                </div>
              </div>
              <!-- Slide #3 caption -->
              <div class="nivo-caption" id="caption-3">
                <div>
                  <h2>Filterize<strong>video</strong></h2>
                  <p>
                    Using Machine Learning learners can get filterize video based on like count,view count,date,title and comments
                  </p>
                  <a href="#" class="btn btn-theme">Read More</a>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
    <section class="callaction">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="big-cta">
              <div class="cta-text">
                <h3>More than <span class="highlight"><strong>5000 new Learners</strong></span> this year!</h3>
              </div>
              <div class="cta floatright">
                <a class="btn btn-large btn-theme btn-rounded" href="#">Request a quote</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                       <i class="icon-desktop icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Computer engineering</h6>
                            <a href="java.php">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                     <i class="icon-building icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Civil engineering</h6>
                   
                    <a href="#">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-cogs icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Mechanical engineering</h6>
                   
                    <a href="#">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                     <i class="icon-bolt icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Electrical engineering</h6>
                    <a href="#">Learn more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
    
         <div class="row">
          <div class="span12" style="display: inline-flex;">
            <h4 class="heading">KEEP DOING KEEP <strong>LEARNING</strong></h4>
            <div class="row">
              <section id="projects">
                <ul id="thumbs" class="portfolio">
             
                  <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                    
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The City" href="img/works/full/1.jpg">
            <span class="overlay-img"></span>
            <span class="overlay-img-thumb font-icon-plus"></span>
            </a>
                    
                    <img src="img/works/thumbs/1.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                 
                  <li class="item-thumbs span3 design" data-id="id-1" data-type="icon">
                    
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Office" href="img/works/full/2.jpg">
            <span class="overlay-img"></span>
            <span class="overlay-img-thumb font-icon-plus"></span>
            </a>
                    
                    <img src="img/works/thumbs/2.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                  
                  <li class="item-thumbs span3 photography" data-id="id-2" data-type="illustrator">
             
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Mountains" href="img/works/full/3.jpg">
            <span class="overlay-img"></span>
            <span class="overlay-img-thumb font-icon-plus"></span>
            </a>
                   
                    <img src="img/works/thumbs/3.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                  
                  <li class="item-thumbs span3 photography" data-id="id-2" data-type="illustrator">
                   
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Mountains" href="img/works/full/4.jpg">
            <span class="overlay-img"></span>
            <span class="overlay-img-thumb font-icon-plus"></span>
            </a>
                    
                    <img src="img/works/thumbs/4.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                  
                  <li class="item-thumbs span3 photography" data-id="id-4" data-type="web">
                    
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Sea" href="img/works/full/5.jpg">
            <span class="overlay-img"></span>
            <span class="overlay-img-thumb font-icon-plus"></span>
            </a>
                    
                    <img src="img/works/thumbs/5.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                  
                  <li class="item-thumbs span3 photography" data-id="id-5" data-type="icon">
                    
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Clouds" href="img/works/full/6.jpg">
            <span class="overlay-img"></span>
            <span class="overlay-img-thumb font-icon-plus"></span>
            </a>
                    
                    <img src="img/works/thumbs/6.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                  
                  <li class="item-thumbs span3 photography" data-id="id-2" data-type="illustrator">
                
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Mountains" href="img/works/full/7.jpg">
            <span class="overlay-img"></span>
            <span class="overlay-img-thumb font-icon-plus"></span>
            </a>
                   
                    <img src="img/works/thumbs/7.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                  
                  <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                   
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Dark" href="img/works/full/8.jpg">
            <span class="overlay-img"></span>
            <span class="overlay-img-thumb font-icon-plus"></span>
            </a>
                    
                    <img src="img/works/thumbs/8.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                  
                </ul>
              </section>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
     
        <div class="row">
          <div class="span12">
            <h4>Very satisfied <strong>clients</strong></h4>
            <ul id="mycarousel" class="jcarousel-skin-tango recent-jcarousel clients">
              <li>
                <a href="#">
          <img src="img/dummies/clients/client1.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="img/dummies/clients/client2.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="img/dummies/clients/client3.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="img/dummies/clients/client4.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="img/dummies/clients/client5.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="img/dummies/clients/client6.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="img/dummies/clients/client1.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="img/dummies/clients/client2.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="img/dummies/clients/client3.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="img/dummies/clients/client4.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="img/dummies/clients/client5.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="img/dummies/clients/client6.png" class="client-logo" alt="" />
          </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="bottom">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="aligncenter">
              <div id="twitter-wrapper">
                <div id="twitter">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="row">
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Browse pages</h5>
              <ul class="link-list">
                <li><a href="#">About our company</a></li>
                <li><a href="#">Our services</a></li>
                <li><a href="#">Meet our team</a></li>
                <li><a href="#">Explore our portfolio</a></li>
                <li><a href="#">Get in touch with us</a></li>
              </ul>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Important stuff</h5>
              <ul class="link-list">
                <li><a href="#">Press release</a></li>
                <li><a href="#">Terms and conditions</a></li>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Career center</a></li>
                <li><a href="#">Flattern forum</a></li>
              </ul>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
                       <div class="flickr_badge">
                <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
              </div>
              <div class="clear">
              </div>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Get in touch with us</h5>
              <address>
                <strong>E-learning System</strong><br>
                 Rajkot<br>
                 India
              </address>
              <p>
                <i class="icon-phone"></i>+91 8460936501 - +91 9409196780 <br>
                <i class="icon-envelope-alt"></i> D19CE@charusat.edu.in
              </p>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p>
                  <span>&copy; All right reserved.</span>
                </p>
                <div class="credits">
                 
                 Designed by <a href="indexlogin.php">D19CE154, D19CE157, D19CE158, D19CE161</a>
                </div>
              </div>
            </div>
            <div class="span6">
              <ul class="social-network">
                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
 
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/jcarousel/jquery.jcarousel.min.js"></script>
  <script src="js/jquery.fancybox.pack.js"></script>
  <script src="js/jquery.fancybox-media.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>
  <script src="js/jquery.flexslider.js"></script>
  <script src="js/jquery.nivo.slider.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/jquery.ba-cond.min.js"></script>
  <script src="js/jquery.slitslider.js"></script>
  <script src="js/animate.js"></script>

 
  <script src="js/custom.js"></script>

</body>
</html>




