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
require_once '../src/model/Database.php';
$db = new Database();

// Checa pra ver se tem algum email igual na database e armazena em variavel
$resultDb = $db->select(
    "SELECT * FROM cadastros WHERE email = '$email'; "
);

if( isset($resultDb[0]) ){
    $emailDb = $resultDb[0]->email;
    $passDb = $resultDb[0]->pass;
    $nameDb = $resultDb[0]->nome;
} else {
    $emailDb = null;
    $passDb = null;
    $nameDb = null;
}
///////////////////////////////////////////////
    if($email != null && $passDb != null){
        if($email == $emailDb && $senha == $passDb) {
            // Acesso permitido e inicio da sessão de usuario
            session_start();
            $_SESSION['user'] = $resultDb[0];
            $redirect = "<meta http-equiv='refresh' content='0; url= inicio.php'/>";
        } else {
            // Acesso negado
            $redirect = "<meta http-equiv='refresh' content='0; url= login.php'/>";
        }
    }

?>

<html>
    <h1> <?php echo isset($msg) ? $msg : "<meta http-equiv='refresh' content='0; url= login.php'/>" ?> </h1>
            <?= isset($redirect) ? $redirect : "<hr>" ?>
</html>