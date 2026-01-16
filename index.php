<?php
/*
BLOG PESSOAL + MySQL + Classes + include
Autor: Luiz Fernando Corcini
Data: dd/mm/aaaa
*/

// Importa o arquivo que contém a classe de conexão
include('principal.php');

// Instancia o objeto da classe principal
$Blog = new principal();

// Tenta realizar a conexão
if ($Blog->conectar()) {
  // Se a conexão for bem-sucedida, define o cabeçalho de texto e carrega o site
  header("Content-Type: text/html; charset=utf-8", true);
  $conexao = $Blog->getConexao();
  include('principal_blog_u4.php');
} else {
  // Se falhar (ex: XAMPP desligado), exibe erro amigável
  echo "Não foi possível acessar a base de dados!!<br>";
  echo "Blog não está disponível no momento.";
}
