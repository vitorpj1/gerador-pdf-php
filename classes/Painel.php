<?php
    class Painel{
        public static function logado(){
            return isset($_SESSION['login']) ? true : false;
        }
        public static function logadopainel(){
            return isset($_SESSION['login_painel']) ? true : false;
        }

        public static function loggout(){
            session_destroy();
            header('Location: '.PATH_PAINEL);
        }
    }
?>