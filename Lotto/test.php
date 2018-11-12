<?php 

include ('Class/slae_class.php');
include ('Class/database_connet.php');


?>
<html>
<body>

<?php 

$myData = new dataBase ();

$a = 2; $b = 2; $c = 4;

 $data= $myData->getData($a, $b, $c);

foreach ($data as $someVar) {
  echo $someVar . "<br />";
 }

//



?>


</body>
</html>