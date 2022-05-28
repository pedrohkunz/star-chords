<?php require_once "../src/views/header.php" ?>
<?php require_once "../src/views/header_nav.php" ?>

<body>
    <div class="colunas">
        <button type="button" class="btn btn-primary">Gêneros</button>&nbsp;&nbsp;
        <button type="button" class="btn btn-primary">Mais tocadas</button>&nbsp;&nbsp;
        <button type="button" class="btn btn-primary">Playlist</button>&nbsp;&nbsp;
        <button type="button" class="btn btn-primary">Perfil</button>&nbsp;&nbsp;
        <button type="button" class="btn btn-primary">Opções</button>&nbsp;&nbsp;
    </div>
    <hr style="color: white">

    <!-- CTRL + ; DENTRO DO PHP PRA REMOVER DO SITE-->
    <h1 class = 'bemvindo' >
        <?php 
        if(!empty($LOGINMSG)) {
            echo $LOGINMSG; } 
        ?> 
    </h1>   
    <!-- CTRL + ; NO PHP PRA REMOVER DO SITE-->

    <br>
    <h1 class="titulo">Bandas recomendadas</h1>
        <div class="banner_banda">
            <img style="border-radius: 1em" src="assets/img/mettalica_banner.jpg" height ="200" width="280">&nbsp;&nbsp;&nbsp;
            <img style="border-radius: 1em" src="assets/img/pinkfloyd_banner.png" height ="200" width="280">&nbsp;&nbsp;&nbsp;
            <img style="border-radius: 1em" src="assets/img/megadeath_banner.png" height ="200" width="280">
        </div>
        <br><br>
    <h1 class="titulo">Estilos Musicais</h1>
        <div class="generos_musicais">
            <img style="border-radius: 1em;" src="assets/img/banner_rock.png" height="200" width="280" > </button> &nbsp;&nbsp;&nbsp;
            <img style="border-radius: 1em;" src="assets/img/banner_jazz.jpg" height="200" width="280" > </button> &nbsp;&nbsp;&nbsp;
            <img style="border-radius: 1em;" src="assets/img/banner_sertanejo.png" height="200" width="280" > </button> &nbsp;&nbsp;&nbsp;
        </div>
</body>

<?php require_once "../src/views/footer.php" ?>

</html>