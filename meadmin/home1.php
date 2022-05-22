		
		<div class="outter-wp">
		<!--/tabs-->
		<div class="tab-main">
		<!--/tabs-inner-->
		<div class="tab-inner">
		<div id="tabs" class="tabs">
		<h2 class="inner-tittle">Merhaba, <?php echo $info_display['t_fullname']; ?>  </h2>
		<div class="graph">
		<nav>
		<ul>
		<li><a href="#section-1" class="icon-shop"><i class="lnr lnr-briefcase"></i> <span>Bilgiler</span></a></li>
		<li><a href="#section-3" class="icon-food"><i class="fa fa-cutlery"></i> <span>öğretmenler</span></a></li>
		<li><a href="#section-4" class="icon-lab"><i class="fa fa-flask"></i> <span>Dersler</span></a></li>
		<li><a href="#section-5" class="icon-truck"><i class="fa fa-truck"></i> <span>Yönetici Bilgilerini Değiştirme</span></a></li>
		</ul>
		</nav>
		<div class="content tab">
		<section id="section-1">
		<div class="mediabox">
		<strong>Kişisel bilgleri</strong>
		<p>	<strong>Merhaba ,</strong>
		<?php echo $info_display['t_fullname']; ?>
		</p>
		<p>	<strong>Nitelik:</strong>
		<?php echo $info_display['t_qualification']; ?>
		</p>
		<p>	<strong>Kullanıcı adı:</strong>
		<?php echo $info_display['t_username']; ?>
		</p>
		<p>	<strong>Cinsiyet:</strong>
		<?php echo $info_display['t_gender']; ?>
		</p>
		<p>	<strong>Doğum tarihi:</strong>
		<?php echo $info_display['t_dob']; ?>
		</p>
		</div>
		<div class="mediabox">
		<strong>İletişim detayları</strong>
		<p>	<strong>Telefon:</strong>
		<?php echo $info_display['t_contact']; ?>
		</p>
		<p>	<strong>Email:</strong>
		<?php echo $info_display['t_email']; ?>
		</p>
		<p>	<strong>Adres:</strong>
		<?php echo $info_display['t_address']; ?>
		</p>	

		</div>
		<div class="mediabox">
		<strong>Ebeveyn Detayı</strong>

		<p>	<strong>Baba:</strong>
		<?php echo $info_display['t_father']; ?>
		</p>
		<p>	<strong>Anne:</strong>
		<?php echo $info_display['t_mother']; ?>
		</p>
		</div>
		</section>
		<section id="section-3">

		<div class="tables">

		<table class="table table-hover"> 
			<thead>
				<tr>
					<th>#</th>
					<th>Telefon</th> 
					<th>Adı</th> 
					<th>Adres</th>
					<th>Email</th>
					<th>Soyad</th>
					<th>Şifre</th>
					<th>Baba</th>
					<th>Anne</th>
					<th>Doğum tarihi</th>
					<th>Nitelik</th>
					<th>İletişim</th>
					<th>Cinsiyet</th>
				</tr>
			</thead>
			<tbody> 
				
		<?php $teacher_dis_admin = $ravi->teacher_info_display_admin();
		$t_sn = 1;
		while($teacher_info_admin =$teacher_dis_admin->fetch_assoc())					{


				?>						

				
				<tr>
					<th scope="row"><?php echo $t_sn; ?></th>
					<th></th>
					<td><?php echo $teacher_info_admin['t_fullname']; ?></td>
					<td><?php echo $teacher_info_admin['t_address']; ?></td>
					<td><?php echo $teacher_info_admin['t_email']; ?></td>
				<td><?php echo $teacher_info_admin['t_username']; ?></td>
					<td><?php echo $teacher_info_admin['t_pass']; ?></td>
					<td><?php echo $teacher_info_admin['t_father']; ?></td>
					<td><?php echo $teacher_info_admin['t_mother']; ?></td>
					<td><?php echo $teacher_info_admin['t_dob']; ?></td>
					<td><?php echo $teacher_info_admin['t_qualification']; ?></td>
					<td><?php echo $teacher_info_admin['t_contact']; ?></td>
					<td><?php echo $teacher_info_admin['t_gender']; ?></td>
				
				</tr>
		<?php $t_sn++; } ?>
			</tbody> 
		</table>
		</div>

		</section>
		<section id="section-4">

		<div class="graph">
		<div class="tables">

		<table class="table table-hover"> 
			<thead> 
				<tr> 
					<th>#</th> 
					<th>Ders</th> 
					<th>Öğretmen</th> 
					<th>Zaman</th>
				</tr> 
			</thead> 
			<tbody> 
					<?php 

		$subject_info_admins = $ravi->subject_info();
				$sub_sn = 1;
		while($display_subject_admin = $subject_info_admins->fetch_assoc())
		{
		?>					<tr> 
					<th scope="row"><?php echo $sub_sn; ?></th> 
					<td><?php echo ucfirst($display_subject_admin['subject_name']); ?></td> 
					<td><?php echo $display_subject_admin['t_fullname']; ?></td> 
					<td><?php echo $display_subject_admin['time']; ?></td> 
				</tr>
				<?php
		$sub_sn++;	}


		?>

			</tbody> 
		</table>
		</div>

		</div>


		</section>
		<section id="section-5">
		<div class="">
		<div class="">
			<div class="form-body text-center">
				<form class="form-horizontal text-center" method="post">
					<div class="col-sm-6"> 
						<div class="form-group"> <input type="text" class="form-control" id="" name="current_username" placeholder="Geçerli Kullanıcı Adı" required> </div>
					</div>
					<div class="col-sm-6"> 
						<div class="form-group"> <input type="text" class="form-control" id="" name="new_username" placeholder="Yeni kullanıcı adı" required> </div>
					</div>
					<div class="col-sm-6">
						<div class="form-group"> <input type="text" class="form-control" id="" name="current_password" placeholder="Mevcut Şifre" required> </div>
					</div>
					<div class="col-sm-6">
						<div class="form-group"> <input type="text" class="form-control" id="" name="new_password" placeholder="Yeni Şifre" required> </div>
					</div>
					<div class="text-center"> 
						<input type="submit" class="btn btn-default" name="update_admin_info" value ="Update Admin Info">
						</div>
				</form>
			</div>
		</div>
		</div>
		<?php 
	if(isset($_POST['update_admin_info'])){
		$new_username = $_POST['new_username'];
		$current_username = $_POST['current_username'];
		$current_password = $_POST['current_password'];
		$new_password = $_POST['new_password'];
		$checkmatch = $ravi->meadmin_check($current_username,$current_password);
		if($checkmatch){
			$success = $ravi->meadmin_updatepassword($new_password,$new_username);
			if($success){
			echo "<script>alert('update success');</script>";
			echo "<script>window.location='logouts.php';</script>";
			}
			
		}
		else{
			echo "<script>alert('Not matched Current Username or Password');</script>";
		}
	}
	?>
		</section>
		</div>
		<!-- /content -->
		</div>
		<!-- /tabs -->

		</div>
		<script src="js/cbpFWTabs.js"></script>
		<script>
		new CBPFWTabs(document.getElementById('tabs'));
		</script>
		<div class="clearfix"> </div>
		</div>
		</div>
		<!--//tabs-inner-->


		<!--custom-widgets-->
		<div class="custom-widgets">
		<div class="row-one">
		<div class="col-md-6 widget">
		<div class="stats-left ">
		<h4>öğrenciler</h4>
		<h5> Sayısı</h5>
		</div>
		<div class="stats-right">
		<label><?php $count_student_count=  $ravi->student_count(); 
		if(!empty($count_student_count)){
		echo $count_student_count->num_rows;
	}
		 ?></label>
		</div>
		<div class="clearfix"> </div>
		</div>
		<div class="col-md-6 widget states-mdl">
		<div class="stats-left">
		<h4>öğretmenler</h4>
		<h5>Sayısı</h5>
		</div>
		<div class="stats-right">
		<label><?php 
		$count_teacher_size=  $ravi->teacher_info_display_admin(); 
		if(!empty($count_teacher_size)){
		echo $count_teacher_size->num_rows;
	}
		?></label>
		</div>
		<div class="clearfix"> </div>
		</div>
	
		</div>
		</div>
		<!--//custom-widgets-->

		<!--/charts-->
		<div class="charts">
		<div class="chrt-inner">
		<!--//weather-charts-->
		<div class="graph-visualization">

		<div class="col-md-6 map-2">
		<div class="profile-nav alt">
		<section class="panel">
		<div class="user-heading alt clock-row terques-bg">
		</div>
		<ul id="clock">
		<li id="sec"></li>
		<li id="hour"></li>
		<li id="min"></li>
		</ul>
		</section>

		</div>
		</div>
		<div class="clearfix"> </div>
		</div>
		</div>
		<!--/charts-inner-->
		</div>
		<!--//outer-wp-->
		</div>
