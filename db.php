<?php

require_once 'config.php';

class Database extends Config
{
    public function insert($pre, $fname, $lname, $dep, $pos, $phone)
    {
        $sql = "INSERT INTO users(first_name, last_name, email, phone) VALUES(:fname, :lname, :email, :phone)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'pre' => $pre,
            'fname' => $fname,
            'lname' => $lname,
            'dep' => $dep,
            'pos' => $pos,
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

    public function update($id, $pre, $fname, $lname, $dep, $pos, $phone)
    {
        $sql = "UPDATE users SET prefix = :pre, first_name = :fname, last_name = :lname, department = :dep, position = :pos, phone = :phone WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'pre' => $pre,
            'fname' => $fname,
            'lname' => $lname,
            'dep' => $dep,
            'pos' => $pos,
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
