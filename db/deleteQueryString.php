<?php
require('db_connect.php');

$id = $_GET["idemp"];

$sql = "DELETE FROM info WHERE id =$id";

$result = mysqli_query($connect, $sql);

if ($result) {
    header("location:../index.php");
    exit(0);
} else {
    echo "data deletion failed";
}
