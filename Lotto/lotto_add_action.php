<?php 
session_start();
include ('Class/database_connet.php');
	
if(isset($_REQUEST['btnAdd'])) 
	
$sql = 'INSERT INTO books VALUES (NULL, "'.$_REQUEST['book_cat_id'].'", "'.$_REQUEST['book_name'].'", "'.$_REQUEST['book_number'].'", "'.$_REQUEST['total_tickets'].'",NULL)';

exit($sql);

$lottoAdd = new dataBase(); // initiatated an object
$dbConnect = $lottoAdd->connectDb(); // call connect funntion


$result = mysql_query($sql, $dbConnect);
if($result){
	header('location: index.php?book_cat_id='.$_REQUEST['book_cat_id'].'&y=success');
}
else{
	header('location: index.php?book_cat_id='.$_REQUEST['book_cat_id'].'&y=failed');
}
	
?>
