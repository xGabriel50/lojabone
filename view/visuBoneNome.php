
<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/boneModel.php");
?>

<div class="container mt-5" >
<form action="#" method="Post" class="row row-cols-auto   justify-content-lg-center g-3 align-items-center">
  <div class="col-8">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Nome do Bone</label>
    <div class="input-group">
      <div class="input-group-text">Nome</div>
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
$nomebone = isset($_POST["nomebone"])? $_POST["nomebone"] : ""; 

$dado = visuBoneNome($conn,$nomebone);

foreach($dado as $nomebone):
?>
    <tr>
      <th scope="row"><?=$nomebone["idbone"];?></th>
      <td><?=$nomebone["nometenis"]?></td>
      <td><?=$nomebone["valorbone"]?></td>
      <td><?=$nomebone["marcabone"]?></td>
      <td>
        <form action="../view/alterarformBone.php" method="POST">
          <input type="hidden" value="<?=$nomebone["idbone"]?>" name="idbone">
          <button type="submit" class="btn btn-primary">Alterar</button>
        </form>
        
      </td>
      <td> <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" codigo="<?=$nomebone["idbone"]?>" bone="<?=$nomebone["nomebone"]?>" data-bs-toggle="modal" data-bs-target="#deleteModal">
  Apagar
</button>
</td>
    </tr>
<?php
endforeach;
?>   
    
  </tbody>
</table>

</div>
<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModal">Exclusão de Produto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
      <form action="../controler/deletarBone.php" method="Get">
          <input type="hidden" class="codigo form-control" name="idbone">
          <button type="submit" class="btn btn-danger">Sim</button>
        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
    
      </div>
    </div>
  </div>
</div>

<script>
  var deletarBoneModal = document.getElementById('deleteModal');
      deletarBoneModal.addEventListener('show.bs.modal',function(event){
        var button = event.relatedTarget;
        var codigo = button.getAttribute('codigo');
        var bone = button.getAttribute('bone');
        var modalBody = deletarBoneModal.querySelector('.modal-body');
        modalBody.textContent = 'Gostaria de excluir o produto "' + bone + '"?'
        
        var Codigo = deletarTenisModal.querySelector('.modal-footer .codigo');
        Codigo.value = codigo;
      })

</script>

<?php
include_once("../view/footer.php");
?>