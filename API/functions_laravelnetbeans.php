<?php
include 'database.php';

// API STATUS

// TODO ANDROID:

// - getUserData (Haalt gebruikersgegevens op)

// TODO PC:

// - pass selected room within getAvailableRooms
// - make .php file named "checkroomavailability.php"

// WERKEND:
// - vUser (valideert login)
// - registerUser (registreert gebruiker)
// - checkEmail (checkt of een email al bestaat)
// - sendRecoveryMail (Werkt op aanroep)
// - checkRememberToken (Checkt remember token)
// - getUserData (Haalt alle data van een gebruiker op)
// - getUserBands (Haalt alle bands op die bij een gebruiker horen)
// - createTempReservation (Aanmaken van een tijdelijke reservering)
// - fix file named "getuserdata.php"
// - make createnewband.php file for createNewBand function
// - resetPassword () function to handle new password and update password from old to new
// - get all rooms function at rooms

class validate {
    protected $query;
        
        //Validate a specified user upon login into the android application.
        //Status: OPERATIONAL
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
        
        //Querystring = ?email=sander@gmail.com&password=password&firstname=sander&lastname=hoogdalem&phonenumber=05911322229&streetname=straatweg&housenumber=17&zipcode=7815PG&city=Groningen
        //Register a new user
        //Status: OPERATIONAL
        public function registerUser($email, $password, $firstname, $lastname, $phonenumber, $streetname, $housenumber, $nrext, $zipcode, $city){
            filter_var($email, FILTER_VALIDATE_EMAIL);
            $newPass = password_hash($password, PASSWORD_DEFAULT);
            $row = array();
            $query = "INSERT INTO `users` (`email`, `password`, `firstname`, `lastname`, `phone_number`, `is_admin`, `is_verified`, `is_deleted`) VALUES ('$email', '$newPass', '$firstname', '$lastname', '$phonenumber', '0', '0', '0')";
            if(is_bool($this->connection->sql($query))) {

                $query2 = "SELECT id FROM users WHERE email = '$email'";
                $query2result = $this->connection->sql($query2);
                
                $userID = "";
                while ($row2 = $query2result->fetch_assoc()) {
                    $userID = $row2['id'];
                }

                $query3 = "SELECT id FROM cities WHERE name = '$city'";
                $query3result = $this->connection->sql($query3);
                $cityRowCount = mysqli_num_rows($query3result);

                if($cityRowCount == 0){
                    $queryCityCreate = "INSERT INTO `cities` (`name`) VALUES ('$city')";
                    $this->connection->sql($queryCityCreate);
                    $queryNewCitySelect = "SELECT id FROM cities WHERE name = '$city'";
                    $queryNewCityresult = $this->connection->sql($queryNewCitySelect);
                    $cityID = "";
                    while ($row2 = $queryNewCityresult->fetch_assoc()) {
                        $cityID = $row2['id'];
                    }
                }

                else{
                    $cityID = "";
                    while ($row2 = $query3result->fetch_assoc()) {
                        $cityID = $row2['id'];
                    }
                }

                $query4 = "INSERT INTO `user_addresses` (`user_id`, `city_id`, `zip_code`, `street`, `housenumber`, `housenumber_extension`) VALUES ('$userID', '$cityID', '$zipcode', '$streetname', '$housenumber', '$nrext')";
                if($this->connection->sql($query4)) {
                    $test = array_push($row, array("valid"=>'true'));
                }
                
            } else {
                $test = array_push($row, array("valid"=>'false'));
            }
            $json = json_encode(array("server_response"=>$row));
            return $json;
        }

        //Check the email assigned to a user.
        //Status: OPERATIONAL
        public function checkEmail($email){
            $query = "SELECT email FROM users WHERE email = '$email'";
            $result = $this->connection->sql($query);
            $row = array();
            while ($row2 = $result->fetch_assoc()) {
                $retrievedEmail = $row2['email'];
            }
            
            if ($retrievedEmail == $email) {
                $test = array_push($row, array("valid"=>'true'));
            }
            else {
                $test = array_push($row, array("valid"=>'false'));
            }

        $json = json_encode(array("server_response"=>$row));
        return $json;
        }
        
        //Send a recovery mail to a specified user.
        //Status: STAAT OP SERVER (ANDROID MOET DIT AFWERKEN)
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
        
        //Check the remember token assigned to a user.
        //Status: OPERATIONAL
        public function checkRememberToken($email, $token){
            $query = "SELECT remember_token FROM users WHERE email = '$email'";
            $result = $this->connection->sql($query);
            $row = array();
            while ($row2 = $result->fetch_assoc()) {
                $retrievedToken = $row2['remember_token'];
            }
            
            if ($retrievedToken == $token) {
                $test = array_push($row, array("valid"=>'true'));
            }
            else {
                $test = array_push($row, array("valid"=>'false'));
            }

        $json = json_encode(array("server_response"=>$row));
        return $json;
        }

        public function resetPassword($email, $newPass){
            filter_var($email, FILTER_VALIDATE_EMAIL);
            $newPassHashed = password_hash($newPass, PASSWORD_DEFAULT);
            $query = "UPDATE users SET password ='$newPassHashed' WHERE email = '$email'";
            $this->connection->sql($query);
        }
        
        //Get all information from a specified user.
        //Status: OPERATIONAL
        public function getUserData($email) {
            $array = array();
            $query = "SELECT id, email, firstname, lastname FROM users WHERE email = '$email'";
            $result = $this->connection->sql($query);
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($array, array("id"=>$row['id'], "email"=>$row['email'], "firstname"=>$row['firstname'], "lastname"=>$row['lastname']));
            }
            $json = json_encode(array("server_response"=>$array));
            return $json;
        }
        
        //Get all bands from a specified user.
        //Status: OPERATIONAL
        public function getUserBands($userID){
            $array = array();
            $query = "SELECT b.id, b.band_name FROM bands as b INNER JOIN band__user__bridges as bu ON b.id = bu.band_id INNER JOIN users as u ON u.id = bu.user_id WHERE u.id = '$userID';";
            $result = $this->connection->sql($query);
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($array, $row['band_name']);
            }
            $json = json_encode(array("server_response"=>$array));
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
    
    //Create a temporary reservation (needs approval by system administrator within web app).
    //Status: NEEDS TESTING BY ANDROID
    public function createTempReservation($band_id, $payment_method_id, $room_id, $temp_reservation_time_start, $temp_reservation_time_end){
            $row = array();
            $query1 = "SELECT id FROM bands WHERE id = '$band_id'";
            $query1result = $this->connection->sql($query1);
                
            $bandID = "";
            while ($row2 = $query1result->fetch_assoc()) {
                $bandID = $row2['id'];
            }
                if(is_bool($this->connection->sql($query1))) {

            $query2 = "SELECT id FROM payment__methods WHERE id = '$payment_method_id'";
            $query2result = $this->connection->sql($query2);
                
            $paymentMethodID = "";
            while ($row2 = $query2result->fetch_assoc()) {
                $paymentMethodID = $row2['id'];
            }

            $query3 = "SELECT id FROM rooms WHERE id = '$room_id'";
            $query3result = $this->connection->sql($query3);
                
            $roomID = "";
            while ($row2 = $query3result->fetch_assoc()) {
                $roomID = $row2['id'];
            }

            $query4 = "INSERT INTO `temporary__reservations` (`band_id`, `payment_method_id`, `room_id`, `temp_reservation_time_start`, `temp_reservation_time_end`, `temp_delayed`, `processed`, `created_at`, `updated_at`) VALUES ('$band_id', '$payment_method_id', '$room_id', '$temp_reservation_time_start', '$temp_reservation_time_end','0', '0', NULL, NULL);";
            if($this->connection->sql($query4)) {
                $test = array_push($row, array("valid"=>'true'));
            }
                
            } else {
                $test = array_push($row, array("valid"=>'false'));
            }
            $json = json_encode(array("server_response"=>$row));
            return $json;
        }
    
    //Showcase the date the original reservation (tempRes) was created at.
    //Status: OPERATIONAL
    public function getCreatedAt($temp_reservation_id){
        $array = array();
        $query = "SELECT created_at FROM temporary__reservations WHERE id = '$temp_reservation_id'";
        $result = $this->connection->sql($query)->fetch_assoc();
    while ($row = mysqli_fetch_assoc($result)) {
            array_push($array, $row['band_name']);
        }
        $json = json_encode(array("server_response" => $array));
        return $json;
    }
    
    //Cancel the temporary system reservation.
    //Status: OPERATIONAL
    public function cancelTempReservation($temp_reservation_id, $updated_at, $created_at){
        $query = "UPDATE `temporary__reservations` SET `temp_delayed` = '1', `updated_at` = $updated_at WHERE `temporary__reservations`.`id` = $temp_reservation_id AND $created_at >= NOW() - INTERVAL 1 DAY);";
        $this->connection->sql($query);
        $msg = "Tijdelijke reservering geannuleerd";
        $json = json_encode(array("server_response"=>$msg));
        return $json;
    }
}

class reservation{
    
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
        
    //Get all confirmed reservations that are inside the system.
    //Status: OPERATIONAL
    public function getReservation($band_id){
        $array = array();
        $query = "SELECT re.id, re.room_id, re.reservation_time_start, re.reservation_time_end FROM reservations AS re
                  RIGHT JOIN temporary__reservations AS tr ON re.temporary_reservations_id = tr.id
                  WHERE tr.band_id = $band_id AND tr.processed = 1";
        $result = $this->connection->sql($query);
       while ($row = mysqli_fetch_assoc($result)) {
            array_push($array, $row);
        }
        $json = json_encode(array("server_response" => $array));
        return $json;
    }
}

class rooms {
        
    protected $query;
    private $connection;

    public function __construct() {
        $this->connection = new DB_con();
    }
        //Get all rooms.
        //Status: OPERATIONAL
        public function getAllRooms(){
            $array = array();
            $query = "SELECT room_name FROM rooms";
            $result = $this->connection->sql($query);
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($array, $row['room_name']);
            }
            $json = json_encode(array("server_response"=>$array));
            return $json;
        }

        //Get all rooms based on params of datetime and display if not within range of an existing start and end date.
        //Status: OPERATIONAL
        public function getAvailableRooms(){
            $array = array();
            $query = "SELECT room_name FROM rooms WHERE id NOT IN (SELECT room_id FROM temporary__reservations "
                    . "WHERE processed != 1 AND '2017-07-07 11:30:00' <= temp_reservation_time_end "
                    . "AND '2017-07-07 11:00:00' >= temp_reservation_time_start) "
                    . "AND id NOT IN (SELECT room_id FROM reservations "
                    . "WHERE '2017-07-07 11:30:00' <= reservation_time_end "
                    . "AND '2017-07-07 11:00:00' >= reservation_time_start)";
            $result = $this->connection->sql($query);
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($array, $row['room_name']);
            }
            $json = json_encode(array("server_response"=>$array));
            return $json;
        }

}

class bands {
    
    protected $query;
    private $connection;

    public function __construct() {
            $this->connection = new DB_con();
    }
        
        //Get all bands.
        //Status: OPERATIONAL
        public function getAllBands(){
            $array = array();
            $query = "SELECT band_name FROM bands";
            $result = $this->connection->sql($query);
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($array, $row['band_name']);
            }
            $json = json_encode(array("server_response"=>$array));
            return $json;
        }

        //Create a new band.
        //Status: IN DEVELOPMENT
        public function createNewBand($band_name, $notes){
            $array = array();
            $query = "INSERT INTO `bands` (`band_name`, `notes`) VALUES ('$band_name', '$notes')";
            $result = $this->connection->sql($query);
            if($this->connection->sql($query)) {
                $test = array_push($row, array("valid"=>'true'));
            }
            else {
                $test = array_push($row, array("valid"=>'false'));
            }
            $json = json_encode(array("server_response"=>$row));
            return $json;
        }
}

class paymentMethods{

    protected $query;
    private $connection;

    public function __construct() {
            $this->connection = new DB_con();
    }
        
        //Get all payment methods.
        //Status: OPERATIONAL
        public function getAllPaymentMethods(){
            $array = array();
            $query = "SELECT id, payment_method_name FROM payment__methods";
            $result = $this->connection->sql($query);
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($array, $row['id'], $row['payment_method_name']);
            }
            $json = json_encode(array("server_response"=>$array));
            return $json;
        }

}
