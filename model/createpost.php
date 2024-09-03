<?php
    include_once '../factory/connect.php';
    session_start();

        $titulo = $_POST['newsTitle'];
        $materia = $_POST['newsText'];
        $imagem = $_FILES["newsImage"];

        if(!empty($imagem["name"])){

            preg_match("/\.(gif|bmp|png|jpg|jpeg|jfif){1}$/i", $imagem["name"], $ext);
            $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
            $caminho_imagem = "../misc/fotos/post/" . $nome_imagem;
            move_uploaded_file($imagem["tmp_name"], $caminho_imagem);

            $sqlin = 'INSERT INTO tb_post (titulo, materia, imagem) VALUES ("'.$titulo.'", "'.$materia.'" , "'.$nome_imagem.'");';

            $resul = mysqli_query($conn, $sqlin);

            echo "<script>
                    alert('Inserido com sucesso.');
                    window.location.href='../paginas/createpost.php';
                </script>";

        }else{
            echo "<script>
                    alert('Nenhuma imagem inserida.');
                    window.location.href='../paginas/createpost.php';
                </script>";
        }
?>