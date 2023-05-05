<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Reserva</title>

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.15/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.15/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.15/dist/js/uikit-icons.min.js"></script>
</head>
<body>
    <header>
        <!--Navbar Teste-->
        <nav class="uk-container uk-navbar">
            <div class="uk-navbar-left">
                <ul class="uk-navbar-nav">
                    <li class="uk-active">
                        <a href="#">sistema de<strong>Reserva🖥</strong></a>
                    </li> 
                </ul>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav uk-visible@s">
                    <li><a href="content/eventos.html">Eventos</a></li>          
                    <li><a href="content/laboratorios.html">Laboratórios</a></li>
                    <li><a href="content/relatorios.html">Relatórios</a></li>
                    <li><a href="./db/logout.php" uk-icon="icon: sign-out"></a></li>
                </ul>
                <a href="#" class="uk-navbar-toggle uk-hidden@s" uk-navbar-toggle-icon uk-toggle="target: #sidenav"></a>
            </div>
        </nav>
    </header>
    
    <div id="sidenav" uk-offcanvas="flip: true" class="uk-offcanvas">
        <div class="uk-offcanvas-bar">
            <ul class="uk-nav">
                <li><a href="#">Eventos</a></li>          
                <li><a href="#">Laboratórios</a></li>
                <li><a href="#">Relatórios</a></li>
                <li><a href="./db/logout.php" uk-icon="icon: sign-out"></a></li>
            </ul>
        </div>
    </div>
</body>
</html>