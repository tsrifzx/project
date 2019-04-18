<?php
require('../Login/connect.php');

$unit_id= $_REQUEST['unit_id'];

$sql = "Delete from unit where unit_id='$unit_id'";

//excute sql
if($con->query($sql)){
	echo "RECORD UPDATE";
}else{
	echo "ERROR :",PDO::errorInfo();
}
$con=null;
header( "location:../admin1/save_unit.php");
?>