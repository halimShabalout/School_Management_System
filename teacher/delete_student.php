<?php 



?>

<div class="outter-wp">
	<!--sub-heard-part-->
	<div class="sub-heard-part">
		<ol class="breadcrumb m-b-0">
			<li><a href="index.html">Ana Sayfa</a></li>
			<li class="active">
				<?php if(isset($_GET['student'])){ echo strtoupper($page=$_GET['student']); } ?>
			</li>
		</ol>
	</div>
	<!--//sub-heard-part-->
	<div class="graph-visual tables-main">
		<h2 class="inner-tittle">
			<?php echo strtoupper($_GET['student']); ?>
		</h2>

	
			<div class="tables">


				<table class="table table-bordered ">

					<thead>
						<tr>
                                <th>#</th>
                                <th>Adı</th>
                                <th>Adres</th>
                                <th>Email</th>
                                <th>Soyad</th>
                                <th>babab</th>
                                <th>anne</th>
                                <th>Doğum Tarihi</th>
                                <th>İletişim</th>
                                <th>Cinsiyet</th>
						</tr>
					</thead>
					<tbody>

						<?php $student_dis_teacher = $ravi->student_info_display_teacher();
													$t_sn = 1;
													while($student_info_teacher =$student_dis_teacher->fetch_assoc())					{										
																		?>
						<tr>
							<th scope="row">
								<?php echo $t_sn; ?>
							</th>
							<th></th>
							<td>
								<?php echo $student_info_teacher['t_fullname']; ?>
							</td>
							<td>
								<?php echo $student_info_teacher['t_address']; ?>
							</td>
							<td>
								<?php echo $student_info_teacher['t_email']; ?>
							</td>
							<td>
								<?php echo $student_info_teacher['t_username']; ?>
							</td>
							<td>
								<?php echo $student_info_teacher['t_father']; ?>
							</td>
							<td>
								<?php echo $student_info_teacher['t_mother']; ?>
							</td>			
							<td>
								<?php echo $student_info_teacher['t_contact']; ?>
							</td>
							<td>
								<?php echo $student_info_teacher['t_gender']; ?>
							<td>
								
				<a href="home.php?student=student-del&teacherid=<?php echo $student_info_teacher['t_id']; ?>" class="btn red">Delete</a>
					</td>
						</tr>
						<?php $t_sn++; } ?>
					</tbody>

				</table>

			</div>
		</div>


	</div>
	<!--//graph-visual-->

