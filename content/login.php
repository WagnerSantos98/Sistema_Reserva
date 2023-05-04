<?php
include_once('../db/conexao.php');

session_start();
error_reporting(0);

if (isset($_POST['bt_acessar'])) {
	$email_user = $_POST['email_user'];
	$senha_user = sha1($_POST['senha_user']);

	$sql = "SELECT * FROM tb_usuario WHERE email_user='$email_user' AND senha_user='$senha_user'";
	$result = mysqli_query($con, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		header("Location: ../index.php");
	} else {
		echo "<script>alert('Ooops! E-mail ou senha incorretos. ')</script>";
	}
}
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
                                <input name="email_user" class="uk-input" type="email" placeholder="Email"   value="<?php echo $email_user; ?>">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                <input name="senha_user" class="uk-input" type="password" placeholder="Senha"  value="<?php echo $_POST['senha_user']; ?>">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <a href="#modal-center" uk-toggle>Esqueceu a senha?</a>
                            </div>
                        </div>
                        <div>
                            <button name="bt_acessar" class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom">Acessar</button>
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