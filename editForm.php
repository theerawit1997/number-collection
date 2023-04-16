<?php
require("dbconnect.php");
$id = $_GET["id"];
$sql = "SELECT * FROM employees WHERE id = $id";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลพนักงาน</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container my-3">
        <h2 class="text-center">แบบฟอร์มแก้ไขข้อมูล</h2>
        <form action="updateData.php" method="POST">
            <input type="hidden" value="<?php echo $row["id"]; ?>" name="id">
            <div class="form-group">
                <label class="form-label" for="prefix">คำนำหน้า</label>
                <select class="form-select" type="text" name="prefix">
                    <?php if ($row["prefix"] == "นาย") { ?>
                        <option value="นาย">นาย</option>
                    <?php } else if ($row["prefix"] == "นางสาว") { ?>
                        <option value="นาย">นางสาว</option>
                    <?php } else if ($row["prefix"] == "นาง") { ?>
                        <option value="นางสาว">นาง</option>
                    <?php } else { ?>
                        <option value="ไม่กำหนด">ไม่กำหนด</option>
                    <?php } ?>
                    <option value="ไม่กำหนด">ไม่กำหนด</option>
                    <option value="นาย">นาย</option>
                    <option value="นางสาว">นางสาว</option>
                    <option value="นาง">นาง</option>
                </select>
            </div>
            <div class="form-group">
                <label for="firstname">ชื่อ</label>
                <input type="text" name="fname" id="" class="form-control" value="<?php echo $row["fname"]; ?>">
            </div>
            <div class="form-group">
                <label for="lastname">นามสกุล</label>
                <input type="text" name="lname" id="" class="form-control" value="<?php echo $row["lname"] ?>">
            </div>
            <div class="form-group">
                <label class="form-label" for="department">แผนก</label>
                <select class="form-select" name="department">
                    <?php if ($row["department"] == "แผนกผู้ป่วยใน") { ?>
                        <option value="แผนกผู้ป่วยใน">แผนกผู้ป่วยใน</option>
                    <?php } else if ($row["department"] == "แผนกผู้ป่วยนอก") { ?>
                        <option value="แผนกผู้ป่วยนอก">แผนกผู้ป่วยนอก</option>
                    <?php } else { ?>
                        <option value="ไม่กำหนด">ไม่กำหนด</option>
                    <?php } ?>
                    <option value="ไม่กำหนด">ไม่กำหนด</option>
                    <option value="แผนกผู้ป่วยใน">แผนกผู้ป่วยใน</option>
                    <option value="แผนกผู้ป่วยใน">แผนกผู้ป่วยนอก</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label" for="position">ตำแหน่ง</label>
                <select class="form-select" name="position">
                    <?php if ($row["position"] == "พยาบาล") { ?>
                        <option value="พยาบาล">พยาบาล</option>
                    <?php } else if ($row["position"] == "แพทย์") { ?>
                        <option value="แพทย์ว">แพทย์</option>
                    <?php } else if ($row["position"] == "เจ้าหน้าที่") { ?>
                        <option value="เจ้าหน้าที่">เจ้าหน้าที่</option>
                    <?php } else { ?>
                        <option value="ไม่กำหนด">ไม่กำหนด</option>
                    <?php } ?>
                    <option value="ไม่กำหนด">ไม่กำหนด</option>
                    <option value="พยาบาล">พยาบาล</option>
                    <option value="แพทย์">แพทย์</option>
                    <option value="เจ้าหน้าที่">เจ้าหน้าที่</option>
                </select>
            </div>
            <div class="form-group">
                <label for="lastname">เบอร์โทรศัพท์</label>
                <input type="text" name="tel" id="" class="form-control" value="<?php echo $row["tel"] ?>">
            </div>
            <input type="submit" value="อัปเดตข้อมูล" class="btn btn-success" onclick="return confirm('บันทึกสำเร็จ')">
            <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
            <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
        </form>
    </div>
</body>

</html>