<?php
require('../Login/connect.php');

$query = "SELECT*FROM unit order by unit_id";

$result = mysqli_query($con,$query) or die ("Query Failed");

//ตรวจสอบจำนวนข้อมูล
if($result->num_rows==0){
	echo "Nothing Display";
}
print "<table border=1>\n";
echo "<tr><th>รหัสหน่วยนับ</th><th>ชื่อหน่วยนับ</th><th colspan='2'>เลือกทำงาน</th></tr>";
while($row =$result->fetch_array()){
	//แสดงข้อมูลในแต่ละแถวของตาราง
	echo "<td>",$row['unit_id'],"</td>\n";
	echo "<td>",$row['unit_name'],"</td>\n";
	$unit_id =$row['unit_id'];

//สร้าง link ไปยังโปรแกรม php ที่ทำหน้าที่แสดงข้อมูลสำหรับแก้ไขพร้อมส่งข้อมูลรหัสแผนก
//echo "<td><a href=\"oo_disp_dept.php?dept_no=$dept_no\">Edit</a></td>\n";
//สร้าง link ไปยังโปรแกรม php ที่ทำหน้าที่ลบข้อมูลรพร้อมส่งรหัสแผนกหัสแผนก
//echo "<td><a href=\"oo_del_dept.php?dept_no=$dept_no\">Delete</a></td>\n";
echo "\t</tr>\n";
}
echo "</table>";
//แสดงจำนวนข้อมูลที่ดึงมาได้

echo "จำนวนข้อมูลทั้งหมด  :",$result->num_rows,"รายการ<br>";

//จบการติดต่อกับฐานข้อมูล
$result->free_result();
mysqli_close($con);

?>