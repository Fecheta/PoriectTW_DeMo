<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/index.css">
    <title>DeMo</title>
</head>
<body class = 'vizitator'>
    <form action="/public/home/index" method="POST">
        <div>
            <span>text*</span>
            <input type="text" required>
        </div>
        <button type="submit">click</button>
    </form>
    <a href="../">
        <button action="public/home/index">wefgwge</button>
    </a>
    <a href="ana/">
        <button action="public/home/index">wefgwge</button>
    </a>
    <?php
        foreach($data as $d){
            echo '<h1>'. $d . '<h1>';
        }
    ?>
</body>
</html>