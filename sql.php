<?php
class sql
{
	public $conn;
	public function __construct($server = 'localhost',$user = 'root', $pass = '', $db = 'prueba')
	{
		$this->conn = new mysqli($server,$user,$pass,$db);
		$this->conn->set_charset('utf8');
	}
	public function select($sql)
	{
		$result = $this->conn->query($sql);
		if($result->num_rows>0)
		{
			return $result;
		}
		else
		{
			return null;
		}
	} 
	public function execute($sql)
	{
		
		$result = $this->conn->query($sql);

		return $result;
	} 
}
?>