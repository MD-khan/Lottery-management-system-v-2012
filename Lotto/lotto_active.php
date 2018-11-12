<?php 
include ('config.php');
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
    <table width="523" height="80" border="1" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="64" height="21">&nbsp;</td>
        <td width="350">Active Book</td>
        <td width="101">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td valign="top">
        
        <form>
        <table width="100%" border="1" cellspacing="1" cellpadding="1">
          <tr>
            <td width="32%" height="21">Select Category</td>
            <td width="4%">:</td>
            <td width="64%">
            <select name="lotto_cat_id" id="lotto_cat_id"> 
            <option value=""> Select Category </option>
             <?php 
			
			$lottoAdd = new dataBase(); // intitiated an object
			$dbConnect = $lottoAdd->connectDb(); // call connect funntion
			
			
			
			$sql = 'SELECT * FROM lotto_category ';
			$result = mysql_query($sql, $dbConnect);
				if($result && (mysql_num_rows($result) > 0) ) {
					while($data = mysql_fetch_array($result)) {
			
			?>
               <option value="<?php $data['lotto_cat_id']?>"><?php echo $data['category']?></option>
    
            
                        
            <?php 
					} 
			} 
			
			?>
            
            </select>
            
            </td>
          </tr>
          <tr>
            <td>Book Name</td>
            <td>:</td>
            <td>
            <!--PHP CODE: Retrive Book Name by category id-->
            <select name="book_id" id="book_id">                       
            <option value=""> Select Book</option>
             <?php 
			
			$lottoAdd = new dataBase(); // intitiated an object
			$dbConnect = $lottoAdd->connectDb(); // call connect funntion
			
			
			
			$sql = 'SELECT lottos.book_name,lottos.lotto_id, lotto_category.lotto_cat_id FROM lottos, lotto_category
					WHERE lotto_category.lotto_cat_id = lottos.lotto_cat_id AND lottos.lotto_cat_id = 1 ';
			$result = mysql_query($sql, $dbConnect);
				if($result && (mysql_num_rows($result) > 0) ) {
					while($data = mysql_fetch_array($result)) {
			
			?>
               <option value="<?php $data['lotto_id']?>"><?php echo $data['book_name']?></option>
    
            
                        
            <?php 
					} 
			} 
			
			?>
            
             </select>
            
            </td>
          </tr>
          <tr>
            <td>Book Number</td>
            <td>:</td>
            <td><input type="text" name="textfield2" id="textfield2" />
              <input type="text" name="textfield3" id="textfield3" /></td>
          </tr>
          <tr>
            <td>Serial Number</td>
            <td>:</td>
            <td><input type="text" name="textfield4" id="textfield4" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><table width="100%" border="1" cellspacing="0" cellpadding="0">
              <tr>
                <td width="38%"><input type="submit" name="btnActive" id="btnActive" value="Active It" /></td>
                <td width="62%"><input type="submit" name="btnClear" id="btnClear" value="Clear" width="20" /></td>
              </tr>
            </table></td>
          </tr>
        </table>
        </form>
        </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="23">&nbsp;</td>
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