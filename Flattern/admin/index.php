
<?php
session_start();
ob_start();
                
?>
                <?php

$c=mysqli_connect("localhost","root","");
if($c)
{
        $cnt=0;
        $cntreq=0;
mysqli_select_db($c,"elearning");
$qry="select * from user";
$log1=mysqli_query($c,$qry);


        while($row = mysqli_fetch_array($log1))
        {
            $cnt=$cnt+1;
        }
        $qry="select * from contactus";
    
        $log=mysqli_query($c,$qry);
        while($row = mysqli_fetch_array($log))
        {
            $cntreq=$cntreq+1;
        }
        
}
            
            
            ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
             <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/elogo1.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/elogo1.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/elogo1.png" />
  <link rel="apple-touch-icon-precomposed" href="images/elogo1.png" />
  <link rel="shortcut icon" href="images/elogo1.png" />
    </head>
    <body>
       <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <div class="top-head">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <i class="icon-reorder shaded"></i>
                </a>


                <a class="brand" href="index.html">
                    Admin - <?php echo $_SESSION['idadmin']; ?> 
                </a>

                <div class="nav-collapse collapse navbar-inverse-collapse">
                    <ul class="nav nav-icons">
                        <li><a href="http://localhost/elearning/Flattern/admin/adminlogin.php" >Logout</a></li>
                    </ul>

                    
                    <ul class="nav pull-right">
                        <li class="dropdown">
                            
                            
                        </li>
                        
                        
                        <li class="nav-user dropdown">
                            
                            
                                
                                
                            
                        </li>
                    </ul>
                </div><!-- /.nav-collapse -->

                </div>

                <div class="w-logo">
                                     <div class="logo">
              <a href="index.html"><img style="max-width: 250px;" src="images/elogo.png" alt="" class="logo" /></a>
              <h1>
             </h1>
            </div>
                </div>
                

            </div>
        </div><!-- /navbar-inner -->
    </div><!-- /navbar -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                   
                    </div>
                    <!--/.span3-->
    
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="task.php" class="btn-box big span4"><i class=" icon-random"></i><b><?php echo $cntreq; ?></b>
                                        <p class="text-muted">
                                            Contact Us List</p>
                                    </a><a href="users.php" class="btn-box big span4"><i class="icon-user"></i><b><?php echo $cnt; ?></b>
                                        <p class="text-muted">
                                            Users</p>
                                    </a>
                                    <a href="https://dashboard.tawk.to/#/dashboard" class="btn-box big span4"><i class=" icon-comment"></i>
                                        <p class="text-muted">
                                            Chat module</p>
                                        </a>
                                </div>
                                
                            </div>
                            <!--/#btn-controls-->
                            
                            <!--/.module-->
                           
                           
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; elearning</b> All rights reserved.
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
      
    </body>
</html>
 <?php echo $_SESSION['idadmin']; ?> 