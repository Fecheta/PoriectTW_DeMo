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
            <a id="about" href="/vizitator/despre">Despre</a>
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

<div class="message" id="messageBox">
    <label>Message #1</label>
    <label>Message #1</label>
    <label>Message #1</label>
</div>


<form class="search" id="register-visit-form">
        <button class="register-visit" id="start-visit" type="button"> 
            ÎNREGISTREZĂ O VIZITĂ &nbsp;&nbsp;&nbsp; <i class="fa fa-plus"></i>
        </button>

        <label class="titlu" id="titlu">ÎNREGISTREZĂ O VIZITĂ</label>

        <div class="line" id="find-detinut">
            <label>Pe cine vrei sa vizitezi?</label>
            <input type="text" placeholder="Cod Detinut" id="nume_cod">
            <button type="button" id="startFind">check!</button>
        </div>

        <div id="prisoner-card" class="prisoner-card">
            <img src="/public/images/prisonerMen1.png" alt="prisoner.png" id="photo-card">
            <div class="info" id="info">
                <span id="info-nume-cod">Nnume Prenum (cod_unic)</span>
                <span id="info-pedeapsa">pedeapsa</span>
            </div>
        </div>

        <button class="register-visit" id="add-user" type="button"> 
            ÎNREGISTREZĂ UN VIZITATOR &nbsp;&nbsp;&nbsp; <i class="fa fa-plus"></i>
        </button>

        <div class="line" id="find-user1">
            <label>VIZITATOR #1</label>
            <input type="text" placeholder="Cuata user" id="nume_cod1">
            <button type="button" id="startFindUser1">check!</button>
        </div>

        <div id="vizitator-card1" class="vizitator-card">
            <img src="/public/images/userM1.png" alt="prisoner.png" id="photo-vizitator1">
            <span id="info-nume-cod-v1">Nnume Prenum (cod_unic)</span>
        </div>

        <div class="line" id="find-user2">
            <label>VIZITATOR #2</label>
            <input type="text" placeholder="Cuata user" id="nume_cod2">
            <button type="button" id="startFindUser2">check!</button>
        </div>

        <div id="vizitator-card2" class="vizitator-card">
            <img src="/public/images/userM2.png" alt="prisoner.png" id="photo-vizitator2">
            <span id="info-nume-cod-v2">Nnume Prenum (cod_unic)</span>
        </div>

        <div class="line" id="find-user3">
            <label>VIZITATOR #3</label>
            <input type="text" placeholder="Cuata user" id="nume_cod3">
            <button type="button" id="startFindUser3">check!</button>
        </div>

        <div id="vizitator-card3" class="vizitator-card">
            <img src="/public/images/userG1.png" alt="prisoner.png" id="photo-vizitator3">
            <span id="info-nume-cod-v3">Nnume Prenum (cod_unic)</span>
        </div>

        <div class="line" id="visit-date">
            <label>Data Vizitei</label>
            <input id="day" type="date" max="2021-06-20" required>
        </div>

        <div class="line" id="visit-hour">
            <label>Ora Vizitei</label>
            <input id="hour" type="time" min="08:00" max="17:00" step="900" required>
        </div>

        <div class="line" id="visit-relation">
            <label>Relatia cu detinutul</label>
            <select id="rude" required>
                <option value=""> - - select - - </option>
                <option value="Ruda">Ruda</option>
                <option value="Tutore Legal">Tutore legal</option>
                <option value="Avocat">Avocat</option>
                <option value="Prieten">Prieten</option>
            </select>
        </div>

        <div class="line" id="visit-scope">
            <label>Scopul Vizitei</label>
            <select id="scop" required>
                <option value=""> - - select - - </option>
                <option value="Vizita Amicala">Vizita Amicala</option>
                <option value="Chestiuni Judecatresti">Chestiuni Judecatresti</option>
                <option value="Probleme Personale">Probleme Personale</option>
            </select>
        </div>

        <button class="btn" id="submitBtn" type="button">Inregistrează!</button>
    </form>

<script src="/public/javaScript/vizit-form.js"></script>

</body>

</html>