<?php 
    session_start();

    $nomeCompleto = $_POST['nomeCompleto'];
    $email = $_POST['email'];
    $user = $_POST['username'];
    $senha = $_POST['password'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $id = $_POST['id'];

    include_once 'banco.php';

    $senha = hash("md5", $senha);
    $sql = "UPDATE cadastros set nomeCompleto = '$nomeCompleto', email = '$email', user = '$user', senha = '$senha', cep = '$cep', rua = '$rua', numero = '$numero', cidade = '$cidade', estado = '$estado' 
    where id = $id";

    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        header("Location: listarsetor.php"); 
    } else {
        echo 'Erro: ' .$sql. '<br>' .mysqli_connect_error($conn);
        mysqli_close($conn);
    }
?>