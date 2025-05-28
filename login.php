<?php
if(isset($_SESSION['error_msg'])){
    echo $_SESSION['error_msg'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
        input[type = text],[type = email], [type = password]{
            display: block;
        }
        input{
            margin-bottom: 10px;
        }
    </style>
<body>
    <form action="app/Controllers/read.php" method="POST">
        <h1>Faça seu Login</h1>
     <label for="">Email</label>
        <input type="email" name="email" placeholder="Digite seu email*" required>
        <label for="">Senha</label>
        <input type="password" name="senha" placeholder="Digite sua senha*" required>
        <button type="submit" name="submit">Enviar</button>
    </form>
</body>
</html>