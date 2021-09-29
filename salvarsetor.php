<?php 
    session_start();
    
    $nomeCompleto = $_POST['nomeCompleto'];
    $email = $_POST['email'];
    $user = $_POST['user'];
    $senha = $_POST['password'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    include_once 'banco.php';

    $senha = hash("md5", $senha);
    $sql = "INSERT INTO cadastros(user, senha, nomeCompleto, email, cep, rua, numero, cidade, estado) VALUES('$user', '$senha', '$nomeCompleto', '$email', '$cep', '$rua', $numero, '$cidade', '$estado')";

    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        header("Location: index.php");  
    } else {
        echo 'Erro: ' .$sql. '<br>' .mysqli_connect_error($conn);
        mysqli_close($conn);
    }
?>
