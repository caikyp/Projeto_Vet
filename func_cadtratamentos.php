<?php
include "lib/config.php";

foreach ($_POST as $indice => $valor) {
    $$indice = $valor;
}

$cuidador = explode(',',$cuidador);
$idCuidador = $cuidador[0];
$nome = $cuidador[1];

$animal = explode(',',$animal);
$idAnimal = $animal[0];
$especie_animal = $animal[1];

$sql = $con->prepare("INSERT INTO tratamentos VALUES(0,:nome_cuidador,:especie_animal,:tratamento,:medicacao,:equipamento,0)"); //prepared statements

$sql->bindParam(':nome_cuidador',$nome);
$sql->bindParam(':especie_animal',$especie_animal);
$sql->bindParam(':tratamento',$tratamento);
$sql->bindParam(':medicacao',$medicacao);
$sql->bindParam(':equipamento',$equipamento);
$sql->execute();

$updatec = $con->prepare("UPDATE cuidadores SET disponibilidade = 1 WHERE id=:id");
$updatec->bindParam(":id",$idCuidador);
$updatec->execute();

$updatea = $con->prepare("UPDATE animais SET tratado = 1 WHERE id=:id");
$updatea->bindParam(":id",$idAnimal);
$updatea->execute();
?>

<script>
    alert("Tratamento cadastrado com sucesso");
</script>
<meta http-equiv="refresh" content="0; url=cadtratamentos.php">