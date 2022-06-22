<?php 
 include 'conexao.php';
 if(!isset($_SESSION)) session_start();

if(!isset($_SESSION['admin']) == false){
    include 'menuCliente.php';
}else{
    include 'menu.php';
}

 $pdo = Conexao::conectar(); 
 $sql = "select * from barbeiro order by id;";
 $lstBarbeiro = $pdo->query($sql); 
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
        <h1 class="light-green lighten-4 center-align">Listar Barbeiros</h1>
        <table class="striped">
            <tr>
                <th>ID</th>
                <th>Nome</th>
            </tr>
            <?php 
           foreach($lstBarbeiro as $barbeiro){
        ?>
            <tr>
                <td><?php echo $barbeiro['id']?></td>
                <td><?php echo $barbeiro['nome']?></td>
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