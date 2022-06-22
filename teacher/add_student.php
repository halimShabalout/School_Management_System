<?php 
 
 if(isset($_POST['std_add_now']))
 {
	 // $std_fullname,$std_username,$std_password,$std_grade,$std_roll,$std_dob,$std_address,$std_district,$std_gender,$std_father,$std_mother,$std_parent_contact
	 $std_fullname = $_POST['std_fullname'];
	 $std_username = $_POST['std_username'];
	 $std_password = $_POST['std_password'];
	 $std_grade = $_POST['std_grade'];
	 $std_roll = $_POST['std_roll'];
	 $std_dob = $_POST['std_dob'];
	 $std_address = $_POST['std_address'];
	 $std_district = $_POST['std_district'];
	 $std_gender = $_POST['std_gender'];
	 $std_father = $_POST['std_father'];
	 $std_mother= $_POST['std_mother'];
	 $std_parent_contact = $_POST['std_parent_contact'];
	 
	 if($std_fullname=="" or $std_username=="" or $std_password=="" or $std_grade=="" or $std_gender=="" or $std_roll=="" or $std_dob=="" or $std_address=="" or $std_district=="" or $std_father=="" or $std_mother=="" or $std_parent_contact=="")
	 {
		 echo "<script>alert('please fill form and Add Student');</script>";
	 }
	 else
	 {
		 
		 $add_student_done = $ravi->add_student($std_fullname,$std_username,$std_password,$std_grade,$std_roll,$std_dob,$std_address,$std_district,$std_gender,$std_father,$std_mother,$std_parent_contact);
		 if($add_student_done==true)
		 {
			 echo "<script>window.location = 'home.php?ravi=student-information';</script>";
		 }
		 else
		 {
			 echo "<script>alert('contact with developer');</script>";
		 }
		 
	 }
	 
 }


?>