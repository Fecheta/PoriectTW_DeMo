<?php

class StartPages extends Controller{

    public function LoginPage($data = []){
        $view = $this->view('startPages/LoginPage', $data);
    }

    public function SignUpPage($data = []){
        
        $view = $this->view('startPages/SignUpPage',$data);
    }

    public function AdministratorPage($data = []){
        $view = $this->view('startPages/AdministratorPage', $data);
    }

    public function index($data = []){
        $view = $this->view('startPages/index', $data);
    }
}

?>