<?php 
    session_start();

    $id = $_GET['id'];

    include_once 'banco.php';
    
    $sql = "DELETE FROM cadastros WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        header("Location: listarsetor.php"); 
    } else {
        echo 'Erro: ' .$sql. '<br>' .mysqli_connect_error($conn);
        mysqli_close($conn);
    }
?>