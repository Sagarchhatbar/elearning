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
  <title>Elearning - Contact Us</title>
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
  
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />

 
</head>

<body>
  <div id="wrapper">
   
    <div class="hidden-top">
      <div class="hidden-top-inner container">
        <div class="row">
          <div class="span12">
            <ul>
              <li><strong>We are available for any custom works this month</strong></li>
              <li>Main office:Charusat University</li>
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
             
            </div>
          </div>
        </div>
      </div>
    </header>
    <
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Get in touch</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li class="active">Contact</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14733.808145082363!2d72.8205!3d22.599589!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5074fe9e0c1c8bd!2sCharotar%20University%20of%20Science%20and%20Technology%20(CHARUSAT)!5e0!3m2!1sen!2sin!4v1585845923384!5m2!1sen!2sin"width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
      <div class="container">
        <div class="row">
          <div class="span12">
     
            <h4>Get in touch with us by filling <strong>contact form below</strong></h4>

            <form method="post" role="form" class="contactForm" id="myForm" action="#contact.php">
                 

  <div class="row">
                <div class="span4 form-group">
                  <input type="text" name="nm" class="form-control" id="nm" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                </div>
                <div class="span4 form-group">
                  <input type="email" class="form-control" name="em" id="em" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                     <div class="validation"></div>
                </div>
                <div class="span4 form-group">
                  <input type="text" class="form-control" name="sub" id="sub" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="span12 margintop10 form-group">
                  <textarea class="form-control" name="msg" rows="6" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
 <div class="validation"></div>
                  <input class="btn btn-large btn-theme margintop10"   type="submit" name="sb" />
            </form>

            <?php

$c=mysqli_connect("localhost","root","","elearning");
if(!$c)
{echo "<br><script>alert ('error'); </script><br>";}
if($c)
{
if(isset($_POST["sb"]))
{
  
$nm=$_POST['nm'];
$em=$_POST['em'];
$sub=$_POST['sub'];
$msg=$_POST['msg'];

 $ins= "insert into contactus(uname,email,subject,message) values('$nm','$em','$sub','$msg')";
  if(mysqli_query($c,$ins))
  {
    echo "<br><script>alert ('we got you ! we wil reach you as soon as possible In'); </script><br>";
   
  }
  else
  {
    echo mysqli_error($c);
  }
}
else
{
  echo mysqli_error($c);
}

}
mysqli_close($c);
?>
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
</body>

</html>
