<?php
include_once './header.php'
?> 

 <?php 


$host="localhost";
$usuario="root";
$senha="";
$banco="Banco_Projeto";

$mysqli=new mysqli($host,$usuario,$senha,$banco);


if ($mysqli->connect_error) {
    die("Erro na conexão: " . $mysqli->connect_error);
}

$selecionar = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$seleciona = implode($_POST); 
$wrdsrc="SELECT SRC from teste_sql WHERE TAG LIKE '".$seleciona."' ;";
$selecionar=$mysqli->query($wrdsrc);
}

while ($row = $selecionar->fetch_assoc()) {
  echo ("<img src=".$row['SRC']." class='imagens'>");
}



$mysqli->close();

?>

 


<?php 
include_once './footer.php'
?>