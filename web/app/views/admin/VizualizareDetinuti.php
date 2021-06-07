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
    <link rel="stylesheet" href="/public/css/vizitator/profil.css">
    <script type="text/javascript" src="public/javaScript/topnav.js"></script>
    
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

    <form method="POST" id="find" class="find">
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
                        <h5>". " (#". $row["id_detinut"] .")" ."</h5>
                    </div>
                </div>
                <div class=\"pData\">
                    <div class=\"rawData\">
                        <p class=\"col1Data\">Varsta: </p>
                        <p class=\"col2Data\">". $row["varsta"] ." Ani</p>
                    </div>
                    <div class=\"rawData\">
                        <p class=\"col1Data\">Fapta comisa: </p>
                        <p class=\"col2Data\">".$row["infractiune_comisa"]."</p>
                    </div>
                    <div class=\"rawData\">
                        <p class=\"col1Data\">Data Condamnarii: </p>
                        <p class=\"col2Data\">". $row["data_condamnarii"] ."</p>
                    </div>
                    <div class=\"rawData\">
                        <p class=\"col1Data\">Pedeapsa ramasa: </p>
                        <p class=\"col2Data\">". $row["pedeapsa_ramasa"] ." Zile</p>
                    </div>
                    <div class=\"rawData\">
                        <p class=\"col1Data\">Pedeapsa totala: </p>
                        <p class=\"col2Data\">". $row["pedeapsa_primita"] ." Ani</p>
                    </div>
                </div>
            </div>
            ";
        }
    } else {
        echo "<h1> Nu exista nici un detinut pentru datele introduse </h1>";
    }
} else {
    echo "<h1> Cauta un detinut dupa nume/prenume sau dupa codul sau! </h1>";
}
?>

</body>
</html>