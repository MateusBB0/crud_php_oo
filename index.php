<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <style>
        input[type = text],[type = email], [type = password]{
            display: block;
        }
        input{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <form action="app/Controllers/create.php" method="POST">
        <label for="">Nome</label>
        <input type="text" name="nome" placeholder="Digite seu nome" required>
        <label for="">Email</label>
        <input type="email" name="email" placeholder="Digite seu nome" required>
        <label for="">Senha</label>
        <input type="password" name="senha" placeholder="Digite seu nome" required>
        <label for="">Gênero</label><br>
        <input type="radio" name="genero" id="masculino" value="M">Masculino
        <input type="radio" name="genero" id="feminino" value="F">Feminino
        <input type="radio" name="genero" id="feminino" value="N">Prefiro não dizer

        <br>
        <button type="submit" name="submit">Enviar</button>
    </form>
    <a href="login.php">Login</a>
</body>
</html>