<?php 

function inserirCadastroBone($conn,$nomebone,$valorbone,$marcabone,$estoquebone){
    $query = "INSERT INTO `tbbone` (`nomebone`, `valorbone`, `marcabone`, `estoquebone`) VALUES ('{$nomebone}', '{$valorbone}', '{$marcabone}', '{$estoquebone}')";
    $dados = mysqli_query($conn, $query);
    return $dados; 
}

function visuBoneNome($conn,$nomebone){
    $query = "select * from tbbone where nomebone like '%{$nomebone}%'";
    $resultado = mysqli_query($conn, $query);
    return $resultado;  
}

function visuBoneMarca($conn, $marcabone){
    $query = "select * from tbbone where marcabone like '%{$marcabone}%'";
    $resultado = mysqli_query($conn, $query);
    return $resultado; 
}
function visuBoneCodigo($conn, $codigobone){
    $query = "select * from tbbone where idbone = {$codigobone}";
    $resultado = mysqli_query($conn, $query);
    $resultado = mysqli_fetch_array($resultado);
   
    return $resultado; 
}
function alterarBone($conn,$codigobone,$nomebone,$valorbone,$marcabone,$tamanhobone,$estoquebone){
    $query = "update tbbone set   
    nomebone='{$nomebone}', 
    valorbone='{$valorbone}', 
    marcabone= '{$marcabone}',
    estoquebone='{$estoquebone}' where idbone = '{$codigobone}'";
    
    $resultado = mysqli_query($conn, $query);
    return $resultado;
}
function deletarBone($conn,$codigobone){
    $query = "delete from tbbone where idbone ='{$codigobone}'";
    $resultado = mysqli_query($conn,$query);
    return $resultado;
}
?>