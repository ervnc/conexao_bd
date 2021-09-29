<?php
    session_start();

    unset($_SESSION['cadastrosID']);
    unset($_SESSION['cadastrosNOME']);

    header("Location: .");
?>

