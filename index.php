    <php

    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    </head>
    <body>

    <body
    $servername = "localhost"; // é o nome que se apresenta no local host
    $username = "root"; // usar o nome em root
    $password = "";  // a senha a ser exibida
    $dbname = "Cadastrar"; // é o nome do lugar que ira ser exibido

    $conn = new mysqli($servername, $username, $password, $dbname); // usa este tópico com as opções, nome, senha e dname;
            
    $nome = $_POST['nome']; // usar a opção nome
    $email = $_POST['email']; // a aba email
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // opção senha;

    CREATE TABLE usuarios ( nome, email, senha );

    SELECT * FROM usuarios;
    UPDATE usuarios SET email = 'Geovanne@exemplo.com' WHERE nome = ‘Geovanne Roggerio';
<body/>


     
































    <h2> Cadastro de usuário </h2>

    <form action="processa_cadastro.php" method="post">
        
        <label for="nome"> Nome </label><br>
        <input type="text" id="nome" name="nome" required> <br> <br>
        
        <label for="Email"> Email </label></br>
        <input type="email" id="email" name="email" required> <br> <br>

        <label for="Senha"> Senha </label></br>
        <input type="password" id="senha" name="senha" required> <br> <br>

        <input type="submit" value="Cadastrar">

    </form>

    






