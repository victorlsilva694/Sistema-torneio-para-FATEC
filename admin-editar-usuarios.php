<?php
    include('verificar-login.php');
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

    <link rel="stylesheet" href="css/AreaAdmin1.css">

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
        </div>
    </nav>


        <div align="center">
            <table class="table">
                <thead>
                    <td bgcolor="#000000">
                        <b>ID:</b>
                    </td>
                    <td bgcolor="#000000">
                        <b>Nome:</b>
                    </td>
                    <td bgcolor="#000000">
                        <b>Login:</b>
                    </td>
                    <td bgcolor="#000000">
                        <b>Tipo:</b>
                    </td>
                    <td bgcolor="#000000">
                        <b>RA:</b>
                    </td>
                    <td bgcolor="#000000">
                        <b>Email:</b>
                    </td>
                    <td bgcolor="#000000">
                        <b>Data do cadastro:</b>
                    </td>
                    <td bgcolor="#000000">
                        <b>Ações:</b>
                    </td>
                </thead>
            <tbody>
        </div>

        <?php foreach($lista as $linha){ ?>
        <tr>
            <td>
                <?php echo $linha['id'];?>
            </td>

            <td>
                <?php echo $linha['nome'];?>
            </td>
            <td>
                <?php echo $linha['login'];?>
            </td>
            <td>
                <?php echo $linha['tipo'];?>
            </td>
            <td>
                <?php echo $linha['ra'];?>
            </td>
            <td>
                <?php echo $linha['email'];?>
            </td>
            <td>
                <?php echo $linha['dia'];?>
            </td>

            <td>
                <a href="usuarios-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info">
                    Editar
                </a>

                <br>
                
                <a href="usuarios-excluir-get.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">
                    Excluir
                </a>
            </td>

        </tr>
        <?php } ?>
    </tbody>
    </table>
        <br>
        <br>
    <div align="right">
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
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