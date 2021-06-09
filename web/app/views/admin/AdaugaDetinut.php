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

    <?php
        if($data["status"] === "inserted"){
            echo" 
                <div class=\"messageSend\">
                    <span>Detinutul a fost inregistrat cu id-ul: ". $data["idDetinut"] ."</span>
                    <br>
                    <span<>Datio refresh pentru o noua inregistrare</span>
                </div>
            ";
            return;
        }
    ?>

    <form class="search" method="POST" enctype="multipart/form-data">
        <label for="fname" class="titlu">ADAUGA UN DETINUT</label>
        <div class="line">
            <label for="fname">Numele</label>
            <input id="fname" type="text" placeholder="Numele de familie" name="nume" required>
        </div>
        <div class="line">
            <label for="lname">Prenumele</label>
            <input id="lname" type="text" placeholder="Prenumele" name="prenume" required>
        </div>
        <div class="line">
            <label for="cnp">CNP</label>
            <input id="cnp" type="number" placeholder="Cod Numeric Personal" name="CNP" required>
        </div>
        <div class="line">
            <label for="varsta">Varsta</label>
           <input id="varsta" type="number" placeholder="Varsta" name="varsta" required>
        </div>
        <div class="line">
            <label for="date">Data Nasterii</label>
            <input id="date" type="date" name="dataNastere" required>
        </div>
        <div class="line">
            <label for="infr">Infractiune Comisa</label>
            <input id="infr" type="text" placeholder="Infractiune" name="infractiuneComisa" required>
        </div>
        <div class="line">
            <label for="pedP">Pedeapsa primita</label>
           <input id="pedP" type="number" placeholder="Ani" name="pedeapsaPrimita" required>
        </div>
        <div class="line">
            <label for="pedR">Pedeapsa ramasa</label>
           <input id="pedR" type="number" placeholder="Zile" name="pedeapsaRamasa" required>
        </div>
        <div class="line">
            <label for="dataC">Data Condamnarii</label>
            <input id="dataC" type="date" name="dataCondamnarii" required>
        </div>
        <div class="line">
            <label for="gen">Gen</label>
            <!-- <input id="gen" type="text" name="gen" required> -->
            <select name="gen" id="gen" required>
                <option value="">-- select --</option>
                <option value="masculin"> masculin </option>
                <option value="feminin"> feminin </option>
                <option value="necunoscut"> necunoscut </option>
            </select>
        </div>
        <div class="line">
            <label for="poza">Poza</label>
            <input id="poza" type="file" name="poza" required>
        </div>
       
        <button class="btn">Inregistrează!</button>
    </form>


</body>

</html>