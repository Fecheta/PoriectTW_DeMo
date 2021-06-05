<?php

    session_start();

    include_once __DIR__ . "/User.php";
    include_once __DIR__ . "/database.util.php";

    function getUser($username, $password){
        $db = new Database();

        $user = $db->getVizitatorAccount($username);

        if ($user) {
            if ($username === $user["username"] && password_verify($password, $user["password"])) {
                return new User($user["username"], $user["password"], $user["id_user"]);
            }
        }
        return null;
    }

    function getUserAdmin($username, $password){
        $db = new Database();

        $user = $db->getAdminAccount($username);

        if ($user) {
            if ($username === $user["username"] && password_verify($password, $user["password"])) {
                return new User($user["username"], $user["password"], $user["id_user"]);
            }
        }
        return null;
    }

    function getLoggedInUser() {
        if(isset($_SESSION["username_vizitator"]) && isset($_SESSION["password_vizitator"])){
            return new User($_SESSION["username_vizitator"], $_SESSION["password_vizitator"], $_SESSION["id_vizitator"]);
        }
        return null;
    }

    function getLoggedInAdmin() {
        if(isset($_SESSION["username_admin"]) && isset($_SESSION["password_admin"])){
            return new User($_SESSION["username_admin"], $_SESSION["password_admin"], $_SESSION["id_admin"]);
        }
        return null;
    }

    function login($username, $password, $idUser){
        $_SESSION["username_vizitator"] = $username;
        $_SESSION["password_vizitator"] = $password;
        $_SESSION["id_vizitator"] = $idUser;
    }

    function loginAdmin($username, $password, $idUser){
        $_SESSION["username_admin"] = $username;
        $_SESSION["password_admin"] = $password;
        $_SESSION["id_admin"] = $idUser;
    }

?>