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
            <div class="dropdown">
                <label for="prefix">คำนำหน้า</label>
                <select type="text" id="" name="prefix">
                    <option value="Prefix0">ไม่กำหนด</option>
                    <option value="Prefix1">นาย</option>
                    <option value="Prefix2">นางสาว</option>
                    <option value="Prefix3">นาง</option>
                    <option value="Prefix4">นายแพทย์</option>
                    <option value="Prefix5">แพทย์หญิง</option>
                    <option value="Prefix6">นางพยาบาล</option>
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
            <div class="dropdown">
                <label for="department">แผนก</label>
                <select id="" name="department">
                    <option value="Dept0">ไม่กำหนด</option>
                    <option value="Dept1">แผนกผู้ป่วยใน</option>
                    <option value="Dept2">แผนกผู้ป่วยนอก</option>
                    <option value="Dept3">แผนกฉุกเฉินและอุบัติเหตุ</option>
                    <option value="Dept4">แผนกจิตเวช</option>
                    <option value="Dept5">แผนกผู้ป่วยหนัก</option>
                    <option value="Dept6">แผนกรังสี</option>
                    <option value="Dept7">แผนกเภสัชกรรม</option>
                    <option value="Dept8">แผนกห้องปฏิบัติการทางการแพทย์ </option>
                    <option value="Dept9">แผนกศัลยกรรม</option>
                    <option value="Dept10">แผนกวิสัญญี</option>
                    <option value="Dept11">แผนกสูตินรีเวช</option>
                    <option value="Dept12">แผนกเวชศาสตร์ฟื้นฟู</option>
                    <option value="Dept13">แผนกกุมารเวช</option>
                    <option value="Dept14">แผนกอายุรกรรม</option>
                    <option value="Dept15">แผนกจักษุ</option>
                    <option value="Dept16">แผนกหู คอ จมูก</option>
                </select>
            </div>
            <div class="dropdown">
                <label for="position">ตำแหน่ง</label>
                <select id="" name="position">
                    <option value="Position0">ไม่กำหนด</option>
                    <option value="Position1">ศาสตราจารย์</option>
                    <option value="Position2">รองศาสตราจารย์</option>
                    <option value="Position3">ผู้ช่วยศาสตราจารย์</option>
                    <option value="Position4">อาจารย์</option>
                    <option value="Position5">นักวิจัย</option>
                    <option value="Position6">พยาบาล</option>
                    <option value="Position7">แพทย์</option>
                    <option value="Position8">เจ้าหน้าที่</option>
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