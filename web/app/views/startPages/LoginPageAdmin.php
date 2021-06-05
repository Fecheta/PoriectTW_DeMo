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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<header>
    <h1>Login For Administrator</h1>
    <p>Welcome back!&#128512;</p>
</header>

<main class="b">
    <ul id="form-message">
        <li>Generic error #1</li>
        <li>Generic error #2</li>
    </ul>

    <form method="POST" id="myForm">
        <input type="text" class="inp" placeholder="Username" id="username" autocomplete="off" required>
        <label>
            <input type="password" class="inp" placeholder="Password" id="password" required>
            <i class="show fa fa-eye" id="show"></i>
            <i class="hide fa fa-eye-slash" id="hide"></i>
        </label>

        <button class ="inp2" type="submit" id="btn"> Login </button>
    </form>

    <script src="/public/javaScript/showPass.js"></script>
    <script src="/public/javaScript/login-form-admin.js"></script>
</main>

<footer>
</footer>

</body>
</html>