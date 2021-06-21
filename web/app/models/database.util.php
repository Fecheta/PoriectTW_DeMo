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

        public function getAllDetinuti(){
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

        public function getAdminAccount($username){
            $stmt = $this->conn->prepare("SELECT * FROM cont_administrator WHERE username = ?");
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

        public function registerVisit($idDetinut, $idUser1, $idUser2, $idUser3, $data, $ora, $relatia, $scop){
            $idProgramare = rand(10000, 20000);
            $status = 0;
            $motiv = null;

            $stmt = $this->conn->prepare("INSERT INTO programari VALUES( ? , ? , ? , ? , ? , ? , ? , ? , ? , ?, ? )");
            $stmt->bind_param("iiiiissssis", $idProgramare, $idDetinut, $idUser1, $idUser2, $idUser3, $data, $ora, $relatia, $scop, $status, $motiv);

            if(trim($idUser2) == ""){
                $idUser2 = null;
            }

            if(trim($idUser3) == ""){
                $idUser3 = null;
            }

            $stmt->execute();
            $stmt->close();

            return $idProgramare;
        }

        public function getProgramari($idUser){
            $stmt = $this->conn->prepare("SELECT * FROM programari WHERE id_user1 = ? OR id_user2 = ? OR id_user3 = ? ORDER BY status");
            $stmt->bind_param("iii", $idUser, $idUser, $idUser);
            $stmt->execute();
            $result = $stmt->get_result();
            $stmt->close();

            return $result;
        }

        public function getAllProgramari(){
            $stmt = $this->conn->prepare("SELECT * FROM programari ORDER BY 
                                                                    FIELD(status, 0, 1, -1)");
            $stmt->execute();
            $result = $stmt->get_result();
            $stmt->close();

            return $result;
        }

        public function getVizite($idUser){
            $stmt = $this->conn->prepare("SELECT * FROM vizite WHERE id_user1 = ? OR id_user2 = ? OR id_user3 = ? ORDER BY status");
            $stmt->bind_param("iii", $idUser, $idUser, $idUser);
            $stmt->execute();
            $result = $stmt->get_result();
            $stmt->close();

            return $result;
        }

        public function getAllVizite(){
            $stmt = $this->conn->prepare("SELECT * FROM vizite");
            $stmt->execute();
            $result = $stmt->get_result();
            $stmt->close();

            return $result;
        }


        public function findDetinutById($id){
            $stmt = $this->conn->prepare("SELECT * FROM detinuti WHERE id_detinut = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            $stmt->close();

            return $result->fetch_assoc();
        }

        public function findUserById($id){
            $stmt = $this->conn->prepare("SELECT * FROM user WHERE id_user = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            $stmt->close();

            return $result->fetch_assoc();
        }

        public function insertDetinut($nume, $prenume, $CNP, $varsta, $dataNastere, $infractiuneComisa, $pedeapsaPrimita, $pedeapsaRamasa, $dataCondamnarii, $poza, $gen){
            $idDetinut = rand(1000, 10000);
            
            $stmt = $this->conn->prepare("INSERT INTO detinuti VALUES( ? , ? , ? , ? , ? , ? , ? , ? , ? , ?, ?, ?)");
            $stmt->bind_param("issiisssssss", $idDetinut, $nume, $prenume, $CNP, $varsta, $dataNastere, $infractiuneComisa, $pedeapsaPrimita, $pedeapsaRamasa, $dataCondamnarii, $poza, $gen);
            $stmt->execute();
            $stmt->close();

            return $idDetinut;
        }

        public function updateStatusProgramare($idProgramare, $status, $motiv){
            $stmt = $this->conn->prepare("UPDATE programari SET status = ?, motiv_neaprobare = ? WHERE id_programare = ?");
            $stmt->bind_param("isi", $status, $motiv ,$idProgramare);
            $stmt->execute();
            $stmt->close();
        }
        public function updateVizitaCons($idVizita, $status, $oferit,$primit,$rezumat,$spirit,$sanatate){
            $stmt = $this->conn->prepare("UPDATE vizite SET status = ?, oferit = ?, primit = ?, rezumat = ?, stare_de_spirit = ?, stare_de_sanatate = ? WHERE id_vizita = ?");
            $stmt->bind_param("isssssi",  $status, $oferit,$primit,$rezumat,$spirit,$sanatate,$idVizita);
            $stmt->execute();
            $stmt->close();
        }

        public function registerCont($idCont, $user, $pass, $idUser){
            $stmt = $this->conn->prepare("INSERT INTO cont_vizitator VALUES( ? , ? , ? , ? )");
            $stmt->bind_param("issi", $idCont, $user, $pass, $idUser);
            $stmt->execute();
            $stmt->close();
        }


        public function registerUser($id, $fname, $lname, $CNP ,$birth, $varsta ,$photo, $gen ){   
            $stmt = $this->conn->prepare("INSERT INTO user VALUES( ? , ? , ? , ? , ? , ? , ? , ? )");
            $stmt->bind_param("issssiss", $id, $fname, $lname, $CNP, $birth, $varsta, $photo, $gen);
            $stmt->execute();
            $stmt->close();
        }

        public function getAllUser(){
            $stmt = $this->conn->prepare("SELECT * FROM user");
            $stmt->execute();
            $result = $stmt->get_result();
            $stmt->close();

            return $result;
        }

        public function makeTop($luna, $ordine, $tip, $categorie){
            $users = $this->getAllUser();
            $list = array();

            while ($row = $users->fetch_assoc()) {
                $stmt = $this->conn->prepare("SELECT * FROM vizite WHERE (id_user1 = ? OR id_user2 = ? OR id_user3 = ?) AND (data > current_date - INTERVAL ? MONTH)");
                $stmt->bind_param("iiii", $row["id_user"], $row["id_user"], $row["id_user"], $luna);
                $stmt->execute();
                $result = $stmt->get_result();
                $nr = $result->num_rows;
                $stmt->close();

                $list[] = array("id"=>$row["id_user"], "nume"=>$row["first_name"], "prenume"=>$row["last_name"], "poza"=>$row["photo"], "nr_vizite"=>$nr);
            }

            $nr_vizite = array_column($list, 'nr_vizite');
            if ($ordine === "DESC") {
                array_multisort($nr_vizite, SORT_ASC, $list);
            } else {
                array_multisort($nr_vizite, SORT_DESC, $list);
            }
            return $list;

        }

        
        public function updatePrgoramariVizite(){
            $stmt = $this->conn->prepare("SELECT * FROM programari WHERE (data <= current_date - INTERVAL 2 DAY) AND status=1");
            $stmt->execute();
            $resultProg = $stmt->get_result();
            $stmt->close();

            $status = 0;
            while($row = $resultProg->fetch_assoc()){
                $stmt = $this->conn->prepare("INSERT INTO vizite
                (id_vizita, id_detinut, id_user1, id_user2, id_user3, data, ora, natura_vzitei, relatia_cu_detinutul, status)
                VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("iiiiissssi", $row["id_programare"], $row["id_detinut"], $row["id_user1"],
                                                $row["id_user2"], $row["id_user3"], $row["data"], $row["ora"],
                                                $row["natura_vzitei"],$row["relatia_cu_detinutul"], $status);
                $stmt->execute();
                $stmt->close();

                // $stmt = $this->conn->prepare("DELETE FROM programari WHERE id_programare = ?");
                // $stmt->bind_param("i", $row["id_programare"]);
                // $stmt->execute();
                // $stmt->close();
            }
        }


    }

?>