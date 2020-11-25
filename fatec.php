<?php
include_once("conexao.php");
include('verificar-login.php');
?>


<!doctype html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="css/PaginaInicial.css">

    <title>Fatec - AM</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" style="font-size: 28px;" href="#">Fatec - AM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" style="padding: 18px;">
            
                <li class="nav-link active">
                    <a style="color: white; padding: 0px; font-size: 18px; text-decoration:none"
                    class="nomeUsuario">Olá, <?php echo $_SESSION['login'];?></h3>
                </li>
                
                <li class="nav-link active">
                    <a style="color: white; padding: 8px; font-size: 18px; text-decoration:none" href="#">Salas</a>
                </li>

                <li class="nav-link active">
                    <a style="color: white; padding: 8px; font-size: 18px; text-decoration:none"
                        href="desafios.php">Desafios</a>
                </li>

                <li class="nav-link active">
                    <a style="color: white; padding: 8px; font-size: 18px; text-decoration:none" href="#">Contato</a>
                </li>

                <li class="nav-link active">
                    <a style="color: white; padding: 8px; font-size: 18px; text-decoration:none"
                        href="logout.php">Logout</a>                        
                </li>
                
                       
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Nome da Sala" aria-label="">
                <button style="background-color: transparent; border: 1px solid rgb(255, 255, 255); color: white;"
                    class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
        </div>
    </nav>


    <section class="MainConteudo">

        <div class="LeftNav1">
            <h1 class="Servers">Servidores Online: </h1>
            <p class="Quantidade">0 servidores Online</p>
            <br>
            <hr class="sep1" />
            <h1 class="Salas">Salas:</h1>
            <div class="start">
                <div class="ImgAddSala">
                    <img class="imgStart" src="https://image.flaticon.com/icons/png/512/15/15947.png" height="80%"
                        width="90%">
                </div>
                <a href="#" class="txtStart">Iniciar uma sala</a>
            </div>
            <br>
            <br>
            <div class="start">
                <div class="ImgAddSala">
                    <img class="imgStart" src="https://image.flaticon.com/icons/png/512/120/120383.png" height="80%"
                        width="90%">
                </div>
                <a href="#" class="txtPlayed">Entrar em uma sala</a>
            </div>
            <br>
            <br>
            <hr class="sep1" />
            <br>
            <h1 class="Amigos">Amigos</h1>
            <div class="start">
                <div class="ImgAddSala">
                    <img class="imgStart" src="https://image.flaticon.com/icons/png/512/104/104779.png" height="80%"
                        width="90%">
                </div>
                <a href="#" class="txtPlayed">Enviar convite</a>
            </div>
            <input type="text" placeholder="Nome do usuario" name="Players" id="Jogadores">
            <div class="LupaSearch">
                <img src="https://image.flaticon.com/icons/png/512/116/116836.png" width="100%" height="100%" alt="">
            </div>





            <div class="containerRigth">

                <div class="Apresentação">
                    <h1 class="titulosInicial">Fatec - Americana (Programação)</h1>
                    <p class="ParagSubTitulo">Plataforma desenvolvida para aprimoramento das habilidades em Programação.
                        Use com responsabilidade!</p>
                </div>
                <hr class="sep1" />

                <div class="BlocoServidores">
                    <div class="ImgServidor">
                        <img class="Servidor" src="https://image.flaticon.com/icons/png/512/115/115735.png"
                            width="110px" height="110px" alt="">
                    </div>
                    <p class="Quantidade1">0 servidores Online</p>
                    <div class="ContainerBtn">
                        <button class="btn1">Atualizar</button>
                    </div>
                </div>

                <div class="BlocoUsuarios">
                    <div class="ImgProfessor">
                        <img class="Professor" width="110px" height="110px"
                            src="https://image.flaticon.com/icons/png/512/90/90477.png">
                    </div>
                    <p class="AreaParaProfessores">Para professores</p>
                    <div class="ContainerBtn">
                        <button class="btn1">Professores</button>
                    </div>
                </div>

                <div class="BlocoAlunos">
                    <div class="ParaAlunos">
                        <img class="Alunos" width="110px" height="110px"
                            src="https://image.flaticon.com/icons/png/512/43/43157.png" alt="">
                    </div>
                    <p class="AreaParaAlunos">Para Alunos</p>
                    <div class="ContainerBtn">
                        <button class="btn1">Alunos</button>
                    </div>
                </div>


                <div class="blocoHorizontal">

                    <div class="PessoasOnn">
                        <h1 class="PessoasOnline"> <p class="NumeroParaManipular"></p> Membros online: </h1> <!--Essa linha será manipulada com javascript para Capturar os players online-->
                    </div>

                    <div class="Desafios">
                    <h1 class="TotalDeUsuarios">
                    <?php
                        $quantidade = "SELECT COUNT(id) AS total FROM tb_desafios";
                        $resultado = mysqli_query($conectar, $quantidade);
                        $linhas = mysqli_fetch_assoc($resultado);
                        ; 
                        echo "Desafios disponíveis: " . "<span  style='color:green';'>". $linhas['total'];   
                                                                                
                    ?>

                    </div>

                    <div class="UsuariosRegistrados">
                    <h1 class="TotalDeUsuarios">
                    <?php
                        $quantidade = "SELECT COUNT(id) AS total FROM tb_usuarios";
                        $resultado = mysqli_query($conectar, $quantidade);
                        $linhas = mysqli_fetch_assoc($resultado); 
                        echo "Usuários registrados: " . "<span  style='color:green';'>". $linhas['total'];     
                        echo "<b></b>";                                                      
                    ?>
                    </h1>
                        
                    </div>

                <hr class="sep3"/>
                </div>

                <div class="footerRigth">
                    <h1 class="MensagemMotivadora">Treine, melhore e aprenda de uma forma divertida!</h1>
                    <p class="Conselhos">Lembre-se, grandes poderes exigem grandes responsabilidades</p>

                </div>

            </div>
        </div>


    </section>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5
    <div class=" collapse navbar-collapse" idmin.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>

</body>

</html>
