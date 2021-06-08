<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IstoricVizite</title>
    <link rel="stylesheet" href="/public/css/admin/IstoricVizite.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/css/admin/index.css">
    <script type="text/javascript" src="/public/javaScript/topnav.js"></script>
    
</head>

<body>

    <div class="fullTopnav">
        <div id="myTopnav" class="topnav">
        <a id="home" href="/admin/index">Home</a>
            <a id="istoric" href="/admin/IstoricVizite" class="activate">Istoric vizite</a>
            <a id="add" href="/admin/Programari">Programari</a>
            <a id="verifica" href="/admin/VizualizareDetinuti">Vizualizare Detinuti</a>
            <a id="about" href="/admin/AdaugaDetinutt">AdaugaDetinut</a>
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

    foreach ($data["programari"] as $s) {
    
    echo
    "<div class=\"programare\">

        <div class=\"detalii\">
            <div class=\"raw\">
                <label class=titluIstoric> Programare #". $s["vizite"]["id_vizita"] ."</label>
            </div>
            <div class=\"userArea\">
                <div class=\"raw\">
                    <label class=col>Detinut</label>
                </div>
        
                <div class=\"userCard\">
                    <img class=\"img\" src=\"/public/images/". $s["detinut"]["poza"] ."\" alt=\"prisonerGirl1.png\">

                    <div class=\"raw\">
                        <p class=\"col1\">Nume: </p>
                        <p class=\"col2\"> ". $s["detinut"]["nume"] ." </time></p>
                    </div>

                    <div class=\"raw\">
                        <p class=\"col1\"> Prenume </p>
                        <p class=\"col2\"> ". $s["detinut"]["prenume"] ." </p>
                    </div>

                    <div class=\"raw\">
                        <p class=\"col1\"> codVizitator </p>
                        <p class=\"col2\"> #". $s["detinut"]["id_detinut"] ." </p>
                    </div>
                </div>
            </div>
            if (!($s["user1"] === null)) {
            echo"
                <div class=\"userCard\">
                    <img class=\"img\" src=\"/public/images/". $s["user1"]["photo"] ."\" alt=\"prisonerGirl1.png\">

                    <div class=\"raw\">
                        <p class=\"col1\"> Nume: </p>
                        <p class=\"col2\"> ". $s["user1"]["first_name"] ." </time></p>
                    </div>

                    <div class=\"raw\">
                        <p class=\"col1\"> Prenume: </p>
                        <p class=\"col2\"> ". $s["user1"]["last_name"] ." </p>
                    </div>

                    <div class=\"raw\">
                        <p class=\"col1\"> CodUnic </p>
                        <p class=\"col2\"> #". $s["user1"]["id_user"] ." </p>
                    </div>
                </div>";
        }

        if (!($s["user2"] === null)) {
            echo"
                <div class=\"userCard\">
                    <img class=\"img\" src=\"/public/images/". $s["user2"]["photo"] ."\" alt=\"prisonerGirl1.png\">

                    <div class=\"raw\">
                        <p class=\"col1\"> Nume: </p>
                        <p class=\"col2\"> ". $s["user2"]["first_name"] ." </time></p>
                    </div>

                    <div class=\"raw\">
                        <p class=\"col1\"> Prenume: </p>
                        <p class=\"col2\"> ". $s["user2"]["last_name"] ." </p>
                    </div>

                    <div class=\"raw\">
                        <p class=\"col1\"> CodUnic </p>
                        <p class=\"col2\"> #". $s["user2"]["id_user"] ." </p>
                    </div>
                </div>";
        }

        if (!($s["user3"] === null)) {
            echo"
                <div class=\"userCard\">
                    <img class=\"img\" src=\"/public/images/". $s["user3"]["photo"] ."\" alt=\"prisonerGirl1.png\">

                    <div class=\"raw\">
                        <p class=\"col1\"> Nume: </p>
                        <p class=\"col2\"> ". $s["user3"]["first_name"] ." </time></p>
                    </div>

                    <div class=\"raw\">
                        <p class=\"col1\"> Prenume: </p>
                        <p class=\"col2\"> ". $s["user3"]["last_name"] ." </p>
                    </div>

                    <div class=\"raw\">
                        <p class=\"col1\"> CodUnic </p>
                        <p class=\"col2\"> #". $s["user3"]["id_user"] ." </p>
                    </div>
                </div>";
        }
        echo"
            </div>

            <div class=\"raw\">
                <p class=\"col1\"> Data Programarii: </p>
                <p class=\"col2\"> ". $s["programare"]["data"] ."</p>
            </div>

            <div class=\"raw\">
                <p class=\"col1\"> Ora Vizitei: </p>
                <p class=\"col2\"> ". $s["programare"]["ora"] ." </p>
            </div>

            <div class=\"raw\">
                <p class=\"col1\"> Relatia: </p>
                <p class=\"col2\"> ". $s["programare"]["relatia_cu_detinutul"] ." </p>
            </div>

            <div class=\"raw\">
                <p class=\"col1\"> Scopul Vizitei: </p>
                <p class=\"col2\"> ". $s["programare"]["natura_vzitei"] ." </p>
            </div>;
            <div class=\"raw\">
                <p class=\"col1\"> Durata vizitei: </p>
                <p class=\"col2\"> ". $s["vizita"]["timp_petrecut"] ." </p>
            </div>";
        
        if($s["vizita"]["status"] <= 0){
            echo" 
            <div class=\"raw\">
                 <p class=\"col1\"> Oferit Detinutului: </p>
                <input class=\"col2\" type=\"text\" placeholder=\"primit\" name=\"primit\">
            </div>
            <div class=\"raw\">
                 <p class=\"col1\"> Oferit Vizitatorului: </p>
                <input class=\"col2\" type=\"text\" placeholder=\"oferit\" name=\"oferit\">
            </div>
            <div class=\"raw\">
                 <p class=\"col1\"> Starea de spirit: </p>
                <input class=\"col2\" type=\"text\" placeholder=\"spirit\" name=\"spirit\">
            </div>
            <div class=\"raw\">
                 <p class=\"col1\"> Starea de sanatate: </p>
                <input class=\"col2\" type=\"text\" placeholder=\"sanatate\" name=\"sanatate\">
            </div>
            <div class=\"raw\">
                 <p class=\"col1\"> Rezumatul disutiei: </p>
                <input class=\"col2\" type=\"text\" placeholder=\"rezumat\" name=\"rezumat\">
            </div>
            <div class=\"statusW\">
                <button class=\"consemneaza\" name=\"consemneaza\">Consemneaza</button>
            </div>";
        else if($s["vizita"]["status"] > 0){
            echo"
            <div class=\"raw\">
                <p class=\"col1\"> Oferit Detinutului: </p>
                <p class=\"col2\"> ". $s["vizita"]["oferit"] ." </p>
            </div>
            <div class=\"raw\">
                <p class=\"col1\"> Primit de la Detinut: </p>
                <p class=\"col2\"> ". $s["vizita"]["primit"] ." </p>
            </div>
            <div class=\"raw\">
                <p class=\"col1\"> Stare de Spirit: </p>
                <p class=\"col2\"> ". $s["vizita"]["stare_de_spirit"] ." </p>
            </div>
            <div class=\"raw\">
                <p class=\"col1\"> Stare de Sanatate: </p>
                <p class=\"col2\"> ". $s["vizita"]["stare_de_sanatate"] ." </p>
            </div>
            <div class=\"raw\">
                <p class=\"col1\"> Rezumatul Discutiei: </p>
                <p class=\"col2\"> ". $s["vizita"]["rezumat"] ." </p>
            </div> 
            </div>
            <div class=\"statusA\">
                <p>VIZITA CONSEMNATA!</p>
            </div>";
            
        }




</body>

</html>