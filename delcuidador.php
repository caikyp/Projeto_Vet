<?php
include "lib/config.php";

$id = (int)$_GET["id"];

$del = $con ->prepare("DELETE FROM cuidadores WHERE id = :id");
$del->bindParam(":id",$id);
$del->execute();
?>
<script>alert("Cuidador excluido com sucesso")</script>
<meta http-equiv="refresh" content="0; listcuidadores.php">