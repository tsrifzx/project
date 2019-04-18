<?php
//รับค่ารหัสแผนกจากฟอร์ม
$unit_id =$_REQUEST['unit_id'];

require('../Login/connect.php');

//สร้างคำสั่ง sql
$query = "SELECT*FROM unit WHERE unit_id = '$unit_id'";
// สั้งให้คำสั่ง sql ทำงาน
$result = $con->query($query) or die ("Query Failed");

//ดึงข้อมูลมาใส่ในตัวแปล
$row = $result->fetch(PDO::FETCH_ASSOC);
$unit_id = $row['unit_id'];
$unit_name = $row['unit_name'];
echo "<b>แก้ไขข้อมูลของรหัสหน่วยนับ $unit_id</b>";

//สร้าง ฟอร์มสำหรับข้อมูลใหม่
echo "<form action =\"upd_unit.php\" method=\"post\">";
echo "<input type=\"hidden\" name=\"unit_id\" value=\"$unit_id\">";
echo "ชื่อหน่วยนับ: <input type=\"text\" name=\"unit_name\" value=\"$unit_name\">";
echo "<br><input type=\"submit\" name=\"update\" value=\"Update\" onclick=\"return confirm('Are u sure?')\">";
echo "</form>";

$con=null;
?>