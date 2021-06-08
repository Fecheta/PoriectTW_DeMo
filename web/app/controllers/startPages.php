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
        

        $firstname;
        $lastname;
        $username;
        $password;
        $year;
        $month;
        $data;
        $gender;
        global $idVizitator;
        global $idUser;

       
            if( isset($_POST["firstname"]) && isset($_POST["lastname"]) &&
                isset($_POST["password"]) && isset($_POST["year"]) &&
                isset($_POST["month"]) && isset($_POST["data"]) &&
                isset($_POST["gender"]) )
            {

             $firstname=$_POST['firstname'];
             $lastname=$_POST['lastname'];
             $username = $_POST['username'];
             $password = $_POST['password'];
             $year = $_POST['year'];
             $month =$_POST['month'];
             $data = $_POST['data'];
             $gender = $_POST['gender'];
                 



                $db = new Database();
                if(isset($_POST["register"])){
                    $view = $this->view('startPages/LoginPage');
                    $idUser =  $db->registerVizitator($idVizitator, $username, $password, $idUser);
                    $db->registerUser($idUser, $firstname, $lastname, $CNP, $birthdata, $varsta, $photo, $gen);

                    return;
                }
               

                $view = $this->view('startPages/LoginPage');
            } else {
                $view = $this->view('startPages/SignUpPage');
            }
    }
        }







    }

    public function LoginPageAdmin($data = []){
        $admin = getLoggedInAdmin();

        if ($admin) {
            $view = $this->view('admin/index', $data);
            header('Location: /admin/index');
            // print_r($admin);
        } else {
            $view = $this->view('startPages/LoginPageAdmin', $data);
        }
    }

    public function index($data = []){
        $view = $this->view('startPages/index', $data);
    }
}

?>