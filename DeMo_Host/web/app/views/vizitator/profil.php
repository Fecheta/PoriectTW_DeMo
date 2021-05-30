<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeMo</title>
    <link rel="icon" href="/public/images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/css/vizitator/profil.css">
    <link rel="stylesheet" href="/public/css/vizitator/index.css">
    <script src="/public/javaScript/topnav.js"></script>
</head>
<body>

    <div class="bar">
        <a href="/vizitator/index" class="back"> &lt; BACK </a>
        <div class="rezultatTitlu">
            <p>REZULTATUL CAUTARII</p>
        </div>
    </div>

    <!-- <div class="profil">
        <div class="numePoza">
            <img src="/public/images/prisoner.png" alt="prisoner" class="forImg">
            <div class="info">
                <h4>Laparnaie Daniel</h4>
                <h5>Magie</h5>
            </div>
        </div>
        <div class="pData">
            <div class="rawData">
                <p class="col1Data">Data nasterii: </p>
                <p class="col2Data"><time datetime="1980-04-20">20-04-1980</time></p>
            </div>
            <div class="rawData">
                <p class="col1Data">Starea de spirit</p>
                <p class="col2Data">Necunoscuta</p>
            </div>
            <div class="rawData">
                <p class="col1Data">Starea de sanatate</p>
                <p class="col2Data">Buna</p>
            </div>
            <div class="rawData">
                <p class="col1Data">Pedeapsa ramasa: </p>
                <p class="col2Data">3.5 ani</p>
            </div>
            <div class="rawData">
                <p class="col1Data">Pedeapsa totala: </p>
                <p class="col2Data">5 ani</p>
            </div>
        </div>
    </div>

    <div class="profil">
        <div class="numePoza">
            <img src="/public/images/prisoner.png" alt="prisoner" class="forImg">
            <div class="info">
                <h4>Laparnaie Daniel</h4>
                <h5>Magie</h5>
            </div>
        </div>
        <div class="pData">
            <div class="rawData">
                <p class="col1Data">Data nasterii: </p>
                <p class="col2Data"><time datetime="1980-04-20">20-04-1980</time></p>
            </div>
            <div class="rawData">
                <p class="col1Data">Starea de spirit</p>
                <p class="col2Data">Necunoscuta</p>
            </div>
            <div class="rawData">
                <p class="col1Data">Starea de sanatate</p>
                <p class="col2Data">Buna</p>
            </div>
            <div class="rawData">
                <p class="col1Data">Pedeapsa ramasa: </p>
                <p class="col2Data">3.5 ani</p>
            </div>
            <div class="rawData">
                <p class="col1Data">Pedeapsa totala: </p>
                <p class="col2Data">5 ani</p>
            </div>
        </div>
    </div>

    <div class="profil">
        <div class="numePoza">
            <img src="/public/images/prisoner.png" alt="prisoner" class="forImg">
            <div class="info">
                <h4>Laparnaie Daniel</h4>
                <h5>Magie</h5>
            </div>
        </div>
        <div class="pData">
            <div class="rawData">
                <p class="col1Data">Data nasterii: </p>
                <p class="col2Data"><time datetime="1980-04-20">20-04-1980</time></p>
            </div>
            <div class="rawData">
                <p class="col1Data">Starea de spirit</p>
                <p class="col2Data">Necunoscuta</p>
            </div>
            <div class="rawData">
                <p class="col1Data">Starea de sanatate</p>
                <p class="col2Data">Buna</p>
            </div>
            <div class="rawData">
                <p class="col1Data">Pedeapsa ramasa: </p>
                <p class="col2Data">3.5 ani</p>
            </div>
            <div class="rawData">
                <p class="col1Data">Pedeapsa totala: </p>
                <p class="col2Data">5 ani</p>
            </div>
        </div>
    </div> -->

    <?php
        while ($row = $data->fetch_assoc()) {
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
    ?>
</body>
</html>