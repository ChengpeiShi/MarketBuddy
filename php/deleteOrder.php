<?php

include_once('dbConnect.inc.php');


$query = "
DELETE FROM `stock_order` 
WHERE `orderNo` = '$name';";

$res = mysql_query($query);
$response = array();

if(! $res )
{
  $reponse["success"] = 0;
  
}else{
	$response["success"] = 1;
}
echo json_encode($response);
   

?>