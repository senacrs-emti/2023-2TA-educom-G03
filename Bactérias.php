<?php
include_once './header.php'
?>

<?php 


include './AcessoBanco.php';


if ($mysqli->connect_error) {
    die("Erro na conexão: " . $mysqli->connect_error);
}

$Bact="SELECT * from teste_sql WHERE TAG LIKE '%Bactéria%' ";

$Carregar=$mysqli->query($Bact);


while ($row = $Carregar->fetch_assoc()) {
  echo ("<img src=".$row['SRC']." class='imagens'>");
}



$mysqli->close();

?>

<?php 
include_once './footer.php'
?>