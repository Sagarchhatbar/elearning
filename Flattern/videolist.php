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
<?php
$developer_key = 'AIzaSyAhcMQowE7V5yCOsK-z-mGluRRi3-X2Zks';
 
$arr_list = array();
if (array_key_exists('q', $_GET) && array_key_exists('max_result', $_GET) && array_key_exists('order', $_GET)) {
    $keyword = $_GET['q'];
    $format_keyword = implode("+", explode(" ", $keyword));
    $url = "https://www.googleapis.com/youtube/v3/search?q=$format_keyword&order=". $_GET['order'] ."&part=snippet&type=video&maxResults=". $_GET['max_result'] ."&key=". $developer_key;
 
    if (array_key_exists('pageToken', $_GET)) $url .= "&pageToken=". $_GET['pageToken'];
 
    $arr_list = getYTList($url);
}
function getYTList($api_url = '') {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    $arr_result = json_decode($response);
    if (isset($arr_result->items)) {
        return $arr_result;
    } elseif (isset($arr_result->error)) {
        echo "Something went wrong.";
    }
}
?>
   
<script>
function submitform()
{
document.getElementById("myForm").submit();

}
</script>                 


 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>videos - Better UNderstanding</title>
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

  <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
  
  <link href="skins/default.css" rel="stylesheet" />
 
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/elogo1.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/elogo1.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/elogo1.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/elogo1.png" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; 
}

.select-selected {
  background-color: red;
}


.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}


.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}


.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}


.select-items {
  position: absolute;
  background-color: red;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
</style>
<style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>

</head>

<body>
  <div id="wrapper" class="boxed">
 
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
        </div>
        <div class="row">
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
                    <li class="dropdown">
                      <a href="index.html">Home</a>
                      
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
              <h2>Videos</h2>
            </div>
          </div>
          <div class="span8" style="display: contents;">
            <ul class="breadcrumb">
              <li><a href="indexlogin.php"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="#">Computer Engineering</a><i class="icon-angle-right"></i></li>
              <li class="active">videos</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container" style="display: contents;">
        <div class="row">
          <div class="span4">
            <aside class="left-sidebar">
              <div class="widget">
               
              </div>
              <div class="widget">
                <h5 class="widgetheading">Categories</h5>
                <ul class="cat">
                  <li><i class="icon-angle-right"></i><a href="java.php">java programming</a><span> (20)</span></li>
                  <li><i class="icon-angle-right"></i><a href="os.php">Operating system</a><span> (11)</span></li>
                  <li><i class="icon-angle-right"></i><a href="dbms.php">Data Base Management</a><span> (9)</span></li>
                  <li><i class="icon-angle-right"></i><a href="cpp.php">C++ programming</a><span> (12)</span></li>
                  
                </ul>
              </div>
            
             
            </aside>
          </div>
          <div class="span8">
            <article>
              <div class="row">
                <div class="span8">
                   <div class="post-image">
                    <div class="post-heading" >
                    	<form method="get">
                    		<h3>SELECT FILTER VIDEO TYPE</h3>
<p><input type="text" style="display: none;" name="q" placeholder="Enter keyword" value="<?php echo $_POST['size']; ?>" required></p>
    <p><input type="number" style="display: none;" name="max_result" placeholder="Max Results" min="1" max="50" value="2" required></p>
    <p>
  
        <div class="custom-select">
        <?php $arr_orders = ['date', 'rating', 'relevance', 'title', 'viewCount']; ?>
        <select name="order" required >
            <option value="" >--SELECT ORDER--</option>
            <?php foreach ($arr_orders as $order) { ?>
                <option value="<?php echo $order; ?>" <?php if(array_key_exists('order', $_GET) && ($order==$_GET['order'])) echo 'selected'; ?>><?php echo ucfirst($order); ?></option>
            <?php } ?>
        </select>
    </div>
    <br>
    <div><input class="w3-button w3-red" type="submit" value="Submit"></div>
</form>  
                     

                  
<?php  
if (!empty($arr_list)) {
    echo '<ul>';
    foreach ($arr_list->items as $yt) {
         if(isset($yt->id->videoId)){

          echo '<div class="youtube-video">
                  <h3>'. $yt->snippet->title.'</h3> </div> </div> 
               <iframe width="840" height="335" src="https://www.youtube.com/embed/'.$yt->id->videoId.'" frameborder="" allowfullscreen></iframe>

               
           </div>';
   }

    }
    echo '</ul>';
 
    $url = "?q=". $_GET['q'] ."&max_result=". $_GET['max_result'] ."&order=". $_GET['order']; 
}
?>
<script>
var x, i, j, selElmnt, a, b, c;

x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
 
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
 
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {

    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
   
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {

  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

document.addEventListener("click", closeAllSelect);
</script>


                 
                </div>
              </div>
            </article>
            <article>
              <div class="row">
                <div class="span8">
                 <div class="post-slider">
                  
                   
                    <div class="flexslider" style="left: 750px; display: block ruby;">
                    	<?php  
                    $url = "?q=". $_GET['q'] ."&max_result=". $_GET['max_result'] ."&order=". $_GET['order'];
     if (isset($arr_list->prevPageToken)) {
         echo '<div> <a class="w3-button w3-red" href="'.$url.'&pageToken='.$arr_list->prevPageToken.'">Previous</a> </div>';
     }
 
     if (isset($arr_list->nextPageToken)) {
         echo '<div><a  class="w3-button w3-red" href="'.$url.'&pageToken='.$arr_list->nextPageToken.'">Next</a></div>';
     }?>

                    </div>
                  </div>     
                </div>
              </div>
            </article>
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
                <strong>E-learning System</strong><br>
                 Rajkot<br>
                 India
              </address>
              <p>
                <i class="icon-phone"></i>+91 8460936501 - +91 94091967780 <br>
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
                  <span>&copy; - All right reserved.</span>
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
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
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
  <script src="js/custom.js"></script>

</body>

</html>

         
