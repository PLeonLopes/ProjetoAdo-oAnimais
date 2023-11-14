<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Formulário de Login</title>
</head>
<body>

<div>
    <form action="admin.php" method="post">
        <h2>Login</h2>
        <label for="nome">Nome de usuário:</label>
        <input type="text" id="nomes" name="nome" required>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>

        <button type="submit">Entrar</button>
    </form>
</div>
</body>
</html>
<?php 
$login = "admin";
$senha = "admin";

if(($_POST["nome"] == $login) && ($_POST["senha"] == $senha)){
    $_SESSION["logou"] = 1;
    header('location: banco_dados.php');
}else{
    $_SESSION["erro"] = 1;
    echo"senha ou usario incorreta.";
}
?>