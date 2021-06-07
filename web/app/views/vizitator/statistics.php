<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/public/css/vizitator/statistics.css">
    <link rel="stylesheet" href="/public/css/vizitator/index.css">

    <title>Statistics</title>
</head>
<body>
    <div class="options">
        <div class="term">
            <span>Perioada de timp:</span>
            <select name="mounth" require>
                <option value=""> -- SELECT --</option>
                <option value="1">1 Luni</option>
                <option value="3">3 Lunis</option>
                <option value="6">6 Luni</option>
                <option value="12">12 Luni</option>
                <option value="100">Toate</option>
            </select>
        </div>

        <div class="term">
            <span>Ordinea:</span>
            <select name="order">
                <option value="">-- SELECT --</option>
                <option value="1">Crescator</option>
                <option value="2">Descrescator</option>
            </select>
        </div>

        <div class="term">
            <span>Tip:</span>
            <select name="type">
                <option value="">-- SELECT --</option>
                <option value="1">HTML</option>
                <option value="2">CSV</option>
                <option value="3">JSON</option>
            </select>
        </div>

        <div class="term">
            <span>Categorie:</span>
            <select name="chategory">
                <option value="">-- SELECT --</option>
                <option value="1">1 (Furt/Evaziune Fiscala)</option>
                <option value="2">2 (Violenta/Agresiune/Pedofilie)</option>
                <option value="3">3 (Crima)</option>
            </select>
        </div>

        <button>DOWNLOAD</button>
        <!-- <button>GENERATE</button> -->
    </div>

    <div class="topCard">
        <span class="corner">#1</span>
        <img src="/public/images/userM1.png" alt="userM1">
        <span class="nr0">Laparnaie Daniel (cod 1)</span>
        <span class="nr1">12 Vizite</span>
    </div>

</body>
</html>