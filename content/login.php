<?php
include_once('../db/conexao.php');
include_once('../db/acesso.php');

session_start();
error_reporting(0);
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
    <!--Login-->
    <form action="" method="POST">
        <div class="uk-container">
            <div class="uk-child-width-expand@s uk-text-center" uk-grid>
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input name="email_user" class="uk-input" type="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                <input name="senha_user" class="uk-input" type="password" placeholder="Senha">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <a href="#modal-center" uk-toggle>Esqueceu a senha?</a>
                            </div>
                        </div>
                        <div>
                            <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom">Acessar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Modal - Recuperação de Senha-->

        <div id="modal-center" class="uk-flex-top" uk-modal>
            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

                <button class="uk-modal-close-default" type="button" uk-close></button>

                <div class="uk-margin">
                    <div class="uk-inline">
                        <span class="uk-form-icon" uk-icon="icon: mail"></span>
                        <input class="uk-input uk-form-width-large" type="text" placeholder="Insira seu email">
                    </div>
                </div>
                <div>
                    <button class="uk-button uk-button-primary">Enviar</button>
                </div>

            </div>
        </div>
    </form>
    
</body>
</html>