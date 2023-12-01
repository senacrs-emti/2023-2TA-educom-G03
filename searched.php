<?php
include_once './header.php'
?> 




 <?php 

include './AcessoBanco.php';
              
              if ($mysqli->connect_error) {
                  die("Erro na conexão: " . $mysqli->connect_error);
              }
        

              if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $pesquisa = $_POST['pesquisa_sub']; 
            $wrdsrc="SELECT SRC, ID from teste_sql WHERE TAG LIKE '%".$pesquisa."%' ;";
            $pesquisar=$mysqli->query($wrdsrc);
            }
            
              while ($row = $pesquisar->fetch_assoc()) {
                echo ("<a href='ImgAberta.php?id=".$row['ID']."' class='imagens'><img src=".$row['SRC']." class='imagens'></a>");
            }

            
            
        
            $mysqli->close();

?>

<?php 
include_once './footer.php'
?>