<?php require_once "../src/views/header_login.php" ?>

<body>

<div class="conteudo">
    <div class="col-lg-4 offset-lg-4 col-md-2 offset-md-2 col-sm-12">
                <h1 class="titulo">Criar Conta</h1>
                <br>
        <form action="CriandoCadastro.php" method="post"> 
            <div>
                <label class="subtitulo" for="text" class="form-label">Nome</label>
                <input type="text" name = 'nome' class="form-control" id="formGroupExampleInput" placeholder="Digite seu nome">
            </div>
                <br>
            <div class="mb-3">
                <label class="subtitulo" for="email" class="form-label">Email</label>
                <input type="email" name = 'email' placeholder="Digite seu email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div>
                <label class="subtitulo" for="password" class="form-label">Senha</label>
                <input type="password" name='pass' id="inputPassword5" placeholder="Digite sua senha" class="form-control" aria-describedby="passwordHelpBlock">
            </div>
                <br>
            <div>
                <label class="subtitulo" for="password" class="form-label">Repita a senha</label>
                <input type="password" id="inputPassword5" placeholder="Digite sua senha" class="form-control" aria-describedby="passwordHelpBlock">
            </div>
                <br>
            <div>
                <input type="submit" class="btn btn-primary" value="Criar conta" />
        </form>
    </div>            
</div>
</body>
</html>