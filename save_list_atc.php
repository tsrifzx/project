<?php
	require('../Login/connect.php');
	$atc_id  =$_POST["atc_id"];
    $atc_name=$_POST["atc_name"];
	$atc_all =$_POST["atc_all"];
	$unit_id=$_POST["unit_id"];
	$category_id=$_POST["category_id"];
	date_default_timezone_set('Asia/Bangkok');
	$a_date = date('Y-m-d H:i:s');
    $sql="INSERT INTO article(atc_id,atc_name,category_id,unit_id,atc_all,a_date) values('$atc_id','$atc_name','$category_id','$unit_id','$atc_all','$a_date')";


	if ($con->query($sql)) {
	echo "$sql <br>";
	echo "record added!";
}else{
	
	echo "$sql<br>";
	//print_r($this->pdo->errorInfo());
	echo "Error insert record:Failed";
}

    $con=null;
	
	header( "location:../admin/save_list.php");
	?>