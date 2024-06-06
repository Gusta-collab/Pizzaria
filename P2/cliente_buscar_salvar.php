
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verificação de Cadastro de Clientes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div>
    <a href="cliente_buscar.php" class="btn btn-success">VOLTAR</a>
  </div>
    <table class='table table-hover'>
        <thead>
         <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Telefone</th>
          <th>Endereco</th>
        </tr>     
       </thead>
       <tbody>
        <?php
          $nome = @$_POST["nome"];


           if($nome ==""){
               echo "Digite nome do cliente"; 
               exit;
           }
           
       $conexao = new mysqli("127.0.0.1","root","","pizzaria");
       
       $query = "
       SELECT * FROM cliente
       WHERE nome='$nome'
       ";
       
       $resultado = $conexao->query($query);
       while ($dados = $resultado->fetch_assoc()){
        if ($resultado->num_rows >0) {
         echo"<tr>
         <td>".$dados["id_cliente"]."</td>
         <td>".$dados["nome"]."</td>
         <td>".$dados["telefone"]."</td>
         <td>".$dados["endereco"]."</td>
       </tr>";
         }
       }
       ?>
        </tbody>
    </table>
</body>
</html>