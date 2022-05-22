<?php

use Database\Database;

require_once "../src/model/Database.php";
$db = new Database();

?>

<?php require_once "../src/views/header_login.php" ?>

<body>

<div>
    <div class="conteudo">
        <div class="col-lg-4 offset-lg-4 col-md-10 offset-md-1 col-sm-4 offset-md-2">
                <h1 class="titulo">Login</h1>
                <br>        
            <form action="VerificandoLogin.php" method="post">
                <div class="mb-3">
                        <label for="exampleInputEmail1" class="subtitulo">Email</label>
                        <input type="email" name = 'email' placeholder="Digite seu email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <br>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="subtitulo">Senha</label>
                    <input type="password" name = 'pass' placeholder="Digite sua senha" class="form-control col-sm-2 col-lg-2" id="exampleInputPassword1" required>
                </div>
                <br>
                <div class="botoes">
                    <input type="submit" class="btn btn-primary" value="Entrar" />
                    &nbsp;
                    <a href="../public/criar_conta.php">
                        <input type="button" class="btn btn-primary" value="Criar conta" />  
                    </a>
                </div>                
            </form>
        </div>
    </div>    
</div>

</body>
</html>