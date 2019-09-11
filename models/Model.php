<?php

class Model
{
	public $conn;
	function __construct()
	{
		$this->conn = mysqli_connect('localhost', 'cloudcomputing', 'cloudcomputing_demo', 'cloudcomputing_db');
		if ($this->conn->connect_error) {
			echo "Loi: " . $this->conn->connect_error;
		}
	}

	public function query($sql)
	{
		return $this->conn->query($sql);
	}
}

