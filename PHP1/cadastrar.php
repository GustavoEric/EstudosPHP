<?php
    $tabela = "tbusuario";
    require_once('conn.php');
    $nome = $_POST['txtNome'];
    $idade = $_POST['txtIdade'];
    $retorno = $pdo->prepare('INSERT INTO '. $tabela .'(nomeUsuario,idadeUsuario) VALUES (:nm,:ida)');
    // echo ('INSERT INTO '. $tabela .'(nome,idade) VALUES (:nm,:ida)');
    // echo $retorno;
    $retorno->bindValue(":nm", $nome);
    $retorno->bindValue(":ida", $idade);
    $retorno->execute();
    echo"Cadastrado com Sucesso";
    header("Location: consulta.php");

    die();
?>