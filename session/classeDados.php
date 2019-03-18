<?php
include_once ('teste.php');
    class Dados {
        public $usuario;
        public $email;
        public function dados($usuario, $email){
            $this->usuario = $usuario;
            $this->email = $email;
        }
        public function getusuario(){
            return $this->usuario;
        }
        public function getemail(){
            return $this->email;
        }
    }
    
?>