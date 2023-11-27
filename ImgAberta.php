
<?php
include_once 'header.php';
include './AcessoBanco.php';

if(isset($_GET['id'])){

  $ImagemID = $_GET['id'];
  $query = "SELECT * FROM teste_sql WHERE ID = $ImagemID";
  $chamar = mysqli_query($mysqli,$query);

  if ($chamar && $row = mysqli_fetch_assoc($chamar)) {
    echo "<img src='" . $row['SRC'] . "' alt='Image' class='imagem_aberta'>";
    echo "<div class='container-fluid col mt-5'><h1>".$row['Nome']."</h1><p>".$row['Descri']."</p></div>";
  } 
}else{
  echo "<img src='./Img_Strg/errorQuery.jpg'>";

}

?>



<?php
include_once 'footer.php';
?>