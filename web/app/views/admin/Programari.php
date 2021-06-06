<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programari</title>
    <link rel="stylesheet" href="/public/css/admin/Programari.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/css/admin/index.css">
    <script type="text/javascript" src="public/javaScript/topnav.js"></script>
</head>
<body>

    <div class="fullTopnav">
        <div id="myTopnav" class="topnav">
        <a id="home" href="/admin/index">Home</a>
            <a id="istoric" href="/admin/IstoricVizite">Istoric vizite</a>
            <a id="add" href="/admin/Programari" class="activate">Programari</a>
            <a id="verifica" href="/admin/VizualizareDetinuti">Vizualizare Detinuti</a>
            <a id="about" href="/admin/AdaugaDetinut" >AdaugaDetinut</a>
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

    <?php
        foreach ($data["programari"] as $s) {
            // <div class=\"edit\">
            //     <i class=\"fa fa-edit\"></i>
            // </div>
            echo
            "<form class=\"programare\">
        
                <div class=\"detalii\">
                    <div class=\"raw\">
                        <label class=titluIstoric> Programare #". $s["programare"]["id_programare"] ."</label>
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
        
                    <div class=\"userArea\">
                        <div class=\"raw\">
                            <label class=col>Vizitatori</label>
                        </div>";
            
                
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
                    </div>
                    <div class=\"raw\">
                        <p class=\"col1\"> Motiv Neaprobare: </p>
                        <input class=\"col2\" type=\"text\" placeholder=\"motiv\" name=\"motiv\">
                    </div>";
                // </div>";

                    echo" </div>
                <div class=\"statusW\">
                    <button class=\"accept\" name=\"accept\">Accepta</button>
                    <button class=\"respinge\" name=\"respinge\">Respinge</button>
                </div>";
        
            echo "</form>";
        }
    ?>


</body>
</html>