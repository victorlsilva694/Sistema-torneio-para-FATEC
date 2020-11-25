<?php
session_start();
include_once("conexao.php");
require_once 'classes\Usuarios.php';
$categoria = new Usuarios();
$id = $_POST['id'];
$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$tipo = $_POST['tipo'];
$ra = $_POST['ra'];
$email = $_POST['email'];
$dia = $_POST['dia'];
$categoria->alterar($id, $nome, $login, $senha, $tipo, $ra, $email, $dia);
header('Location:admin-editar-usuarios.php');
?>


