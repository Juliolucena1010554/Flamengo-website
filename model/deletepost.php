<?php
    include_once '../factory/connect.php';
    session_start();

    if(isset($_POST['id'])){
        $id = $_POST['id'];

        
        $sql = "DELETE FROM tb_post WHERE id = '$id';";

        $resul = mysqli_query($conn, $sql);

        echo "<script>alert('Deletado com sucesso');
                window.location.href='../paginas/adminhome.php';
                </script>";
    }else{
        echo "<script>
                alert('Erro inesperado');
                window.location.href='../paginas/adminhome.php';
                </script>";
    }
?>