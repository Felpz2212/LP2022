<?php 
    include 'conexao.php'; 
    $nome = trim($_POST['txtNome']); 
    $descricao = trim($_POST['txtDesc']);
    $preco = trim($_POST['txtPreco']);

    if (!empty($nome) && !empty($descricao) && !empty($preco)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "INSERT INTO corte(nome, descricao, preco) VALUES (?,?,?)"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $descricao, $preco));
        Conexao::desconectar(); 
    }

    header("location:lstCorte.php");
?> 