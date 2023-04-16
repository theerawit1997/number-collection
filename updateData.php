<?php
require("dbconnect.php");

$id = $_POST["id"];

$prefix = $_POST["prefix"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$department = $_POST["department"];
$position = $_POST["position"];
$tel = $_POST["tel"];

$sql = "UPDATE employees SET 
prefix ='$prefix',
fname ='$fname',
lname='$lname',
department ='$department',
position='$position',
tel='$tel'  
WHERE id = $id";

$result = mysqli_query($connect, $sql);

if ($result) {
    header("location:index.php");
    exit(0);
} else {
    echo "เกิดข้อผิดพลาดเกิดขึ้น" . mysqli_error($connect);
}
