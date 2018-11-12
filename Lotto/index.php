<?php 

include ('Class/slae_class.php');
include ('Class/database_connet.php');


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Lotto Sale Management System</title>
<link href="Style/style.css" rel="stylesheet" type="text/css" />


</head>

<body id="page-container">
<!--Main Table-->
<table width="817" height="505" border="0" align="center" cellpadding="0" cellspacing="0" >
  
  <!--Header -->
   <tr id="header">
    <td width="144" height="30"></td>
    <td width="566" valign="top"><h2 align="center">Welcome to Lotto Management System</h2></td>
    <td width="107"></td>
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
    <table width="556" height="122" border="1" align="center" cellpadding="0" cellspacing="0">
      <tr>
      	
        <td width="47%">Add Lotto Books:</td>
        <td>&nbsp;</td>
        <td width="1%">&nbsp;</td>
      </tr>
      <tr>
        
      
        <td>
        <!--PHP CODE: Recived Lottos and Store it to Darabase-->
        <form action="lotto_add_action.php" name="lotto_add"  method="post"> 
        <table width="100%" border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="47%">Select Categoory</td>
            <td width="3%">&nbsp;</td>
            <td colspan="2">
            <select name="book_cat_id" id="book_cat_id"> 
            <option value=""> Select Category </option>
            <?php 
			
			$lottoAdd = new dataBase(); // intitiated an object
			$dbConnect = $lottoAdd->connectDb(); // call connect funntion
			
			
			
			$sql = 'SELECT * FROM book_category ';
			$result = mysql_query($sql, $dbConnect);
				if($result && (mysql_num_rows($result) > 0) ) {
					while($data = mysql_fetch_array($result)) {
			
			?>
               <option value="<?php $data['book_cat_id']?>"><?php echo $data['category']?></option>
    
            
                        
            <?php 
					} 
			} 
			
			?>
            
            </select>
            </td>
            </tr>
          <tr>
            <td>Book Name</td>
            <td>&nbsp; </td>
            <td colspan="2"><input type="text" name="book_name" id="book_name" /></td>
            </tr>
          
          <tr>
            <td>Book Number</td>
            <td>&nbsp;</td>
            <td colspan="2"><input type="text" name="book_number" id="book_number" /></td>
            </tr>
           
          <tr>
            <td>Total Tickets</td>
            <td>&nbsp;</td>
            <td colspan="2"><input type="text" name="total_tickets" id="total_tickets" /></td>
            </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td width="25%"><input type="submit" name="btnAdd" id="btnAdd" value="Submit" /></td>
            <td width="25%"><input type="reset" name="btnClear" id="btnClear" value="Clear" /></td>

          </tr>
          
          <?php 
		 /*
		  $cat_id = $_REQUEST['book_cat_id'];
		  $book_name = $_REQUEST['book_name'];
		  $book_number = $_REQUEST['book_number'];
		  $total = $_REQUEST['total_tickets'];
		  
		  $sql = "INSERT INTO `books`.`books` (`book_id`, `book_cat_id`, `book_name`, `book_number`, `total_tickets`, `date`) VALUES (NULL, $cat_id, $book_name, $book_number, $total, NULL)";
		  
		  
		   
//exit($sql);

$lottoAdd = new dataBase(); // intitiated an object
$dbConnect = $lottoAdd->connectDb(); // call connect funntion

//$result = mysql_query($sql, $dbConnect);
		 
		 
		   */
		  ?>
          
          
        </table>
        </form>
        
        
        
        </td>
        <td valign="top" width="52%">You Just have Added This Book:
   
		  <table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>  
  <!--PHP CODE: make user confident to show him/her last inserted data-->
   <?php     
   
   			if(isset($_REQUEST['btnAdd'])) 
   			$lottoAdd = new dataBase(); // intitiated an object
			$dbConnect = $lottoAdd->connectDb(); // call connect funntion
			
			$sql = 'SELECT * FROM books ORDER BY book_id DESC LIMIT 1'; //  For user confermation
			$result = mysql_query($sql, $dbConnect);
			$data = mysql_fetch_array($result);
			?>
            
   			<td width="36%">Book Name</td>
    		<td width="5%">&nbsp;</td>
    		<td><?php echo $data['book_name']?></td>
  			</tr>
  			<tr>
  			  <td>Number</td>
  			  <td>&nbsp;</td>
  			  <td><?php echo $data['book_number']?></td>
			  </tr>
  			<tr>
  			  <td>Total Tickets</td>
  			  <td>&nbsp;</td>
  			  <td><?php echo $data['total_tickets']?></td>
			  </tr>
  <tr>
    <td>Added Time</td>
    <td>&nbsp;</td>
   <td><?php echo date ("g:i:s:A" ,strtotime ($data['date'])) ?></td> <!-- g=12hrs, i=minute, s= second, A= AM/PH-->
  </tr>
  
 
          </table>

        
        
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
   
   <td valign="top" height="263" width="107" id="sidebar">&nbsp;</td> <!--Rigth Side Bar -->
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