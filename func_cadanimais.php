<?php
include "lib/config.php";

foreach ($_POST as $indice => $valor) {
    $$indice = $valor;
}

$sql = $con->prepare("INSERT INTO animais VALUES(0,:especie,:peso,:sexo,:problema,0)"); //prepared statements

$sql->bindParam(':especie',$especie);
$sql->bindParam(':peso',$peso);
$sql->bindParam(':sexo',$sexo);
$sql->bindParam(':problema',$problema);

$sql->execute();
?>

<script>
    alert("Animal cadastrado com sucesso");
</script>
<meta http-equiv="refresh" content="0; url=cadanimais.php">