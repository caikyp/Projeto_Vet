<?php
include 'lib/config.php';
$sql = $con->query("SELECT * FROM tratamentos");
$tratamentos = $sql->fetchAll(PDO::FETCH_OBJ);
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
                <a href="listagem.php" class="btn btn-outline-light btn-block">Voltar</a>
            </div>
        </div>
    </div>

    <div class="jumbotron">
        <h2 class="ml-5">Listagem de Tratamentos</h2>

        <table class="table table-bordered table-dark table-hover mt-5">
            <thead class="bg" style="background: #488C35;">
                <tr style="color:white;">
                    <th scope="col">#</th>
                    <th scope="col">Cuidador</th> <!-- nome do cuidador  -->
                    <th scope="col">Animal</th> <!-- especie e problema do animal  -->
                    <th scope="col">Tratamento</th>
                    <th scope="col">Medicação</th>
                    <th scope="col">Equipamento</th>
                    <th scope="col">status</th>
                </tr>
            </thead>
            
	        <tboby>
                <?php
                    foreach ($tratamentos as $tratamento) {
                ?>
                    <tr>
                        <td><?php echo $tratamento->id ?></td>
                        <td><?php $a = explode(' | ',$tratamento->nome_cuidador);
                                    echo $a[1] ?></td>
                        <td><?php $b = explode(' | ',$tratamento->especie_animal);
                                    echo $b[1] ?></td>
                        <td><?php echo $tratamento->tratamento ?></td>
                        <td><?php echo $tratamento->medicacao ?></td>
                        <td><?php echo $tratamento->equipamento ?></td>


                        <?php
                            if ($tratamento->status == 0) {
                        ?>
                            <td><a href="status.php?id=<?php echo $tratamento->id ?>" class="class btn btn-outline-danger"><i class="fas fa-briefcase-medical"></i></a></td>
                        <?php
                            } else {
                        ?>
                            <td><a href="#" class="btn btn-outline-success"><i class="fas fa-briefcase-medical"></i></a></td>
                        <?php
                            } 
                        ?>

                    </tr>
                <?php
                    }
                ?>
            </tboby>
        </table>

    </div>
</body>
</html>