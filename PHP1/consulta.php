<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.html">Voltar</a>
    <div class="Usuarios">
        <?php
            require_once("conn.php");
            $tabela = "tbusuario";

            $retorno = $pdo->query('SELECT * FROM '.$tabela);
            foreach ($retorno as $row) {
                echo'<div id =usuario'.$row['id'].'><h3>'.$row['nomeUsuario'].'</h3>Idade: '.$row['idadeUsuario'];
            }

        ?>
        
    </div>
</body>
</html>
