<?php
require('dbconnect.php');

$name = $_POST["empname"]; //หาชื่อ

$sql = "SELECT * FROM employees WHERE (prefix LIKE '%$name%')OR(fname LIKE '%$name%')OR(lname LIKE '%$name%')OR(department LIKE '%$name%')OR(position LIKE '%$name%')OR(tel LIKE '%$name%') ORDER BY fname ASC";

$result = mysqli_query($connect, $sql);
$count = mysqli_num_rows($result);
$order = 1;
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
            <form action="searchData.php" class="form-group" method="POST">
                <label for="">ค้นหาพนักงาน</label>
                <input type="text" placeholder="ค้นหาพนักงาน" name="empname" class="form-control">
                <input type="submit" value="Search" class="btn btn-dark my-2">
            </form>
            <table class="table table-bordered table-striped table-hover hover-info table-Light">
                <thead>
                    <tr>
                        <th>ลำดับที่</th>
                        <th>คำนำหน้า</th>
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
                        <th>แผนก</th>
                        <th>ตำแหน่ง</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>แก้ไขข้อมูล</th>
                        <th>ลบข้อมูล</th>
                        <th>Checkbox</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $order++; ?></td>
                            <td><?php echo $row["prefix"]; ?></td>
                            <td><?php echo $row["fname"]; ?></td>
                            <td><?php echo $row["lname"]; ?></td>
                            <td><?php echo $row["department"]; ?></td>
                            <td><?php echo $row["position"]; ?></td>
                            <td><?php echo $row["tel"]; ?></td>
                            <td>
                                <a href="editForm.php?id=<?php echo $row["id"] ?>" class="btn btn-primary">แก้ไข</a>
                            </td>
                            <td>
                                <a href="deleteQueryString.php?idemp=<?php echo $row["id"]; ?>" class="btn btn-danger" onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่')">ลบข้อมูล</a>
                            </td>
                            <form action="multipleDelete.php" method="post">
                                <td>
                                    <input type="checkbox" class="form-control" name="idcheckbox[]" value="<?php echo $row["id"]; ?>">
                                </td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        <?php } else { ?>
            <div class="alert alert-danger">
                <b>ไม่พบข้อมูลที่ค้นหา !!!<b>
            </div>
        <?php } ?>
        <a href="index.php" class="btn btn-success">กลับหน้าแรก</a>
        <?php if ($count > 0) { ?>
            <input type="submit" value="ลบข้อมูล (Checkbox)" class="btn btn-danger" onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่')">
        <?php } ?>
        </form>
    </div>
</body>

</html>