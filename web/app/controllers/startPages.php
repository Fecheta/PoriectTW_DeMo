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
        
       
        

        $firstname;
        $lastname;
        $username;
        $password;
        $birthdata;
        $gender;
        $poza;
        $idUser;

       
            if( isset($_POST["firstname"]) && isset($_POST["lastname"]) &&
                isset($_POST["password"]) && isset($_POST["birthday"]) &&
                isset($_POST["gender"]) )
            {

             $firstname=$_POST['firstname'];
             $lastname=$_POST['lastname'];
             $username = $_POST['username'];
             $password = $_POST['password'];
             $password_enc =password_hash($password, PASSWORD_DEFAULT, ["const"=>10]);


             $birthdata = $_POST['birthday'];
             $gender = $_POST['gender'];

             $file = $_FILES["poza"];
             $fileName = $_FILES["poza"]["name"];
             $tempName = $_FILES["poza"]["tmp_name"];
             $fileSize = $_FILES["poza"]["size"];
             $type = $_FILES["poza"]["type"];
             $error = $_FILES["poza"]["error"];

             $ext = explode(".", $fileName);
             $poza = uniqid('', true) . '.' . end($ext);

             $to = __DIR__ . "/../../public/images/".$poza;
             move_uploaded_file($tempName, $to);

                 



                $db = new Database();
                
                  
                    $idUser =  $db->registerVizitator($username, $password_enc);
                    $db->registerUser($idUser, $firstname, $lastname, $birthdata, $poza, $gender);
                    $view = $this->view('startPages/SignUpPage', array("id"=>$idUser));
                   
                
               

                
            } else {
                $view = $this->view('startPages/SignUpPage',$data);
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