<?php
    class adminController{
        private $adminModel;
        function __construct(){
            require "models/adminModel.php";
            $this->adminModel = new adminModel;
        }

        function index(){
            $tentaikhoan = $_SESSION['tentaikhoan'];
            $data = mysqli_fetch_assoc($this->adminModel->getUser($tentaikhoan));
            return require_once "views/admin/index.php";
        }

        function loaitin(){
            $tentaikhoan = $_SESSION['tentaikhoan'];
            $data = mysqli_fetch_assoc($this->adminModel->getUser($tentaikhoan));
            $loaitin = $this->adminModel->getAllLoaiTin();
            return include "views/admin/loaitin/list.php";
        }

        function tintuc(){
            $tentaikhoan = $_SESSION['tentaikhoan'];
            $data = mysqli_fetch_assoc($this->adminModel->getUser($tentaikhoan));
            $tintuc = $this->adminModel->getAllTinTuc();
            return include "views/admin/tintuc/list.php";
        }

        function comment(){
            $tentaikhoan = $_SESSION['tentaikhoan'];
            $data = mysqli_fetch_assoc($this->adminModel->getUser($tentaikhoan));
            $comment = $this->adminModel->getAllComment();
            return include "views/admin/comment/list.php";
        }

        function themLoaiTin(){
            if(isset($_POST['addloaitin'])){
                $tenloaitin = $_POST['tenloaitin'];
                $check = $this->adminModel->checkLoaiTin($tenloaitin);
                if($check > 0){
                    $this->adminModel->themloaitin($tenloaitin);
                    header("location:index.php?controller=admin&action=loaitin");
                }else{
                    echo "Danh mục này đã tồn tại !!!";
                }
            }
            return include "views/admin/loaitin/them.php";
        }

        function xoaLoaiTin(){
            $idloaitin = $_GET["id"];
            $this->adminModel->xoaLoaitin($idloaitin);
            header("location: index.php?controller=admin&action=loaitin");
        }

        function suaLoaiTin(){
            $idloaitin = $_GET["id"];
            $loaitin = $this->adminModel->getLoaitinByID($idloaitin);
            if(isset($_POST['edit'])){
                $tenloaitin = $_POST['tenloaitin'];
                $this->adminModel->suaLoaitin($idloaitin, $tenloaitin);
                header("location:index.php?controller=admin&action=loaitin");
            }
            return include "views/admin/loaitin/edit.php";
        }

        function themTinTuc(){
            $loaitin = $this->adminModel->getAllLoaiTin();
            if(isset($_POST['add'])){
                $loaitin = $_POST['loaitin'];
                $tieude = $_POST['tieude'];
                $tomtat = $_POST['tomtat'];
                $noidung = $_POST['noidung'];
                $tacgia = $_SESSION['tentaikhoan'];
                $ngaydang = date('y,m,d H:i:s');
                $views = 0;
                if(isset($_FILES['hinhanh'])){
                    $hinhanh = $_FILES['hinhanh']['name'];
                    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
                    $hinhanh_path = "public/image/" . $hinhanh;
                    move_uploaded_file($hinhanh_tmp, $hinhanh_path);
                    if($this->adminModel->themTintuc($loaitin, $tieude, $tomtat, $noidung, $hinhanh, $tacgia, $ngaydang, $views)){
                        header("location:index.php?controller=admin&action=tintuc");
                    }
                }
            }
            return include "views/admin/tintuc/them.php";
        }

        function suaTinTuc(){
            $idtintuc = $_GET['id'];
            $loaitin = $this->adminModel->getAllLoaiTin();
            $tintuc = mysqli_fetch_array($this->adminModel->getTinTucByID($idtintuc));
            if(isset($_POST['edit'])){
                $loaitin = $_POST['loaitin'];
                $tieude = $_POST['tieude'];
                $tomtat = $_POST['tomtat'];
                $noidung = $_POST['noidung'];
                $tacgia = $_SESSION['tentaikhoan'];
                $ngaydang = date('y,m,d H:i:s');
                $views = 0;
                if($_FILES['hinhanh']['name'] == ''){
                    $hinhanh = $tintuc['hinhanh'];
                }else{
                    $hinhanh = $_FILES['hinhanh']['name']; 
                    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
                    $hinhanh_path = "public/image/" . $hinhanh;
                    move_uploaded_file($hinhanh_tmp, $hinhanh_path);
                }
                $this->adminModel->suaTintuc($idtintuc, $loaitin, $tieude, $tomtat, $noidung, $hinhanh);
                header("location:index.php?controller=admin&action=tintuc");
            }
            return include "views/admin/tintuc/edit.php";
        }

        function xoaTinTuc(){
            $idtintuc = $_GET["id"];
            $this->adminModel->xoaTinTuc($idtintuc);
            header("location:index.php?controller=admin&action=tintuc");
        }

        function xoaComment(){
            $idcomment = $_GET['id'];
            $this->adminModel->xoaComment($idcomment);
            header("location:index.php?controller=admin&action=comment");
        }
        function anComment(){
            $comment = $this->adminModel->getAllComment();
            $idcomment = $_GET['id'];
            $this->adminModel->anComment($idcomment);
            header("location:index.php?controller=admin&action=comment");
        }

        function hienComment(){
            $comment = $this->adminModel->getAllComment();
            $idcomment = $_GET['id'];
            $this->adminModel->hienComment($idcomment);
            header("location:index.php?controller=admin&action=comment");
        }
    }
?>