<?php
session_start();
//codigo contra bug do navegador
if(!$_SESSION['login'])
{
	header('Location: error404.php');
	exit();
}
?>
