<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>
    <a href="index.php"><button type="button" class="btn-close" aria-label="Close"></button></a>
    <div class="Usuarios">
    <a href="edita.php"><button type="button"><img src="image/edit.svg" alt="" srcset=""></button></a>
    <div class="container text-center">
        <!-- Consulta de Alunos -->
        <?php
            require_once("conn.php");
            $tabela = "tbusuario";

            $retorno = $pdo->query('SELECT * FROM '.$tabela);
            foreach ($retorno as $row) {
                echo'<div id =usuario'.$row['id'].'>
                    <div class="row">
                        <div class="col">
                  <h3>'.$row['nomeUsuario'].'</div>
                  <div class="col">
                </h3>Idade: '.$row['idadeUsuario'].'</div>';
            }

        ?>
        </div>
    </div>
</body>
</html>
