  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript">
    //Mostrando valores do input rage dentro do output em tempo real
    $( document ).ready(function() {
      $('[name=tamanho]').on('input', function(){
        $('[name=valortamanho]').val(this.value);
      });
    });
  </script>
  <!-- a parte de abertura html e body estão no cabeçalho -->
  <!-- incluido cabeçalho e setando seu title sem responsividade-->
  <?php 
    /*definindo o css e title da pagina atual*/
    $cabecalho_css = '<link rel="stylesheet" href="css/produto.css">';
    $cabecalho_title = "Produto da Mirror Fashion";
    require("header.php"); 
  ?>
  <!-- miolo da pagina -->
  <!-- fundo "elegante" cinza-->
  <div class="produto-back">
  <div class="container">
    <div class="produto">
      <!-- parte de detalhes do produto -->
      <div class="detalhes">
        <h2>Detalhes do produto</h2>

        <p>Esse é o melhor casaco de Cardigã que você já viu. Excelente 
        material italiano com estampa desenhada pelos artesãos da 
        comunidade de Krotor nas ilhas gregas. Compre já e receba hoje 
        mesmo pela nossa entrega a jato.</p>
        <!-- Tabela com caracteristicas do produto -->
        <table>
          <thead>
            <tr>
              <th>Característica</th>
              <th>Detalhe</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Modelo</td>
              <td>Cardigã 7845</td>
            </tr>
            <tr>
              <td>Material</td>
              <td>Algodão e poliester</td>
            </tr>
            <tr>
              <td>Cores</td>
              <td>Azul, Rosa e Verde</td>
            </tr>
            <tr>
              <td>Lavagem</td>
              <td>Lavar a mão</td>
            </tr>
          </tbody>
        </table>
        <!--fim Tabela com caracteristicas do produto -->
      </div>    
      <!-- fim parte de detalhes do produto -->
      <h1>Fuzzy Cardigan</h1>
      <p>por apenas R$ 129,00</p>
      <!-- form para envio ao servidor -->
      <form action="checkout.php" method="POST">
          <fieldset class="cores">
              <legend>Escolha a cor:</legend>
              <!-- imagens e radio  -->
              <input type="radio" name="cor" value="verde" id="verde" checked>
              <label for="verde">
                <img src="img/produtos/foto2-verde.png" alt="verde">
              </label>
              
              <input type="radio" name="cor" value="rosa" id="rosa">
              <label for="rosa">
                <img src="img/produtos/foto2-rosa.png" alt="rosa">
              </label>
              
              <input type="radio" name="cor" value="azul" id="azul">
              <label for="azul">
                <img src="img/produtos/foto2-azul.png" alt="azul">
              </label>
              <!--fim!-->
              
              <!-- inputs hidden para passar informações extra -->
              <input type="hidden" name="nome" value="Fuzzy Cardigan">
              <input type="hidden" name="preco" value="129.00">
              <!-- imprimindo valor para enviar ao servidor -->
              <input type="hidden" value="<?php echo 2 ?>" name="img">
              <!--fim inputs hidden para passar informações extra -->
          </fieldset>

          <!-- escolher cores -->
          <fieldset class="tamanhos">
            <legend>Escolha o tamanho:</legend>
            <input type="range" min="36" max="46" value="42" step="2" 
             name="tamanho" id="tamanho">
            <output for="tamanho" name="valortamanho">42</output>
          </fieldset>
          <!-- fim escolher cores -->

          <input type="submit" class="comprar" value="Comprar">
      </form>
    </div>
  </div>  
  </div>      
  <!--fim miolo da pagina -->
  <?php require("footer.php"); ?>
</body>
</html>