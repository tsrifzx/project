<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/fonts.css" rel="stylesheet" type="text/css" media="all" />

<script type="text/javascript" src="../js/jquery-2.0.2.js" ></script>
<script type="text/javascript" src="../js/insertitemvalidation.js" ></script>
<script type="text/javascript" src="../js/unitvalidation.js" ></script>
<script type="text/javascript" src="../js/typevalidation.js" ></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div  class="container">
	<div id="header">
		<div id="logo">
			<img src="../img/2.png" alt="" style="width:140px" /><br>
			<a href="#" style="font-size:12pt">ระบบจัดการวัสดุสำนักงาน</a><br>
			<span><a href="#" rel="nofollow" style="font-size:10pt">Inventory  Control  System</a></span>
		</div>
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href='../admin1/list_inventory.php' accesskey='1' title=''>รายการวัสดุ<br><span class='enrightlink'> Inventory List</span></a></li>
				<li><a href='../admin1/list_request.php' accesskey='2' title=''>รายการขอเบิกวัสดุ<br><span class='enrightlink'>Request Article List</span></a></li>
				<li><a href='../admin1/save_type.php' accesskey='31' title=''>บันทึกประเภทวัสดุ<br><span class='enrightlink'>Save Article Type</span></a></li>
				<li><a href='../admin1/save_list.php' accesskey='32' title=''>บันทึก/แก้ไขรายการวัสดุ<br><span class='enrightlink'>Save Article List</span></a></li>
				<li><a href='../admin1/save_unit.php' accesskey='33' title=''>บันทึกหน่วยนับวัสดุ<br><span class='enrightlink'>Save Article Unit</span></a></li>
						
						<li><a href='../admin1/yreport.php' accesskey='42' title=''>รายงานวัสดุประจำปี<br><span class='enrightlink'>Annual Article Report</span></a></li>
				<li><a href='../admin/member_manage.php' accesskey='43' title=''>จัดการข้อมูลสมาชิก<br><span class='enrightlink'>Member Management</span></a></li>
				<li><a href="../Login/logout.php"  onclick="return confirm('ยืนยันการออกจากระบบ')" accesskey="5" title="">ออกจากระบบ<br><span class="enrightlink">Log out</span></a></li>
				
			</ul>
		</div>
		
		
	</div>
<style>

</style>
<div style='background-color:#2980b9;text-align:right; padding-right:10px; font-color:#ffffff; height:25px; font-size:10pt; padding-top:10px;'><span style="color:#ffffff">Welcome  </span>  
	<a href="#"><span class="enrightlink">[เจ้าหน้าที่พัสดุ]</span></a>
	<a href="../Login/logout.php"  onclick="return confirm('ยืนยันการออกจากระบบ')"><span class="enrightlink">[Log out]</span></a>
		</div>

<div id="main" style="height:100%">

		<div id="banner" style="background:url('https://eds.trang.psu.ac.th/mis/supply/stock/images/bktitle.jpg') right; height:90px">
			<div class="title" style="padding-top:25px">
				<h2>ระบบจัดการวัสดุสำนักงาน</h2>
				<span class="byline">Inventory  Control  System</span>
			</div>
		</div>
		
<div class="featured" ><div >

<span style="font-size:11pt; font-weight:bold;">บันทึกหน่วยนับ ( Save Article Unit)</span><br><br>
	<table style="width:100%; border: 1px solid #eeeeee; ">
		<tr><td>
			
		<fieldset style="border: 1px dotted #aaaaaa; padding-left:5px; padding-bottom:10px;padding-right:5px;">
		<p><span class="header"></span></p>
		
		<form action="save_unitart.php" method="post">
		<fieldset><br>
		 <legend>บันทึกหน่วยนับ</legend>
		<p> รหัสหน่วยนับ. :<input type="text" name="unit_id" size=30
						required placeholder="Enter Department ID" autocomplete="off">
		<p> ชื่อหน่วยนับ   :<input type="text" name="unit_name" size=30
						placeholder="Enter Department name">
		<p> <input type=submit name"submit" value="บันทึก">
		<input type="reset" id="myreset" value="รีเซ็ต">
		</fieldset>
	</form><br>
	
	<?php
require('../Login/connect.php');

$query = "SELECT*FROM unit order by unit_id";

$result =$con->query($query);
//$result = mysqli_query($con,$query) or die ("Query Failed");

//ตรวจสอบจำนวนข้อมูล
if($result->rowCount()==0){
	echo "Nothing Display";
}
print "<table border=1 align=center>\n";
echo "<tr><th>รหัสหน่วยนับ</th><th>ชื่อหน่วยนับ</th><th colspan='2'>เลือกทำงาน</th></tr>";
while($row =$result->fetch(PDO::FETCH_ASSOC)){
	//แสดงข้อมูลในแต่ละแถวของตาราง
	echo "<td>",$row['unit_id'],"</td>\n";
	echo "<td>",$row['unit_name'],"</td>\n";
	$unit_id =$row['unit_id'];
	
 $unit_id = $row["unit_id"];
//สร้าง link ไปยังโปรแกรม php ที่ทำหน้าที่แสดงข้อมูลสำหรับแก้ไขพร้อมส่งข้อมูลรหัสแผนก
echo "<td><a href=\"disp_unit.php?unit_id=$unit_id\">Edit</a></td>\n";
//สร้าง link ไปยังโปรแกรม php ที่ทำหน้าที่ลบข้อมูลรพร้อมส่งรหัสแผนกหัสแผนก
echo "<td><a href=\"del_unit.php?unit_id=$unit_id\" onclick=\"return confirm('คุณต้องการลบข้อมูลใช่หรือไม่ ?')\">Delete</a></td>\n";
echo "\t</tr>\n";
}
echo "</table>";
//แสดงจำนวนข้อมูลที่ดึงมาได้

echo "จำนวนข้อมูลทั้งหมด  :",$result->rowCount(),"รายการ<br>";

//จบการติดต่อกับฐานข้อมูล
$con=null;

?>
        
                </table>
			</fieldset>
		</td></tr>
	</table>
</div></div>
	<div id="copyright">
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<span>Copyright (c) 2019 
		</div>
	</div>
</div>
</body>
</html>
