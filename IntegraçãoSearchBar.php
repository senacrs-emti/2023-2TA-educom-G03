<?php
              $host="localhost";
              $usuario="root";
              $senha="";
              $banco="bd_principal";
          
              $mysqli=new mysqli($host,$usuario,$senha,$banco);
              use world;
              
              
              if ($mysqli->connect_error) {
                  die("Erro na conexão: " . $mysqli->connect_error);
              }
            
           
            $wrdsrc="SELECT Nome from Banco_Imagens WHERE Nome LIKE '%$_POST%' ;";
            $pesquisar=$ir->query($wrdsrc);

          ?>