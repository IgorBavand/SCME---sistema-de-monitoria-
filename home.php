<?php
session_start();
include('verifica_login.php');
print_r($_SESSION);
?>
<h2><a href="logout.php">Sair</a></h2>