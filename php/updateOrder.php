<?php

include_once('dbConnect.inc.php');

$response=array();

$query = "
UPDATE  `stock_order` SET  `share` =  '$share' WHERE  `orderNo` =  '$name'";

$sql = "
UPDATE  `account` SET  `balance` =  '$balance' WHERE  `accountID` =  '$accountID'";

$result = mysql_query($sql);

    $res=mysql_query($query);
  
	
    if($result && $res){
			$response["success"] = 1;
		
			}
	else{
		$response["success"] = 0;
	}
			echo json_encode($response);
   
?>