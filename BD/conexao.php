<?php

$db_host = '127.0.0.1';
$db_username = 'root';
$db_password = '';
$db_name = 'open_library_source';

$conexao = new mysqli($db_host, $db_username, $db_password, $db_name);

if ($conexao->connect_error) {
  die("Erro na conexão: " . $conexao->connect_error);
} else {
  //   echo "Conexão bem-sucedida!";
}

?>