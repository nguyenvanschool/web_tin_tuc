<?php
    class tintucModel extends database{
        function getTinTucByLoaiTin($idloaitin){
            $sql = "SELECT * FROM tintuc WHERE loaitin = '$idloaitin'";
            return $this->execute($sql);
        }

        function tangView($idtintuc){
            $sql = "UPDATE tintuc SET views = views + 1 WHERE idtintuc = '$idtintuc'";
            return $this->execute($sql);
        }

        function comment($idtintuc, $tentaikhoan, $noidungcomment, $ngaycomment){
            $sql = "INSERT INTO comment (tentaikhoan, noidungcomment, ngaycomment, idtintuc) 
            VALUES ('$tentaikhoan', '$noidungcomment', '$ngaycomment', '$idtintuc')";
            return $this->execute($sql);
        }

        function getComment($idtintuc){
            $sql = "SELECT * FROM comment WHERE idtintuc = '$idtintuc' ORDER BY ngaycomment DESC";
            return $this->execute($sql);
        }
    }
?>