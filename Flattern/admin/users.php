
<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>elearing admin</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
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
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.html">
			  		Admin
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
					<ul class="nav nav-icons">
						<li style="margin-left:900px"><a href="http://localhost/elearning/Flattern/admin/adminlogin.php" >Logout</a></li>
					</ul>

					
					<ul class="nav pull-right">
						<li class="dropdown">
							
							
						</li>
						
						
						<li class="nav-user dropdown">
							
							
								
								
							
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">  
			<!--
				<div class="span3">
					<div class="sidebar">

						<ul class="widget widget-menu unstyled">
							<li class="active">
								<a href="index.html">
									<i class="menu-icon icon-dashboard"></i>
									Dashboard
								</a>
							</li>
							<li>
								<a href="activity.html">
									<i class="menu-icon icon-bullhorn"></i>
									News Feed
								</a>
							</li>
							<li>
								<a href="message.html">
									<i class="menu-icon icon-inbox"></i>
									Inbox
									<b class="label green pull-right">11</b>
								</a>
							</li>
							
							<li>
								<a href="task.html">
									<i class="menu-icon icon-tasks"></i>
									Tasks
									<b class="label orange pull-right">19</b>
								</a>
							</li>
						</ul><!--/.widget-nav								

						<ul class="widget widget-menu unstyled">
                                <li><a href="ui-button-icon.html"><i class="menu-icon icon-bold"></i> Buttons </a></li>
                                <li><a href="ui-typography.html"><i class="menu-icon icon-book"></i>Typography </a></li>
                                <li><a href="form.html"><i class="menu-icon icon-paste"></i>Forms </a></li>
                                <li><a href="table.html"><i class="menu-icon icon-table"></i>Tables </a></li>
                                <li><a href="charts.html"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>
                            </ul><!--/.widget-nav-->
<!--
						<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									More Pages
								</a>
								<ul id="togglePages" class="collapse unstyled">
									<li>
										<a href="other-login.html">
											<i class="icon-inbox"></i>
											Login
										</a>
									</li>
									<li>
										<a href="other-user-profile.html">
											<i class="icon-inbox"></i>
											Profile
										</a>
									</li>
									<li>
										<a href="other-user-listing.html">
											<i class="icon-inbox"></i>
											All Users
										</a>
									</li>
								</ul>
							</li>
							
							<li>
								<a href="#">
									<i class="menu-icon icon-signout"></i>
									Logout
								</a>
							</li>
						</ul>	
					</div> /.sidebar-->
				</div><!--/.span3-->


				<div class="span9">
					<div class="content">

						<div class="module message">
							
							<div class="module-option clearfix">
								<div class="pull-left">
									
									<div class="btn-group">
										<button class="btn">All users</button>
										
										
									</div>
								</div>
								
							</div>
							<div class="module-body table">								

								
											
																						
											

<?php

$c=mysqli_connect("localhost","root","");
if($c)
{
mysqli_select_db($c,"elearning");


$qry="select * from user";
$log1=mysqli_query($c,$qry);

		while($row = mysqli_fetch_array($log1))
        {
		
			
		$email=$row['email'];
	//	$tempEdate=$row['Edate'];
		$fname=$row['fnm'];
		$mname=$row['mnm'];
		$lname=$row['lnm'];
		$utype=$row['user_type'];
		$inst=$row['institue'];
		echo "<html><table class='table table-message'>
									<tbody>
										<tr class='heading'>
											<td class='cell-icon'></td>
											<td class='cell-title'>Event</td>
											
											
										</tr>
										<tr class='task'>
											<td class='cell-icon'><i class='icon-checker high'></i></td>
											<td class='cell-title'> </html>";
											
												echo "<html><div></html>";
												echo " User First Name : ";
												echo $fname=$row['fnm'];
												echo "<html></div></html>";
											
												echo "<html><div></html>";
												echo " User middle Name : ";
												echo $mname=$row['mnm'];
												echo "<html></div></html>";

												echo "<html><div></html>";
												echo " User last Name : ";
												echo $lname=$row['lnm'];
												echo "<html></div></html>";

											echo "<html><div></html>";
											echo "User email ";
											echo $email=$row['email'];									
											echo "<html></div></html>";
											
												echo "<html><div></html>";
												echo " User Type : ";
												echo $utype=$row['user_type'];
												echo "<html></div></html>";

												echo "<html><div></html>";
												echo " Instite : ";
												echo $intst=$row['institue'];
												echo "<html></div></html>";
											/*echo "<html><div></html>";
											echo " Client Email ";
											
												echo $tempemail=$row['email'];
																			
											echo "<html></div></html>";
											
											echo "<html><div></html>";
											echo " Event date";
											
											echo $tempEdate=$row['Edate'];
																					
											echo "<html></div></html>";
											
											
											
										echo "<html><div></html>";
											echo " Event City";
											
											echo $tempEcity=$row['Ecity'];
																					
											echo "<html></div></html>";
											
											
											
											
											
											echo "<html><div></html>";
											echo " Package Type";
											
											echo $temppname=$row['PackageName'];
											
																				
												echo "<html></div></html>";
											
												echo "<html><div></html>";
											echo " Package Price";
											
											echo $tempprice=$row['Price'];
										echo "<html></div></html>";
											
											echo "<html></td></html>";
											
										
 	
											
											
											echo " <html> <td class='cell-status hidden-phone hidden-tablet'></html>";
											echo " <html><b class='due'></html>";
											echo "<html><button class='due' name='2nd' type='submit'>
				
								<span>	Accept </span>
							</button></b><b class='due'>
											<button class='due' name='2nd' type='submit'>
				
								<span>	Deny </span>
							</button></b></td>
							
											<td class='cell-time align-right'>";
											echo $tempctimedate; */
											echo "</td>
										</tr></html>";
											
											
		}									
} 
else
{
mysqli_close($c);
}
?>	                    
									</tbody>
								</table>
						

							</div>
							<div class="module-foot">
							</div>
						</div>
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; elearning</b> All rights reserved.
		</div>
	</div>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
	<script type="text/javascript">
	/*	$(document).ready(function() {
			$('.table-message tbody tr').click(
				function() 
				{
					$(this).toggleClass('resolved');
				}
			);
		} ); */
	</script>
</body>