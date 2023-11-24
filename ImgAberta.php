
<?php
include './AcessoBanco.php';

if(isset($_GET['id'])){

  $ImagemID = $_GET['id'];
  $query = "SELECT SRC FROM teste_sql WHERE ID = $ImagemID";
  $chamar = mysqli_query($mysqli,$query);

  if ($chamar && $row = mysqli_fetch_assoc($chamar)) {
    echo "<img src='" . $row['SRC'] . "' alt='Image'>";
  } 
}else{
  echo "Imagem não encontrada.";
}

?>
