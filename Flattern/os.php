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
  <title>Elearning</title>
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
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="js/min.js"></script>

<style type="text/css">
  
  .inner {
  padding-left: 1em;
  overflow: hidden;
  display: none;
}


.toggle {
    width: 100%;
    display: block;
    transition: background 0.3s ease;
    color: #333;
    font-size: 17px;
    font-weight: 600;
    display: inline-block;
}
ul.inner li {
    border: none;
}
.accordion li {
    padding: 8px;
    border: 1px solid #eee;
    margin: 0;
}
.accordion li:first-child {
    border-bottom: none;
}
ul.accordion {
    padding: 0;
    margin: 0;
    list-style-type: none;
}

</style>


</head>

<body>
  <div id="wrapper">
    
    <div class="hidden-top">
      <div class="hidden-top-inner container">
        <div class="row">
          <div class="span12">
            <ul>
              <li><strong>We are available for any custom works this month</strong></li>
              <li>Main office: Charusat University</li>
              <li>Call us <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <header>
      <div class="container">
        
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
        <div class="span4">
            <div class="logo">
              <a href="indexlogin.php"><img src="img/logo.png" alt="" class="logo" /></a>
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
        <div class="span8" style="display: contents;">
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

    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>operating system</h2>
            </div>
          </div>
          <div class="span8"  style="display: contents;">
            <ul class="breadcrumb">
              <li><a href="indexlogin.php"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="#">Computer Engineering</a><i class="icon-angle-right"></i></li>
              <li class="active">operating system</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span8">
    <section id="schedule">
<h2>Course Index</h2>
<p>The following is a tentative schedule for the semester. I kept the topics vague as I like to move at the speed of the class, not my own speed. Homework assignments will be announced in class.</p>


<form  action="videolist.php" method="post" id="myForm">
<ul class="accordion" id="sizelist">
  <li>
    <a class="toggle"> 1. Introduction to Operating Systems</a>
    <ul  class="inner">
      <li data-value="History of Operating Systems"  ><a href="" name="ht_java" value="History of java">History of Operating Systems</a></li>
      <li data-value=" Operating System Structure"><a  href="videolist.php"> Operating System Structure</a></li>
   

   <li data-value="Abstract Computer Component Overview"><a href="videolist.php">Abstract Computer Component Overview</a></li>
    <li data-value="Different Operating Systems Overview"><a href="videolist.php">Different Operating Systems Overview</a></li>
    <li data-value="32-Bit vs. 64-Bit OS"><a href="videolist.php">32-Bit vs. 64-Bit OS</a></li>
    </ul> 
  </li>
   <li>
    <a class="toggle">2.Processes and Threads</a>
    <ul class="inner">
      <li data-value="Threads"><a class="toggle" href="videolist.php">Threads</a></li> 
      <li data-value="Context Switch"><a class="toggle" href="videolist.php">Context Switch</a></li>
    <li data-value="Processes"><a class="toggle" href="videolist.php">Processes</a></li>
    </ul>
  </li>
  
<input style="display: none;" id="sizevalue" size="50" name="size" type="text" />
<input type="submit" value="submit" class="btn btn-theme btn-large e_wobble"/>
</ul>  
</form>
   </table>
    </section>
    
          </div>
         <div class="span4">
            <aside class="right-sidebar">
              <div class="widget">
                <h5 class="widgetheading">Project information</h5>
                <ul class="folio-detail">
                  <li><label>Subject :</label>Operating System</li>
                
                </ul>
              </div>
            
            </aside>
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
              <h5 class="widgetheading">Flickr photostream</h5>
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
								<strong>Flattern studio, Pte Ltd</strong><br>
								 Springville center X264, Park Ave S.01<br>
								 Semarang 16425 Indonesia
					 		</address>
              <p>
                <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                <i class="icon-envelope-alt"></i> email@domainname.com
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
                  <span>&copy; Flattern - All right reserved.</span>
                </p>
                <div class="credits">
                
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

  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js">
    

  </script>


<script type="text/javascript">
    

$('.toggle').click(function(e) {
    e.preventDefault();
  
    var $this = $(this);
  
    if ($this.next().hasClass('show')) {
        $this.next().removeClass('show');
        $this.next().slideUp(350);
    } else {
        $this.parent().parent().find('li .inner').removeClass('show');
        $this.parent().parent().find('li .inner').slideUp(350);
        $this.next().toggleClass('show');
        $this.next().slideToggle(350);
    }
});


</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script>
<script>
  
$("#sizelist").on("click", "a", function(e) {
  e.preventDefault();
  var $this = $(this).parent();
  $this.addClass("select").siblings().removeClass("select");
  $("#sizevalue").val($this.data("value"));
})
 


function submitform()
{


} 


</script>

</body>

</html>
