<?php

include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/boneModel.php");
extract($_REQUEST,EXTR_OVERWRITE);

if(inserirCadastroBone($conn,$nomebone,$valorbone,$marcabone,$estoquebone)){
echo("Produto cadastrado com sucesso!!");
}else{
echo("Não foi possível cadastrar esse produto!!");
}
include_once("../view/footer.php")
?>

