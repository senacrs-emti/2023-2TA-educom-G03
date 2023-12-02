<?php
include_once './header.php'
?>

<?php 


include './AcessoBanco.php';


if ($mysqli->connect_error) {
    die("Erro na conexão: " . $mysqli->connect_error);
}

$Celu="SELECT * from teste_sql WHERE TAG LIKE '%Célula%' ";

$Carregar=$mysqli->query($Celu);


while ($row = $Carregar->fetch_assoc()) {
  echo ("<img src=".$row['SRC']." class='imagens'>");
}



$mysqli->close();

?>

<?php 
include_once './footer.php'
?>