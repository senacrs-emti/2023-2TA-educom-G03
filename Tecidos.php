<?php
include_once './header.php'
?>

<?php 


$host="localhost";
$usuario="root";
$senha="";
$banco="banco_teste";

$mysqli=new mysqli($host,$usuario,$senha,$banco);


if ($mysqli->connect_error) {
    die("Erro na conexão: " . $mysqli->connect_error);
}

$Teci="SELECT SRC from teste_sql WHERE TAG='Tecidos' ";

$Carregar=$mysqli->query($Teci);


while ($row = $Carregar->fetch_assoc()) {
  echo ("<img src=".$row['SRC']." class='imagens'>");
}



$mysqli->close();

?>

<?php 
include_once './footer.php'
?>