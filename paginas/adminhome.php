<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=SUSE&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=New+Amsterdam&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel="stylesheet" href="../css/home.css">
    <?php
        include_once '../factory/connect.php';
        session_start();

        // Verifica se o usuário está logado
        if (!isset($_SESSION['adminlog'])) {
            header("Location: adminlogin.php");
            exit();
        }
    ?>
    <title>Página Administração | Flamengo </title>

</head>
<body>
    <header>
        <section class="header__container"> 
            <img src="../misc/fotos/imagenspost/logofla.png" alt="Logo do Flamengo" class="logo">
            <p>Administração</p>
        </section>    
    </header>

    <section class="side__bar__container">
            <section class="side__bar__cards">
                <a href="">
                    <i class="fi fi-rr-home"></i>
                    <p> Início </p>
                </a>            
            </section>

            <section class="side__bar__cards">
                <a href="createpost.php">
                    <i class="fi fi-rr-add-document"></i>
                    <p> Criar Postagens </p>
                </a href="">            
            </section>

            <section class="side__bar__cards">
                <a href="">
                    <i class="fi fi-rr-users"></i>
                    <p> Gerenciar usuários </p>
                </a>            
            </section>

            <section class="side__bar__cards">
                <a href="">
                    <i class="fi fi-rr-user"></i>
                    <p> Perfil </p>
                </a>            
            </section>

            <section class="side__bar__cards">
                <a href="index.php">
                <i class="fi fi-rs-sign-out-alt"></i>
                    <p> Sair </p>
                </a>            
            </section>
        </section>
            </section>
    </section>
    <section class="body__center"> 
        <h1> Bem-vindo, <?php echo ($_SESSION['adminlog']); ?>. </h1>
        
        <section class="body__post">
            <h3 class="body__post__text"> POSTS </h3>
        </section>
        
        <section class="body__cards__container">
            <?php
            $sql = 'SELECT * FROM tb_post;';
            $resul = mysqli_query($conn, $sql);
            while ($cont = mysqli_fetch_array($resul)) { 
            ?>
                <section class="body__cards__content">
                    <img src="../misc/fotos/post/<?php echo $cont['imagem']; ?>" alt="">
                    <section class="body__cards__words">
                        <p class="body__cards__title">
                            <?php echo $cont['titulo']; ?>
                        </p>
                        <p class="body__cards__text">
                            <?php echo $cont['materia']; ?>
                        </p>
                    </section>
                </section>
                <section class="body__cards__buttons__container">
                    <section class="body__cards__buttons">
                        <form action="../model/deletepost.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $cont['id']; ?>">
                            <input type="submit" value="Deletar">
                        </form>
                    </section>

                    <section class="body__cards__buttons">
                        <form action="../model/editpost.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $cont['id']; ?>">
                            <input type="submit" value="Editar" style="background-color: green;">
                        </form>
                    </section>
                </section>
            <?php } ?>
        </section>
    </section>
    </body>
</html>


























                <!-- <?php

    $sql = 'SELECT * FROM tb_post;'; 

    $resul = mysqli_query($conn, $sql); 
    while ($cont = mysqli_fetch_array($resul)) {
   

        echo $cont['id'] . ' - ' . $cont['titulo'] . '<br>'; 

        echo '<img src="../misc/fotos/post/'.$cont['imagem'].'" alt="descrição da imagem" class="fotos">';
        echo '<a href="cadastro.php?ex='.$cont['id'].'">X</a>'; 
    }
    ?> -->