<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP - inserindo dados em banco</h1>
    <?php
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $cnpj = $_POST['cnpj'];
    $observacoes = $_POST['observacoes'];
    // conexão com o banco de dados
    mysqli_connect("localhost", "root","") or die(mysqli_error());
    mysqli_select_db("usuario") or die(mysqli_error());
    $strSQL ="INSERT INTO usuario(";
    $strSQL =   $strSQL . "nome, ";
    $strSQL =   $strSQL . "sobrenome, ";
    $strSQL =   $strSQL . "cpf, ";
    $strSQL =   $strSQL . "cnpj )";
    $strSQL =   $strSQL . "VALUES(";
    $strSQL =   $strSQL . "$nome ";
    $strSQL =   $strSQL . "nome, ";
    $strSQL =   $strSQL . "nome, ";
    $strSQL =   $strSQL . "nome, ";
    
    ?>
</body>
</html>