<?php

    class Database{
        private $hostname = "us-cdbr-east-03.cleardb.com";
        private $username = "b2d8f581f3e0f5";
        private $password = "f8a7a47e";
        private $dbname = "heroku_08132accc9fc692";

        private $conn;

        public function __construct(){
            $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);

            if($this->conn->connect_error){
                echo "Nu ma pot conecta la baza de date... " . $this->conn->connect_error;
            }
        }

        public function testSelect(){
            $sql = "SELECT * FROM detinuti";
            $result = mysqli_query($this->conn, $sql);
    
            return $result;
        }

        public function testFindById($id){
            $sql = "SELECT * FROM detinuti WHERE id_detinut = " . $id;
            $result = $this->conn->query($sql);

            return $result;
        }

        public function getVizitatorAccount($username){
            $stmt = $this->conn->prepare("SELECT * FROM cont_vizitator WHERE username = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();

            $stmt->close();

            return $result->fetch_assoc();
        }

        public function selectByNameOrCod($name_cod){

            if(!is_numeric($name_cod)){
                $split = explode(" ", $name_cod);
                if (count($split) >= 2) {
                    $stmt = $this->conn->prepare("SELECT * FROM detinuti WHERE nume = ? AND prenume = ? OR nume = ? AND prenume = ?");
                    $stmt->bind_param("ssss", $split[0], $split[1], $split[1], $split[0]);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                    return $result;
                } else {
                    $stmt = $this->conn->prepare("SELECT * FROM detinuti WHERE nume = ? OR prenume = ?");
                    $stmt->bind_param("ss", $split[0], $split[0]);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                    return $result;
                }
            } else {
                $stmt = $this->conn->prepare("SELECT * FROM detinuti WHERE id_detinut = ?");
                $stmt->bind_param("i", $name_cod);
                $stmt->execute();
                $result = $stmt->get_result();
                $stmt->close();
                return $result;
            }

            return null;
        }

        public function selectByNameOrCodUser($name_cod){

            if(!is_numeric($name_cod)){
                $split = explode(" ", $name_cod);
                if (count($split) >= 2) {
                    $stmt = $this->conn->prepare("SELECT * FROM user WHERE first_name = ? AND last_name = ? OR first_name = ? AND last_name = ?");
                    $stmt->bind_param("ssss", $split[0], $split[1], $split[1], $split[0]);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                    return $result;
                } else {
                    $stmt = $this->conn->prepare("SELECT * FROM user WHERE first_name = ? OR last_name = ?");
                    $stmt->bind_param("ss", $split[0], $split[0]);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                    return $result;
                }
            } else {
                $stmt = $this->conn->prepare("SELECT * FROM user WHERE id_user = ?");
                $stmt->bind_param("i", $name_cod);
                $stmt->execute();
                $result = $stmt->get_result();
                $stmt->close();
                return $result;
            }

            return null;
        }

    }

?>