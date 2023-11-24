<?php
include_once './header.php'
?> 

<div class="carregar" id="carregar">
        <div class="girando"></div>
    </div>


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

$seleciona = $_POST['Filtros']; 



$wrdsrc="SELECT SRC from teste_sql WHERE TAG IN ('". implode("','" , $seleciona) . "')";

$selecionar=$mysqli->query($wrdsrc);

}

while ($row = $selecionar->fetch_assoc()) {
  echo ("<a href='ImgAberta.php' class='imagens'><img src=".$row['SRC']." class='imagens'></a>");
}



$mysqli->close();

?>



 


<?php 
include_once './footer.php'
?>