<?php
/*include_once("conexao.php");
require_once 'classes\Usuarios.php';
$categoria = new Usuarios();
$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$tipo = $_POST['tipo'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$dia = $_POST['dia'];
$categoria->inserir($nome, $login, $senha, $tipo, $cpf, $email, $dia);

?>*/

session_start();
include_once("conexao.php");


$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
$ra = filter_input(INPUT_POST, 'ra', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);


$result_usuario = "INSERT INTO tb_usuarios(nome, login, senha, tipo, ra, email, dia) VALUES('".$nome."','".$login."','".$senha."','".$tipo."','".$ra."','".$email."', NOW())";
$resultado_usuario = mysqli_query($conectar, $result_usuario);

if(mysqli_insert_id($conectar))
{
	$_SESSION['msg'] = "<p style='color:green;' >SUCESSO: Usuário cadastrado com exito.</p>";
	header("Location: cadastro.php");	
}
else
{
	$_SESSION['msg'] = "<p style='color:orange;'>ERRO: Login, E-mail ou RA, já se encontram no sistema.</p>";
	header("Location: cadastro.php");	
}



?>