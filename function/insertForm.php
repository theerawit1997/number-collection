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
        <form action="../db/insertData.php" method="POST">
            <div class="form-group">
                <label for="prefix">คำนำหน้า</label>
                <select type="text" id="" name="prefix">
                    <option value="ไม่กำหนด">ไม่กำหนด</option>
                    <option value="นาย">นาย</option>
                    <option value="นางสาว">นางสาว</option>
                    <option value="นาง">นาง</option>
                    <option value="Pนายแพทย์">นายแพทย์</option>
                    <option value="แพทย์หญิง">แพทย์หญิง</option>
                    <option value="นางพยาบาล">นางพยาบาล</option>
                </select>
            </div>
            <div class="form-group">
                <label for="firstname">ชื่อ</label>
                <input type="text" name="fname" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="lastname">นามสกุล</label>
                <input type="text" name="lname" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="department">แผนก</label>
                <select id="" name="department">
                    <option value="ไม่กำหนด">ไม่กำหนด</option>
                    <option value="แผนกผู้ป่วยใน">แผนกผู้ป่วยใน</option>
                    <option value="แผนกผู้ป่วยใน">แผนกผู้ป่วยนอก</option>
                    <option value="แผนกฉุกเฉินและอุบัติเหตุ">แผนกฉุกเฉินและอุบัติเหตุ</option>
                    <option value="แผนกจิตเวช">แผนกจิตเวช</option>
                    <option value="แผนกผู้ป่วยหนัก">แผนกผู้ป่วยหนัก</option>
                    <option value="แผนกรังสี">แผนกรังสี</option>
                    <option value="แผนกเภสัชกรรม">แผนกเภสัชกรรม</option>
                    <option value="แผนกห้องปฏิบัติการทางการแพทย์">แผนกห้องปฏิบัติการทางการแพทย์ </option>
                    <option value="แผนกศัลยกรรม">แผนกศัลยกรรม</option>
                    <option value="แผนกวิสัญญี">แผนกวิสัญญี</option>
                    <option value="แผนกสูตินรีเวช">แผนกสูตินรีเวช</option>
                    <option value="แผนกเวชศาสตร์ฟื้นฟู">แผนกเวชศาสตร์ฟื้นฟู</option>
                    <option value="แผนกกุมารเวช">แผนกกุมารเวช</option>
                    <option value="แผนกอายุรกรรม">แผนกอายุรกรรม</option>
                    <option value="แผนกจักษุ">แผนกจักษุ</option>
                    <option value="แผนกหู คอ จมูก">แผนกหู คอ จมูก</option>
                </select>
            </div>
            <div class="form-group">
                <label for="position">ตำแหน่ง</label>
                <select id="" name="position">
                    <option value="ไม่กำหนด">ไม่กำหนด</option>
                    <option value="ศาสตราจารย์">ศาสตราจารย์</option>
                    <option value="รองศาสตราจารย์">รองศาสตราจารย์</option>
                    <option value="ผู้ช่วยศาสตราจารย์">ผู้ช่วยศาสตราจารย์</option>
                    <option value="อาจารย์">อาจารย์</option>
                    <option value="นักวิจัย">นักวิจัย</option>
                    <option value="พยาบาล">พยาบาล</option>
                    <option value="แพทย์">แพทย์</option>
                    <option value="เจ้าหน้าที่">เจ้าหน้าที่</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tel">tel:</label>
                <input type="text" id="" name="tel" class="form-control">
            </div>
            <div class="form-group">
                <label for="details">details:</label>
                <input type="text" id="" name="details" class="form-control">
            </div>
            <input type="submit" value="บันทึกข้อมูล" class="btn btn-success">
            <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
            <a href="../index.php" class="btn btn-primary">กลับหน้าแรก</a>
        </form>
    </div>
</body>

</html>