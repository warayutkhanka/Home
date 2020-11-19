<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('connectdb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//สร้างตัวแปรสำหรับรับค่า order_id จากไฟล์แสดงข้อมูล
$order_id = $_REQUEST["order_id"];
 
//ลบข้อมูลออกจาก database ตาม order_id ที่ส่งมา
 
$sql = "DELETE FROM orders WHERE order_id='$order_id' ";
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
 
//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('Delete Succesfuly');";
  echo "window.location = 'adminorder.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to delete again');";
  echo "</script>";
}
?>