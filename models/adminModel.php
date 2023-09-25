<?php
    class adminModel extends database{
        function getUser($tentaikhoan){
            $sql = "SELECT * FROM users WHERE tentaikhoan = '$tentaikhoan'";
            return $this->execute($sql);
        }
        function checkLoaiTin($tenloaitin){
            $sql = "SELECT * FROM loaitin WHERE tenloaitin = '$tenloaitin'";
            return $this->execute($sql);
        }
        function themLoaiTin($tenloaitin){
            $sql = "INSERT INTO loaitin (tenloaitin) VALUE ('$tenloaitin')";
            return $this->execute($sql);
        }

        function xoaLoaitin($idloaitin){
            $sql = "DELETE FROM loaitin WHERE idloaitin = '$idloaitin'";
            return $this->execute($sql);
        }

        function suaLoaiTin($idloaitin, $tenloaitin){
            $sql = "UPDATE loaitin SET tenloaitin = '$tenloaitin' WHERE idloaitin = '$idloaitin'";
            return $this->execute($sql);
        }

        function xoaTinTuc($idtintuc){
            $sql = "DELETE FROM tintuc WHERE idtintuc = '$idtintuc'";
            return $this->execute($sql);
        }

        function themTintuc($loaitin, $tieude, $tomtat, $noidung, $hinhanh, $tacgia, $ngaydang, $views){
            $sql = "INSERT INTO tintuc (tieude, tomtat, noidung, hinhanh, loaitin, tacgia, ngaydang, views) VALUES 
            ('$tieude', '$tomtat', '$noidung', '$hinhanh', '$loaitin', '$tacgia', '$ngaydang', '$views')";
            return $this->execute($sql);
        }

        function suaTintuc($idtintuc, $loaitin, $tieude, $tomtat, $noidung, $hinhanh){
            $sql = "UPDATE tintuc SET tieude = '$tieude', tomtat = '$tomtat', noidung = '$noidung', hinhanh = '$hinhanh', loaitin = '$loaitin'
            WHERE idtintuc = '$idtintuc'";
            return $this->execute($sql);
        }

        function getAllComment(){
            $sql = "SELECT * FROM comment ORDER BY ngaycomment DESC";
            return $this->execute($sql);
        }

        function xoaComment($idcomment){
            $sql = "DELETE FROM comment WHERE idcomment = '$idcomment'";
            return $this->execute($sql);
        }

        function anComment($idcomment){
            $sql = "UPDATE comment SET status = '1' WHERE idcomment = '$idcomment'";
            return $this->execute($sql);
        }
        function hienComment($idcomment){
            $sql = "UPDATE comment SET status = '0' WHERE idcomment = '$idcomment'";
            return $this->execute($sql);
        }
    }
?>