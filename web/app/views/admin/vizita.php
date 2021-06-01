<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vizita</title>
    <link rel="stylesheet" href="/public/css/admin/vizita.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/css/admin/index.css">
    <script type="text/javascript" src="/public/javaScript/topnav.js"></script>
    

</head>
<body>
    <div class="bar">
        <a href="/admin/index" class="back"> &lt; BACK </a>
        <div class="rezultatTitlu">
            <p>REZULTATUL CAUTARII</p>
        </div>
    </div>
<?php
        while ($row = $data->fetch_assoc()) {
            echo "
            <div class=\"profil\">
                <div class=\"numePoza\">
                    <img src=\"/public/images/". $row["poza"] ."\" alt=\"prisoner\" class=\"forImg\">
                    <div class=\"info\">
                        <h4>". $row["id_detinut"]  ."</h4>
                        <h5>". $row["id_vizita"] ."</h5>
                    </div>
                </div>
                <div class=\"pData\">
                   
                    <div class=\"rawData\">
                        <p class=\"col1Data\">Vizitator1 </p>
                        <p class=\"col2Data\">". $row["id_user1"] ."</p>
                    </div>
                    <div class=\"rawData\">
                        <p class=\"col1Data\">Vizitator2 </p>
                        <p class=\"col2Data\">". $row["id_user2"] ."</p>
                    </div>
                    <div class=\"rawData\">
                        <p class=\"col1Data\">Vizitator3 </p>
                        <p class=\"col2Data\">". $row["id_user3"] ."</p>
                    </div>
                    <div class=\"rawData\">
                        <p class=\"col1Data\">Natura Vizitei: </p>
                        <p class=\"col2Data\">". $row["natura_vizitei"] ."</p>
                    </div>
                    <div class=\"rawData\">
                        <p class=\"col1Data\">Data: </p>
                        <p class=\"col2Data\">". $row["data"] ."</p>
                    </div>
                    <div class=\"rawData\">
                        <p class=\"col1Data\">Ora: </p>
                        <p class=\"col2Data\">". $row["ora"] ."</p>
                    </div>
                    <div class=\"rawData\">
                        <p class=\"col1Data\">Durata </p>
                        <p class=\"col2Data\">". $row["timp_petrecut"] ."</p>
                    </div>
                </div>
            </div>
            ";
        }
    ?>
    </body>
</html>