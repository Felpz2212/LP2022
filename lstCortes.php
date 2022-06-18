<?php 
 include 'conexao.php';
 $pdo = Conexao::conectar(); 
 $sql = "select * from corte order by id;";
 $lstCorte = $pdo->query($sql); 
 Conexao::desconectar(); 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>

<body>
    <div class="container ">
        <h1 class="light-green lighten-4">Listar Cortes</h1>
        <table class="striped">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
            </tr>
            <?php 
           foreach($lstCorte as $corte){
        ?>
            <tr>
                <td><?php echo $corte['id']?></td>
                <td><?php echo $corte['nome']?></td>
                <td><?php echo $corte['descricao'] ?></td>
                <td>R$<?php echo $corte['preco'] ?></td>
                <td class="center">
                </td>
                <td></td>
            </tr>
            <?php } ?>
        </table>
    </div>
        </br>
        </br>
</body>

</html>