<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=New+Amsterdam&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css\index.css">

    <?php
        include_once 'factory/connect.php';
        session_start();
    ?>
    <title>Início | Flamengo </title>
</head>
<body>
    <header>
         <a href="http://localhost/projtest/" class="header__logo"><img src="https://logodownload.org/wp-content/uploads/2016/09/flamengo-logo-escudo-novo-1.png" alt="fla" class="logo"></a>
            <h1 class="text__header">Bem-vindo ao site do Clube de Regatas do Flamengo!</h1>
    </header>
    <section class="links__externos">

            <a href="https://ge.globo.com/futebol/brasileirao-serie-a/" class="text__link"><h3> TABELA </h3></a>
            <a href="https://ge.globo.com/futebol/times/flamengo/agenda-de-jogos-do-flamengo/#/proximos-jogos" class="text__link"><h3> JOGOS </h3></a>
            <a href="https://ge.globo.com/futebol/times/flamengo/videos/" class="text__link"><h3> VÍDEOS </h3></a>

    </section>

    <section class="card__container">
        <section class="card">
        <a href="https://www.flamengo.com.br/"><img src="misc\fotos\imagenspost\michael2.jfif" alt="Michael volta para o flamengo" class="card-img"> </a>
            <section class="card-text">
                <p><b>Michael é apresentado no Flamengo e cita brincadeira: "Mais feio, mas mais experiente". </b> <br>Michael foi apresentado nesta sexta-feira. Primeiro reforço anunciado nesta janela de transferências, ele comemorou o retorno após dois anos defendendo o Al-Hilal, da Arábia Saudita.  </p>
                </section>
        </section>
        <section class="card">
        <a href="https://www.flamengo.com.br/"><img src="misc\fotos\imagenspost\leoortiz.jfif" alt="Léo Ortiz vai para o futebol europeu" class="card-img"> </a>
            <section class="card-text">
                <p><b>Léo Ortiz Anuncia Surpreendente Transferência para o Futebol Europeu </b> <br> O zagueiro Léo Ortiz, destaque do Flamengo e recentemente convocado para a Seleção Brasileira,<br> surpreendeu o mundo do futebol ao anunciar sua transferência para o futebol europeu. </p>
            </section>
        </section>
    </section>
    <hr>
    <section class="news__title">
            <p> Notícias Recentes </p>
    </section>
    <section  class="news__container">
        <section class="news__card">
            <img src="misc\fotos\imagenspost\flabra.webp" alt="">
            <section class="news__card__content">
            <h3> Flamengo e Bragantino se enfrentam. </h3>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </section>        
        </section>

        <section class="news__card">
            <img src="misc\fotos\imagenspost\flasub22.jpg" alt="">
            <section class="news__card__content">
            <h3> Grande partida de Caio Garcia no título mundial. </h3>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </section>        
        </section>

        <section class="news__card">
            <img src="misc\fotos\imagenspost\flasub20.avif" alt="">
            <section class="news__card__content">
                <h3> Flamengo é o terceiro campeão da história do Intercontinental Sub-20 de clubes. </h3>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            </section>        
        </section>

        <section class="news__card">
            <img src="misc\fotos\imagenspost\alexsandrofla.webp" alt="">
            <section class="news__card__content">
                <h3> Flamengo anuncia Alex Sandro como seu novo reforço. </h3>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            </section>        
        </section>
    </section>


    <!-- Container Post -->


        <section class="news__title">
            <p> Reportagens </p>
        </section>

        <?php
            $sql = 'SELECT * FROM tb_post;';
            $resul = mysqli_query($conn, $sql);
        ?>
            <section class="post__container">
        <?php
            while ($cont = mysqli_fetch_array($resul)) { 
        ?>
                <section class="post__cards">
                    <img src="misc/fotos/post/<?php echo $cont['imagem']; ?>" alt="">
                    <section class="post__cards__content">
                        <p class="post__cards__title"> <?php echo $cont['titulo']; ?> </p>
                        <p class="post__cards__text"> <?php echo $cont['materia']; ?></p>
                    <section class="post__cards__footer">
                        <p class="post__cards__footer"> Há 2 dias - Postado por Rubio </p>
                    </section>
                </section>
            </section>
        <?php } ?>


    <!-- Footer Principal e Patrocinios -->

    <footer class="footer__container">
        <section class="footer__princ">
            <section class="footer__text">
                <p>
                    Sede Gávea<br>
                    Av. Borges de Medeiros, 997 <br>
                    Lagoa - Rio de Janeiro/RJ - Brasil <br>
                    CEP: 22430-041 - Tel:(21) 2159-0100 <br>
                </p>

                <p>
                    CT George Helal<br>
                    Estrada dos Bandeirantes, 25.997 <br>
                    Vargem Grande - Rio de Janeiro/RJ - Brasil <br> 
                    CEP: 22785-275 <br>
                </p>
            </section>
        </section>

        <section class="footer__secund">
                <h3 class="footer__secund">Patrocinadores</h3>
                    <section>
                        <img src="misc\fotos\icons\adidas.webp" alt="logo adidas" class="footer__img">
                        <img src="misc\fotos\icons\assistcard.webp" alt="logo assist card" class="footer__img">
                        <img src="misc\fotos\icons\merlivres.webp" alt="logo mercado livre" class="footer__img">
                        <img src="misc\fotos\icons\pixbet.webp" alt="logo pixbet" class="footer__img">
                        <img src="misc\fotos\icons\brb.webp" alt="logo Banco BRB" class="footer__img">
                    </section>
            </section>
    </footer>
</html>