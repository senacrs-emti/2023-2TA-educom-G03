

<?php

$host="localhost";
$usuario="root";
$senha="";
$banco="Banco_Projeto";  // em casa o nome deste db é Banco_Projeto, na escola (computador 30) é banco_teste

$mysqli=new mysqli($host,$usuario,$senha,$banco);

if(isset($_GET['id'])){

$ImagemID = $_GET['id'];
$query = "SELECT SRC FROM teste_sql WHERE ID = $ImagemID";
$chamar = mysqli_query($mysqli,$query);

if ($chamar && $row = mysqli_fetch_assoc($chamar)) {
  echo "<img src='" . $row['SRC'] . "' alt='Image'>";
  } 
}

?>
