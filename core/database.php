<?php
    class database{        
        private $hostname = "localhost";
        private $username = "root";
        private $pass = "";
        private $dbname = "doan2";

        private $conn = NULL;
        private $result = NULL;

        public function __construct()
        {
            $this->conn = new mysqli($this->hostname, $this->username, $this->pass, $this->dbname);
            if(!$this->conn)
            {
                echo "kết nối database thất bại";
                exit();
            }else
            {
            mysqli_set_charset($this->conn, 'utf8');
            }
        }

        // hàm thực hiện câu truy vấn query, lấy dữ liệu từ database
        public function execute($sql)
        {
            $this->result = $this->conn->query($sql);
            return $this->result;
        }

        function getAllLoaiTin(){
            $sql = "SELECT * FROM loaitin ORDER BY idloaitin DESC";
            return $this->execute($sql);
        }

        function getAllTinTuc(){
            $sql = "SELECT * FROM tintuc ORDER BY ngaydang DESC";
            return $this->execute($sql);
        }

        function getLoaitinByID($idloaitin){
            $sql = "SELECT tenloaitin FROM loaitin WHERE idloaitin = '$idloaitin'";
            return mysqli_fetch_array($this->execute($sql));
        }

        function getTinTucByID($idtintuc){
            $sql = "SELECT * FROM tintuc WHERE idtintuc = '$idtintuc'";
            return $this->execute($sql);
        }

        function get3TinTucMoiNhat(){
            $sql = "SELECT * FROM tintuc ORDER BY ngaydang DESC LIMIT 3";
            return $this->execute($sql);
        }

        function getTinNoiBat(){
            $sql = "SELECT * FROM tintuc ORDER BY views DESC";
            return $this->execute($sql);
        }


    }
?>