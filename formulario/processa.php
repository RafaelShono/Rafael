<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$cnpj = filter_input(INPUT_POST, 'cnpj', FILTER_SANITIZE_STRING);
$observacoes = filter_input(INPUT_POST, 'observacoes', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO usuarios2 (nome, cpf, cnpj, observacoes, datatime) VALUE('$nome', '$cpf', '$cnpj', '$observacoes', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
  $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com susesso</p>";
  header("location: index1.php");
}else {
  $_SESSION['msg'] = "<p style='color:red;'>Usuário nao foi cadastrado com susesso</p>";
  header("location: index1.php");
}
