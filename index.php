<?php
$host = "localhost";
$user = "root";
$senha = "";
$database = "sistema";

$connection = Mysqli_connect($host, $user , $senha, $database) or die ("Erro de conexão!");

if(isset($_POST['cadastrar'])){
    $ra = $_POST['ra_aluno'];
    $nome = $_POST['name'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telef'];
    $email = $_POST['mail'];
    $sexo = $_POST['sex'];
    $idade = $_POST['age'];

    $query = mysqli_query($connection, "INSERT INTO alunos (ra, nome, endereco, telefone, email, sexo, idade) VALUES ('$ra', '$nome', '$endereco', '$telefone', '$email', '$sexo', '$idade')");

    if ($query) {
        // Redireciona para a página de alunos.php após a inserção bem-sucedida
        header("Location: alunos.php");
        exit(); // Certifique-se de encerrar o script após o redirecionamento
    } else {
        echo 'Erro ao inserir dados no banco de dados.';
    }

}

/*
if($query){
    echo 'tá dando certo';
}else{
    echo 'eita tristeza infinita';
}
*/

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

<!--Construção do menu lateral-->
<body style="background-color: MintCream;">

    
<div class="container" id="cont_principal">
            <div class="menuLateral" id="menuLateral">
                <div class="menu-toggle" onclick="toggleMenu()">
                    <i class="fa-solid fa-bars fa-2xl"></i>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php"><i class="fa-regular fa-pen-to-square"></i> Cadastro</a></li>
                        <li> <a href="alunos.php" > <i class="fa-solid fa-users"></i> Alunos</a></li>
                        <li> <a href="referencia.html"> <i class="fa-solid fa-quote-left"></i> Referências</a></li>
                    </ul>
                </nav>
            </div>

        
    


    <!--Cadastro de dados-->
<form method="post">
    <div class="card_cadastro">
        <h1 class="titulo">Cadastre-se</h1>
            <select name="sex" id="sex">
                <option value="" disabled selected>Selecione o sexo</option>
                <option value="feminino">Feminino</option>
                <option value="masculino">Masculino</option>
            </select>
            <input type="text" placeholder="Digite seu nome" id="nome" name="name">
            <input type="number" placeholder="Digite sua idade" id="idade" name="age"> 
            <input type="number" placeholder="Digite seu RA" id="ra" name="ra_aluno">
            <input type="text" placeholder="Digite seu endereço" id="end" name="endereco"> <!--multivalorado?-->
            <input type="number" placeholder="Digite seu telefone" id="tel" name="telef" >
            <input type="text" placeholder="Digite seu e-mail" id="email" name="mail">
                
            <button onclick="validarCadastro()" name="cadastrar">Cadastrar</button>
            <button onclick="limparDados()"> Limpar Dados</button>

    </div>
</form>

</div>







    
<script src="move.js"></script>
</body>
</html>