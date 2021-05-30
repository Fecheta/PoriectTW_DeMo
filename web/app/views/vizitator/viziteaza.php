<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeMo</title>
    <link rel="icon" href="/public/images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/css/vizitator/viziteaza.css">
    <link rel="stylesheet" href="/public/css/vizitator/index.css">
    <script src="/public/javaScript/topnav.js"></script>
</head>
<body>
    
<div class="fullTopnav">
        <div id="myTopnav" class="topnav">
            <a id="home" href="/vizitator/index">Home</a>
            <a id="istoric" href="/vizitator/istoric">Istoric vizite</a>
            <a id="add" href="/vizitator/viziteaza" class="activate">Adauga vizita</a>
            <a id="verifica" href="/vizitator/cauta">Cauta Detinut</a>
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

<form class="search">
        <label for="fname" class="titlu">ÎNREGISTREZĂ O VIZITĂ</label>
        <div class="line">
            <label for="fname">Numele</label>
            <input id="fname" type="text" placeholder="Numele de familie" required>
        </div>
        <div class="line">
            <label for="lname">Prenumele</label>
            <input id="lname" type="text" placeholder="Prenumele" required>
        </div>
        <div class="line">
            <label for="cnp">CNP</label>
            <input id="cnp" type="number" placeholder="Cod Numeric Personal" required>
        </div>
        <div class="line">
            <label for="day">Data Vizitei</label>
            <input id="day" type="date" required>
        </div>
        <div class="line">
            <label for="hour">Ora Vizitei</label>
            <input id="hour" type="time" required>
        </div>
        <div class="line">
            <label for="rude">Relatia cu detinutul</label>
            <select name="grad" id="rude" required>
                <option value=""> - - select - - </option>
                <option value="0">Ruda</option>
                <option value="1">Tutore legal</option>
                <option value="2">Avocat</option>
                <option value="2">Prieten</option>
                <option value="2.1">Altul</option>
            </select>
        </div>
        <div class="line">
            <label for="scop">Scopul Vizitei</label>
            <select name="grad" id="scop" required>
                <option value=""> - - select - - </option>
                <option value="0">Vizita Amicala</option>
                <option value="1">Chestiuni Judecatresti</option>
                <option value="2">Probleme Personale</option>
                <option value="2.1">Altul</option>
            </select>
        </div>
        <button class="btn">Inregistrează!</button>
    </form>

</body>

</html>