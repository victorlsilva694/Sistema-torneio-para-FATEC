<?php
    include('verificar-login.php');
    session_start();
    require_once 'classes\Usuarios.php';
    $categoria= new Usuarios();
    $lista = $categoria->listar();
?>

<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"

        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="css/AreaAdmin.css">

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
            <ul class="navbar-nav ml-auto" style="padding: 18px;">
            
                <li class="nav-link active">
                    <a style="color: white; padding: 0px; font-size: 18px; text-decoration:none"
                    class="nomeUsuario">Olá, <?php echo $_SESSION['login'];?></h3>
                </li>
                
                <li class="nav-link active">
                    <a style="color: white; padding: 8px; font-size: 18px; text-decoration:none" href="admin-editar-usuarios.php">Gerenciar usuários</a>
                </li>

                <li class="nav-link active">
                    <a style="color: white; padding: 8px; font-size: 18px; text-decoration:none"
                        href="#">Desafios</a>
                </li>

                <li class="nav-link active">
                    <a style="color: white; padding: 8px; font-size: 18px; text-decoration:none" href="#">Contato</a>
                </li>

                <li class="nav-link active">
                    <a style="color: white; padding: 8px; font-size: 18px; text-decoration:none"
                        href="logout.php">Logout</a>                        
                </li>
                
                       
            </ul>
        </div>
    </nav>

    <div class="ImgFatec">
                <img class="foto" src="img/Fatec2.jpg" width="50%" height="300px" alt="">
        </div>