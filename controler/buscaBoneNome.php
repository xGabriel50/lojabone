<?php
include_once("../model/conexao.php");
include_once("../model/boneModel.php");

$nomebone = $_POST["nomebone"];

if(visuBoneNome($conn,$nomebone)){
    header("Location:../view/visuBoneNome.php");
}else{
    header("Location:../view/visuBoneNome.php");
}
include_once("../view/footer.php");
?>


