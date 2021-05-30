<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Login</title>
    <meta name="description"
    content = "Logheaza-te" />
    <link rel="stylesheet" href="/public/css/startPages/LoginPage.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<header>
    <h1>Login</h1>
    <p>Welcome back!&#128512;</p>
</header>

<main class="b">
    <form action="/auth/login" method="POST">
        <input type="text" class="inp" placeholder="Username" name="username" required>
        <input type="password" class="inp" placeholder="Password" name="password" required>
        <button class ="inp2" type="submit"> Login </button>
    </form>
</main>

<footer>
</footer>

</body>
</html>