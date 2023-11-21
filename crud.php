<?php
    $name=$_POST["nome"];
    $senha=$_POST["senha"];
    $senha2=$_POST["senha2"];
    $email=$_POST["email"];
    include("conecta.php");
    
    
    
        $comando = $pdo->prepare("INSERT INTO cadastro VALUES('$name','$senha','$senha2','$email',0)" );
        $resultado = $comando->execute();
        header("Location:login.html");
    

    
?>