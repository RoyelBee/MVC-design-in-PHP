<?php 
// include database connection file 
include "class/DB.php";

// Asign database name in a variable and create a function to 
// retrive data from table 

// First you have to ceate your sql query. 
// Then prepare your query using DB::prepare($sql). Here DB is a class and prepare() is its method. 
// Then execute query and finally fetch and return it



class Model {
	private $table = 'tbl_sample';

	public function setStudentData(){
		$sql = "SELECT * FROM $this->table";
		$stmt= DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();

	}
}

?>