<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/style.css" rel="stylesheet"/>
    <title>Desenvolvimento Web II</title>
</head>
<body>
    
    <nav>
        <?php
            include 'menu_lateral.php';
        ?>
        <img class="imagem_nav" src="Imagens/undraw_profile_pic_ic5t.svg" onclick="menuToggle()">
    </nav>

    <?php
        session_start();
        if (isset($_SESSION['cadastrosID'])) {
			echo "<h1 class='bem_vindo typing-animation'>Bem-vindo, " .$_SESSION['cadastrosNOME']. "!</h1>";
    ?>

    <?php
        } 
    ?>

    <section>
        <div class="wave wave1"></div>
        <div class="wave wave2"></div>
        <div class="wave wave3"></div>
        <div class="wave wave4"></div>
    </section>

    <ul class="logout_menu">
        <li class="logout">Configurações<img src="Imagens/settings.png" alt="settings"></li>
        <li class="logout"><a href="logout.php">Logout</a><img src="Imagens/logout.png" alt="logout"></li>
    </ul>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>
