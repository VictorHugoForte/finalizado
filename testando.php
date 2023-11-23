<?php
    include("conecta.php");
    $comando = $pdo->prepare("SELECT * FROM cadastro");
    $resultado = $comando->execute();

    while( $linhas = $comando->fetch() )
    {
        $id = $linhas["id"];
        $usuario =  $linhas["usuario"];
        $email =  $linhas["email"];
        $senha1 =  $linhas["senha1"];
  
        
        echo( "ID: $id / Usuario: $usuario / Email: $email / Senha1: $senha1 <br>");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <link href="testando.css" rel="stylesheet">
    <link rel="shortcut icon" href="imagens/icone2.png" type="image/x-icon">
    <style>
        body{
            background-image:url("imagens/cadastro2.png");
            background-size: 170%;
        }
    </style>
</head>
<body>
    
<h2 class=titulo>Cadastrantes aqui:</h2>

    <section class="area-login">
        <div class="login">
        
        <form action="crud.php" method="post">

            <input id="id" type="text" name="id" placeholder="ID" autofocus> 
            <input id="usuario" type="text" name="usuario" placeholder="USUARIO" autofocus> 
            <input type="text" name="email" placeholder="E-MAIL" autofocus>
            <input type="text" name="senha1" placeholder="senha1" autofocus>

<br>
            <button value="inserir" class="btt"name="inserir" type="submit">Inserir</button><br>
            <button value="excluir" class="btt"name="excluir" type="submit">Excluir</button><br>
            <button value="alterar" class="btt"name="alterar" type="submit">Alterar</button><br>
            <button class="btt2" onclick="window.open('login.php'); event.preventDefault();">Login</button>

            <h2 class="sele">*Selecionar ID para alterar/excluir</h2>
            
        </form>

    </section>

</body>
</html>