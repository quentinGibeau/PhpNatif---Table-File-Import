<?php

    // évite les conflits entre les mêmes nom de class
    namespace App;

    // Simple class

    class User{

        // propriété pour la class (attribut)
        private $pseudo;
        private $password;

        public function __construct(){

        }

        public function __destruct(){

        }

        // Getter / Setter pour Pseudo

        public function getPseudo(){
            return $this->pseudo;
        }

        public function setPseudo($pseudo){
            return $this->pseudo = $pseudo;
        }


        // Getter / Setter pour Password

        public function getPassword(){
            return $this->password;
        }

        public function setPassword($password){
            return $this->password = $password;
        }



    }