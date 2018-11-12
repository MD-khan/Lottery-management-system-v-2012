<?php 

//*****************************************************************
// Sale.php
//***********************************************************

class Sale {
	
	private  $unitPrice;
    private  $itemQuantity;
    private  $totalPrice;
	private $saleCount = 0;
	
	
	//-------------------------------------------------------------------
	// Constructor: 
	//---------------------------------------------------------------------
	function Sale ($unitPrice, $quantity) {
		
		$this->unitPrice = $unitPrice;
		$this->itemQuantity = $quantity;
		$this->totalPrice = 0.0;
		$this->saleCount++;
		}
		
		//---------------------------------------------------------------
		// setter method : set the unit price
		//-------------------------------------------------------------
		public function setUnitPrice ( $price) {
		 
		 $this->unitPrice = $price;
		 }
		 
		 // set the Item Queantity
		 public function setQuantity ( $quantity) {
			 
			 $this->itemQuantity = $quantity;
			 } 
		 
		 //----------------------------------------------------------------------------
		 // Getter method: get the total price of item
		 //----------------------------------------------------------------------------
		 public function getTotalPrice () {
			 
			$this->totalPrice = $this->unitPrice * $this->itemQuantity;
			 
			 return $this->totalPrice ;
			 
			 }
			 
			//get the unit price
			public function getUnitPrice () {
				
				 return $this->unitPrice;
				
			}
			
			// get quantity
			public function getQuantity() {
				
				return $this->itemQuantity;
				}
			
		 //get the number of item in shoping cart
		 public function getSlaeCount () {
			 
			 return $this->saleCount;
			 
			 }
}

?>