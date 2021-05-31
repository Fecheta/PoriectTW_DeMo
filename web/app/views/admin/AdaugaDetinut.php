<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DetaliiCont</title>

    <link rel="stylesheet" href="/public/css/admin/AdaugaDetinut.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/css/admin/index.css">
    <script type="text/javascript" src="/public/javaScript/topnav.js"></script>
</head>

<body class="st">

    <div class="fullTopnav">
        <div id="myTopnav" class="topnav">
            <a id="home" href="/admin/index">Home</a>
            <a id="istoric" href="/admin/IstoricVizite">Istoric vizite</a>
            <a id="add" href="/admin/Programari">Programari</a>
            <a id="verifica" href="/admin/VizualizareDetinuti">Vizualizare Detinuti</a>
            <a id="about" href="/admin/AdaugaDetinut" class="activate">AdaugaDetinut</a>
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
                <a id="logout" href="../../StartPage/html/p1.html">Schimba cont</a>
                <a id="modify" href="#change_account_data">Modifica cont</a>
                <a id="remove" href="#del_account">Sterge Cont</a>
            </div>
        </div>
    </div>

    <form class="search">
        <label for="fname" class="titlu">ADAUGA UN DETINUT</label>
        <div class="line">
            <label for="fname">Cod Unic Detinut</label>
            <input id="fname" type="text" placeholder="cod" required>
        </div>
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
            <label for="day">Varsta</label>
           <input id="lname" type="number" placeholder="Varsta" required>
        </div>
        <div class="line">
            <label for="day">Data Nasterii</label>
            <input id="day" type="date" required>
        </div>
        <div class="line">
            <label for="lname">Infractiune Comisa</label>
            <input id="lname" type="text" placeholder="Infractiune" required>
        </div>
        <div class="line">
            <label for="day">Pedeapsa primita</label>
           <input id="lname" type="number" placeholder="Ani" required>
        </div>
        <div class="line">
            <label for="day">Pedeapsa ramasa</label>
           <input id="lname" type="number" placeholder="Zile" required>
        </div>
        <div class="line">
            <label for="day">Data Condamnarii</label>
            <input id="day" type="date" required>
        </div>
       
        <button class="btn">Inregistrează!</button>
    </form>


</body>

</html>