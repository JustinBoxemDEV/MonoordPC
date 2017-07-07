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

	public function changePassword($userid, $nieuwwachtwoord, $bevestigdwachtwoord) {
		$query = setQuery("SELECT password FROM users WHERE id = '$userid'");
		$result = $this->connection->sql($query)->fetch_assoc();
		echo $result['password'];
                if ($nieuwwachtwoord === $bevestigdwachtwoord) {
		}
	}
        
        public function getUserData($email){
            $query = setQuery("SELECT id, email, firstname, lastname FROM users WHERE email = '$email'");
		$result = $this->connection->sql($query)->fetch_assoc();
		echo $result['id'];
                echo $result['email'];
                echo $result['firstname'];
                echo $result['lastname'];
        }
}

class tempReservation{
    
    protected $query;
    private $connection;
    
    public function __construct() 
        {
            $this->connection = new DB_con();
        }
        
    public function setQuery($query) 
        {
            $this->query = $query;
        }
        
    public function createTempReservation($band_id, $payment_method_id, $room_id, $temp_reservation_date){
        $this->query = "INSERT INTO `monoord`.`temporary__reservations` (`id`, `band_id`, `payment_method_id`, `room_id`, `temp_reservation_date`, `temp_delayed`, `processed`, `created_at`, `updated_at`) VALUES (NULL, '$band_id', '$payment_method_id', '$room_id', '$temp_reservation_date', '0', '0', NULL, NULL);";
        var_dump($this->query);
        $this->connection->sql($this->query);
    }
    
    public function getCreatedAt($temp_reservation_id){
        $query = setQuery("SELECT created_at FROM temporary__reservations WHERE id = '$temp_reservation_id'");
        $result = $this->connection->sql($query)->fetch_assoc();
	return $result['created_at'];
    }
    
    public function cancelTempReservation($temp_reservation_id, $updated_at, $created_at){
        $this->query = "UPDATE `monoord`.`temporary__reservations` SET `temp_delayed` = '1', `updated_at` = $updated_at WHERE `temporary__reservations`.`id` = $temp_reservation_id AND $created_at >= NOW() - INTERVAL 1 DAY);";
        var_dump($this->query);
        $this->connection->sql($this->query);
    }
}
?>