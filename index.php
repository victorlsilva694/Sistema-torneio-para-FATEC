<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<title>Cadastro FATEC-AM</title>
    <div class= "MsgCadastro">
		<?php
        if(isset($_SESSION['msg1']))
        {
			echo $_SESSION['msg1'];
            unset($_SESSION['msg1']);
            $page = $_SERVER['PHP_SELF'];
            $sec = "1";
            header("Refresh: $sec; url=$page");
        }
        ?>
    </div>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Login.css">
    <title>Login FATEC-AM</title>
</head>
<body>

    <div class="login" id="loginfundo">

        <div class="ImgFatec">
                <img class="foto" src="img/Fateclogo.jpg" width="270px" height="100px" alt="">
        </div>

            <form action="login.php" method="POST">
                <input class="tb5" name="login" type="text" placeholder=" *Login, Min(6)"  id="EmailUser" minlength="6" required>
                <input class="tb5" name="senha" type="password" placeholder=" *Digite a senha, Min(6)" required id="PasswdUser" minlength="6" required>
                
                <h5 class="RCadastro">Ainda não tem uma conta?</h5>
                <div class="BotaoCadastro">
                    <input type="submit" value="ENTRAR" class="Enviar">
                </div>
                <a class="linkCadastro" href="cadastro.php">Cadastre-se</a>
            </form>
            <a href="#" class="RecuperarSenha">Esqueci minha senha</a>
        </div>
    </div>

    
</body>

</html>




