<?php 
session_start();


include "../setting/config.php";



if(isset($_POST['admin_signin']))
{

$admin_username = mysqli_real_escape_string($ravi->hackme(),$_POST['admin_username']);
$admin_password = mysqli_real_escape_string($ravi->hackme(),$_POST['admin_password']);
// echo $admin_username.' '.$admin_password ;
if($admin_username=="" AND $admin_password=="")
{
echo "<script>alert('Enter Your Username & Password');</script>";
}
else
{
$melogin = $ravi->meadmin_check($admin_username,$admin_password);
if($melogin==1)
{
$_SESSION['meadmin'] = 	$admin_username;
header("location:home.php");
}


else
{
echo "<script>alert('Email Or Password does not matched');</script>";
}

}


}

if(isset($_SESSION['meadmin']))
{
header("location:home.php");
}

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<!--clock init-->
</head> 
<body>
		<!--/login-->
		
				<div class="error_page">
						<!--/login-top-->
						
							<div class="error-top">
							
								<h2 class="inner-tittle page">Öğretmen </h2>
							
								<div class="login">
									<h3 class="inner-tittle t-inner">Giriş yap</h3>
								
										<div class="buttons login">
													<ul>
														<li><a href="#" class="hvr-sweep-to-right">Facebook</a></li>
														<li class="lost"><a href="#" class="hvr-sweep-to-left">Twitter</a> </li>
														<div class="clearfix"></div>
													</ul>
												</div>
										<form method="post">
<input type="text" class="text" name="teacher_username" placeholder="Username" value="<?php if(isset($_POST['teacher_signin'])){ echo $_POST['teacher_username']; } ?>">
<input type="password" placeholder="Password" name="teacher_password" value="<?php if(isset($_POST['teacher_signin'])){ echo $_POST['teacher_password']; } ?>">
<div class="submit"><input type="submit" value="Login" name="teacher_signin"></div>
			<div class="clearfix"></div>
												
										
											</form>
								</div>

								
							</div>
							
							
						<!--//login-top-->
					</div>

					<!--//login-->
					<!--footer section start-->
				<div class="footer">
						<div class="error-btn">
									<a class="read fourth" href="../index.php">Ana sayfaya Geri dön</a>
									</div>
						<p>SOFTWAER Fırat Üniversitesi <a href="http://yaz.mf.firat.edu.tr/tr" target="_blank"> Yazılım Mühendisliği</a>  </p>
				</div>

			<!--footer section end-->
			<!--/404-->
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>