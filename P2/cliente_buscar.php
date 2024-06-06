<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="col-lg-4 offset-lg-4">           
        <div class="row">
            <form class="container" method="post" action="cliente_buscar_salvar.php">
                <h2> Cliente Cadastrado</h2>
                <div class="col-md-6">
                    <label class="form-group">
                        Nome
                    </label>
                    <input type="text" name="nome" class="form-control">
                </div>
                        <input type="submit" value="Buscar" class="btn btn-primary">
                        <a href="cliente.php" class="btn btn-danger">VOLTAR</a>
                </div>
            </form>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>