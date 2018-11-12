<?php 
include ('config.php');

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
	 <?php include ('common_files/report_sub_manue.php'); ?>
    </td> 
    
    <td valign="top" bgcolor="#FFFFFF">
    
    <!---Lotto Add -->
    <table width="523" height="122" border="1" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td>Report</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
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