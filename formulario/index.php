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
      <input type="text" name="cpf" placeholder="Digite o seu CPF"><br><br>

      <label>E-mail: </label>
      <input type="email" name="email" placeholder="Digite o seu melhor email"><br><br>

      <input type="submit" value="Cadastrar">
      </form>
    </body>
</html>
