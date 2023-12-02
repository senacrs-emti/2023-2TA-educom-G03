<?php
include_once './header.php'
?>

<?php 


include './AcessoBanco.php';


if ($mysqli->connect_error) {
    die("Erro na conexão: " . $mysqli->connect_error);
}

$Huma="SELECT * from teste_sql WHERE TAG LIKE '%Humano%' ";

$Carregar=$mysqli->query($Huma);


while ($row = $Carregar->fetch_assoc()) {
  echo ("<a href='ImgAberta.php?id=".$row['ID']."' class='imagens'><img src=".$row['SRC']." class='imagens'></a>");
}



$mysqli->close();

?>

<?php 
include_once './footer.php'
?>