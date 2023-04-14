<?php
include("db/db_connect.php");
// $sql = "SELECT * FROM `info`";
$sql = "SELECT * FROM `info` ORDER BY fname ASC";
$result = mysqli_query($connect, $sql);
$count = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลพนักงาน</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center">ข้อมูลพนักงานในฐานข้อมูล</h1>
        <hr>
        <?php if ($count > 0) { ?>
            <form action="/function/searchData.php" class="form-group" method="POST">
                <label for="">ค้นหาพนักงาน</label>
                <input type="text" placeholder="ป้อนชื่อพนักงาน" name="search" class="form-control">
                <input type="submit" value="Search" class="btn btn-dark my-2">
            </form>
            <form class="form-group">
                <a href="function/insertForm.php" class="btn btn-success">เพิ่มข้อมูลพนักงาน</a>
            </form>
            <table class="table table-bordered table-light table-striped table-hover">
                <thead>
                    <tr>
                        <th style="width:8%;">Prefix</th>
                        <th style="width:16%;">Name</th>
                        <th style="width:16%;">Surname</th>
                        <th style="width:10%;">Dept</th>
                        <th style="width:10%;">Position</th>
                        <th style="width:16%;">tel</th>
                        <th style="width:10%">details</th>
                        <th style="width:7%;"></th>
                        <th style="width:7%;"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row["prefix"]; ?></td>
                            <td><?php echo $row["fname"]; ?></td>
                            <td><?php echo $row["lname"]; ?></td>
                            <td><?php echo $row["department"]; ?></td>
                            <td><?php echo $row["position"]; ?></td>
                            <td><?php echo $row["tel"]; ?></td>
                            <td><?php echo $row["details"]; ?></td>
                            <td>
                                <a href="function/editForm.php? ided=<?php echo $row["id"] ?>" class="btn btn-primary">แก้ไขข้อมูล</a>
                            </td>
                            <td>
                                <a href="db/deleteQueryString.php? idre=<?php echo $row["id"]; ?>" class="btn btn-danger" onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่')">ลบข้อมูล</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        <?php } else { ?>
            <div class="alert alert-danger">
                <b>ไม่มีข้อมูลพนักงาน !!!<b>
            </div>
        <?php } ?>
        </form>
    </div>
</body>

<script>

</script>

</html>