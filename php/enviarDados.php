<?php


try{

    $myPDO = new PDO("pgsql:host=localhost;dbname=procon","postgres","Rafa8121992"); // conectar ao BD
    echo "conectado";

    if ( isset( $_POST['enviar']) )
    {

        $nome =  $_POST['nome'];
        $telefone = $_POST['celular'];
        $sql_query1 = "INSERT INTO pessoa(nome,telefone)VALUES('$nome','$telefone')"; // Inserir dados
        $myPDO->query($sql_query1);
        $ident =  'SELECT max(id) from pessoa';
        $stmt = $myPDO->prepare($ident);
        $stmt->execute();
        $row = $stmt->fetch();
        $ident  = $row[0];
        $cpfOuCnpj = $_POST['cpfOuCnpj'];
        $cad_P = $_POST['cadastro_pessoa'];
        $obs = $_POST['obs'];
  
        $myPDO->query($sql_query1);
        if(strlen($cpf)<=14){
          $sql_query2 = "INSERT INTO pessoa_fisica(id,cpf)VALUES('$ident','$cpfOuCnpj')";
          $sql_query4 = "INSERT INTO reclamacao(id,cpf,descricao)VALUES('$ident','$cpfOuCnpj','$obs')";
          $myPDO->query($sql_query2);
     
      

        } else if(strlen($cpf>=18)) {
          $sql_query6 = "INSERT INTO pessoa_juridica(id,cnpj)VALUES('$ident',' $cad_P')";
          $sql_query7 = "INSERT INTO reclamacao(id,cnpj,descricao)VALUES('$ident',' $cad_P','$obs')";
          $myPDO->query($sql_query6);
    
            
       }
   
     }
   

  
     
      
       

    

     
    
     
     



  
  


}
catch(PDOException $e){
    echo $e->getMessage();
}
?>
