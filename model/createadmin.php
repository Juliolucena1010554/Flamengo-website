<?php
include_once '../factory/connect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $adminlog = $_POST['adminlog'] ?? null;
    $adminpass = $_POST['adminpass'] ?? null;
    $adminimage = $_FILES['imagem'] ?? null; 

    echo $adminlog;
    echo $adminpass;

    if (!empty($adminimage['name'])) {
        // Validação da extensão da imagem
        preg_match("/\.(gif|bmp|png|jpg|jpeg|jfif|webp|avif){1}$/i", $adminimage["name"], $ext);
        $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
        $caminho_imagem = "../misc/fotos/post/" . $nome_imagem;

        move_uploaded_file($adminimage["tmp_name"], $caminho_imagem);
        $sql = 'INSERT INTO tb_admin (adminlog, adminpass, adminimage) VALUES ("'.$adminlog.'", "'.$adminpass.'" , "'.$nome_imagem.'");';
        $resul = mysqli_query($conn, $sql);

        if ($resul) {
            echo "<script>
                    alert('Inserido com sucesso.');
                    window.location.href='../paginas/userpages.php';
                </script>";
        } else {
            echo "Erro ao inserir no banco de dados: " . mysqli_error($conn); 
        }
    }
} else {
    echo "erro";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inserir admin</title>
    <link rel="stylesheet" href="../css/editpost.css">
</head>
<body>
    <section class="header">
        <img src="..\misc\fotos\imagenspost\logofla.png" alt="">
        <h1 class="title__container">Administração</h1>
    </section>

    <section class="text">
        <h1> Criar Admin </h1>
    </section>
    <section class="form__edit">
        <form action="#" method="POST" enctype="multipart/form-data">
            <label> Nome: </label>
            <input type="text" name="adminlog" id="adminlog">
            <label> Senha: </label>
            <input type="text" name="adminpass" id="adminpass">
            <label> foto de perfil: </label>
            <input type="file" name="imagem" id="imagem">
            <input type="submit" value="enviar">
        </form>
    <section> 
</body>
</html>
