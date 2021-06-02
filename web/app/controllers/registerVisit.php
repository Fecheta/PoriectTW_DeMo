<?php

include_once __DIR__ . "/../models/auth.util.php";
require_once __DIR__ . "/../models/database.util.php";

class RegisterVisit extends Controller{
    public function detinut(){
        $result;

        if(isset($_POST["detinut"])){
            $db = new Database();
            $detinut = $db->selectByNameOrCod($_POST["detinut"]);
            if($detinut->num_rows == 1){
                $result = $detinut->fetch_assoc();
                echo json_encode(
                    array(
                        'found'=>true,
                        'cod'=>$result["id_detinut"],
                        'nume'=>$result["nume"],
                        'prenume'=>$result["prenume"],
                        'photo'=>$result["poza"],
                        'fapta'=> $result["infractiune_comisa"]
                    )
                );
            } else {
                echo json_encode(
                    array(
                        'found'=>false
                    )
                );
            }
        }
    }

    public function user(){
        $result;

        if (isset($_POST["user"])) {
            $db = new Database();
            $user = $db->selectByNameOrCodUser($_POST["user"]);

            if($user->num_rows == 1){
                $result = $user->fetch_assoc();
                echo json_encode(
                    array(
                        'found'=>true,
                        'cod'=>$result["id_user"],
                        'nume'=>$result["first_name"],
                        'prenume'=>$result["last_name"],
                        'photo'=>$result["photo"],
                    )
                );
            } else {
                echo json_encode(
                    array(
                        'found'=>false
                    )
                );
            }
        }
    }


    public function register(){
        $idProgramare = null;
        $idDetinut = isset($_POST["idDetinut"]) ? $_POST["idDetinut"] : '';
        $idUser1 = isset($_POST["idUser1"]) ? $_POST["idUser1"] : '';
        $idUser2 = isset($_POST["idUser2"]) ? $_POST["idUser2"] : '';
        $idUser3 = isset($_POST["idUser3"]) ? $_POST["idUser3"] : '';
        $dataVizita = isset($_POST["dataVizita"]) ? $_POST["dataVizita"] : '';
        $oraVizita = isset($_POST["oraVizita"]) ? $_POST["oraVizita"] : '';
        $relatie = isset($_POST["relatie"]) ? $_POST["relatie"] : '';
        $scop = isset($_POST["scop"]) ? $_POST["scop"] : '';

        $ok = true;
        $message = array();
        $db = new Database();

        if(!isset($_POST["idDetinut"]) || trim($idDetinut) == ""){
            $ok = false;
            $message[] = "Nu ai selectat un detinut";
        }

        if((!isset($_POST["idUser1"]) || trim($idUser1) == "") &&
                (!isset($_POST["idUser2"]) || trim($idUser2) == "") &&
                    (!isset($_POST["idUser3"]) || trim($idUser3) == ""))
        {
            $ok = false;
            $message[] = "Nu ai selectat un user";
        }

        if(!isset($_POST["dataVizita"]) || trim($dataVizita) == ""){
            $ok = false;
            $message[] = "Nu ai selectat o data";
        }

        if(!isset($_POST["oraVizita"]) || trim($oraVizita) == ""){
            $ok = false;
            $message[] = "Nu ai selectat o ora";
        }

        if(!isset($_POST["relatie"]) || trim($relatie) == ""){
            $ok = false;
            $message[] = "Nu ai selectat o relatie de rudenie";
        }

        if(!isset($_POST["scop"]) || trim($scop) == ""){
            $ok = false;
            $message[] = "Nu ai selectat un scop al vizitei";
        }

        if($ok){
            $idProgramare = $db->registerVisit($idDetinut, $idUser1, $idUser2, $idUser3, $dataVizita, $oraVizita, $relatie, $scop);

            echo json_encode(
                array(
                    "ok"=>$ok,
                    "messages"=>$message,
                    "idProgramare"=>$idProgramare
                )
            );
        } else {
            echo json_encode(
                array(
                    "ok"=>$ok,
                    "messages"=>$message,
                )
            );
        }
    }



}

?>