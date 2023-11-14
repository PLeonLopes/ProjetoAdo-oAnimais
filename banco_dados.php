<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco De Dados</title>
</head>
<body>

<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usuarios";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Consulta SQL para selecionar dados da tabela
$sql = "SELECT nome, sobrenome, email, celular, animal FROM dados_do_adotante";
$result = $conn->query($sql);

// Verifica se há resultados e exibe os dados
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
            </tr>";

    // Saída dos dados de cada linha
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["nome"] . "</td>
                <td>" . $row["sobrenome"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["celular"] . "</td>
                <td>" . $row["animal"] . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "0 resultados encontrados";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>

</body>
</html>
