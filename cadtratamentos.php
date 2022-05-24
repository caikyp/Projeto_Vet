<?php
include "lib/config.php";

$sqlcuidador = $con->query("SELECT id, nome FROM cuidadores WHERE disponibilidade = 0");
$cuidadores = $sqlcuidador->fetchAll(PDO::FETCH_OBJ);

$sqlanimal = $con->query("SELECT id, especie, problema FROM animais WHERE tratado = 0");
$animais = $sqlanimal->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/9dabb0ed4f.js" crossorigin="anonymous"></script>
</head>
<body style="background: #f1f1f1">
    <div class="container-fluid" style="background: #488C35; height:7%">
        <div class="row" style="display: flex; justify-content: center;">
                <a href="index.php" style="color: #f1f1f1; font:700; font-size:2.5rem; text-decoration: none;">CuidAnimais <i class="fas fa-paw"></i></a>
        </div>
        <div class="navbar navbar-expand-sm justify-content-center">
            <div class="col-4">
                <a href="cadastro.php" class="btn btn-outline-light btn-block">Voltar</a>
            </div>
        </div>
    </div>

    <div class="jumbotron">
            <h2 class="ml-5">Cadastro de Tratamento</h2>

            <form action="func_cadtratamentos.php" method="POST" class="ml-5">
                
                    <div class="form-group" id="cuidador">
                        <label for="cuidador"><h6>Nome do cuidador:</h6></label>
                        <select name="cuidador" id="cuidador" class="form-control col-sm-8">
                            <option value="">Selecione um cuidador</option>
                                <?php
                                    foreach ($cuidadores as $cuidador) {
                                ?>
                                    <option value="<?php echo $cuidador->id?>,<?php echo $cuidador->id.' | '.$cuidador->nome?>">
                                        <?php echo $cuidador->nome?>
                                    </option>
                                <?php
                                    }
                                ?>
                        </select>
                    </div>

                    <div class="form-group" id="animal">
                        <label for="animal"><h6>Espécie e problema do animal:</h6></label>
                        <select name="animal" id="animal" class="form-control col-sm-8">
                            <option value="">Selecione o animal</option>
                                <?php
                                    foreach ($animais as $animal) {
                                ?>
                                    <option value="<?php echo $animal->id?>,<?php echo $animal->id.' | '.$animal->especie.' - '.$animal->problema?>">
                                        <?php echo $animal->especie.' - '.$animal->problema?>
                                    </option>
                                <?php
                                    }
                                ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tratamento"> <h6>Tratamento:</h6> </label>
                        <input type="text" class="form-control col-sm-8" id="tratamento" name="tratamento">
                    </div>

                    <div class="form-group">
                        <label for="medicacao"> <h6>Medicação:</h6> </label>
                        <input type="text" class="form-control col-sm-8" id="medicacao" name="medicacao">
                    </div>

                    <div class="form-group">
                        <label for="equipamento"> <h6>Equipamento:</h6> </label>
                        <input type="text" class="form-control col-sm-8" id="equipamento" name="equipamento">
                    </div>

                    <button type="submit" class="btn btn-outline-success col-3 mr-3">Cadastrar</button>
                   
                    <br><br/>
            </form>

    </div>
</body>
</html>