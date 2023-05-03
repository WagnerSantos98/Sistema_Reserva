<?php
include_once('../db/conexao.php');

if(isset($_SESSION['username'])){
    header("Location: ../index.php");
}

if(isset($_POST['btn_acessar'])){
    $email_user = $_POST['email_user'];
    $senha_user = sha1($_POST['senha_user']);

    $sql = "SELECT * FROM tb_usuarios WHERE email_user='$email_user' AND senha_user='$senha_user'";
    $result = mysqli_query($con, $sql);
    if($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: ../index.php");
    }else{
        echo "<script>alert('Ooops! E-mail ou senha incorretos. ')</script>";
    }
}
?>