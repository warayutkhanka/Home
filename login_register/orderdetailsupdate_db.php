<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('connectdb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

//ตรวจสอบถ้าว่างให้เด้งไปหน้าหลักและไม่แก้ไขข้อมูล
if($_POST["order_id"]==''){
echo "<script type='text/javascript'>"; 
echo "alert('Error Contact Admin !!');"; 
echo "window.location = 'adminorder_details.php'; "; 
echo "</script>";
}

//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
	$order_id = $_POST["order_id"];
	$product_id = $_POST["product_id"];
	$unit_price = $_POST["unit_price"];
	$quantity = $_POST["quantity"];
  $discount = $_POST["discount"];	
 
//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
	
	$sql = "UPDATE orderdetails SET  
			product_id='$product_id' ,
			unit_price='$unit_price' , 
			quantity='$quantity' ,
			discount='$discount' 
			WHERE order_id='$order_id' ";

$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());

mysqli_close($conn); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Update Succesfuly');";
	echo "window.location = 'adminorder_details.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
        echo "window.location = 'adminorder_details.php'; ";
	echo "</script>";
}
?>