<?php

    session_start();

    include_once __DIR__ . "/User.php";
    include_once __DIR__ . "/database.util.php";

    function getUser($username, $password){
        $db = new Database();

        $user = $db->getVizitatorAccount($username);

        if ($user) {
            if ($username === $user["username"] && password_verify($password, $user["password"])) {
                return new User($user["username"], $user["password"]);
            }
        }
        

        return null;
    }

    function getLoggedInUser() {
        if(isset($_SESSION["username_vizitator"]) && isset($_SESSION["password_vizitator"])){
            return getUser($_SESSION["username_vizitator"], $_SESSION["password_vizitator"]);
        }
        return null;
    }

    function login($username, $password){
        $_SESSION["username_vizitator"] = $username;
        $_SESSION["password_vizitator"] = $password;
    }

?>