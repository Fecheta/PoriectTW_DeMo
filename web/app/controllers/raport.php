<?php

class Raport extends Controller{

    public function index($name = []){
        $view = $this->view('raport/index', $name);
    }
}

?>