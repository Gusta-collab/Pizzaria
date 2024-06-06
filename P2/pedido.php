<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form>
        <h2>Pedido:</h2>
        <a href="itens_pedido_cadastrar.php" class="btn btn-success">Solicitar</a>       
        <a href="cliente.php" class="btn btn-info">Voltar</a>       

    </form>
    <table class="table table-hover">
        <thead>
            <th>Pedido</th>
            <th>ID Cliente</th>
            <th>Data</th>
            <th>Total</th>
        </thead>
        <tbody>
            <?php
                 $conexao = new mysqli('127.0.0.1','root','','pizzaria');
                 $sql = "SELECT * FROM pedido
                 ORDER BY id_pedido DESC";
                 $resultado = $conexao->query($sql);
                 while($dados= $resultado->fetch_assoc()){
                   echo"<tr>
                     <td>".$dados["id_pedido"]."</td>
                     <td>".$dados["id_cliente"]."</td>
                     <td>".$dados["data_pedido"]."</td>
                     <td>".$dados["total"]."</td>
                   </tr>";
                 }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>