<?php
include_once './header.php'
?>

<?php 


include './AcessoBanco.php';


if ($mysqli->connect_error) {
    die("Erro na conexão: " . $mysqli->connect_error);
}

$GERAL="SELECT * from teste_sql";

$Carregar=$mysqli->query($GERAL);


while ($row = $Carregar->fetch_assoc()) {
  echo ("<a href='ImgAberta.php?id=".$row['ID']."' class='imagens'><img src=".$row['SRC']." class='imagens'></a>");
}



$mysqli->close();

?>






      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
      <script src="script.js"></script>

<?php 
include_once './footer.php'
?>