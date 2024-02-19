<?php
    $banco = "bdNomeIdade";
    $host = "localhost";
    $user = "root";
    $pass = "";

    try{
        $pdo = new PDO("mysql:dbname=$banco;host=$host", "$user", "$pass");
    }
    catch(PDOException $e){
        echo "Falha na Conexão no Banco de Dados ".$e->getMessage();  
    }
    catch(Exception $e){
        echo "Falha ao Conectar".$e->getMessage()."";
    }
?>