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
}

$ravi = new project2;