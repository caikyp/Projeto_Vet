<?php
include 'lib/config.php';
$sql = $con->query("SELECT * FROM animais");
$animais = $sql->fetchAll(PDO::FETCH_OBJ);
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
        <h2 class="ml-5">Listagem de Animais</h2>

        <table class="table table-bordered table-dark table-hover mt-5">
            <thead class="bg" style="background: #488C35;">
                <tr style="color:white;">
                    <th scope="col">#</th>
                    <th scope="col">Espécie</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Problema</th>
                    <th scope="col">Tratado</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
		
	        <tboby>
                <?php
                    foreach ($animais as $animal) {
                ?>
                    <tr>
                        <td><?php echo $animal->id ?></td>
                        <td><?php echo $animal->especie ?></td>
                        <td><?php echo $animal->peso.'(g)' ?></td>
                        <td><?php echo $animal->sexo ?></td>
                        <td><?php echo $animal->problema ?></td>

                        <?php
                            if ($animal->tratado == 0) {
                        ?>
                              <td><div class="alert alert-sucess w-25"><i class="fas fa-thumbs-up"></i></div></td>
                              <td><a href="delanimal.php?id=<?php echo $animal->id ?>" class="class btn btn-outline-danger"><i class="fas fa-ban"></i></a></td>
                        <?php
                            } else {
                        ?>
                              <td><div class="alert alert-outline-danger w-25"><i class="fas fa-thumbs-down"></i></div></td>
                              <td><div class="alert alert-outline-warning w-75"><i class="fas fa-exclamation-triangle"></i> Animal em tratamento</div></td>                              
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