<?php

    $banco = "bdNomeIdade";
    $host = "localhost";
    $user = "root";
    $pass = "";

    // Conexão com Banco de Dados
    try{
        $pdo = new PDO("mysql:dbname=$banco;host=$host", "$user", "$pass");
    }
    // Mensagens de Erros
    catch(PDOException $e){
        echo "Falha na Conexão no Banco de Dados ".$e->getMessage();  
    }
    catch(Exception $e){
        echo "Falha ao Conectar".$e->getMessage()."";
    }
?>