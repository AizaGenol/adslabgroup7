<?php
class User {
  //Properties
  	public $conn;
  	public $name;
  	public $username;
  	public $password;

  // Methods
    public function __construct($conn){
        $this->conn = $conn;
    }

  	public function sports($name, $classification, $description, $equipments, $rules, $history) {

    	$sql = "INSERT INTO sports (name, classification, description, equipments, rules, history) VALUES('$name','$classification', '$description', '$equipments','$rules', '$history')";

    	if ($this->conn->query($sql) === TRUE) {
			return true;
    	} else {
        	return false;
    	}
  	}
}
?>