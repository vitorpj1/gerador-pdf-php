<?php
    session_start();

    /* config de autoload de classes */
    
    $autoload = function($class){
        include('classes/'.$class.'.php');
    };

    spl_autoload_register($autoload);
    
    /* CONST */
    define('PATH','http://localhost/gerador_novo/public_html/');
    define('PATH_PAINEL',PATH.'painel/');
    
    
    /* CONST DB */
    /* define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DATABASE','dbinstagram'); */
?>