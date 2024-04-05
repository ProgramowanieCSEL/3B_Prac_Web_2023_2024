<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Zaloguj się do panelu
    <form method="POST" action="panel.php">
        <br/>
        <label>
            Login:
            <input type='text' name="login" id="login" required/>
        </label>
        <br/>
        <label>
            Haslo:
            <input type='password' name="password" id="password" required/>
        </label>
        <br/>
        <input type="submit"/>
    </form>
</body>
</html>