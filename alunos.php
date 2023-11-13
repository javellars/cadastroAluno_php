<?php
$host = "localhost";
$user = "root";
$senha = "";
$database = "sistema";

$connection = Mysqli_connect($host, $user , $senha, $database) or die ("Erro de conexão!");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">

    <title>Página inicial</title>
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body style="background-color: lightcyan;">

<div class="container" id="cont_principal_list">
        <div class="menuLateral" id="menuLateral">
            <div class="menu-toggle" onclick="toggleMenu()">
                <i class="fa-solid fa-bars fa-2xl"></i>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php"><i class="fa-regular fa-pen-to-square"></i> Cadastro</a></li>
                    <li> <a href="alunos.php" > <i class="fa-solid fa-users"></i> Alunos</a></li>
                    <li> <a href="referencia.php"> <i class="fa-solid fa-quote-left"></i> Referências</a></li>
                </ul>
            </nav>
        </div>

       
   

   
    <div class="card_cadastro_list">

    <table>
        <thead>
            <tr>
                <th>RA</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Sexo</th>
            </tr>   
        </thead>
    <tbody>
        <?php
        $resultado = mysqli_query($connection, "SELECT * FROM alunos");
        while ($linha = mysqli_fetch_array($resultado)) {
            ?>
            <tr>
                <td><?php echo $linha['ra']; ?></td>
                <td><?php echo $linha['nome']; ?></td>
                <td><?php echo $linha['idade']; ?></td>
                <td><?php echo $linha['endereco']; ?></td>
                <td><?php echo $linha['telefone']; ?></td>
                <td><?php echo $linha['email']; ?></td>
                <td><?php echo $linha['sexo']; ?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
    </table>
  
    </div>    
</div>
<script src="move.js"></script>
</body>
</html>