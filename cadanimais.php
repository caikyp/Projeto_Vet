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
            <h2 class="ml-5">Cadastro de Animais</h2>

            <form action="func_cadanimais.php" method="POST" class="ml-5">
                
                    <div class="form-group">
                        <label for="especie"> <h6>Espécie:</h6></label>
                        <input type="text" class="form-control col-sm-8" id="especie" name="especie">
                    </div>

                    <div class="form-group">
                        <label for="peso"> <h6>Peso em Kg:</h6> </label>
                        <input type="number" class="form-control col-sm-8" id="peso" name="peso" step="0.001" min=0 placeholder="1,000">
                    </div> 

                    <div class="form-group">
                        <label for="sexo"> <h6>Sexo:</h6> </label> <br/>
                        <input type="radio" id="sexo" name="sexo" value="masculino"> Masculino
                        <input class="ml-5" type="radio" id="sexo" name="sexo" value="feminino"> Feminino
                    </div>

                    <div class="form-group">
                        <label for="problema"> <h6>Problema:</h6> </label>
                        <input type="text" class="form-control col-sm-8" id="problema" name="problema">
                    </div>

                    <button type="submit" class="btn btn-outline-success col-3 mr-3">Cadastrar</button>
                   
                    <br><br/>
            </form>

    </div>
</body>
</html>