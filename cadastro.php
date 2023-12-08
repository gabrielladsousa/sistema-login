<?php
    if (isset($_POST['submit'])) {

        include_once('config.php');
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senha) VALUES ('$nome', '$email', '$senha')");

        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="form-box">
                <p>CADASTRE-SE</p>
                <form id="cadastro" action="cadastro.php" method="POST">
                    <input type="text" name="nome" id="nome" placeholder="Nome" required>
                    <input type="email" name="email" id="email" placeholder="E-mail" required>
                    <input type="password" name="senha" id="senha" placeholder="Senha" required>
                    <input type="submit" name="submit" id="submit">
                </form>
            </div>
        </div>
    </div>
</body>

</html>