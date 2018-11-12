<?php 
//********************************************************************************8
// ShoppingCart.php
//*********************************************************************************

class ShoppingCart {
	
	private $cart = array ();
	private $quantity;
	private $LENGTH = 100;
	
	
	//---------------------------------------------------
    // Constructor: 
	//---------------------------------
	
	function ShoppingCart ( $item, $quantity) {
		
		$this->cart [] = $item;
		$this->quantity = $quantity;
		
		}
		
		// setter method
	    public function setItemName( $itemNAme)	{
			
			$this->cart = itemNAme;	
			}	
			 
		//
		public function setQuantity ( $quantity) {
			
			$this->quantity = $quantity;
			}
			
	public function addItemIntoCart() {
		
		 $array = array ();

         $index = 0;
         $length = 10;

        $valuesRetunt = array (); // value me needed

       for ( $i = 0; $i <= $length; $i++) {
	
	   // $array[$i] = $this->cart[i] //use the rand funtion to get the rendom number from 10 to 100
	   $this->cart[$index] = $array[$i]; // save value in this array
	   //$length += 1;
	   $index += 1; // get space save for  index
	   }
	 //return $this->cart; 
	}
	
// display the result
	
	
	public function getCart() {
  foreach ( $this->cart as $valueDisplay)
  
  	echo "<br>".$valueDisplay."</br>";
	
	//print_r($array);
	
	return  $valueDisplay;
			
	  }
	  
	  
	  
	  
	 public function toString () {
		 
		 
		 
		 //return "Total Item: "..;
		 
		 }
	
	
	}



?>