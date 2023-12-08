<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="container">
        <div class="box">
             <div class="form-box">
                <p>Login</p>
                <form id="cadastro" action="testLogin.php" method="POST">
                    <input type="email" name="email" id="email" placeholder="E-mail" required>
                    <input type="password" name="senha" id="senha" placeholder="Senha" required>
                    <input type="submit" name="submit" id="submit">
                </form>
              </div>
        </div>
    </div>
</body>
</html>