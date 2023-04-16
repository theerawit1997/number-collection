<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บันทึกข้อมูลพนักงาน</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container my-3">
        <h2 class="text-center">แบบฟอร์มบันทึกข้อมูล</h2>
        <form action="insertData.php" method="POST">
            <div class="form-group">
                <label class="form-label" for="prefix">คำนำหน้า</label>
                <select class="form-select" type="text" name="prefix">
                    <option value="ไม่กำหนด">ไม่กำหนด</option>
                    <option value="นาย">นาย</option>
                    <option value="นางสาว">นางสาว</option>
                    <option value="นาง">นาง</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label" for="firstname">ชื่อ</label>
                <input type="text" name="fname" id="" class="form-control">
            </div>
            <div class="form-group">
                <label class="form-label" for="lastname">นามสกุล</label>
                <input type="text" name="lname" id="" class="form-control">
            </div>
            <div class="form-group">
                <label class="form-label" for="department">แผนก</label>
                <select class="form-select" name="department">
                    <option value="ไม่กำหนด">ไม่กำหนด</option>
                    <option value="แผนกผู้ป่วยใน">แผนกผู้ป่วยใน</option>
                    <option value="แผนกผู้ป่วยใน">แผนกผู้ป่วยนอก</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label" for="position">ตำแหน่ง</label>
                <select class="form-select" name="position">
                    <option value="ไม่กำหนด">ไม่กำหนด</option>
                    <option value="พยาบาล">พยาบาล</option>
                    <option value="แพทย์">แพทย์</option>
                    <option value="เจ้าหน้าที่">เจ้าหน้าที่</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label" for="tel">เบอร์โทรศัพท์</label>
                <input type="text" name="tel" id="" class="form-control">
            </div>
            <input type="submit" value="บันทึกข้อมูล" class="btn btn-success">
            <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
            <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
        </form>
    </div>
</body>

</html>