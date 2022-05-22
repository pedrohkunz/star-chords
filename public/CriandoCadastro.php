<?php
use Database\Database;
//coloca as informações do formulario em variaveis
if( isset($_POST['email']) ) {
    $nome = $_POST['nome'];
} else{
    $nome = null;
}

if( isset($_POST['email']) ) {
    $email = $_POST['email'];
} else{
    $email = null;
}

if( isset($_POST['pass']) ) {
    $pass = $_POST['pass'];
} else{
    $pass = null;
}

////////////////////////////////////////////////
require_once '../src/model/Database.php';
$db = new Database();

$db->insert(
    "INSERT INTO cadastros
    (nome, email, pass)
    VALUES
    ('$nome', '$email', '$pass')"
);

//Redireciona para o login.html
header('Location: login.php');

?>



