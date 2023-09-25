<?php
    class userController{
        private $userModel;
        function __construct(){
            require "models/userModel.php";
            $this->userModel = new userModel;
        }

        function index(){
            include "views/home.php";
        }

        function login(){
            if(isset($_POST["login"])){
                $tentaikhoan = $_POST["tentaikhoan"];
                $matkhau = $_POST["matkhau"];
                if(empty($tentaikhoan) || empty($matkhau)){
                    echo "<script>alert('Vui lòng nhập đầy đủ thông tin !');</script>";
                }else{
                    $check = $this->userModel->checkLogin($tentaikhoan, $matkhau);
                    if($check > 0){
                        $_SESSION["tentaikhoan"] = $tentaikhoan;
                        $_SESSION["idquyen"] = $check['idquyen'];
                        header("location: index.php");
                    }else{
                        $error = "Sai tên tài khoản hoặc mật khẩu";
                    }
                }
            }
            return include "views/user/login.php";
        }

        function register(){
            if(isset($_POST["register"])){
                $tentaikhoan = $_POST["tentaikhoan"];
                $matkhau = $_POST["matkhau"];
                $repeatmatkhau = $_POST['repeatmatkhau'];
                $idquyen = $_POST['idquyen'];
                if(empty($tentaikhoan) || empty($matkhau) || empty($repeatmatkhau)){
                    $error = "Vui lòng nhập đầy đủ thông tin";
                }else{
                if($repeatmatkhau == $matkhau){
                    if($this->userModel->checkRegister($tentaikhoan) == 0){
                        $this->userModel->register($tentaikhoan, $matkhau, $idquyen);
                        $_SESSION["tentaikhoan"] = $tentaikhoan;
                        $_SESSION['idquyen'] = $idquyen;
                        header("location: index.php");
                    }else{
                        // echo "<script>alert('Tài khoản đã tồn tại!');</script>";
                        $error = "Tài khoản đã tồn tại";
                    }
                }else{
                    $error = "Mật khẩu lặp lại không trùng với mật khẩu trước đó";
                }
            }
            }
            return include "views/user/register.php";
    }

        function logout(){
            session_destroy();
            header("location: index.php");
        }
    }
?>