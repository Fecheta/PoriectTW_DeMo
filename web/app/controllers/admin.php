<?php
include_once __DIR__ . "/../models/auth.util.php";
class Admin extends Controller{

   

    public function index($data = []){
        
        $view = $this->view('admin/index',$data);
    }

    public function IstoricVizite($data = []){
        $view = $this->view('admin/IstoricVizite', $data);
    }
    

    public function DetaliiCont($data = []){
        $view = $this->view('admin/DetaliiCont', $data);
    }

    public function Programari($data = []){
        $view = $this->view('admin/Programari', $data);
    }

    public function VizualizareDetinuti($data = []){
        $view = $this->view('admin/VizualizareDetinuti', $data);
    }
    public function profil($data = []){
        require_once __DIR__ . "/../models/database.util.php";
        $db = new Database();
        $cod = $_POST["cod"];
        // echo $_POST["cod"];
        // return;
        $res = $db->testFindById($cod);

        $view = $this->view('admin/profil', $res);
    }
}

?>