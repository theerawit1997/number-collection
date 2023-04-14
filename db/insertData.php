<?php
// เชื่อมต่อฐานข้อมูล
require("../db/insertData.php");

// รับค่าที่ส่งมาจากฟอร์มลงในตัวแปร
$prefix = $_POST["prefix"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$department = $_POST["department"];
$position = $_POST["position"];
$tel = $_POST["tel"];
$details = $_POST["details"];

// บันทึกข้อมูล
$sql = "INSERT INTO info(fname,lname,gender,skills) VALUES('$prefix','$fname','$lname','$department','$position','$tel','$details')";
// สั่งรันคำสั่ง sql
$result = mysqli_query($connect, $sql);

if ($result) {
    header("location:index.php");
    exit(0);
} else {
    echo "Failed to save data.";
}
