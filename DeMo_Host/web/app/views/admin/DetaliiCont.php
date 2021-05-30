<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DetaliiCont</title>

    <link rel="stylesheet" href="/public/css/admin/DetaliiCont.css">
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
            <a id="about" href="/admin/DetaliiCont" class="activate">Detalii cont</a>
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

    <div class="detalii">
            <p class="col1">Username: </p>
            <p class="col2">admin1</p>
            <p class="col3">Nume si prenume: </p>
            <p class="col4">Admin Admin</p>
            <p class="col5">Data nasterii: </p>
            <p class="col6">01.04.1978</p>
            <p class="col7">Functie in Penitenciar: </p>
            <p class="col8">Director</p>
            <p class="col9">Gen: </p>
            <p class="col10">Masculin</p>
            <p class="col11">Data obtinerii functiei: </p>
            <p class="col12">04.08.2020</p>
            <p class="col13">E-mail: </p>
            <p class="col14">admin1@penitenciar.ro</p>
    </div>



</body>

</html>