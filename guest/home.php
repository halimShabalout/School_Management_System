<?php 
include "../setting/config.php";
 session_start();
if(!$_SESSION['st_user'])
{
	
	header("location:index.php");
}
else
{
	$st_username = $_SESSION['st_user'];
	$st_name = $ravi->student_info_select($st_username);
	
	$student_name_display = $st_name->fetch_assoc();
}


?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Misafir</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style_1.css" rel='stylesheet' type='text/css' />
	<!-- Graph CSS -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- jQuery -->
	<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
	<!-- lined-icons -->
	<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
	<!-- //lined-icons -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/amcharts.js"></script>
	<script src="js/serial.js"></script>
	<script src="js/light.js"></script>
	<script src="js/radar.js"></script>
	<link href="css/barChart.css" rel='stylesheet' type='text/css' />
	<link href="css/fabochart.css" rel='stylesheet' type='text/css' />
	<!--clock init-->
	<script src="js/css3clock.js"></script>
	<!--Easy Pie Chart-->
	<!--skycons-icons-->
	<script src="js/skycons.js"></script>

	<script src="js/jquery.easydropdown.js"></script>

	<!--//skycons-icons-->
</head>
<body>
	<div class="page-container">
		<!--/content-inner-->
		<div class="left-content">
			<div class="inner-content">
				<!-- header-starts -->
				<div class="header-section">

					<div class="clearfix"></div>
				</div>
				<!-- //header-ends -->
				<div class="outter-wp">
					<!--/tabs-->
					<div class="tab-main">
						<!--/tabs-inner-->
						<div class="tab-inner">
							<div id="tabs" class="tabs">
								<h2 class="inner-tittle">Merhaba,
									<?php echo ucfirst($student_name_display['st_fullname']); ?> </h2>
								<div class="graph">
									<nav>
										<ul>
											<li><a href="#section-1" class="icon-shop"><i class="lnr lnr-briefcase"></i> <span>Bilgiler</span></a></li>
											<li><a href="#section-2" class="icon-cup"><i class="lnr lnr-lighter"></i> <span>Şifre değiştirme</span></a></li>++</li>
										</ul>
									</nav>
								</div>
								<div class="content tab">
										<section id="section-1">
											<div class="mediabox">
												<strong>Kişisel bilgileri</strong>
												<p> <strong>Merhaba</strong>,
													<?php echo ucfirst($guset_name_display['st_fullname']); ?>
												</p>
												<p><strong>standart: </strong>
													<?php echo ucfirst($guest_name_display['st_grade']); ?>
												</p>
												<p><strong>Roll Numarası: </strong>
													<?php echo ucfirst($guest_name_display['roll_no']); ?>
												</p>
												<p><strong>Cinsiyet: </strong>
													<?php echo ucfirst($guest_name_display['st_gender']); ?>
												</p>
												<p> <strong>Doğum tarihi:</strong>
													<?php echo ucfirst($guest_name_display['st_dob']); ?>
												</p>

											</div>
											<div class="mediabox">
												<strong>İletişim detayları</strong>

												<p> <strong>Adres:</strong>
													<?php echo ucfirst($guest_name_display['st_address']); ?>
												</p>
												<p> <strong>Semt:</strong>
													<?php echo ucfirst($guest_name_display['st_district']); ?>
												</p>
												<p> <strong>Kullanıcı adı:</strong>
													<?php echo ucfirst($guest_name_display['st_username']); ?>
												</p>
											</div>
											<div class="mediabox">
												<strong>Ebeveyn Detayı</strong>
												<p><strong>Baba adı: </strong>
													<?php echo ucfirst($guest_name_display['st_father']); ?>
												</p>
												<p><strong>Anne adı: </strong>
													<?php echo ucfirst($guest_name_display['st_mother']); ?>
												</p>
												<p><strong>Ebeveynler İletişim: </strong>
													<?php echo ucfirst($guest_name_display['st_parents_contact']); ?>
												</p>
											</div>
										</section>
										<section id="section-2">
										<div class="col-md-12">
											<?php 
											if(isset($_POST['change_password']))
											{
												$prev_password = $student_name_display['st_password'];
												$old_password = $_POST['old_password'];

												if($prev_password!=$old_password)
												{ 
													echo "<script>alert('Old Password Does not Matched');</script>";	
												}
												else
												{
													$st_username = $student_name_display['st_username'];
												$st_password_update = $_POST['new_password'];
													$update_success = $ravi->student_password_change($st_password_update,$st_username);
													print_r($update_success);
												if($update_success==true)
												{
												echo "<script>window.location = 'home.php?success';</script>";
												}
													else
													{
														echo "<script>alert('cant update password');</script>";
												}
												}
											}
											?>
											<form method="post">
											<div class="input-group input-icon">
												<span class="input-group-addon">
											<i class="fa fa-key"></i>	</span>
												<input type="password" class="form-control1 icon" name="old_password" placeholder="eski Şifre">
											</div>
											<div class="input-group input-icon">
												<span class="input-group-addon">
											<i class="fa fa-key"></i>	</span>
												<input type="password" class="form-control1 icon" placeholder="Yeni Şifre" name="new_password">
											</div>	
												<input type="submit" name="change_password" class="a_demo_four" value="Şifre Güncelle">
												</form>
										</div>
									</section>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>