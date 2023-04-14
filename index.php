<?php
include("db/db_connect.php");
$sql = "SELECT * FROM `info`";
$result = mysqli_query($connect, $sql);
$count = mysqli_num_rows($result);
$order = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=window-874" />
    <title>number-collection</title>
    <meta charset="utf-8">
    <style>
        /*  */
    </style>
</head>

<body>
    <!-- เทสฟังชั่น  -->
    <p id="tmp"></p>
    <!-- ------ -->
    <div class="container">
        <h1 class="text-center">ข้อมูลพนักงานในฐานข้อมูล</h1>
    </div>



</body>
<script>
</script>

</html>