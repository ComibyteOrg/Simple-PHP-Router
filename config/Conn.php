<?php 
    namespace Config;
    use mysqli;
    class Conn{
        protected $conn;
        private $db_name = "jptsresult";
        private $db_user = "root";
        private $db_pass = "";
        private $db_host = "localhost";
        private $db_port = 4306;

        public function __construct(){
            $this->conn = new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name, $this->db_port);

            if(mysqli_connect_errno()){
                echo "Database Could Not Connect". mysqli_connect_error();
            }

        }
    }