
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itens Pedido Cadastro</title>
    <link rel="stylesheet" href="../styles/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="col-lg-4 offset-lg-4">           
        <div class="row">
            <form class="container" method="post" action="itens_pedido_salvar.php">
                <h2>Itens Pedido</h2>
                <div class="col-md-6">
                    <label class="form-group">     
                       ID Pedido
                    </label>
                    <input type="text" name="id_pedido" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-group">
                        ID Pizza
                    </label>
                    <input type="text" name="id_pizza" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="form-group">
                       Quantidade
                    </label>
                    <input type="text" name="quantidade" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-group">
                        Preço Unitário
                    </label>
                    <input type="text" name="preco_unit" class="form-control">
                </div>
                  <div>
                      <tr>
                        <td>
                            <input type="submit" value="SALVAR" class="btn btn-primary">
                        </td> 
                        <td>
                            <a href="cliente.php" class="btn btn-danger">VOLTAR</a>
                        </td>          
                         <td>
                            <a href="pizza.php" class="btn btn-success">PIZZAS</a>
                        </td>
                      </tr>
                </div>
                    
            </form>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>