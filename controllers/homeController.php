
<?php
    class homeController{
        private $homeModel;
        function __construct(){
            include "views/header.php"; 
            require "models/homeModel.php";
            $this->homeModel = new homeModel;
            if(isset($_GET['search'])){
                $key = $_GET['key'];
                $data = mysqli_fetch_array($this->homeModel->search($key));
            }
            
        }

        function index(){
            $title = "Trang chủ";
            echo "
            <html>
            <head>
                    <title>$title</title>
            </head>
        </html>
            ";
            $loaitin = $this->homeModel->getAllLoaiTin();
            $tintucmoinhat = mysqli_fetch_all($this->homeModel->get3TinTucMoiNhat());
            $tintucnoibat = $this->homeModel->getTinNoiBat();
            $tintuc = $this->homeModel->getAllTinTuc();
            $tintuc_count = mysqli_num_rows($tintuc);
            $tintuc_button = ceil($tintuc_count/4);
            $tintuctungtrang = 8;
            if(isset($_GET['trang'])){
                $trang = $_GET['trang'];
            }else{
                $trang = 1;
            }
            $tungtrang = ($trang - 1) * $tintuctungtrang;
            return include "views/home.php";
        }

        function search(){
            $tintucnoibat = $this->homeModel->getTinNoiBat();
            $key = $_GET['key'];
            $data = $this->homeModel->search($key);
            include "views/tintuc/timkiem.php";
        }
    }
?>