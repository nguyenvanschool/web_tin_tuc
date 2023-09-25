<?php
    class homeModel extends database{
        function search($key){
            $sql = "SELECT * FROM tintuc WHERE tieude LIKE '%$key%'";
            return $this->execute($sql);
        }
        function getTinTuc($tungtrang, $tintuctungtrang){
            $sql = "SELECT * FROM tintuc ORDER BY ngaydang LIMIT $tungtrang, $tintuctungtrang";
            return $this->execute($sql);
        }
    }
?>