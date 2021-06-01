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
    <link rel="stylesheet" href="/public/css/vizitator/profil.css">
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

<form method="POST" action="/vizitator/cauta" id="find" class="find">
    <input class="findBy" type="text" placeholder="Introdu Numele intreg sau Codul detinutului" name="name_cod">
    <button class="findBtn" type="submit"> <i class="fa fa-search"></i> </button>
</form>


<?php
if (isset($data["data"])) {
    if ($data["data"]->num_rows > 0) {
        while ($row = $data["data"]->fetch_assoc()) {
            echo "
            <div class=\"profil\">
                <div class=\"numePoza\">
                    <img src=\"/public/images/". $row["poza"] ."\" alt=\"prisoner\" class=\"forImg\">
                    <div class=\"info\">
                        <h4>". $row["nume"] . " " . $row["prenume"] ."</h4>
                        <h5>". $row["infractiune_comisa"] ."</h5>
                    </div>
                </div>
                <div class=\"pData\">
                    <div class=\"rawData\">
                        <p class=\"col1Data\">Data nasterii: </p>
                        <p class=\"col2Data\"><time datetime=\"1980-04-20\">". $row["data_nasterii"] ."</time></p>
                    </div>
                    <div class=\"rawData\">
                        <p class=\"col1Data\">Starea de spirit</p>
                        <p class=\"col2Data\">Necunoscuta</p>
                    </div>
                    <div class=\"rawData\">
                        <p class=\"col1Data\">Starea de sanatate</p>
                        <p class=\"col2Data\">Buna</p>
                    </div>
                    <div class=\"rawData\">
                        <p class=\"col1Data\">Pedeapsa ramasa: </p>
                        <p class=\"col2Data\">". $row["pedeapsa_ramasa"] ."</p>
                    </div>
                    <div class=\"rawData\">
                        <p class=\"col1Data\">Pedeapsa totala: </p>
                        <p class=\"col2Data\">". $row["pedeapsa_primita"] ."</p>
                    </div>
                </div>
            </div>
            ";
        }
    } else {
        echo "<h1> No data Fownd!! </h1>";
    }
} else {
    echo "<h1> Type in a name or a unique cod to find somenone!! </h1>";
}
?>
<!-- <form method="POST" class="search" action="/vizitator/profil">
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
</form> -->
<!-- <h3>Apasă pe caută! pentru a ajunge la o pagină cu un model de rezultat</h3> -->

</body>
</html>