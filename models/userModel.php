<?php
    class userModel extends database{
        function checkLogin($tentaikhoan, $matkhau){
            $sql = "SELECT * FROM users WHERE tentaikhoan = '$tentaikhoan' AND matkhau = '$matkhau'";
            return mysqli_fetch_array($this->execute($sql));
        }

        function checkRegister($tentaikhoan){
            $sql = "SELECT * FROM users WHERE tentaikhoan = '$tentaikhoan'";
            return mysqli_fetch_array($this->execute($sql));
        }
        
        function register($tentaikhoan, $matkhau, $idquyen){
            $sql = "INSERT INTO users (tentaikhoan, matkhau, idquyen) VALUES ('$tentaikhoan', '$matkhau', $idquyen)";
            return $this->execute($sql);
        }
    }
?>