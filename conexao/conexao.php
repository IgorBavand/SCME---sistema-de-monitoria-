<?php
define('host','localhost');
define('usuario', 'igor');
define('senha', 'fredprateado');
define('db', 'SCME');

$conexao = mysqli_connect(host, usuario, senha, db) or die ('Não foi possivel acessar o banco.');
mysqli_set_charset($conexao,"utf8");

?>