<?php
require('../Login/connect.php');

$category_id = $_REQUEST['category_id'];

$sql = "Delete from category where category_id='$category_id'";

//excute sql
if($con->query($sql)){
	echo "RECORD UPDATE";
}else{
	echo "ERROR :",mysqli_error();
}
header( "location:../admin1/save_type.php");
?>