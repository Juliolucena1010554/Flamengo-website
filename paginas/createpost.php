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
    <link rel="stylesheet" href="../css/cpost.css">
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

    <section class="create__post__container">
    <h1>Crie um novo post</h1>
                <form action="../model/createpost.php" method="post" enctype="multipart/form-data">
                    <section class="create__post__form__content">
                        <label> Titulo: </label>
                        <input type="text" name="newsTitle" id="newsTitle">
                    </section>
                    <section class="create__post__form__content">
                        <label> Matéria: </label>
                        <input type="text" name="newsText" id="newsText">
                    </section>
                    <section class="create__post__form__content">
                        <label> Imagem: </label>
                        <input type="file" name="newsImage" id="newsImage">
                    </section>
                    <section class="create__post__form__submit">
                        <input type="submit" value="enviar">
                    </section>
                </form>
        </section>

        
    </body>
</html>