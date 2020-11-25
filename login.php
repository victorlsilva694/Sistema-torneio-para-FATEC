<?php
session_start();
include ('conexao.php');
//codigo contra bug do navegador
if(empty($_POST['login']) && empty($_POST['senha']))
{
	header('Location: error404.php');
	exit();
}

$login = mysqli_real_escape_string($conectar, $_POST['login']);
$senha = mysqli_real_escape_string($conectar, $_POST['senha']);

$pegar_tipo = "select tipo from tb_usuarios where login = '{$login}' and senha ='{$senha}'";

$resultado_tipo = mysqli_query($conectar, $pegar_tipo);
$linhas_tipo = mysqli_num_rows($resultado_tipo);


if($linhas_tipo == 1)
{
	while ($procurar_tipo = mysqli_fetch_array($resultado_tipo))
	{
		$tipo = $procurar_tipo['tipo'];	

		if($tipo == 'professor')
		{
			$_SESSION['login'] = $login;
        	header('Location: fatec.php');
		}

		if($tipo == 'aluno')
		{
			$_SESSION['login'] = $login;
		  	header('Location: fatec.php');
		}

		if($tipo == 'administrador')
		{
			$_SESSION['login'] = $login;
		  	header('Location: area-admin.php');
		}

	}
}

else
{
	$_SESSION['msg1'] = "<p style='color:orange;'>Usuário ou senha inválido.</p>";
	header("Location: index.php");	
}
?>




