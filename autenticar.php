<?php
    session_start();
    include_once "banco.php";

    if (isset($_POST['user']) && isset($_POST['password'])) {
        $user = $_POST['user'];
        $senha = $_POST['password'];

        $query = "SELECT * FROM cadastros WHERE user = '$user' AND senha = MD5('$senha')";
        $res = mysqli_query($conn, $query);

        if (mysqli_num_rows($res) > 0) {
            if ($row = mysqli_fetch_assoc($res)) {
                $_SESSION['cadastrosID'] = $row['id'];
                $_SESSION['cadastrosNOME'] = $row['nomeCompleto'];
            }
            header("Location: principal.php");
        } else {
            header("Location: .");
        }
        mysqli_close($conn);
    }
?>