<?php 
    session_start();

    if(isset($_SESSION['user']) != null) {
        $bemvindo = "Bem vindo meu nobre " . $_SESSION['user']->nome;
        define('LOGINMSG', $bemvindo); 
       } else {
        header('location: ../public/login.php');
    }
    // cria variavel _SESSION pra armazenar as informações do usuario, 
    // e chama sessão, caso não funcione ou encerre a sessão envia ao login
?>