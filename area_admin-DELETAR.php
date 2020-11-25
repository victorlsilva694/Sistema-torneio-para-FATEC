
<?php
    include('verificar-login.php');
    require_once 'classes\Usuarios.php';
    $categoria= new Usuarios();
    $lista = $categoria->listar();
?>

<DOCTYPE html>
<html>
  <head>
      <meta charset='utf-8'>
      <title></title>
      <div align="center">
      
      <br><br>
      <a href="usuarios-criar.php" class="btn btn-success">ADICIONAR ADMINISTRADOR</a>
</div>
<br>
<div align="center">
<table class="table">
    <thead>
        <td bgcolor="#CDC9C9"><b>ID:</b></td>
        <td bgcolor="#CDC9C9"><b>Nome:</b></td>
        <td bgcolor="#CDC9C9"><b>Login:</b></td>        
        <td bgcolor="#CDC9C9"><b>Tipo:</b></td>
        <td bgcolor="#CDC9C9"><b>RA:</b></td>
        <td bgcolor="#CDC9C9"><b>Email:</b></td>
        <td bgcolor="#CDC9C9"><b>Data do cadastro:</b></td>
        <td bgcolor="#CDC9C9"><b>Ações:</b></td>
    </thead>
    <tbody>



        <?php foreach($lista as $linha){ ?>
        <tr>
            <td><?php echo $linha['id'];?></td>
            <td><?php echo $linha['nome'];?></td>
            <td><?php echo $linha['login'];?></td>            
            <td><?php echo $linha['tipo'];?></td>
            <td><?php echo $linha['ra'];?></td>
            <td><?php echo $linha['email'];?></td>
            <td><?php echo $linha['dia'];?></td>
            <td>
                <a href="usuarios-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info">Editar</a><br>
                <a href="usuarios-excluir-get.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        <?php } ?>





    </tbody>
</table>
<br><br>
<div align="right">
</div>
