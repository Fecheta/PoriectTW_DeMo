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
            <a id="add" href="/admin/Programari">Programari</a>
            <a id="verifica" href="/admin/VizualizareDetinuti" class="activate">Vizualizare Detinuti</a>
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
                    <th>Numele si Prenumele detinutului</th>
                    <th>CNP</th>
                    <th>Data primirii sentintei</th>
                    <th>Data terminarii sentintei</th>
                    <th>Varsta Detinut</th>
                    <th>Sex</th>
                    <th>Inaltime(cm)</th>
                    <th>Greutate(kg)</th>


                </tr>
                <tr>
                    <td>DETINUT1</td>
                    <td>211</td>
                    <td>01.01.2018</td>
                    <td>01.08.2022</td>
                    <td>24</td>
                    <td>Masculin</td>
                    <td>182</td>
                    <td>78</td>

                </tr>
                <tr>
                    <td>DETINUT2</td>
                    <td>212</td>
                    <td>01.03.2008</td>
                    <td>01.08.2022</td>
                    <td>45</td>
                    <td>Masculin</td>
                    <td>191</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>DETINUT3</td>
                    <td>213</td>
                    <td>03.07.2017</td>
                    <td>01.08.2022</td>
                    <td>31</td>
                    <td>Masculin</td>
                    <td>182</td>
                    <td>76</td>
                </tr>
                <tr>
                    <td>DETINUT4</td>
                    <td>213</td>
                    <td>01.03.2017</td>
                    <td>01.08.2024</td>
                    <td>41</td>
                    <td>Feminin</td>
                    <td>188</td>
                    <td>87</td>
                </tr>
                <tr>
                    <td>DETINUT5</td>
                    <td>214</td>
                    <td>03.05.2009</td>
                    <td>12.12.2021</td>
                    <td>55</td>
                    <td>Masculin</td>
                    <td>176</td>
                    <td>75</td>
                </tr>
                <tr>
                    <td>DETINUT6</td>
                    <td>215</td>
                    <td>02.01.2018</td>
                    <td>03.08.2023</td>
                    <td>24</td>
                    <td>Masculin</td>
                    <td>165</td>
                    <td>64</td>
                </tr>
                <tr>
                    <td>DETINUT7</td>
                    <td>216</td>
                    <td>01.03.2026</td>
                    <td>01.08.2022</td>
                    <td>30</td>
                    <td>Feminin</td>
                    <td>160</td>
                    <td>58</td>
                </tr>
                <tr>
                    <td>DETINUT8</td>
                    <td>217</td>
                    <td>02.11.2018</td>
                    <td>01.18.2035</td>
                    <td>45</td>
                    <td>Masculin</td>
                    <td>182</td>
                    <td>78</td>
                </tr>
                <tr>
                    <td>DETINUT9</td>
                    <td>217</td>
                    <td>01.03.2016</td>
                    <td>01.04.2022</td>
                    <td>33</td>
                    <td>Feminin</td>
                    <td>182</td>
                    <td>75</td>
                </tr>
                <tr>
                    <td>DETINUT10</td>
                    <td>218</td>
                    <td>03.01.2018</td>
                    <td>03.04.2032</td>
                    <td>44</td>
                    <td>Masculin</td>
                    <td>188</td>
                    <td>100</td>

                </tr>
                <tr>
                    <td>DETINUT11</td>
                    <td>219</td>
                    <td>03.02.2016</td>
                    <td>01.08.2022</td>
                    <td>26</td>
                    <td>Masculin</td>
                    <td>182</td>
                    <td>78</td>

                </tr>
                <tr>
                    <td>DETINUT12</td>
                    <td>220</td>
                    <td>03.02.2019</td>
                    <td>02.05.2032</td>
                    <td>25</td>
                    <td>Masculin</td>
                    <td>189</td>
                    <td>86</td>

                </tr>
                <tr>
                    <td>DETINUT13</td>
                    <td>221</td>
                    <td>04.03.2020</td>
                    <td>08.09.2023</td>
                    <td>31</td>
                    <td>Masculin</td>
                    <td>182</td>
                    <td>83</td>

                </tr>
                <tr>
                    <td>DETINUT14</td>
                    <td>222</td>
                    <td>05.06.2012</td>
                    <td>05.02.2024</td>
                    <td>43</td>
                    <td>Masculin</td>
                    <td>184</td>
                    <td>86</td>
                </tr>
                <tr>
                    <td>DETINUT15</td>
                    <td>223</td>
                    <td>11.06.2010</td>
                    <td>03.09.2023</td>
                    <td>55</td>
                    <td>Masculin</td>
                    <td>198</td>
                    <td>115</td>

                </tr>
                <tr>
                    <td>DETINUT16</td>
                    <td>224</td>
                    <td>12.13.2010</td>
                    <td>01.08.2029</td>
                    <td>53</td>
                    <td>Masculin</td>
                    <td>187</td>
                    <td>79</td>

                </tr>
                <tr>
                    <td>DETINUT17</td>
                    <td>225</td>
                    <td>11.10.2012</td>
                    <td>13.11.2030</td>
                    <td>48</td>
                    <td>Masculin</td>
                    <td>184</td>
                    <td>87</td>

                </tr>
                <tr>
                    <td>DETINUT18</td>
                    <td>226</td>
                    <td>13.10.2015</td>
                    <td>02.04.2024</td>
                    <td>28</td>
                    <td>Masculin</td>
                    <td>185</td>
                    <td>88</td>

                </tr>
                <tr>
                    <td>DETINUT19</td>
                    <td>227</td>
                    <td>08.10.2014</td>
                    <td>01.08.2023</td>
                    <td>32</td>
                    <td>Masculin</td>
                    <td>182</td>
                    <td>79</td>

                </tr>
                <tr>
                    <td>DETINUT20</td>
                    <td>228</td>
                    <td>03.03.2010</td>
                    <td>10.11.2022</td>
                    <td>33</td>
                    <td>Masculin</td>
                    <td>162</td>
                    <td>68</td>
                </tr>

    </table>



</body>

</html>