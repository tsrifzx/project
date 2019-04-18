<?php
	require('../Login/connect.php');
	
	$category_id  =$_POST["category_id"];
    $category_name=$_POST["category_name"];
    $sql="INSERT INTO category(category_id,category_name) values('$category_id','$category_name')";
	
	if ($con->query($sql)) {
	echo "$sql <br>";
	echo "record added!";
	//echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0\";URL=\"save_type.php\">";
}else{
	echo "$sql<br>";
	echo "Error insert record:".mysqli_error($con);
}
    
   $con = null;
	
	

    header( "location:../admin/save_type.php");
	?>