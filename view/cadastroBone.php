<?php
include_once("header.php");
?>

<br><br><div class="container">

<form class="row g-3" action="../controler/inserirCadastroBone.php" method="Get">
  <div class="col-md-12">
    <label for="inputBone" class="form-label">Nome do Bone</label>
    <input type="text" name="nomebone" class="form-control" id="inputBone" placeholder="" required>
  </div>

  <div class="col-md-6">
    <label for="inputMarca" class="form-label">Marca do Bone</label>
    <input type="text" name="marcabone" class="form-control" id="inputMarca" placeholder="" required>
   
  </div>

  <div class="col-6">
    <label for="inputQuantidade" class="form-label">Quantidade em Estoque</label>
    <input type="number" name="estoquebone" class="form-control" id="inputQuantidade" placeholder="" required>
  </div>

  <div class="col-md-6">
    <label for="inputValor" class="form-label">Valor do Boné</label>
    <input type="Number" name="valorbone" class="form-control" id="inputValor" placeholder="" required>
  </div>
 
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Confirmo que as informações cadastradas estão corretas.
      </label>
    </div>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Criar</button>
  </div>

</form>

</div>

<?php
include_once("footer.php");
?>
