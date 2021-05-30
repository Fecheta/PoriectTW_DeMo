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
    <script src="/public/javaScript/topnav.js"></script>
</head>

<body>

<div class="fullTopnav">
        <div id="myTopnav" class="topnav">
            <a id="home" href="/vizitator/index">Home</a>
            <a id="istoric" href="/vizitator/istoric">Istoric vizite</a>
            <a id="add" href="/vizitator/viziteaza">Adauga vizita</a>
            <a id="verifica" href="/vizitator/cauta" class="activate">Cauta Detinut</a>
            <a id="about" href="/raport/index">Despre</a>
            <div id="userManagePhone" class="extraResponsive">
                <a id="logoutP" href="../../StartPage/html/p1.html">Schimba cont</a>
                <a id="modifyP" href="#change_account_data">Modifica cont</a>
                <a id="removeP" href="#del_account">Sterge Cont</a>
            </div>
        </div>
        <div class="account">
            <a href="javascript:void(0);" class="icon" onclick="Func()">
                <i class="fa fa-bars"></i>
            </a>
            <a id="user" href="#account" class="logged" onclick="AccShow(this.id)">Nume User</a>
            <div id="userManage" class="extra">
                <a id="logout" href="../../StartPage/html/LoginPage.html">Schimba cont</a>
                <a id="modify" href="#change_account_data">Modifica cont</a>
                <a id="remove" href="index/del_account">Sterge Cont</a>
            </div>
        </div>
    </div>

<form method="POST" class="search" action="/vizitator/profil">
        <label class="titlu">CAUTA PE CINEVA</label>

        <label class="line">
            <span> Numele </span>
            <input type="text" placeholder="Numele de familie">
        </label>

        <label class="line">
            <span for="lname">Prenumele</span>
            <input type="text" placeholder="Prenumele">
        </label>

        <label class="line">
            <span>CNP</span>
            <input type="text" placeholder="Cod numeric personal">
        </label>


        <label class="line">
            <span> Cod Unic Detinut </span>
            <input type="number" placeholder="Cod Detinut" name="cod" required>
        </label>

        <button class="btn" type="submit"> Cauta! </button>
</form>
<h3>Apasă pe caută! pentru a ajunge la o pagină cu un model de rezultat</h3>

</body>
</html>