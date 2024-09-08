<?php
include_once '../factory/connect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $sql = "SELECT * FROM tb_admin WHERE id = '$id'";
    $resul = mysqli_query($conn, $sql);
    $cont = mysqli_fetch_array($resul);

    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '';
    $imagem = isset($_FILES['imagem']) ? $_FILES['imagem'] : null;

    if (!empty($imagem['name'])) {
        
        preg_match("/\.(gif|bmp|png|jpg|jpeg|jfif|webp|avif){1}$/i", $imagem["name"], $ext);
        $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
        $caminho_imagem = "../misc/fotos/post/" . $nome_imagem;
        move_uploaded_file($imagem["tmp_name"], $caminho_imagem);

        $sql = "UPDATE tb_admin SET adminlog = '$nome', adminpass = '$senha', adminimage = '$nome_imagem' WHERE id = '$id';";
        $resul = mysqli_query($conn, $sql);

        echo "<script>
                alert('Inserido com sucesso.');
                window.location.href='../paginas/userpages.php';
            </script>";
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
    <title>Atualizar Admin</title>
    <link rel="stylesheet" href="../css/editpost.css">
</head>
<body>
    <section class="header">
        <img src="..\misc\fotos\imagenspost\logofla.png" alt="">
        <h1 class="title__container">Administração</h1>
    </section>

    <section class="form__edit">
        <form action="#" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <label> Nome: </label>
            <input type="text" name="nome" id="nome" value="<?php echo isset($cont['adminlog']) ? $cont['adminlog'] : ''; ?>">
            <label> Senha: </label>
            <input type="text" name="senha" id="senha" value="<?php echo isset($cont['adminpass']) ? $cont['adminpass'] : ''; ?>">
            <label> Imagem </label>
            <input type="file" name="imagem" id="imagem">
            <input type="submit" value="enviar">
        </form>
    <section> 
</body>
</html>
