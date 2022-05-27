<?php require_once "../src/views/header.php"; ?>
<?php require_once "../src/views/header_nav.php"; ?>

<body>
    <div class="colunas">
        <button type="button" class="btn btn-primary">Gêneros</button>&nbsp;&nbsp;
        <button type="button" class="btn btn-primary">Mais tocadas</button>&nbsp;&nbsp;
        <button type="button" class="btn btn-primary">Playlist</button>&nbsp;&nbsp;
        <button type="button" class="btn btn-primary">Perfil</button>&nbsp;&nbsp;
        <button type="button" class="btn btn-primary">Opções</button>&nbsp;&nbsp;
    </div>
    <hr style="color: white">
        <br>
    <h1 class="titulo">Bandas recomendadas</h1>
        <div class="banner_banda">
            <button style="border-radius: 1em" type="button"> <img src="assets/img/mettalica_banner.jpg" height ="200" width="280" /></button> &nbsp;&nbsp;&nbsp;
            <button style="border-radius: 1em" type="button"> <img src="assets/img/pinkfloyd_banner.png" height ="200" width="280" /></button> &nbsp;&nbsp;&nbsp;
            <button style="border-radius: 1em" type="button"> <img src="assets/img/megadeath_banner.png" height ="200" width="280" /></button>
        </div>
        <br><br>
    <h1 class="titulo">Estilos Musicais</h1>
        <div class="generos_musicais">
            <img style="border-radius: 1em;" src="assets/img/Artboard-1_1.png" height="200" width="280" > </button> &nbsp;&nbsp;&nbsp;
        </div>
</body>

<h1 style ='color:red'>
     <?php 
     // só pra ver se ta logado
     if(!empty($LOGINMSG)) {
        echo $LOGINMSG;
    } ?>
</h1>

</html>