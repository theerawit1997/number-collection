<?php

require_once "db.php";
require_once "util.php";

$db = new Database();
$util = new Util();

if (isset($_POST['add'])) {
    $prefix = $util->testInput($_POST['prefix']);
    $fname = $util->testInput($_POST['fname']);
    $lname = $util->testInput($_POST['lname']);
    $department = $util->testInput($_POST['department']);
    $position = $util->testInput($_POST['position']);
    $phone = $util->testInput($_POST['phone']);

    if ($db->insert($prefix, $fname, $lname, $department, $position, $phone)) {
        echo $util->showMessage("success", "User inserted successfully!");
    } else {
        echo $util->showMessage("danger", "Something went wrong!");
    }
}

if (isset($_GET['read'])) {
    $users = $db->read();
    $output = '';
    if ($users) {
        foreach ($users as $row) {
            $output .= '<tr>
                            <td>' . $row['id'] . '</td>
                            <td>' . $row['prefix'] . '</td>
                            <td>' . $row['first_name'] . '</td>
                            <td>' . $row['last_name'] . '</td>
                            <td>' . $row['department'] . '</td>
                            <td>' . $row['position'] . '</td>
                            <td>' . $row['phone'] . '</td>
                            <td>
                                <a href="#" id="' . $row['id'] . '" class="btn btn-success btn-sm rounded-pull py-0 editlink" data-bs-toggle="modal" data-bs-target="#editUserModal">Edit</a>
                                <a href="#" id="' . $row['id'] . '" class="btn btn-danger btn-sm rounded-pull py-0 deletelink">Delete</a>
                            </td>
                </tr>';
        }
        echo $output;
    } else {
        echo '<tr>
                <td colspan="8">No users found in the Database</td>
            </tr>';
    }
}

if (isset($_GET['edit'])) {
    $id = $_GET['id'];
    $user = $db->readOne($id);
    echo json_encode($user);
}

if (isset($_POST['update'])) {
    $id = $util->testInput($_POST['id']);
    $prefix = $util->testInput($_POST['prefix']);
    $fname = $util->testInput($_POST['fname']);
    $lname = $util->testInput($_POST['lname']);
    $department = $util->testInput($_POST['department']);
    $position = $util->testInput($_POST['position']);
    $phone = $util->testInput($_POST['phone']);

    if ($db->update($id, $prefix, $fname, $lname, $department, $position, $phone)) {
        echo $util->showMessage("success", "User updated successfully!");
    } else {
        echo $util->showMessage("danger", "Something went wrong!");
    }
}

if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    if ($db->delete($id)) {
        echo $util->showMessage("info", "User deleted successfully!");
    } else {
        echo $util->showMessage("danger", "Something went wrong!");
    }
}
