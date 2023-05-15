<?php

define('MYSQL_HOST' , 'localhost:3306');
define('MYSQL_USER','root');
define ('MYSQl_PASSWORD','');
define('MYSQL_DB_NAME' ,  'bd_sistema');

try
{
    $PDO = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQl_PASSWORD);
}catch (PDOExecption $e) 
{
    echo 'Erro ao conectar com o MySQL: ' .$e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Sistema de Acesso ao Banco de dados </title>
</head>
<body>
            <div class="container text-center">
            <div class="row">
                <div class="col">
                <div class="container">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                        <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        </div>
                    </nav>
                    </div>
                </div>
                <div class="row">               
                    <div class="col">
                        <br>
                        <h1>Tabela Clientes</h1>
                    </div>  
                </div>
                <div class="row">               
                    <div class="col">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <br>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Endereço</th>
                                    <th scope="col">Bairro</th>
                                    <th scope="col">Cidade</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">CEP</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM cliente";
                                $result = $PDO->query( $sql);
                                $rows = $result ->fetchAll();
                            
                                for ($i=0; $i < count($rows); $i++){ ?>
                                    <tr>
                                        <br>
                                        <td scope="col"><?php echo $rows[$i]['id']; ?></td>
                                        <td scope="col"><?php echo $rows[$i]['nome']; ?></td>
                                        <td scope="col"><?php echo $rows[$i]['endereco']; ?></td>
                                        <td scope="col"><?php echo $rows[$i]['bairro']; ?></td>
                                        <td scope="col"><?php echo $rows[$i]['cidade'];; ?></td>
                                        <td scope="col"><?php echo $rows[$i]['estado']; ?></td>
                                        <td scope="col"><?php echo $rows[$i]['cep']; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        </div>
                    </div>  
                </div>
            </div>
            </div>
    
</body>
</html>