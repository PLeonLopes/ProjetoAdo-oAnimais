<?php

  if (isset($_POST['submit']))
  {
    include_once('database.php');

    $primeiro_nome = $_POST['username'];
    $sobrenome = $_POST['lastname'];
    $email = $_POST['email'];
    $numero = $_POST['number'];
    $pet = $_POST['select'];

    $result = mysqli_query($conexao, "INSERT INTO dados_do_adotante(nome, sobrenome, email, celular, animal)
    VALUES ('$primeiro_nome', '$sobrenome', '$email', '$numero', '$pet')");
  }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi"/>
  <title>ADOTEUMPET</title>
  <link rel="stylesheet" href="style.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
</head>

<body>

  <!-- NAVBAR -->

  <header>
    <nav>
      <a class="logo" href="index.html">ADOTEUMPET</a>
      <div class="mobile-menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
      <ul class="nav-list">
        <li><a href="index.html">INICIO</a></li>
        <li><a href="catalogo.html">QUERO ADOTAR</a></li>
        <li><a href="adotar.php">FORMULÁRIO</a></li>
      </ul>
    </nav>
  </header>

  <!-- CONTEÚDO -->

  <main class="formulariocenter">
    <script src="mobile-navbar.js"></script>

    <div class="container-form">
        <div class="header-form">
            <h2>Formulário de Adoção</h2>
        </div>

        <form id="form" class="form" action="adotar.php" method="post">
            <div class="form-control">
                <label for="username">Primeiro Nome:</label>
                <input type="text" id="username" name="username" placeholder="Digite seu primeiro nome" required/>
            </div>

            <div class="form-control">
                <label for="lastname">Sobrenome:</label>
                <input type="text" id="lastname" name="lastname" placeholder="Digite seu sobrenome" required/>
            </div>

            <div class="form-control">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email" required/>
            </div>

            <div class="form-control">
                <label for="number">Celular:</label>
                <input type="tel" id="number" name="number" placeholder="(xx) xxxx-xxxx" required/>
            </div>
           
            <div class="form-control">
                <label for="animals">Opções de animais:</label>
            <select name="select" required>
                <option value="" selected disabled>Selecione uma opção</option>
                <option value="Bruno">Bruno</option>
                <option value="Paçoca">Paçoca</option>
                <option value="Pedrita">Pedrita</option>
                <option value="Sushi">Sushi</option>
                <option value="Princesa">Princesa</option>
                <option value="Alarido">Alarido</option>
            </select>
            </div>
              <button type="submit" id="submit" name="submit">Enviar</button>
        </form>
    </div>

<?php
if (isset($_POST['submit'])){
  echo'
  
  <div class="mensagem">
    <h1>Seus Dados Foram Enviados<br>Entraremos em Contato em Breve!</h1><br>
      <a href="index.html" class="botao-voltar">Voltar ao Início</a>
  </div>
  
  ';
}
?>
  </main>

  <hr class="espaco2">

  <!-- FOOTER -->

  <footer>
    <div class="footer-top">
      <h3 style="font-family: system-ui, -apple-system, Helvetica, Arial, sans-serif;;">SOBRE:</h3>
      <p>Atendimento ao cliente: adoteumpet.com.br | De Domingo a Domingo, das 8:00h às 00:00h</p>
      <ul class="socials">
        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
      </ul>
    </div>
    <div class="footer-bottom">
      <p>&copy;2023 - ADOTE UM PET - Todos os direitos reservados.</div>
  </footer>

</body>
</html>