<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Login</title>
    <meta name="description"
    content = "Logheaza-te" />
    <link rel="stylesheet" href="/public/css/startPages/Administrator.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<header>
    <h1>Login</h1>
    <p>Welcome back!&#128512;</p>
</header>

<main class="b">

<form>
    <div class="b">
    <input type="text" class="inp" placeholder="Mobile number or email" required pattern = "^([a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3})|(\d{3}\d{3}\d{4})$"/><br/>
    <input type="password" class="inp" placeholder="Password" required/>

    </div>
    </form>  
    <div>
        <form  action="/admin/Principal" >
        <button class = "inp2" type="submit">
          Login
        </button>
</form> 
    </div>

</main>
<footer>
   
</footer>
</body>
</html>