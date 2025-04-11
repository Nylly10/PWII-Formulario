<?php
require 'Usuario.class.php';


$usuario = new Usuario();

if(!$usuario){ 
    echo "<h1>Banco indisponível. Tente de novo</h1>";
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <link rel="stylesheet" href="style.css">

    <style>
        
    </style>


</head>

</style>
<body>
    <form action = "Usuario.php" method = "post">
        
        <h1>Tela de Login</h1>
        <label for="nome">Nome:</label>
        <input type="nome" name="nome" placeholder="Digite seu Nome">
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Digite seu Email">
        <label for="senha">Senha</label>
        <input type="senha" name="senha" placeholder="Digite a Senha">

        <input type="submit" value = "Cadastrar">
    </form> 
</body>
</html>