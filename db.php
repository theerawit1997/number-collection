<?php

require_once 'config.php';

class Database extends Config
{
    public function insert($prefix, $fname, $lname, $department, $position, $phone)
    {
        $sql = "INSERT INTO users(prefix, first_name, last_name, department, position, phone) VALUES(:prefix, :first_name, :last_name, :department, :position, :phone)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'prefix' => $prefix,
            'fname' => $fname,
            'lname' => $lname,
            'department' => $department,
            'position' => $position,
            'phone' => $phone
        ]);
        return true;
    }

    public function read()
    {
        $sql = "SELECT * FROM users ORDER BY id DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function readOne($id)
    {
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        $result = $stmt->fetch();
        return $result;
    }

    public function update($id, $prefix, $fname, $lname, $department, $position, $phone)
    {
        // $sql = "UPDATE users SET first_name = :fname, last_name = :lname, email = :email, phone = :phone WHERE id = :id";
        $sql = "UPDATE users SET prefix = :prefix, first_name = :first_name, last_name = :last_name, department = :department, position = :position, phone = :phone WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'prefix' => $prefix,
            'fname' => $fname,
            'lname' => $lname,
            'department' => $department,
            'position' => $position,
            'phone' => $phone,
            'id' => $id,
        ]);
        return true;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return true;
    }
}
