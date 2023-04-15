<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>number-collection</title>
    <!-- <title>CRUD APP PDO OOP</title> -->
</head>

<body>

    <!-- Add New User Modal Start -->
    <div class="modal fade" tabindex="-1" id="addNewUserModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-header">Add New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="add-user-form" class="p-2" novalidate>
                        <div class="mb-3">
                            <label class="form-label" for="prefix">คำนำหน้า</label>
                            <select class="form-select" type="text" name="prefix">
                                <option value="ไม่กำหนด">ไม่กำหนด</option>
                                <option value="นาย">นาย</option>
                                <option value="นางสาว">นางสาว</option>
                                <option value="นาง">นาง</option>
                                <option value="นายแพทย์">นายแพทย์</option>
                                <option value="แพทย์หญิง">แพทย์หญิง</option>
                                <option value="นางพยาบาล">นางพยาบาล</option>
                            </select>
                        </div>
                        <div class="row mb-3 gx-3">
                            <div class="col">
                                <label class="form-label" for="first_name">ชื่อ</label>
                                <input type="text" name="fname" class="form-control form-control-lg" placeholder="Enter First Name" required>
                                <div class="invalid-feedback">First name is required!</div>
                            </div>
                            <div class="col">
                                <label class="form-label" for="last_name">นามสกุล</label>
                                <input type="text" name="lname" class="form-control form-control-lg" placeholder="Enter Last Name" required>
                                <div class="invalid-feedback">Last name is required!</div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="department">แผนก</label>
                            <select class="form-select" name="department">
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
                        <div class="mb-3">
                            <label class="form-label" for="position">ตำแหน่ง</label>
                            <select class="form-select" name="position">
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
                        <div class="mb-3">
                            <label class="form-label" for="phone">เบอร์โทรศัพท์</label>
                            <input type="text" name="phone" class="form-control form-control-lg" placeholder="Enter Phone" required>
                            <div class="invalid-feedback">Phone is required!</div>
                        </div>
                        <div class="mb-3">
                            <input type="submit" value="Add User" class="btn btn-primary btn-block btn-lg" id="add-user-btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Add New User Modal End -->

    <!-- Edit User Modal Start -->
    <div class="modal fade" tabindex="-1" id="editUserModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-header">Edit This User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="edit-user-form" class="p-2" novalidate>
                        <input type="hidden" name="id" id="id">
                        <div class="mb-3">
                            <label class="form-label" for="prefix">คำนำหน้า</label>
                            <select class="form-select" type=" text" id="prefix" name="prefix">
                                <option value="ไม่กำหนด">ไม่กำหนด</option>
                                <option value="นาย">นาย</option>
                                <option value="นางสาว">นางสาว</option>
                                <option value="นาง">นาง</option>
                                <option value="นายแพทย์">นายแพทย์</option>
                                <option value="แพทย์หญิง">แพทย์หญิง</option>
                                <option value="นางพยาบาล">นางพยาบาล</option>
                            </select>
                        </div>
                        <div class="row mb-3 gx-3">
                            <div class="col">
                                <label class="form-label" for="first_name">ชื่อ</label>
                                <input type="text" id="fname" name="fname" class="form-control form-control-lg" placeholder="Enter First Name" required>
                                <div class="invalid-feedback">First name is required!</div>
                            </div>
                            <div class="col">
                                <label class="form-label" for="last_name">นามสกุล</label>
                                <input type="text" id="lname" name="lname" class="form-control form-control-lg" placeholder="Enter Last Name" required>
                                <div class="invalid-feedback">Last name is required!</div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="department">แผนก</label>
                            <select class="form-select" id="department" name="department">
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
                        <div class="mb-3">
                            <label class="form-label" for="position">ตำแหน่ง</label>
                            <select class="form-select" id="position" name="position">
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
                        <div class="mb-3">
                            <label class="form-label" for="phone">เบอร์โทรศัพท์</label>
                            <input type="text" id="phone" name="phone" class="form-control form-control-lg" placeholder="Enter Phone" required>
                            <div class="invalid-feedback">Phone is required!</div>
                        </div>
                        <div class="mb-3">
                            <input type="submit" value="Edit User" class="btn btn-primary btn-block btn-lg" id="edit-user-btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit User Modal End -->

    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="text-primary">All users in the database</h4>
                </div>
                <div>
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#addNewUserModal">Add New User</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <div id="showAlert"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-striped table-boredered text-center">
                        <thead>
                            <tr>
                                <th style="width:5%;">ID</th>
                                <th style="width:10%;">คำนำหน้า</th>
                                <th style="width:20%;">ชื่อ</th>
                                <th style="width:20%;">นามสกุล</th>
                                <th style="width:10%;">แผนก</th>
                                <th style="width:10%;">ตำแหน่ง</th>
                                <th style="width:15%;">เบอร์โทรศัพท์</th>
                                <th style="width:10%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="main.js"></script>

</body>

</html>