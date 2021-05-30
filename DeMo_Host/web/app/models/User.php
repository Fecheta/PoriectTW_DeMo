<?php

    class User{
        private $name;

        public function setName($name){
            $this->name = strtoupper($name);
        }

        public function getName(){
            return $this->name;
        }
    }

?>