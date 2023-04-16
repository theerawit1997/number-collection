<?php
// เชื่อมต่อฐานข้อมูล
require('dbconnect.php');

// รับค่าที่ส่งมาจากฟอร์มลงในตัวแปร
$prefix = $_POST["prefix"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$department = $_POST["department"];
$position = $_POST["position"];
$tel = $_POST["tel"];

// บันทึกข้อมูล
$sql = "INSERT INTO employees(prefix,fname,lname,department,position,tel) 
VALUES('$prefix','$fname','$lname','$department','$position','$tel')";

$result = mysqli_query($connect, $sql); // สั่งรันคำสั่ง sql

if ($result) {
    header("location:index.php");
    exit(0);
} else {
    echo "เกิดข้อผิดพลาดเกิดขึ้น" . mysqli_error($connect);
}
