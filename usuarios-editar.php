<?php
include('verificar-login.php');
$id = $_GET['CODIGO'];
require_once 'classes\Usuarios.php';
$categoria = new Usuarios();
$linha = $categoria->listar1Categoria($id);
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

    <link rel="stylesheet" href="css/AreaAdmin2.css">

    <title>Fatec - AM</title>
</head>

<body>
<form name="alterar-categoria" action="usuarios-editar-post.php" method="post">
  <meta charset='utf-8'>
  <title></title>
  <div align="center">


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
                <a style="color: white; padding: 8px; font-size: 18px; text-decoration:none" href="#">Gerenciar Usuarios</a>
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



  </div>
  <br>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">

                
                   
                <input type="hidden" class="form-control" placeholder="id:" name="id" required value="<?php echo $id;?>">
                <br>

                <label>Nome:</label>                
                <input maxlength="30" class="form-control" placeholder="nome:" name="nome" required value="<?php echo $linha['nome'];?>">

                <br>
                <label>Login:</label>
                <input maxlength="30" class="form-control" placeholder="login:" name="login" required value="<?php echo $linha['login'];?>">

                <br>
                <label>Tipo:</label>
                <input maxlength="9" class="form-control" placeholder="tipo:" name="tipo" required value="<?php echo $linha['tipo'];?>">

                <br>
                <label>RA:</label>
                <input maxlength="14" class="form-control" placeholder="ra:" name="ra" required value="<?php echo $linha['ra'];?>">

                <br>
                <label>E-mail:</label>
                <input maxlength="30" class="form-control" placeholder="email:" name="email" required value="<?php echo $linha['email'];?>">
                

            </div>
            <br>
            <div class="Lado">
              <input class="Salvar" href="usuario-editar.php" type="submit" value="Salvar">
              <input class="Voltar" href="area-admin.php" value="voltar">
            </div>
</form>

<?php?>