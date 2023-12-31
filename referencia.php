

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

       
   

   
        <div class="card_cadastro_ref">
    <table>
        <tbody>
            <tr>
                <td>Materiais disponibilizados pelo professor</td>
            </tr>
            <tr>
                <td>Canal Daniel Gimo para entendimento de PHP</td>
            </tr>
            <tr>
                <td>Leituras online</td>
            </tr>
        </tbody>
    </table>
</div>
</div>
<script src="move.js"></script>
</body>
</html>