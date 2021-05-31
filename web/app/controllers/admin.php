<?php

class Admin extends Controller{

   

    public function index($data = []){
        
        $view = $this->view('admin/index',$data);
    }

    public function IstoricVizite($data = []){
        $view = $this->view('admin/IstoricVizite', $data);
    }
    public function ProfilDetinu($data = []){
        $view = $this->view('admin/ProfilDetinut', $data);
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
}

?>