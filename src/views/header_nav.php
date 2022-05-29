<?php include '../model/session_true.php' ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style_inicio.css">
    <title>Inicio</title>
</head>

<!-- Inicio da navbar -->


<div class="navbar">
    <nav class="navbar fixed-top" style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(0,212,255,1) 0%, rgba(16,11,124,1) 85%);">
        <div class="container-fluid">
            <a style="color:white" class="navbar-brand">Star Chords</a>
            <div class="col-6 ">
                <form class="d-flex align-items-center" role="search">
                    <input class="form-control me-2" type="search" placeholder="O que você quer ouvir agora?" aria-label="Search">
                    <button class="btn" style="background-color:#0a0e53; color: white;" type="submit">Ir! </button>
                </form>
            </div>
            <a class="titulo_entrar" href="../public/login.php">Entrar</a>
        </div>
    </nav>
</div>
