<?php 
    include 'conexao.php'; 

    $nome = trim($_POST['txt_Nome']); 
    $idade = trim($_POST['txt_Idade']);
    $entrada = trim($_POST['txt_Entrada']);
    $saida = trim($_POST['txt_Saida']);

    if (!empty($nome) && !empty($idade) && !empty($entrada) && !empty($saida)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "INSERT INTO barbeiro(nome, idade, HoraEntrada, HoraSaida) VALUES (?,?,?,?)"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $idade, $entrada, $saida));
        Conexao::desconectar(); 
    }
    header("location:lstBarbeiro.php");
?> 