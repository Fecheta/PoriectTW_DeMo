<?php

include_once __DIR__ . "/../models/auth.util.php";

class StartPages extends Controller{

    public function LoginPage($data = []){
        $user = getLoggedInUser();

        if($user){
            $view = $this->view('vizitator/index', $data);
            header('Location: /vizitator/index');
        } else {
            $view = $this->view('startPages/LoginPage', $data);
        }
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