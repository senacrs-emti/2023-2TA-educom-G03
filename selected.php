<?php
include_once './header.php'
?> 



 <?php 

include './AcessoBanco.php';


if ($mysqli->connect_error) {
    die("Erro na conexão: " . $mysqli->connect_error);
}



$selecionar = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$seleciona = $_POST['Filtros']; 



$wrdsrc="SELECT * from teste_sql WHERE TAG IN ('". implode("','" , $seleciona) . "')";

$selecionar=$mysqli->query($wrdsrc);

}

while ($row = $selecionar->fetch_assoc()) {
  echo ("<a href='ImgAberta.php?id=".$row['ID']."' class='imagens'><img src=".$row['SRC']." class='imagens'></a>");
}



$mysqli->close();

?>



 


<?php 
include_once './footer.php'
?>