<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Cadastro.css">
    <script src="js/Login.js"></script>

    
    <title>Cadastro FATEC-AM</title>
    <div class= "MsgCadastro">
	<?php
        if(isset($_SESSION['msg']))
        {
			echo $_SESSION['msg'];
            unset($_SESSION['msg']);
            $page = $_SERVER['PHP_SELF'];
            $sec = "10";
            header("Refresh: $sec; url=$page");
        }
        ?>
    </div>
</head>



<body>

    <div class="login">

        <form name="formuser" action="cadastrar-usuarios-post.php" method="post">

            <div class="ImgFatec">
                <img class="foto" src="img/Fateclogo.jpg" width="295px" height="100px" alt="">
            </div>

            <div class="NomeLogin">
                <input type="text" name="nome" id="EmailUser" placeholder=" *Nome, Min(6)" minlength="6" required>
                <input type="text" name="login" id="EmailUser1" placeholder=" *Login, Min(6)" minlength="6" required>

            </div>

            <div class="RAEmail">            
                <input type="text" name="ra" id="EmailUser2" placeholder=" *RA: (13) " pattern="[0-9]{13}" required>
                <input type="email" name="email" id="EmailUser3" placeholder=" *Exemplo@email.com  Min(6)" minlength="6" required>

            </div>
    
            <div class="DuasSenhas">
                <input type="password" name="senha" id="EmailUser4" placeholder=" *Digite a senha, Min(6)" required>
                <input type="password" name="rep_senha" id="EmailUser5" placeholder=" *Repetir senha" required>
                
            </div>

            <div class="Escondido">
                <input type="hidden" maxlength="30" placeholder="tipo:" name="tipo" value="aluno" required>
                <input type="hidden" maxlength="30" name="dia" required>

            </div>

            <div class="BotaoCadastro">
                <button class="Cadastrar" input type="submit" onclick="return validar()">CADASTRAR</button>
                <div class="Voltar">
                    <a href="index.php" class="back">Voltar</a> 
                </div>
            </div> 
        </form>

            

    </div>  

</body>

<!--        

            
        
            

            

            

            <button class="Cadastrar" input type="submit" onclick="return validar()">CADASTRAR</button>     


        </form>
 

        <form name="formvoltar" action="index.php" method="POST"><br>

            <button class="Cadastrar" input type="submit" >VOLTAR</button>

        </form>
        
        -->

</html>