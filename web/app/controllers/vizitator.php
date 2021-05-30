<?php

include_once __DIR__ . "/../models/auth.util.php";

class Vizitator extends Controller{

    public function index1($data = []){
        $view = $this->view('vizitator/index1', $data);
    }

    public function index($data = []){
        $user = getLoggedInUser();

        if ($user) {
            $view = $this->view('vizitator/index', $data);
        }
        else{
            $view = $this->view("startPages/LoginPage", $user);
        }
    }

    public function istoric($data = []){
        $view = $this->view('vizitator/istoric', $data);
    }

    public function viziteaza($data = []){
        $view = $this->view('vizitator/viziteaza', $data);
    }

    public function cauta($data = []){
        $view = $this->view('vizitator/cauta', $data);
    }

    public function despre($data = []){
        $view = $this->view('vizitator/despre', $data);
    }

    public function profil($data = []){
        require_once __DIR__ . "/../models/database.util.php";
        $db = new Database();
        $cod = $_POST["cod"];
        // echo $_POST["cod"];
        // return;
        $res = $db->testFindById($cod);

        $view = $this->view('vizitator/profil', $res);
    }
}

?>