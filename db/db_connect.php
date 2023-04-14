<?php
$db_host = "localhost";
$username = "root";
$pass = "M123456789";
$db_name = "info.no";
$connect = mysqli_connect($db_host, $username, $pass, $db_name) or die("Database connection error");

// $connect = mysqli_connect("localhost", "root", "M123456789", "info.no") or die("Database connection error");
