<?php

include_once __DIR__ . "/../models/auth.util.php";
include_once __DIR__ . "/../models/database.util.php";

class Auth extends Controller{
    
    public function login(){
        if(!isset($_POST["username"]) || !isset($_POST["password"])){
            echo "trebuie date pentru a te loga";//un view pentru bad request
            return;
        }

        $username = $_POST["username"];
        $password = $_POST["password"];

        $user = getUser($username, $password);

        if($user){
            // echo "Am gasit si logat user-ul<br>";
            // echo "Name: " . $user->name . "<br>Password: " . $user->password;

            // $start = microtime(true);
            // echo "<br> Hash 10: " . password_hash("boss10", PASSWORD_DEFAULT, ["cost"=>10]);
            // $end = microtime(true);

            // echo "<br> Time: " . round($end - $start, 4);
            // $hash = password_hash($user->password, PASSWORD_DEFAULT, ["cost"=>10]);
            // echo "<br>Hash: " . $hash;

            // if(password_verify("boss2", $hash)){
            //     echo "<br> Parola a fost identificata";
            // }else{
            //     echo "<br> Parola nu a fost identificata";
            // }
            login($username, $password);
            header("Location: /vizitator/index");
        }
        else{
            echo "Probleme";
        }
    }

    public function register(){

    }

    public function logout(){
        $_SESSION["username_vizitator"] = null;
        $_SESSION["password_vizitator"] = null;
        header("Location: /");
    }

}

?>