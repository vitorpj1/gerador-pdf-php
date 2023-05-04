<?php
    include('config.php');
    
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';
    if(file_exists('pages/'.$url.'.php')){
        /* carregar a pagina da url */
        include('pages/'.$url.'.php');
    }else{
        /* carregar uma pagina para nao encontrado */
        include('pages/404.php');
    }
?>
