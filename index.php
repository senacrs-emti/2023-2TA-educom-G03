<?php
include_once './header.php'
?>





      <main class="container-fluid col-8">
              
              <section class="col-lg-12 mt-3">
                <div class="row" >
                  <div class="col" ><a href="Acervo.php"><h2>Acervo</h2></a>
                  <p>Imagens de diferentes espécies e estruturas observadas em microscópios.</p></div>
                </div>
              </section>
              <section class="col-lg-12 mt-3">
                <div class="row" >
                  <div class="col" ><a href="Bactérias.php"><h2>Bactérias</h2></a>
                  <p>Imagens de diferentes espécies e estruturas observadas em microscópios.</p></div>
                </div>
              </section>
              <section class="col-lg-12 mt-3">
                <div class="row" >
                  <div class="col" ><a href="Tecidos.php"><h2>Tecidos</h2></a>
                  <p>Imagens de diferentes espécies e estruturas observadas em microscópios.</p></div>
                </div>
              </section>
              <section class="col-lg-12 mt-3">
                <div class="row" >
                  <div class="col" ><a href="Microscópios.php"><h2>Métodos</h2></a>
                  <p>Entenda a diferença entre os métodos de observação.</p></div>
                </div>
              </section>

      </main>   
      <aside class="container-fluid col-4">
        <h1 >Filtros</h1>
        <form action="./selected.php" name="Filtros" method="POST" >
          <input type="checkbox" id="html" name="Filtros[]" value="Eletrônico">
          <label for="T1">Eletrônico</label><br>
          <input type="checkbox" id="html" name="Filtros[]" value="Óptico">
          <label for="T2">Óptico</label><br>
          <input type="checkbox" id="html" name="Filtros[]" value="Bactérias">
          <label for="T3">Bactérias</label><br>
          <input type="checkbox" id="html" name="Filtros[]" value="Protozoários">
          <label for="T4">Protozoários</label><br>
          <input type="checkbox" id="html" name="Filtros[]" value="Inorgânicos">
          <label for="T5">Inorgânicos</label><br>
          <input type="checkbox" id="html" name="Filtros[]" value="Esquema">
          <label for="T6">Esquema</label><br>
          <input type="submit" action="./selected.php" method="GET" for="Filtros" >
        </form>

      </aside>




  
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
      <script src="script.js"></script>

<?php 
include_once './footer.php'
?>