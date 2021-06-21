<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListaDetinuti</title>
    <link rel="stylesheet" href="/public/css/admin/VizualizareDetinuti.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/css/admin/index.css">
    <link rel="stylesheet" href="/public/css/admin/profil.css">
    <script src="/public/javaScript/topnav.js"></script>
    
</head>

<body>

    <div class="fullTopnav">
        <div id="myTopnav" class="topnav">
        <a id="home" href="/admin/index">Home</a>
            <a id="istoric" href="/admin/IstoricVizite">Istoric vizite</a>
            <a id="add" href="/admin/Programari">Programari</a>
            <a id="verifica" href="/admin/VizualizareDetinuti" class="activate">Vizualizare Detinuti</a>
            <a id="about" href="/admin/AdaugaDetinut">AdaugaDetinut</a>
            <div id="userManagePhone" class="extraResponsive">
                <a id="logoutP" href="/auth/adminLogout">Schimba cont</a>
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
                <a id="logout" href="/auth/adminLogout">Schimba cont</a>
                <a id="modify" href="#change_account_data">Modifica cont</a>
                <a id="remove" href="#del_account">Sterge Cont</a>
            </div>
        </div>
    </div>

    <form method="POST" action="/vizitator/cauta" id="find" class="find">
    <input autocomplete="off" id="findDet" class="findBy" type="text" placeholder="Introdu Numele intreg sau Codul detinutului" name="name_cod">
    <button id="btn" class="findBtn" type="submit"> <i class="fa fa-search"></i> </button>
</form>

<div class="resultArea" id="resultArea">


</div>
</body>
<script src="\public\javaScript\search-detinut.js"></script>



</body>
</html>