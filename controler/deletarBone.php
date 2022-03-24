<?php
include_once("../model/conexao.php");
include_once("../model/boneModel.php");
include_once("../view/header.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(deletarBone($conn,$idbone)){
echo("Boné excluido com sucesso.");
}else{
echo("Boné não Excluido.");
}

include_once("../view/footer.php");
?>