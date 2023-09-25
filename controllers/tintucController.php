
<?php
    class tintucController{
        private $tintucModel;

        function __construct(){
            include "views/header.php";
            require "models/tintucModel.php";
            $this->tintucModel = new tintucModel;
        }

        function chitiet(){
            $idtintuc = $_GET['id'];
            $tintuc = mysqli_fetch_all($this->tintucModel->getTinTucByID($idtintuc));
            $description = $tintuc[0][4];
            $title = $tintuc[0][3];
            $idloaitin = $tintuc[0][7];
            $loaitin = $this->tintucModel->getLoaitinByID($idloaitin);
            $tintucmoinhat = $this->tintucModel->get3TinTucMoiNhat();
            $tintucnoibat = $this->tintucModel->getTinNoiBat();
            $comment = $this->tintucModel->getComment($idtintuc);
            $this->tintucModel->tangView($idtintuc);
            if(isset($_POST['comment'])){
                $tentaikhoan = $_SESSION['tentaikhoan'];
                $noidungcomment = $_POST['noidungcomment'];
                $ngaycomment = date('y,m,d H:i:s');
                $this->tintucModel->comment($idtintuc, $tentaikhoan, $noidungcomment, $ngaycomment);
                header("location: ?controller=tintuc&action=chitiet&id=$idtintuc");
            }
            return include "views/tintuc/detail.php";
        }

        function getTinTucByLoaiTin(){
            $idloaitin = $_GET['id'];
            $loaitin = $this->tintucModel->getAllLoaiTin();
            $loaitinbyid = $this->tintucModel->getLoaitinByID($idloaitin);
            $data = $this->tintucModel->getTinTucByLoaiTin($idloaitin);
            return include "views/tintuc/list.php";
        }

    }
?>