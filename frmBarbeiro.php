<?php 
 include 'conexao.php';
 $pdo = Conexao::conectar(); 
 $sql = "select * from barbeiro order by id;";
 $lstBarbeiro = $pdo->query($sql); 
 Conexao::desconectar(); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="center-align container grey">
      <h1 class="center-align">Cadastro de novos barbeiros</h1>
    </div>
    <div class="center-align">
        <form class="col s12 container" action="insBarbeiro.php" method="POST" id="frmInsBarbeiro">
          <div class="row blue lighten-5">
              <div class="input-field col s12">
              <i class="material-icons prefix">account_circle</i>
              <input id="icon_prefix" type="text" class="validate" name="txt_Nome">
               <label for="icon_prefix">Nome do Barbeiro</label>
              </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">date_range</i>
            <input id="date_range" type="number" class="validate" name="txt_Idade">
            <label for="date_range">Idade</label>
          </div>
          <br>
          <div class="input-field col s12">
            <i class="material-icons prefix">date_range</i>
            <input id="date_range" type="number" class="validate" name="txt_Entrada">
            <label for="date_range">Hora de Entrada</label>
          </div>
          <br>
          <div class="input-field col s12">
            <i class="material-icons prefix">date_range</i>
            <input id="date_range" type="number" class="validate" name="txt_Saida">
            <label for="date_range">Hora de Saida</label>
          </div>
        <div class="left-align col s12 container">
          <div class="row center-align" >
            <button class="btn waves-effect waves-light green" type="submit" name="action">Cadastrar
            <i class="material-icons right">send</i>
            <br>
            <button class="btn waves-effect waves-light red" type="reset" name="action"> Limpar
            <i class="material-icons right">clear_all</i>
            </button>
          </div>
      </div>
    </form>
  </div>
</body>
</html>