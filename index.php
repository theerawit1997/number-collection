<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=window-874" />
    <title>Num Save</title>
    <meta charset="utf-8">
    <style>
        * {
            box-sizing: border-box;
        }

        #myInput {
            background-image: url('/css/searchicon.png');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 16px;
            padding: 10px 16px 10px 30px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #myTable {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
            font-size: 16px;
        }

        #myTable th,
        #myTable td {
            text-align: left;
            padding: 12px;
        }

        #myTable tr {
            border-bottom: 1px solid #ddd;
        }

        #myTable tr.header,
        #myTable tr:hover {
            background-color: #f1f1f1;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Button used to open the contact form - fixed at the bottom of the page */
        .open-button {
            background-color: #555;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            opacity: 0.8;
            /* position: fixed;
            bottom: 23px;
            right: 28px;
            width: 280px; */
        }

        /* The popup form - hidden by default */
        .form-popup {
            display: none;
            /* position: fixed;
            bottom: 0;
            right: 15px;            
            z-index: 9; */
            border: 3px solid #f1f1f1;
        }

        /* Add styles to the form container */
        .form-container {
            max-width: 800px;
            padding: 10px;
            background-color: white;
        }

        /* Full-width input fields */
        .form-container input[type=text],
        .form-container input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
        }

        /* When the inputs get focus, do something */
        .form-container input[type=text]:focus,
        .form-container input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Set a style for the submit/login button */
        .form-container .btn {
            background-color: #04AA6D;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-bottom: 10px;
            opacity: 0.8;
        }

        /* Add a red background color to the cancel button */
        .form-container .cancel {
            background-color: red;
        }

        /* Add some hover effects to buttons */
        .form-container .btn:hover,
        .open-button:hover {
            opacity: 1;
        }

        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 2px 2px;
            cursor: pointer;
        }

        .button2 {
            background-color: #008CBA;
        }

        .button3 {
            background-color: #f44336;
        }

        .button4 {
            background-color: #e7e7e7;
            color: black;
        }

        .button5 {
            background-color: #555555;
        }
    </style>
</head>

<body>

    <p id="tmp"></p>

    <div class="form-popup" id="myForm">
        <form action="#" class="form-container">
            <h1>เพิ่มข้อมูล</h1>
            <label for="Prefix">คำนำหน้า</label>
            <select id="Prefix" name="Prefix" onclick="FunctionSearch()">
                <option value="Prefix1">นาย</option>
                <option value="Prefix2">นางสาว</option>
                <option value="Prefix3">นาง</option>
                <option value="Prefix4">นายแพทย์</option>
                <option value="Prefix5">แพทย์หญิง</option>
                <option value="Prefix6">นางพยาบาล</option>
            </select>
            <br><br>

            <label for="Name">First name:</label>
            <input type="text" id="Name" name="Name" onclick="FunctionSearch()">
            <br><br>

            <label for="Surname">Last name:</label>
            <input type="text" id="Surname" name="Surname">
            <br><br>

            <label for="Dept">แผนก</label>
            <select id="Dept" name="Dept">
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
            <br><br>

            <label for="Position">ตำแหน่ง</label>
            <select id="Position" name="Position">
                <option value="Position1">ศาสตราจารย์</option>
                <option value="Position2">รองศาสตราจารย์</option>
                <option value="Position3">ผู้ช่วยศาสตราจารย์</option>
                <option value="Position4">อาจารย์</option>
                <option value="Position5">นักวิจัย</option>
                <option value="Position6">พยาบาล</option>
                <option value="Position7">แพทย์</option>
                <option value="Position8">เจ้าหน้าที่</option>
            </select>
            <br><br>

            <label for="tel">tel:</label>
            <input type="text" id="tel" name="tel">
            <br><br>
            <button type="submit" class="btn" onclick="FunctionAdd()">เพิ่มข้อมูล</button>
            <button type="button" class="btn cancel" onclick="closeForm()">ปิดหน้าต่าง</button>
        </form>
    </div>

    <div class="container">
        <input type="text" id="myInput" onkeyup="FunctionSearch()" placeholder="Search for names..">
        <button class="open-button" onclick="FunctionInfoAd()">เพิ่มข้อมูล</button>
    </div>

    <table id="myTable">
        <thead>
            <tr class="header">
                <th style="width:8%;">Prefix</th>
                <th style="width:16%;">Name</th>
                <th style="width:16%;">Surname</th>
                <th style="width:10%;">Dept</th>
                <th style="width:10%;">Position</th>
                <th style="width:16%;">tel</th>
                <th style="width:10%">details</th>
                <th style="width:14%;"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                $conn = mysqli_connect("localhost", "root", "M123456789", "db2");
                if (!$conn) {
                    die("Connect Error");
                }
                $sql = "SELECT * FROM `info`";
                $result = $conn->query($sql);
                $tmp1 = "<td>";
                $tmp2 = "</td>";
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            $tmp1" . $row["Prefix"] . "$tmp2
                            $tmp1" . $row["Name"] . "$tmp2
                            $tmp1" . $row["Surname"] . "$tmp2
                            $tmp1" . $row["Dept"] . "$tmp2
                            $tmp1" . $row["Position"] . "$tmp2
                            $tmp1" . $row["tel"] . "$tmp2
                            $tmp1" . $row["details"] . "$tmp2
                            <td>
                                <button onclick='FunctionEdit()'class='button button2'>แก้ไขข้อมูล</button>
                                <button onclick='FunctionRemove()' class='button button3'>ลบข้อมูล</button>
                            </td>    
                        </tr>";
                    }
                } else {
                    echo '<tr><td>"No Data Available"</td></tr>';
                }

                ?>
            </tr>
        </tbody>
    </table>

    <script>
        function FunctionSearch() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

        function FunctionAdd() {
            document.getElementById("tmp").innerHTML = "1";
        }

        function FunctionEdit() {
            document.getElementById("tmp").innerHTML = "2";
        }

        function FunctionRemove() {
            document.getElementById("tmp").innerHTML = "3";
        }

        function FunctionInfoAd() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>

</body>

</html>