<?php
include_once '../factory/connect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $sql = "SELECT * FROM tb_post WHERE id = '$id'";
    $resul = mysqli_query($conn, $sql);
    $cont = mysqli_fetch_array($resul);

    $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : '';
    $materia = isset($_POST['materia']) ? $_POST['materia'] : '';
    $imagem = isset($_FILES['imagem']) ? $_FILES['imagem'] : null;

    if (!empty($imagem['name'])) {
        
        preg_match("/\.(gif|bmp|png|jpg|jpeg|jfif){1}$/i", $imagem["name"], $ext);
        $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
        $caminho_imagem = "../misc/fotos/post/" . $nome_imagem;
        move_uploaded_file($imagem["tmp_name"], $caminho_imagem);

        $sql = "UPDATE tb_post SET titulo = '$titulo', materia = '$materia', imagem = '$nome_imagem' WHERE id = '$id';";
        $resul = mysqli_query($conn, $sql);

        echo "<script>
                alert('Inserido com sucesso.');
                window.location.href='../paginas/adminhome.php';
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
    <title>Atualizar Post</title>
</head>
<body>
    <form action="#" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <label> Titulo </label>
        <input type="text" name="titulo" id="titulo" value="<?php echo isset($cont['titulo']) ? $cont['titulo'] : ''; ?>">
        <label> Matéria </label>
        <input type="text" name="materia" id="materia" value="<?php echo isset($cont['materia']) ? $cont['materia'] : ''; ?>">
        <label> Imagem </label>
        <input type="file" name="imagem" id="imagem">
        <input type="submit" value="enviar">
    </form>
</body>
</html>
