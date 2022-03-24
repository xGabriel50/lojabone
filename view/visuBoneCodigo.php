<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/boneModel.php");
?>

<div class="container mt-5" >
<form action="#" method="Post" class="row row-cols-auto   justify-content-lg-center g-3 align-items-center">
  <div class="col-8">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Código do Boné</label>
    <div class="input-group">
      <div class="input-group-text">Código</div>
      <input type="text" name="nomebone" class="form-control" id="inlineFormInputGroupUsername" placeholder="">
    </div>
  </div>
  <div class="col-2">
    <button type="submit" class="btn btn-primary">Pesquisar</button>
  </div>
</form>

<table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Valor</th>
      <th scope="col">Marca</th>
      <th scope="col">Alterar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
<?php
$codigobone = isset($_POST["idbone"])? $_POST["idbone"] : ""; 
if($codigobone){
$codigobone = visuBoneCodigo($conn, $codigobone);

?>
    <tr>
      <th scope="row"><?=$codigobone["idbone"];?></th>
      <td><?=$codigobone["nomebone"]?></td>
      <td><?=$codigobone["valorbone"]?></td>
      <td><?=$codigobone["marcabone"]?></td>
      <td>
        <form action="../view/alterarformbone.php" method="POST">
          <input type="hidden" value="<?=$codigobone["idbone"]?>" name="idbone">
          <button type="submit" class="btn btn-primary">Alterar</button>
        </form>
        
      </td>
      <td>
          <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
  Apagar
</button>

      </td>
    </tr>
  </tbody>
</table>

<?php
}
?>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModal">Exclusão de Usuário</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
        <button type="button" class="btn btn-primary">Sim</button>
      </div>
    </div>
  </div>
</div>


<?php
include_once("../view/footer.php");
?>