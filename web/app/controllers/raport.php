<?php

class Raport extends Controller{

    public function index($name = []){
        $view = $this->view('raport/index', $name);
    }

    public function tehnic($name = []){
        $view = $this->view('raport/tehnic', $name);
    }
}

?>