<?php
include 'database.php';

class validate {
	protected $query;

	public function vUser($par1, $par2) {

		$this->query = "SELECT email,password FROM users WHERE email = '".$par1."'";
		$db = new DB_con();
		$result = $db->sql($this->query);
		$row = array();
		while ($row2 = $result->fetch_assoc()) {
			$password = $row2['password'];
		}
		if (password_verify($par2, $password)) {
			$test = array_push($row, array("valid"=>'true'));
		}
		else {
			$test = array_push($row, array("valid"=>'false'));
		}

		$json = json_encode(array("server_response"=>$row));
		return $json;

	}


}


class user {
	protected $query;
	private $connection;

	public function __construct() {
		$this->connection = new DB_con();
	}

	public function setQuery($query){
		$this->query = $query;
	}

	public function changepassword($userid, $oudwachtwoord, $nieuwwachtwoord, $bevestigdwachtwoord) {
		$query = "SELECT password FROM users WHERE id = '$userid'";
		$result = $this->connection->sql($query)->fetch_assoc();
		echo $result['password'];





		if ($nieuwwachtwoord === $bevestigdwachtwoord) {

		}
	}
}

?>