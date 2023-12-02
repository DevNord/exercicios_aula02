<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
//define a variável de conexão
$conexao = null;
/*OBSERVAÇÕES:
 Teste de conexão:
   echo "Connected Successfully:";
}catch(PDOException $e){
  echo "Connection Failed:".$e->getMessage()."";
}
-----------------------------------------------------
  Adicionando dados a tabela
$stmt = $conexao->prepare("INSERT INTO usuarios (firstName, nickname, password) VALUES (:valor1, :valor2, :valor3)");
  $stmt->bindParam(':valor1', $var1);
  $stmt->bindParam(':valor2', $var2);
  $stmt->bindParam(':valor3', $var3);
  $stmt->execute();
 echo "Usuário criado com sucesso:";

}catch(PDOException $e){
  echo "Connection Failed:".$e->getMessage()."";
}

*/
$var1="Danilo";
$var2="Nilo";
$var3="87821";

try{
  $conexao = new PDO("mysql:host=$servername; dbname=crud", $username, $password);
  $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $conexao->prepare("INSERT INTO usuarios (firstName, nickname, password) VALUES (:valor1, :valor2, :valor3)");
  $stmt->bindParam(':valor1', $var1);
  $stmt->bindParam(':valor2', $var2);
  $stmt->bindParam(':valor3', $var3);
  $stmt->execute();

$var4="Sabrina";
$var5="Sá";
$var6="76548";
  $stmt->bindParam(':valor1', $var4);
  $stmt->bindParam(':valor2', $var5);
  $stmt->bindParam(':valor3', $var6);
  $stmt->execute();
 echo "Usuário criado com sucesso:";

}catch(PDOException $e){
  echo "Connection Failed:".$e->getMessage()."";
}


//fecha a conexão com o banco de dados
$conexao = null;
?>