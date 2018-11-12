<?php 

include ('config.php');

class dataBase {
	
     protected $con;
	
	
	public function _construct() {
	
	
	
	}

      public function connectDb() {
	  
	  	$this->con = mysql_connect(HOST_NAME, DB_USER, DB_PASS);
	
	if($this->con ) {
		//select database
		mysql_select_db(DB_NAME, $this->con);
		return $this->con;
	}
	else {
		return exit('Error: ' . mysql_error());
	}
}

// getter method
 public function getData( $book, $n, $b) {
	  
	  //$data = "";
	 $bookDescription = array(
							  "Bookname" => $book ,
							   "BookNumber"=>$n,
							   "quantity" =>$b);
	 $array_keys = array_keys($bookDescription);
	 
	 for ($i=0; $i<count($bookDescription); $i++) {
  // get each array value using its key
     $bookDescription[($array_keys[$i])];
	 return $bookDescription;
	   
}
 
 		}
 

}

?>