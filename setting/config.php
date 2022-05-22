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
}

$ravi = new project2;