<?php
include "lib/config.php";

$id = (int)$_GET["id"];

$update = $con->prepare("UPDATE tratamentos SET status = 1 WHERE id = :id");
$update->bindParam(":id",$id);
$update->execute();

$tratamentos = $con->prepare("SELECT nome_cuidador FROM tratamentos WHERE id = :id");
$tratamentos->bindParam(":id",$id);
$tratamentos->execute();
$nomeCuidador = $tratamentos->fetch(PDO::FETCH_OBJ);
$nomeCuidador = explode(" | ",$nomeCuidador->nome_cuidador);
$idCuidador = $nomeCuidador[0];
$nome = $nomeCuidador[1];

$updatec = $con->query("UPDATE cuidadores SET disponibilidade = 0 WHERE id = '$idCuidador'");
$updatec->execute();

$tratamentosA = $con->prepare("SELECT especie_animal FROM tratamentos WHERE id = :id");
$tratamentosA->bindParam(":id",$id);
$tratamentosA->execute();
$especieAnimal = $tratamentosA->fetch(PDO::FETCH_OBJ);
$especieAnimal = explode(" | ",$especieAnimal->especie_animal);
$idAnimal = $especieAnimal[0];
$especie = $especieAnimal[1];

$updatea = $con->query("UPDATE animais SET tratado = 0 WHERE id = '$idAnimal'");
$updatea->execute();
?>
<meta http-equiv="refresh" content="0; listtratamentos.php">
