<?php 
include ('config.php');
include ('Class/slae_class.php');
include ('Class/shopping_cart.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Lotto Sale Management System</title>
<link href="Style/style.css" rel="stylesheet" type="text/css" />

<script src="" type="text/javascript"></script>

</head>

<body id="page-container">
<!--Main Table-->
<table width="817" height="505" border="0" align="center" cellpadding="0" cellspacing="0" >
  
  <!--Header -->
   <tr id="header">
    <td width="142" height="30"></td>
    <td width="512" valign="top"><h2 align="center">Welcome to Lotto Management System</h2></td>
    <td width="132"></td>
  </tr>
  
  <!-- Main Menue-->
  <tr id="manue">
   <td>&nbsp;</td>
    <td height="44" id="manue-nav"><?php include ('common_files/main_manue.php'); ?></td>
    <td>&nbsp;</td>
  </tr>
  
  <!--Content-->
  <tr id="content">
     
    <!--Left side bar -->
     <td valign="top" id="sidebar">
	 <?php include ('common_files/lotto_sub_manue.php'); ?>
    </td> 
    
    <td valign="top" bgcolor="#FFFFFF">
    
    <!---Lotto Add -->
    <table width="523" height="122" border="1" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="3">
        
        <!--Sales Form-->
        <form name="sale" action="" method="post">
        <!--Sales Table -->
        <table width="100%" border="1" cellspacing="0" cellpadding="5">
          <tr>
            <td width="25%">Lotto Sale</td>
            <td width="4%">&nbsp;</td>
            <td width="46%">&nbsp;</td>
            <td width="25%">&nbsp;</td>
          </tr>
          <tr>
            <td>Select Lotto Type</td>
            <td>&nbsp;</td>
            
            <!--Select Lotto Category-->
            <td>
            <?php 
			 
			?>
            <select name="category_id" id="category_id"> 
            <option selected="selected">Select Category</option>
            <option value="$20_ticket">$20 Ticket</option>
            <option value="$20_ticket">$20 Ticket</option>
            <option value="$10_ticket">$10 Ticket</option>
            <option value="$5_ticket">$5 Ticket</option>
            <option value="$2_ticket">$2 Ticket</option>
            <option value="$1_ticket">$1 Ticket</option>
            </select>
            </td> <!--End Select Lotto Category-->
            
            
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Item Name</td>
            <td>&nbsp;</td>
            <!--Select Lotto Ticket Name-->
            <td><select name="lotto_id" id="lotto_id">
              <option value="megacash"> Mega Cash</option>
            </select></td><!--End Select Lotto Ticket Name-->
            <td>&nbsp;</td>
          </tr>
          
          <tr>
            <td>Unit Price</td>
            <td>&nbsp;</td>
            <td><input type="text" name="unitPrice"  /></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Quantity</td>
            <td>&nbsp;</td>
            <td><input type="text" name="quantity"  /></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Tottal Price</td>
            <td>&nbsp;</td>
            <!--PHP CODE: Total sales -->
            <?php 
			
			 
			$unitPrice = $_POST[unitPrice];
			$quantity = $_POST[quantity];
			
			$mySale = new Sale($unitPrice,$quantity );
			
			?>
            
           <td><input type="text" name="total"  value="<?php echo $mySale->getTotalPrice();?>" /></td>
            <td>&nbsp;</td>  
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" id="button" value="Add Item" /></td>
            <td>Total Item: <?php echo $mySale->getSlaeCount() ?></td>
          </tr>
          
         </table> <!--End Sales Table-->
        </form> <!--End Sales Form-->
        
        
        </td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>
        
        <?php 
		
		
		$myCart = new ShoppingCart ('MegaCash', 3);
		
		echo "sales", $myCart->getCart();
		
		?>
        </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
   </td> <!-- body content -->
   
   <td valign="top" height="263" width="132" id="sidebar">&nbsp;</td> <!--Rigth Side Bar -->
  </tr>
  
  <!--Footer -->
  <tr id="footer">
   <td >&nbsp;</td>
    <td height="55">&nbsp;</td> 
    <td>&nbsp;</td>
  </tr>
  
</table>
</body>
</html>