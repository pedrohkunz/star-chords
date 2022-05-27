<?php 
    session_start();

    if(isset($_SESSION['user']) != null) {
        $LOGINMSG = 'Bem vindo meu nobre &nbsp ' . $_SESSION['user']->nome;
       } else {
        header('location: ..\public\login.php');
    }
    // cria variavel _SESSION pra armazenar as informações do usuario, 
    // e chama sessão, caso não funcione ou encerre a sessão envia ao login
?>