<?php 
 include 'menu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <div class="container">
        <form class="container" action="insCorte.php" method="POST">
            <div class="container center-align grey">
                <h1>Cadastrar Corte</h1>
            </div>
            <div class="blue lighten-5">
                <textarea id="textarea1" class="materialize-textarea" name="txtNome"></textarea>
                <label for="textarea1">Nome do corte</label>
                <textarea id="textarea1" class="materialize-textarea" name="txtDesc"></textarea>
                <label for="textarea1">Descrição do corte</label>
                <textarea id="textarea1" class="materialize-textarea" name="txtPreco"></textarea>
                <label for="textarea1">Preço do corte</label>
            </div>
            <br>
            <div class="row center-align" >
                <button class="btn waves-effect waves-light green" type="submit" name="action">Cadastrar
                <i class="material-icons right">send</i>
                <br>    
                <button class="btn waves-effect waves-light red" type="reset" name="action"> Limpar
                <i class="material-icons right">clear_all</i>
            </button>
          </div>
        </form>
   </div>
</body>
</html>