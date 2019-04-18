<?php

require('../Login/connect.php');


$category_id  =$_POST["category_id"];
$category_name=$_POST["category_name"];


$sql = "UPDATE category set category_name = '$category_name' where category_id= '$category_id'";

if($con->query($sql)){
	echo "$sql <br>";
	//echo "Record is Successfully";
}else{
	echo "$sql <br>";
	echo "Error Updating record :".PDO::errorInfo();
}
$con =null;

header( "location:../admin/save_type.php");
?>