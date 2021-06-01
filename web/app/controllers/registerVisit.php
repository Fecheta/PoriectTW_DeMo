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
}

?>