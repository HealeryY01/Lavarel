<?php
//Bài tập OOP
class User
{
    private $username;
    private $password;
    private $db_username = "unitop";
    private $db_password = "unitop!@#";

    public function setInfo($username, $password)
    {
        //Nhập giá trị của $username, $password
        $this->username = $username;
        $this->password = $password;
    }

    function checkLogin()
    {
        //Kiểm tra thông tin nhập vào với thông tin $db_username và $db_password
        /*
        Nếu khớp thông tin: Xuất lên mạnh hình "Xin chào: unitop";
        Ngược lại : Xuất lên màn hình "User không tồn tại trên hệ thống";
        */

        if ($this->username == $this->db_username && $this->password == $this->db_password) {
            echo "Xin chào:" . $this->username;
        } else {
            echo "User không tồn tại trên hệ thống";
        }
    }
}
$u = new User;
$u->setInfo("unitop", "unitop!@#");
$u->checkLogin();
