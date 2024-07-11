<?php
require "config.php";
class DB
{
    public $conn;
    function __construct()
    {
        $this->connection();
    }
    //Connection
    function connection()
    {
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($this->conn->connect_error) {
            die("Kết nối cơ sở dữ liệu không thành công:" . $this->conn->connect_error);
        }
        // echo "Đã kết nối cơ sở dữ liệu thành công";
    }

    function escape_string($str)
    {
        return $this->conn->real_escape_string($str);
    }
    //Run Query

    function query($sql)
    {
        return $this->conn->query($sql);
    }


    //Insert
    function insert($table, $data)
    {
        foreach ($data as $k => $v) {
            $list_field[] = "`{$k}`";
            $list_value[] = "'{$this->escape_string($v)}'";
        }
        $list_field = implode(',', $list_field);
        $list_value = implode(',', $list_value);

        $sql = "INSERT INTO {$table} ({$list_field}) VALUES ({$list_value})";


        if ($this->query($sql) == TRUE) {
            return $this->conn->insert_id;
        } else {
            echo "Lỗi:" . $this->conn->error;
        }
    }
    //Select
    //SELECT column1.column2,...
    //FROM table_name WHERE
    function get($table, $field = array(), $where = "")
    {
        $field = !empty($field) ? implode(',', $field) : "*";
        $where = !empty($where) ? "WHERE {$where}" : "";

        $sql = "SELECT {$field} FROM {$table} {$where}";
        echo $sql;
        $result = $this->query($sql);
        if ($result->num_rows > 0) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            if (count($data) > 1)
                return $data;
            return $data[0];
        } else {
            echo "Không tìm thấy bản ghi nào ";
        }
    }
    //Update
    //UPDATE table_name
    //SET column1 = value1, column2=value2, ....
    //WHERE condition;
    function update($table, $data = array(), $where = "")
    {
        $data_insert = array();
        foreach ($data as $k => $v) {
            $data_insert[] = "`{$k}`='{$v}'";
        }
        $data_insert = implode(',', $data_insert);
        $where = !empty($where) ? "WHERE {$where}" : "";

        $sql = "UPDATE {$table} SET {$data_insert} {$where}";
        if ($this->query($sql) == TRUE) {
            echo "Cập nhật thành công";
        } else {
            echo "Lỗi:" . $this->conn->error;
        }
    }
    //DELETE
    //DELETE FROM table_name WHERE condition;
    function delete($table, $where = "")
    {
        $where = !empty($where) ? "WHERE {$where}" : "";
        $sql = "DELETE FROM {$table} {$where}";
        if ($this->query($sql) == TRUE)
            return 1;

        else {
            echo "Lỗi: " . $this->conn->error;
        }
    }
}

$db = new DB;
$data = array(
    'username' => 'Nguyễn Thế Hiệu',
    'password' => md5('Hieu1!!@#'),
);
// echo $db->insert('users', $data);
// $db->connection();
// $users = $db->update('users', $data, 'id=1');

$db->delete('users', 'id=2');

// echo "<pre>";
// print_r($users);
// echo "</pre>";


// echo $users['username'];
