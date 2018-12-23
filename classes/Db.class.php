<?php
class Db{
	var $conn;
	public function __construct()
	{
		$this->conn = new PDO("mysql:host=".HOST."; dbname=".DB, USER, PASS);
		$this->conn->query("set names 'utf8' ");
	}
	public function selectQuery($sql)
	{
		$data= $this->conn->query($sql);
		return $data->fetchAll();
	}
	public function updateQuery($sql)
	{
		$data= $this->conn->query($sql);
		return $data->rowCount();
	}


	public function AddQuery($sql)
	{
		$this->conn->query($sql);
	}
}