<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
      <meta charset="utf-8">
      <title>CRUD - Cadastar</title>
    </head>
    <body>
      <h1>Cadastar Usuário</h1>
      <?php
      if(isset($_SESSION['msg'])){
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
       }
       ?>
      <form method="post" action="processa.php">
      <label>Nome: </label>
      <input type="text" name="nome" placeholder="Digite o nome completo"><br><br>

      <label>CPF: </label>
      <input type="char" name="cpf" placeholder="Digite o CPF"><br><br>

      <label>CNPJ: </label>
      <input type="char" name="cnpj" placeholder="Digite o CNPJ"><br><br>

      <label>Observacoes: </label>
      <input type="text" name="observacoes" style="height:50px!important" rows="50"></textarea><br><br>

      <input type="submit" value="Cadastrar">
      </form>
    </body>
</html>
