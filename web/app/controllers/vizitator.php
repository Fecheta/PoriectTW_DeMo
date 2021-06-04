<?php

include_once __DIR__ . "/../models/auth.util.php";
require_once __DIR__ . "/../models/database.util.php";

class Vizitator extends Controller{

    public function index1($data = []){
        $view = $this->view('vizitator/index1', $data);
    }

    public function index($data = []){
        $user = getLoggedInUser();

        if ($user) {
            $view = $this->view('vizitator/index', array("user" => $user));
        }
        else{
            $view = $this->view("startPages/LoginPage", $data);
            header("Location: /startPages/LoginPage");
        }
    }

    public function istoric($data = []){
        $user = getLoggedInUser();

        if ($user) {
            $db = new Database();
            $programare = $db->getProgramari($user->idUser);
            $detinut;
            $user1;
            $user2;
            $user3;
            $result;

            while($row = $programare->fetch_assoc()){
                $detinut = $db->findDetinutById($row["id_detinut"]);
                $user1 = $db->findUserById($row["id_user1"]);
                $user2 = $db->findUserById($row["id_user2"]);
                $user3 = $db->findUserById($row["id_user3"]);

                $result[] = ["programare"=>$row, "detinut"=>$detinut, "user1"=>$user1, "user2"=>$user2, "user3"=>$user3];
            }

            $view = $this->view('vizitator/istoric', array("programari"=>$result));
        } else {
            $view = $this->view("startPages/LoginPage", $data);
            header("Location: /startPages/LoginPage");
        }
    }

    public function viziteaza($data = []){
        $view = $this->view('vizitator/viziteaza', $data);
    }

    public function cauta($data = []){
        $user = getLoggedInUser();

        if($user){
            if(isset($_POST["name_cod"])){
                $name_cod = $_POST["name_cod"];
                $db = new Database();
                $result = $db->selectByNameOrCod($name_cod);
                $view = $this->view('vizitator/cauta', array("user"=>$user, "data"=>$result));
            }

            $view = $this->view('vizitator/cauta', array("user"=>$user));
        }else{
            $view = $this->view("startPages/LoginPage", $data);
            header("Location: /startPages/LoginPage");
        }
    }

    public function despre($data = []){
        $view = $this->view('vizitator/despre', $data);
    }

    public function profil($data = []){
        $db = new Database();
        $cod = $_POST["cod"];
        // echo $_POST["cod"];
        // return;
        $res = $db->testFindById($cod);

        $view = $this->view('vizitator/profil', $res);
    }
}

?>