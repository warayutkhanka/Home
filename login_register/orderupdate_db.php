<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('connectdb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

//ตรวจสอบถ้าว่างให้เด้งไปหน้าหลักและไม่แก้ไขข้อมูล
if($_POST["order_id"]==''){
echo "<script type='text/javascript'>"; 
echo "alert('Error Contact Admin !!');"; 
echo "window.location = 'admin.php'; "; 
echo "</script>";
}

//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
	$order_id = $_POST["order_id"];
	$customer_id = $_POST["customer_id"];
	$employee_id = $_POST["employee_id"];
	$order_date = $_POST["order_date"];
  $required_date = $_POST["required_date"];	
  $shipped_date = $_POST["shipped_date"];	
  $ship_via = $_POST["ship_via"];	
  $freight = $_POST["freight"];	
  $ship_name = $_POST["ship_name"];	
  $ship_address = $_POST["ship_address"];	
  $ship_city = $_POST["ship_city"];	
  $ship_region = $_POST["ship_region"];	
  $ship_postalcode = $_POST["ship_postalcode"];	
  $ship_country = $_POST["ship_country"];	


//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
	
	$sql = "UPDATE orders SET  
			customer_id='$customer_id' ,
			employee_id='$employee_id' , 
			order_date='$order_date' ,
			required_date='$required_date' , 
      shipped_date='$shipped_date' ,
      ship_via='$ship_via' ,
      freight='$freight' ,
      ship_name='$ship_name' ,
      ship_address='$ship_address' ,
      ship_city='$ship_city' ,
      ship_region='$ship_region' ,
      ship_postalcode='$ship_postalcode' ,
      ship_country='$ship_country' 
			WHERE order_id='$order_id' ";

$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());

mysqli_close($conn); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Update Succesfuly');";
	echo "window.location = 'adminorder.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
        echo "window.location = 'adminorder.php'; ";
	echo "</script>";
}
?>