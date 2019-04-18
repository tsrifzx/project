<?php

require('../Login/connect.php');


$unit_id  =$_POST["unit_id"];
$unit_name=$_POST["unit_name"];


$sql = "UPDATE unit set unit_name = '$unit_name' where unit_id= '$unit_id'";

if($con->query($sql)){
	echo "$sql <br>";
	//echo "Record is Successfully";
}else{
	echo "$sql <br>";
	echo "Error Updating record :".PDO::errorInfo();
}
$con =null;

header( "location:../admin/save_unit.php");
?>