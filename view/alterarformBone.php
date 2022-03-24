<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/boneModel.php");

extract($_REQUEST,EXTR_OVERWRITE);
$informa = visuBoneCodigo($conn, $idbone);

?>

<div class="container">

<form class="row g-3" action="../controler/alterarBone.php" method="Get">
<input type="hidden" name="codigobone" value="<?=$informa["idbone"]?>">
  <div class="col-md-6">
    <label for="inputBone" class="form-label">Nome do Boné</label>
    <input type="text" name="nomebone" value="<?=$informa["nomebone"]?>" class="form-control" id="inputBone" placeholder="" required>
  </div>
  <div class="col-md-6">
    <label for="inputValor" class="form-label">Valor do Boné</label>
    <input type="text" name="valorbone" value="<?=$informa["valorbone"]?>" class="form-control" id="inputValor" placeholder="" required>
  </div>
  <div class="col-md-6">
    <label for="inputMarca" class="form-label">Marca do Boné</label>
    <input type="text" name="marcabone" value="<?=$informa["marcabone"]?>" class="form-control" id="inputMarca" placeholder="" required>
  </div>
  <div class="col-6">
    <label for="inputQuantidade" class="form-label">Quantidade em estoque</label>
    <input type="number" name="estoquebone" value="<?=$informa["estoquebone"]?>" class="form-control" id="inputQuantidade" placeholder="XXX" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Alterar</button>
  </div>
</form>

</div>
<?php
include_once("footer.php");
?>
