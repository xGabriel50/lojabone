<?php
include_once("../model/conexao.php");
include_once("../model/boneModel.php");
include_once("../view/header.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(alterarBone($conn,$codigobone,$nomebone,$valorbone,$marcabone,$estoquebone)){
echo("Cadastro alterado com sucesso.");
}else{
echo("Cadastro não alterado.");
}

include_once("../view/footer.php");
?>