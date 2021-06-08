<?php
include_once __DIR__ . "/../models/auth.util.php";
require_once __DIR__ . "/../models/database.util.php";

class Admin extends Controller{

   

    public function index($data = []){
        
        $view = $this->view('admin/index',$data);
    }


    

    public function AdaugaDetinut($data = []){
        $nume;
        $prenume;
        $CNP;
        $varsta;
        $dataNastere;
        $infractiuneComisa;
        $pedeapsaPrimita;
        $pedeapsaRamasa;
        $dataCondamnarii;
        $poza;
        $gen;



        $admin = getLoggedInAdmin();
        global $idDetinut;

        if ($admin) {
            if( isset($_POST["nume"]) && isset($_POST["prenume"]) &&
                isset($_POST["CNP"]) && isset($_POST["varsta"]) &&
                isset($_POST["dataNastere"]) && isset($_POST["infractiuneComisa"]) &&
                isset($_POST["pedeapsaPrimita"]) && isset($_POST["pedeapsaRamasa"]) && 
                isset($_POST["dataCondamnarii"]) && isset($_FILES["poza"]) && isset($_POST["gen"]))
            {

                $nume = $_POST["nume"];
                $prenume = $_POST["prenume"];
                $CNP = $_POST["CNP"];
                $varsta = $_POST["varsta"];
                $dataNastere = $_POST["dataNastere"];
                $infractiuneComisa = $_POST["infractiuneComisa"];
                $pedeapsaPrimita = $_POST["pedeapsaPrimita"];
                $pedeapsaRamasa = $_POST["pedeapsaRamasa"];
                $dataCondamnarii = $_POST["dataCondamnarii"];
                $gen = $_POST["gen"];

                
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
                $idDetinut =  $db->insertDetinut($nume, $prenume, $CNP, $varsta,
                              $dataNastere, $infractiuneComisa,
                              $pedeapsaPrimita, $pedeapsaRamasa,
                              $dataCondamnarii, $poza, $gen);

                $view = $this->view('admin/AdaugaDetinut', array("status"=>"inserted", "idDetinut"=>$idDetinut));
            } else {
                $view = $this->view('admin/AdaugaDetinut', array("status"=>"form"));
            }
        } else {
            $view = $this->view("startPages/LoginPageAdmin", $data);
            header("Location: /startPages/LoginPageAdmin");
        }
    }

    public function Programari($data = []){
        $user = getLoggedInAdmin();
        $db = new Database();

        if($user){
            $motiv = isset($_POST["motiv"]) ? $_POST["motiv"] : null; 

            if(isset($_POST["accept"])){
                $view = $this->view('admin/Programari', array("message"=>"accepted", "id"=>$_POST["idProgramare"]));
                $db->updateStatusProgramare($_POST["idProgramare"], 1, $motiv);
                return;
            }
    
            if(isset($_POST["respinge"])){
                $view = $this->view('admin/Programari', array("message"=>"rejected", "id"=>$_POST["idProgramare"]));
                if ($motiv === null) {
                    $db->updateStatusProgramare($_POST["idProgramare"], -1, "nespecificat");
                } else {
                    $db->updateStatusProgramare($_POST["idProgramare"], -1, $motiv);
                }
                return;
            }

            $programare = $db->getAllProgramari($user->idUser);

            $detinut;
            $user1;
            $user2;
            $user3;

            $resultProg;

            while($row = $programare->fetch_assoc()){
                $detinut = $db->findDetinutById($row["id_detinut"]);
                $user1 = $db->findUserById($row["id_user1"]);
                $user2 = $db->findUserById($row["id_user2"]);
                $user3 = $db->findUserById($row["id_user3"]);

                $resultProg[] = ["programare"=>$row, "detinut"=>$detinut, "user1"=>$user1, "user2"=>$user2, "user3"=>$user3];
            }

            $view = $this->view('admin/Programari', array("programari"=>$resultProg, "user"=>$user));
        } else {
            $view = $this->view("startPages/LoginPageAdmin", $data);
            header("Location: /startPages/LoginPageAdmin");
        }
    }

    public function VizualizareDetinuti($data = []){
        $user = getLoggedInAdmin();

        if ($user) {
            if(isset($_POST["name_cod"])){
                $name_cod = $_POST["name_cod"];
                $db = new Database();
                $result = $db->selectByNameOrCod($name_cod);
                $view = $this->view('admin/VizualizareDetinuti', array("user"=>$user, "data"=>$result));
            }

            $view = $this->view('admin/VizualizareDetinuti', array("user"=>$user));
        } else {
            $view = $this->view("startPages/LoginPageAdmin", $data);
            header("Location: /startPages/LoginPageAdmin");
        }
    }

    public function profil($data = []){
        $db = new Database();
        $cod = $_POST["cod"];
        // echo $_POST["cod"];
        // return;
        $res = $db->testFindById($cod);

        $view = $this->view('admin/profil', $res);
    }

    public function vizita($data = []){
        $db = new Database();
        $cod = $_POST["cod"];
        // echo $_POST["cod"];
        // return;
        $res = $db->testFindById($cod);

        $view = $this->view('admin/vizita', $res);
    }
}
public function IstoricVizite($data = []){
    $user = getLoggedInAdmin();

    if ($user) {
        $db = new Database();
        $vizita = $db->getAllVizite();
        $detinut;
        $user1;
        $user2;
        $user3;
        $resultVis;


        while($row = $vizita->fetch_assoc()){
            $detinut = $db->findDetinutById($row["id_detinut"]);
            $user1 = $db->findUserById($row["id_user1"]);
            $user2 = $db->findUserById($row["id_user2"]);
            $user3 = $db->findUserById($row["id_user3"]);

            $resultVis[] = ["vizita"=>$row, "detinut"=>$detinut, "user1"=>$user1, "user2"=>$user2, "user3"=>$user3];
        }

        $view = $this->view('admin/IstoricVizite', array( "vizite"=>$resultVis, "user"=>$user));
    } else {
        $view = $this->view("startPages/LoginPageAdmin", $data);
        header("Location: /startPages/LoginPageAdmin");
    }
}

?>