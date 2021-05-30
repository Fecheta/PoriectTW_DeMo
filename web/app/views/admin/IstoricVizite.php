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
            <a id="istoric" href="/admin/IstoricVizite" class="activate">Istoric vizite</a>
            <a id="add" href="/admin/Programari">Programari</a>
            <a id="verifica" href="/admin/VizualizareDetinuti">Vizualizare Detinuti</a>
            <a id="about" href="/admin/DetaliiCont">Detalii cont</a>
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
                    <th>Ora terminarii vizitei</th>
                    <th>Scopul vizitei</th>
                    <th>Obiecte introduse</th>
                    <th>Numele Detinutului vizitat</th>


                </tr>
                <tr>
                    <td>VIZITATOR1</td>
                    <td>111</td>
                    <td>Unchi</td>
                    <td>09:00</td>
                    <td>09:35</td>
                    <td>Verificarea starii detinutului</td>
                    <td>Alimente</td>
                    <td>Detinut1</td>

                </tr>
                <tr>
                    <td>VIZITATOR2</td>
                    <td>112</td>
                    <td>Verisor</td>
                    <td>09:10</td>
                    <td>09:25</td>
                    <td>Verificarea starii detinutului</td>
                    <td>Alimente</td>
                    <td>Detinut3</td>
                </tr>
                <tr>
                    <td>VIZITATOR3</td>
                    <td>113</td>
                    <td>Unchi</td>
                    <td>09:30</td>
                    <td>09:55</td>
                    <td>Verificarea starii detinutului</td>
                    <td>Alimente</td>
                    <td>Detinut1</td>
                </tr>
                <tr>
                    <td>VIZITATOR4</td>
                    <td>114</td>
                    <td>Unchi</td>
                    <td>19:00</td>
                    <td>19:35</td>
                    <td>Verificarea starii detinutului</td>
                    <td>Alimente</td>
                    <td>Detinut6</td>
                </tr>
                <tr>
                    <td>VIZITATOR5</td>
                    <td>115</td>
                    <td>Matusa</td>
                    <td>09:20</td>
                    <td>09:45</td>
                    <td>Verificarea starii detinutului</td>
                    <td>Alimente</td>
                    <td>Detinut9</td>
                </tr>
                <tr>
                    <td>VIZITATOR6</td>
                    <td>116</td>
                    <td>Unchi</td>
                    <td>09:00</td>
                    <td>09:35</td>
                    <td>Verificarea starii detinutului</td>
                    <td>Alimente</td>
                    <td>Detinut10</td>
                </tr>
                <tr>
                    <td>VIZITATOR7</td>
                    <td>117</td>
                    <td>Tata</td>
                    <td>12:23</td>
                    <td>12:37</td>
                    <td>Verificarea starii detinutului</td>
                    <td>Alimente</td>
                    <td>Detinut8</td>
                </tr>
                <tr>
                    <td>VIZITATOR8</td>
                    <td>118</td>
                    <td>Frate</td>
                    <td>09:02</td>
                    <td>09:33</td>
                    <td>Verificarea starii detinutului</td>
                    <td>Alimente</td>
                    <td>Detinut7</td>
                </tr>
                <tr>
                    <td>VIZITATOR9</td>
                    <td>119</td>
                    <td>Sora</td>
                    <td>09:00</td>
                    <td>09:35</td>
                    <td>Verificare starii detinutului</td>
                    <td>Alimente</td>
                    <td>Detinut2</td>
                </tr>
                <tr>
                    <td>VIZITATOR10</td>
                    <td>120</td>
                    <td>Sotie</td>
                    <td>09:00</td>
                    <td>09:35</td>
                    <td>Verificarea starii detinutului</td>
                    <td>Alimente</td>
                    <td>Detinut4</td>
                </tr>
                <tr>
                    <td>VIZITATOR11</td>
                    <td>121</td>
                    <td>Sot</td>
                    <td>09:00</td>
                    <td>09:35</td>
                    <td>Verificarea starii detinutului</td>
                    <td>Alimente</td>
                    <td>Detinut4</td>
                </tr>
                <tr>
                    <td>VIZITATOR12</td>
                    <td>122</td>
                    <td>Sotie</td>
                    <td>09:00</td>
                    <td>09:35</td>
                    <td>Verificarea starii detinutului</td>
                    <td>Alimente</td>
                    <td>Detinut4</td>
                </tr>
                <tr>
                    <td>VIZITATOR13</td>
                    <td>123</td>
                    <td>Unchi</td>
                    <td>09:00</td>
                    <td>09:35</td>
                    <td>Verificarea starii detinutului</td>
                    <td>Alimente</td>
                    <td>Detinut1</td>
                </tr>
                <tr>
                    <td>VIZITATOR14</td>
                    <td>124</td>
                    <td>Unchi</td>
                    <td>09:00</td>
                    <td>09:35</td>
                    <td>Verificarea starii detinutului</td>
                    <td>Alimente</td>
                    <td>Detinut1</td>
                </tr>
                <tr>
                    <td>VIZITATOR15</td>
                    <td>125</td>
                    <td>Frate</td>
                    <td>09:00</td>
                    <td>09:35</td>
                    <td>Verificarea starii detinutului</td>
                    <td>Alimente</td>
                    <td>Detinut9</td>
                </tr>
                <tr>
                    <td>VIZITATOR16</td>
                    <td>126</td>
                    <td>Sora</td>
                    <td>09:00</td>
                    <td>09:35</td>
                    <td>Verificarea starii detinutului</td>
                    <td>Alimente</td>
                    <td>Detinut3</td>
                </tr>


    </table>



</body>

</html>