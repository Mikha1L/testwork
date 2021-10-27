<?php
	include 'Connection.php';
	class DatabaseShell
	{
		private $link;
		
		public function __construct($host, $user, $password, $database)
		{
			$this->link = mysqli_connect($host, $user, $password, $database);
		}
		
		public function save($data)
		{
			mysqli_query($this->link, "INSERT INTO account (first_name, last_name, email, company_name, position, first_phone, second_phone, third_phone) VALUES ($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7])");
		}
		
		public function edit($id, $data)
		{
			mysqli_query($this->link, "UPDATE account SET first_name=$data[0], last_name=$data[1], email=$data[2], company_name=$data[3], position=$data[4], first_phone=$data[5], second_phone=$data[6], third_phone=$data[7] WHERE id = $id");
		}
		
		public function del($id)
		{
			mysqli_query($this->link, "DELETE FROM account WHERE id = $id");
		}
		
		public function get($id)
		{
			$result = mysqli_query($this->link, "SELECT * FROM account WHERE id = $id");
			return mysqli_fetch_assoc($result);
		}
		
		public function selectAll($offset, $size_page)
		{
			$result = mysqli_query($this->link, "SELECT * FROM account LIMIT $offset, $size_page");
			return $result;
		}
		
		public function countAll()
		{
			$result = mysqli_query($this->link, "SELECT COUNT(*) FROM account");
			return mysqli_fetch_assoc($result)["COUNT(*)"];
		}
	}
?>