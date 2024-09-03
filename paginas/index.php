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
    <link rel="stylesheet" href="../css/admin.css">
    <title>Login | Flamengo </title>
</head>
<body>
    <section class="form__container">
        <section class="logo__fla">
            <img src="..\misc\fotos\imagenspost\logofla.png" alt="">
            <h1 class="title__container">Administração</h1>
        </section>
        <form action="../model/login.php" method="post">
            <section class="form__content">
                <label><h1>Login</h1></label>
                <label><h6>Entre na página de administração</h6></label>
                <label> Nome: </label>
                <input type="text" name="adm__name" id="adm__name" placeholder="Digite seu login...">
            </section>
            <section class="form__content">            
                <label> Senha: </label>
                <input type="password" name="adm__password" id="adm__password" placeholder="Digite sua senha...">
            </section>
            <section class="form__content__submit">
                <input type="submit" value="Entrar" class="submit__button">
            </section>
        </form>
    </section>
</body>
</html>