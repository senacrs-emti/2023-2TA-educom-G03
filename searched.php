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
              $banco="Banco_Projeto";  // em casa o nome deste db é Banco_Projeto, na escola (computador 30) é banco_teste
          
              $mysqli=new mysqli($host,$usuario,$senha,$banco);
              
              
              if ($mysqli->connect_error) {
                  die("Erro na conexão: " . $mysqli->connect_error);
              }
        

              if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $pesquisa = $_POST['pesquisa_sub']; 
            $wrdsrc="SELECT SRC from teste_sql WHERE Nome LIKE '%".$pesquisa."%' ;";
            $pesquisar=$mysqli->query($wrdsrc);
            }
            
              while ($row = $pesquisar->fetch_assoc()) {
                echo ("<img src=".$row['SRC']." class='imagens'>");
            }

            
        
            $mysqli->close();

?>

<?php 
include_once './footer.php'
?>