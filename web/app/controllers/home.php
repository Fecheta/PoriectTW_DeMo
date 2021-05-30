<?php

class Home extends Controller{

    public function index($name = []){
        array_push($name, '');
        array_push($name, '');

        $user = $this->model('User');
        $user->setName($name[0]);
        $name[0] = $user->getName();

        $view = $this->view('home/index', $name);
    }

    public function test(){
        echo 'test';
    }
}

?>