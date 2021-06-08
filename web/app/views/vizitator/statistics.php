<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/public/css/vizitator/statistics.css">
    <link rel="stylesheet" href="/public/css/vizitator/index.css">
    <link rel="stylesheet" href="/public/css/vizitator/profil.css">

    <title>Statistics</title>
</head>
<body>
    <div class="bar">
        <button class="back" onclick="history.go(-1);"> &lt; BACK </button>
        <!-- <a href="../StartPage/html/p1.html" class="back"> &lt; BACK </a> -->
        <div class="rezultatTitlu">
            <p>GENEREAZA STATISTICI</p>
        </div>
    </div>


    <form class="options" method="POST" action="/vizitator/statistics">
        <div class="term">
            <span>Perioada de timp:</span>
            <select name="mounth" required>
                <option value=""> -- SELECT --</option>
                <option value="1">1 Luni</option>
                <option value="3">3 Lunis</option>
                <option value="6">6 Luni</option>
                <option value="12">12 Luni</option>
                <option value="120">Toate</option>
            </select>
        </div>

        <div class="term">
            <span>Ordinea:</span>
            <select name="order" required>
                <option value="">-- SELECT --</option>
                <option value="ASC">Crescator</option>
                <option value="DESC">Descrescator</option>
            </select>
        </div>

        <div class="term">
            <span>Tip:</span>
            <select name="type" required>
                <option value="">-- SELECT --</option>
                <option value="html">HTML</option>
                <option value="csv">CSV</option>
                <option value="json">JSON</option>
            </select>
        </div>

        <div class="term">
            <span>Categorie:</span>
            <select name="chategory" required>
                <option value="">-- SELECT --</option>
                <option value="1">1 (Furt/Evaziune Fiscala)</option>
                <option value="2">2 (Violenta/Agresiune/Pedofilie)</option>
                <option value="3">3 (Crima)</option>
            </select>
        </div>
            <button class="statBtn" id="generate" name="generate">GENERATE</button>
    </form>

<?php
    $top = 0;
    $content = "";

    $content = $content . "<span class=\"topTitle\"> Top </span>";
    foreach ($data["top"] as $d) {
        $top++;
        $content = $content . "
        <div class=\"topCard\">
            <span class=\"corner\">#$top</span>
            <img src=\"/public/images/".$d["poza"]."\" alt=\"userPhoto\">
            <span class=\"nr0\">".$d["nume"] . " " . $d["prenume"] . "( #" . $d["id"]." )</span>
            <span class=\"nr1\">". $d["nr_vizite"] ." Vizite</span>
        </div>";
    }
    echo $content;
    echo "<a download=\"stats.".$data["type"]."\" href=\"/../../public/files/stats.txt\">
                <button class=\"statBtn\" id=\"download\">DOWNLOAD</button>
          </a>";

    $file = fopen('public/files/stats.txt', 'w');
    if ($data["type"] === "json") {
        fwrite($file, json_encode($data["top"]));
    }
    if ($data["type"] === "csv") {
        fputcsv($file, array_keys($data["top"][0]));
        foreach ($data["top"] as $row) {
            fputcsv($file, $row);
        }
    } else if($data["type"] === "html"){
        $head = "
        <!DOCTYPE html>
        <html lang=\"en\">
        <head>
            <meta charset=\"UTF-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

            <style>
    body{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .topCard{
        /* border: 1px solid black; */
        display: flex;
        justify-content: flex-start;
        align-items: center;
        flex-direction: row;
        margin-bottom: 1em;
        width: 40%;
        background-color: aliceblue;
        height: 7em;
        box-shadow: 3px 3px 10px rgb(92, 92, 92);
    }
    .nr0, .nr1{
        background-color: rgb(162, 212, 255);
        width: 60%;
        height: 100%;
        border-radius: unset;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .nr1{
        background-color: rgb(145, 186, 223);
    }
    
    .topCard img{
        width: 7em;
        background-color: rgb(194, 226, 255);
        display:none;
    }
    
    .corner{
        background-color:rgb(226, 204, 147);
        color: rgb(0, 0, 0);
        font-size: 4em;
        left: 0;
        top: 0;
        height: 100%;
        width: 20%;
    }
    
    .topTitle{
        /* border: 1px solid black; */
        font-size: 3em;
        margin-top: 0.5em;
    }
    </style>
        
            <title>Statistics</title>
        </head>
        <body>
        ";
        fwrite($file, $head);
        fwrite($file, $content);
        fwrite($file, "</body></html>");
    }
    fclose($file);
?>

</body>
    <script src="/public/javaScript/download.js"></script>
</html>