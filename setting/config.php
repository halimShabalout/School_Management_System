<?php 

class project2
{
    public $server = "localhost";
	public $username = "root";
	public $password = "";
	public $dbname = "march9";
	public $connectdb;

	function __construct()
	{
		$this->connectdb = new mysqli($this->server,$this->username,$this->password,$this->dbname);
		if($this->connectdb->connect_error)
		{
			die("connection failed");
		}
	}
	
    public function hackme()
    {
        $this->connectdb = new mysqli($this->server,$this->username,$this->password,$this->dbname);
        return $this->connectdb;
    }

	public function student_login_check($st_username,$st_password)
	{ 
		$st_login_check = "SELECT  * from st_info where st_username = '$st_username' and st_password='$st_password'";
		$st_login_run = $this->connectdb->query($st_login_check);
		$st_login_num = $st_login_run->num_rows;
		return $st_login_num;
	}

	public function student_info_select($st_username)
	{
		$student_info_sel = "SELECT * from st_info where st_username='$st_username'";
		$student_info_run = $this->connectdb->query($student_info_sel);
		
		return $student_info_run;
	}

		/////////////////////////////// ADMINNNNNNNNNNNNNNNNN--------------------------
	
		public function meadmin_check($admin_username,$admin_password)
		{
			$meadin_login_select = "SELECT * from meadmin where admin_username='$admin_username' AND admin_password='$admin_password'";
			$meadmin_login_run = $this->connectdb->query($meadin_login_select);
			// var_dump($meadmin_login_run);
			if($meadmin_login_run){
			$meadmin_login_num = $meadmin_login_run->num_rows;
			return $meadmin_login_num;
			}
			
		}

		//////////////////////////////////Teacher Info ////////////////////////////////
	public function teacher_info($adminname,$t_staff_type)
	{
		switch($t_staff_type)
		{
			case "Admin":
			$teacher_info_select = "SELECT * from teacher_info where t_staff_type='$t_staff_type' AND t_username='$adminname'";
			break;
			case "Teacher":
			$teacher_info_select = "SELECT * from teacher_info where t_staff_type='$t_staff_type' AND t_username='$adminname'";
			break;
			default :
				echo "no teacher found";
		}
		$teacher_info_select_run = $this->connectdb->query($teacher_info_select);
		return $teacher_info_select_run;
		
	
		
	}
	public function teacher_info_display_admin()
	{
		$teacher_info_admin = "SELECT * from teacher_info";
		$teacher_info_admin_run = $this->connectdb->query($teacher_info_admin);
		return $teacher_info_admin_run;
	}
	///// display teacher info in  student panel
	public function teacher_info_instudent($st_grade)
	{
		$teacher_info_instudent_select = "SELECT * from subjects_info where grade='$st_grade'";
		$teacher_info_instudent_run = $this->connectdb->query($teacher_info_instudent_select);
		return $teacher_info_instudent_run;
		
	}
	////////////////////////End Teacher Info ------------//////////////////////
	
}

$ravi = new project2;