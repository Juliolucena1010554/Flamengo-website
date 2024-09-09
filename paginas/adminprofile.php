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
    <link rel="stylesheet" href="../css/admprofile.css">
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
                <a href="adminhome.php">
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
                <a href="userpages.php">
                    <i class="fi fi-rr-users"></i>
                    <p> Gerenciar usuários </p>
                </a>            
            </section>

            <section class="side__bar__cards">
                <a href="adminprofile.php">
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
        <?php 
        $nome = $_SESSION['adminlog'];
        $sql = "SELECT * FROM tb_admin WHERE adminlog = '$nome';";
        $resul = mysqli_query($conn, $sql);
    
        
        if ($resul) {
            $cont = mysqli_fetch_assoc($resul);
            if ($cont) {
                ?>    
                <section class="admin__profile__container">
                    <section class="admin__profile__text">
                        <h1>Perfil</h1>
                    </section>
                    <section class="admin__profile__card">
                        <section class="admin__profile__card__image">
                            <img src="../misc/fotos/post/<?php echo $cont['adminimage']; ?>" alt="">
                        </section>
                        
                        <section class="admin__profile__card__text">
                            <h1><?php echo $cont['adminlog'];  ?></h1>
                        </section>
                        <section class="buttons__cards">
                
                            <form action="../model/editaradmin.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $cont['id'] ?>">
                                <input type="submit" value="Editar" style="background-color: green;">
                            </form>
                            
                            <form action="../model/deleteadmin.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $cont['id'] ?>">
                                <input type="submit" value="Deletar" style="background-color: red;">
                            </form>
                            
                        </section>
                    </section>
                </section>
            <?php
                }
        }
            ?>
        </section>
    </section>