<?php
    use Database\Database;

// Checa dados do formulario e armazena em variveis
    if( isset($_POST['email']) ) {
        $email = $_POST['email'];
    } else{
        $email = null;
    }
    if( isset($_POST['pass']) ) {
        $senha = $_POST['pass'];
    } else{
        $senha = null;
    }

////////////////////////////////////////////////
require_once 'src/model/Database.php';
$db = new Database();

// Checa pra ver se tem algum email igual na database e armazena em variavel
$resultDb = $db->select(
    "SELECT * FROM cadastros WHERE email = '$email'; "
);

if( isset($resultDb[0]) ){
    $emailDb = $resultDb[0]->email;
    $senhaDb = $resultDb[0]->senha;
} else {
    $emailDb = null;
    $senhaDb = null;
}
///////////////////////////////////////////////
    if($email != null && $senha != null){
        if($email == $emailDb && $senha == $senhaDb) {
            $msg = 'Bem vindo! 😀👍';
            $redirect = "<meta http-equiv='refresh' content='3; url= index.html'/>";
        } else {
            $msg = 'Acesso negado! 👎😭 <hr>';
            $redirect = "<meta http-equiv='refresh' content='3; url= login.html'/>";
        }
    }

?>

<html>
    <h1> <?php echo isset($msg) ? $msg : "Se isso estiver Aparecendo, tem algo de errado." ?> </h1>
            <?= isset($redirect) ? $redirect : "<hr>" ?>
</html>