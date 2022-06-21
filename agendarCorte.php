<?php
include 'conexao.php';
if (!isset($_SESSION)) session_start();

if (!isset($_SESSION['admin']) == false) {
    include 'menuCliente.php';
} else {
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
    <title>Agendar</title>
</head>

<body>

    <div class="container">
        <br>
        <select class="browser-default" name="barber">
            <option value="" disabled selected>Selecione o Barbeiro</option>
            <?php  // carregar lista no select option
            foreach ($lstBarbeiro as $barbeiro) { ?>
                <option value="<?php echo $barbeiro['id']; ?>"><?php echo $barbeiro['nome']; ?></option>
            <?php
            }
            ?>
        </select>
        <br>
        <select class="browser-default">
            <option value="" disabled selected>Selecione o horário</option>
            <option value="1">12</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
        </select>
    </div>

</body>

</html>