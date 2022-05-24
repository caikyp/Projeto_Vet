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
            <h2 class="ml-5">Cadastro de Cuidador</h2>

            <form action="func_cadcuidadores.php" method="POST" class="ml-5">
                
                    <div class="form-group">
                        <label for="nome"> <h6>Nome:</h6></label>
                        <input type="text" class="form-control col-sm-8" id="nome" name="nome">
                    </div>

                    <div class="form-group">
                        <label for="idade"> <h6>Idade:</h6> </label>
                        <input type="number" class="form-control col-sm-8" id="idade" name="idade" step="1" min=0>
                    </div> 

                    <div class="form-group">
                        <label for="formacao"> <h6>Formação:</h6> </label>
                        <input type="text" class="form-control col-sm-8" id="formacao" name="formacao">
                    </div>

                    <button type="submit" class="btn btn-outline-success col-3 mr-3">Cadastrar</button>
                   
                    <br><br/>
            </form>

    </div>
</body>
</html>