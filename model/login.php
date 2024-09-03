<?php
    include_once '../factory/connect.php';
    session_start();

    $admname = $_POST['adm__name'];
    $admpass = $_POST['adm__password'];
    $sql = "select * from tb_admin where adminlog ='$admname' and adminpass ='$admpass'";
    
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){

        $_SESSION['adminlog'] = $admname;
        $_SESSION['adminpass'] = $admpass;
        
        echo "  <script>
                    alert('Seja bem vindo!');
                    window.location.href='../paginas/adminhome.php';
                </script>";
    }else{
        echo "<script>
                    alert('Usuário ou senha incorretos.');
                    window.location.href='../paginas/index.php';
                </script>";
    }
?>