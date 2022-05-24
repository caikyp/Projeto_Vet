<?php
include "lib/config.php";

foreach ($_POST as $indice => $valor) {
    $$indice = $valor;
}

$sql = $con->prepare("INSERT INTO cuidadores VALUES(0,:nome,:idade,:formacao,0)"); //prepared statements

$sql->bindParam(':nome',$nome);
$sql->bindParam(':idade',$idade);
$sql->bindParam(':formacao',$formacao);

$sql->execute();
?>

<script>
    alert("Cuidador cadastrado com sucesso");
</script>
<meta http-equiv="refresh" content="0; url=cadcuidadores.php">