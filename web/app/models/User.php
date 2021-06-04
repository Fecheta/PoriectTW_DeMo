<?php

    class User{
        public $name;
        public $password;
        public $idUser;

        public function __construct($name, $password, $idUser){
            $this->name = $name;
            $this->password = $password;
            $this->idUser = $idUser;
        }

        public function setName($name){
            $this->name = strtoupper($name);
        }

        public function getName(){
            return $this->name;
        }
    }

?>