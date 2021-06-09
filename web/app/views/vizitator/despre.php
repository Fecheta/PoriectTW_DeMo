<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeMo</title>
    <link rel="icon" href="/public/images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/css/vizitator/cauta.css">
    <link rel="stylesheet" href="/public/css/vizitator/index.css">
    <link rel="stylesheet" href="/public/css/vizitator/despre.css">
    <script src="/public/javaScript/topnav.js"></script>
</head>
<body>
    
    <div class="fullTopnav">
        <div id="myTopnav" class="topnav">
            <a id="home" href="/vizitator/index">Home</a>
            <a id="istoric" href="/vizitator/istoric">Istoric vizite</a>
            <a id="add" href="/vizitator/viziteaza">Adauga vizita</a>
            <a id="verifica" href="/vizitator/cauta">Cauta Detinut</a>
            <a id="about" href="/vizitator/despre" class="activate">Despre</a>
            <div id="userManagePhone" class="extraResponsive">
                <a id="logoutP" href="/auth/logout">Schimba cont</a>
                <a id="modifyP" href="#change_account_data">Modifica cont</a>
                <a id="removeP" href="#del_account">Sterge Cont</a>
            </div>
        </div>
        <div class="account">
            <a href="javascript:void(0);" class="icon" onclick="Func()">
                <i class="fa fa-bars"></i>
            </a>
            <?php
                echo "<a id=\"user\" href=\"#account\" class=\"logged\" onclick=\"AccShow(this.id)\">" . $data["user"]->name . "</a>";
            ?>
            <div id="userManage" class="extra">
                <a id="logout" href="/auth/logout">Schimba cont</a>
                <a id="modify" href="#change_account_data">Modifica cont</a>
                <a id="remove" href="index/del_account">Sterge Cont</a>
            </div>
        </div>
    </div>

    <div class="aboutAll">
        <div class="testAbout">
            <a href="/raport/index">
                <i class="fa fa-file"></i>
            </a>
            <p>Manual Utilizare (Raport)</p>
        </div>
        <div class="testAbout">
            <a href="/raport/tehnic">
                <i class="fa fa-file"></i>
            </a>
            <p>Manual Tehnic</p>
        </div>
        <div class="testAbout">
            <a href="/vizitator/statistics">
                <i class="fa fa-bars"></i>
            </a>
            <p>Statistici</p>
        </div>
    </div>
</body>
</html>