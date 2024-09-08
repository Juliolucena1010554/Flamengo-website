<?php
    include_once '../factory/connect.php';
    session_start();

    $id = $_POST['id'];

    $sql = "DELETE FROM tb_admin WHERE id = '$id';";
    $resul = mysqli_query($conn, $sql);

    echo "<script> alert('Usuário deletado com sucesso.'); window.location.href='../paginas/userpages.php';</script> ";
        
?>
