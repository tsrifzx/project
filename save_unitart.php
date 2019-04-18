<?php
	require('../Login/connect.php');
	$unit_id  =$_POST["unit_id"];
    $unit_name=$_POST["unit_name"];
    $sql="INSERT INTO unit(unit_id,unit_name) values('$unit_id','$unit_name')";


	if ($con->query($sql)) {
	echo "$sql <br>";
	echo "record added!";
}else{
	
	echo "$sql<br>";
	echo "Error insert record:".mysqli_error($con);
}

    $con=null;
	
	header( "location:../admin/save_unit.php");
	?>