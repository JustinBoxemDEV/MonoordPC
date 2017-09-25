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
        
        public function sendRecoveryMail($email) {
            $token = "";
            $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $codeAlphabet.= "0123456789";
            $max = strlen($codeAlphabet); // edited

            for ($i = 0; $i < 6; $i++) {
                $token .= $codeAlphabet[random_int(0, $max - 1)];
            }
            $query = "UPDATE users SET remember_token='$token' WHERE email = '$email'";
            $this->connection->sql($query);
            $from = "From: MONKlantenService@hotmail.com";
            $topic = "Wachtwoord reset | Muziek Organizatie Noord";
            $message = "Geachte persoon, u heeft een mail ontvangen betreffende het resetten van uw wachtwoord. Wachtwoord reset code: $token";
            mail($email,$topic,$message,$from);
        }

        public function getUserData($email) {
            $array = array();
            $query = "SELECT id, email, firstname, lastname FROM users WHERE email = '$email'";
            $result = $this->connection->sql($query);
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($array, array("id"=>$row['id'], "email"=>$row['email'], "firstname"=>$row['firstname'], "lastname"=>$row['lastname']));
            }
            $json = json_encode(array("server_response:"=>$array));
            return $json;
        }

        public function getUserBands($userID){
            $array = array();
            $query = "SELECT b.id, b.band_name FROM bands as b INNER JOIN band__user__bridges as bu ON b.id = bu.band_id INNER JOIN users as u ON u.id = bu.user_id WHERE u.id = '$userID';";
            $result = $this->connection->sql($query);
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($array, $row['band_name']);
            }
            $json = json_encode(array("server_response:"=>$array));
            return $json;
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
        $query = "INSERT INTO `monoord`.`temporary__reservations` (`id`, `band_id`, `payment_method_id`, `room_id`, `temp_reservation_date`, `temp_delayed`, `processed`, `created_at`, `updated_at`) VALUES (NULL, '$band_id', '$payment_method_id', '$room_id', '$temp_reservation_date', '0', '0', NULL, NULL);";
        $this->connection->sql($query);
        $msg = "Gelukt";
        $json = json_encode(array("server_response:"=>$msg));
        return $json;
    }
    
    public function getCreatedAt($temp_reservation_id){
        $query = "SELECT created_at FROM temporary__reservations WHERE id = '$temp_reservation_id'";
        $result = $this->connection->sql($query)->fetch_assoc();
	return $result['created_at'];
    }
    
    public function cancelTempReservation($temp_reservation_id, $updated_at, $created_at){
        $query = "UPDATE `monoord`.`temporary__reservations` SET `temp_delayed` = '1', `updated_at` = $updated_at WHERE `temporary__reservations`.`id` = $temp_reservation_id AND $created_at >= NOW() - INTERVAL 1 DAY);";
        var_dump($query);
        $this->connection->sql($query);
    }
}

class rooms {
        
	protected $query;
	private $connection;

	public function __construct() {
		$this->connection = new DB_con();
	}
        //Get all rooms based on params of time, day und room toip.
        public function getAvailableRooms(){
            $query = "SELECT room_name FROM rooms WHERE rent_status != 1";
            $result = $this->connection->sql($query)->fetch_assoc();
            return $result['room_name'];
        }
}
?>