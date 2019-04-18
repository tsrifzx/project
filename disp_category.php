<?php
//รับค่ารหัสแผนกจากฟอร์ม
$category_id =$_REQUEST['category_id'];

require('../Login/connect.php');

//สร้างคำสั่ง sql
$query = "SELECT*FROM category WHERE category_id = '$category_id'";
// สั้งให้คำสั่ง sql ทำงาน
$result = $con->query($query) or die ("Query Failed");

//ดึงข้อมูลมาใส่ในตัวแปล
$row = $result->fetch(PDO::FETCH_ASSOC);
$category_id = $row['category_id'];
$category_name = $row['category_name'];
echo "<b>แก้ไขข้อมูลของรหัสหน่วยนับ $category_id</b>";

//สร้าง ฟอร์มสำหรับข้อมูลใหม่
echo "<form action =\"upd_category.php\" method=\"post\">";
echo "<input type=\"hidden\" name=\"category_id\" value=\"$category_id\">";
echo "ชื่อหน่วยนับ: <input type=\"text\" name=\"category_name\" value=\"$category_name\">";
echo "<br><input type=\"submit\" name=\"update\" value=\"Update\" onclick=\"return confirm('Are u sure?')\">";
echo "</form>";

$con=null;
?>