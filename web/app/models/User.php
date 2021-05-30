<?php

    class User{
        public $name;
        public $password;

        public function __construct($name, $password){
            $this->name = $name;
            $this->password = $password;
        }

        public function setName($name){
            $this->name = strtoupper($name);
        }

        public function getName(){
            return $this->name;
        }
    }

?>