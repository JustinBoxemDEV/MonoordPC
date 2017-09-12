<?php
define('DB_HOST','server.sandhoofd.nl');
define('DB_USER','monoord');
define('DB_PASS' ,'vbh7rv7nAqhQwbkn!');
define('DB_NAME', 'monoord');

class DB_con {
	private $verbinding;
	private $query;
	private $response;
	function __construct() {
		$this->verbinding = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die('localhost'.mysqli_connect_error($this->verbinding));
	}
	public function sql($query) {
		$this->query = $query;
	  	//var_dump($this->query);
	    $res= mysqli_query($this->verbinding, $this->query);
	    if (!$res) {
	        $res = "Sorry, er is iets mis gegaan! Neem contact op met de developer.".mysqli_error($this->verbinding);
	    }
	    //var_dump($res);
	  	return $res;
	}

	public function makeJSON($arg1) {
		$this->response = array();
		while ($row = mysqli_fetch_array($arg1)) {
			$test = array_push($this->response, array("name"=>$row['name'],"id"=>$row['id']));
			
		}
		mysqli_close($this->verbinding);
		return json_encode(array("server_response"=>$this->response));
	}
}