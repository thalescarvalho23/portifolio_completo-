<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>informação</title>
  <link rel="stylesheet" href="css-insert.css">
</head>
<body>



<div class= "hader">

<h1>Obrigado pelas Suas informações, vou procurar responde-las mais breve possivel</h1>
</div>  

<div class="row"> <!-- BOTOES -->
<div class="col-3 menu">
<ul>
<a href="index.php"style="text-decoration:none" ><li>Voltar </li></a>
</ul>
</div>

<div class="col-9.2"><!-- DIV DE ESPAÇAMENTO ENTRE FINAL DA DIV DE SELECT COM O RODAPÉ-->
<center><div class="painel" style="width: 80rem;">
 o tempo de resposta entre a o Envio para o retorno será em até 10 dias.<br> Atenciosamente, Thales Carvalho.

 <?php
//CONEXAO COM BD
$mysqli_connection = new MySQLi('localhost','id17189550_thales','Th@les123T0bi@146','id17189550_formulario');
if($mysqli_connection->connect_error){
   echo "Desconectado! Erro: " . $mysqli_connection->connect_error;
}else{
   echo "";
}

      //INSERT
      $value = $_POST['nome'];
      $value1 = $_POST['email'];
      $value2 = $_POST['informacao'];
      
     
      $sql= "INSERT INTO `index-portifolio`(`id`, `nome`, `email`, `informacao`) VALUES ('0',' $value','$value1','$value2')";
     
     if ($mysqli_connection->query($sql) === TRUE) {
      echo "";
    } else {
      echo "Erro: " . $sql . "<br>" . $mysqli_connection->error;
    }
    
    $mysqli_connection->close();
  

?>