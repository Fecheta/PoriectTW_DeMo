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
    <style>
        table,
        th,
        td {
            border: 2px solid #000;
        }
    </style>
</head>

<body>

    <div class="fullTopnav">
        <div id="myTopnav" class="topnav">
        <a id="home" href="/admin/index">Home</a>
            <a id="istoric" href="/admin/IstoricVizite">Istoric vizite</a>
            <a id="add" href="/admin/Programari" class="activate">Programari</a>
            <a id="verifica" href="/admin/VizualizareDetinuti">Vizualizare Detinuti</a>
            <a id="about" href="/admin/DetaliiCont" >Detalii cont</a>
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

    <table>


                <tr>
                    <th>Numele si Prenumele vizitatorului</th>
                    <th>CNP</th>
                    <th>Grad de rudenie</th>
                    <th>Ora inceperii vizitei</th>
                    <th>Numele Detinutului</th>
                    <th>Scopul vizitei</th>

                </tr>
                <tr>
                    <td>VIZITATOR1</td>
                    <td>130</td>
                    <td>unchi</td>
                    <td>09:00</td>
                    <td>Detinut4</td>
                    <td>Verificarea starii detinutului</td>
                </tr>
                <tr>
                    <td>VIZITATOR2</td>
                    <td>131</td>
                    <td>sotie</td>
                    <td>09:00</td>
                    <td>Detinut2</td>
                    <td>Verificarea starii detinutului</td>
                </tr>
                <tr>
                    <td>VIZITATOR3</td>
                    <td>133</td>
                    <td>frate</td>
                    <td>09:00</td>
                    <td>Detinut7</td>
                    <td>Verificarea starii detinutului</td>
                </tr>
                <tr>
                    <td>VIZITATOR4</td>
                    <td>111</td>
                    <td>Sotie</td>
                    <td>09:30</td>
                    <td>Detinut9</td>
                    <td>Verificarea starii detinutului</td>
                </tr>
                <tr>
                    <td>VIZITATOR5</td>
                    <td>134</td>
                    <td>sora</td>
                    <td>09:30</td>
                    <td>Detinut6</td>
                    <td>Verificarea starii detinutului</td>
                </tr>
                <tr>
                    <td>VIZITATOR6</td>
                    <td>135</td>
                    <td>unchi</td>
                    <td>10:00</td>
                    <td>Detinut7</td>
                    <td>Verificarea starii detinutului</td>
                </tr>
                <tr>
                    <td>VIZITATO7</td>
                    <td>137</td>
                    <td>bunic</td>
                    <td>10:00</td>
                    <td>Detinut6</td>
                    <td>Verificarea starii detinutului</td>
                </tr>
                <tr>
                    <td>VIZITATOR8</td>
                    <td>138</td>
                    <td>unchi</td>
                    <td>10:30</td>
                    <td>Detinut11</td>
                    <td>Verificarea starii detinutului</td>
                </tr>
                <tr>
                    <td>VIZITATOR9</td>
                    <td>139</td>
                    <td>unchi</td>
                    <td>10:30</td>
                    <td>Detinut6</td>
                    <td>Verificarea starii detinutului</td>
                    <tr>
                        <td>VIZITATOR10</td>
                        <td>141</td>
                        <td>frate</td>
                        <td>11:30</td>
                        <td>Detinut8</td>
                        <td>Verificarea starii detinutului</td>
                    </tr>
                    <tr>
                        <td>VIZITATOR11</td>
                        <td>142</td>
                        <td>mama</td>
                        <td>12:00</td>
                        <td>Detinut11</td>
                        <td>Verificarea starii detinutului</td>
                    </tr>
                    <tr>
                        <td>VIZITATOR12</td>
                        <td>143</td>
                        <td>unchi</td>
                        <td>12:00</td>
                        <td>Detinut14</td>
                        <td>Verificarea starii detinutului</td>
                    </tr>
                    <tr>
                        <td>VIZITATOR13</td>
                        <td>144</td>
                        <td>mama</td>
                        <td>12:00</td>
                        <td>Detinut12</td>
                        <td>Verificarea starii detinutului</td>
                    </tr>

    </table>
</body>
</html>