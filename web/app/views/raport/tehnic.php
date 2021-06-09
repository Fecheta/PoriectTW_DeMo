<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeMo</title>
    <link rel="icon" href="/public/images/logo.png">
    <link rel="stylesheet" href="/public/css/raport.css">
    <link rel="stylesheet" href="/public/css/vizitator/profil.css">
</head>
<body class="pagina">
    <div class="bar">
        <button class="back" onclick="history.go(-1);"> &lt; BACK </button>
        <!-- <a href="../StartPage/html/p1.html" class="back"> &lt; BACK </a> -->
        <div class="rezultatTitlu">
            <p>RAPORT TEHNIC</p>
        </div>
    </div>

    <div class="head">
        Scholarly HTML Tehnic
    </div>

    <div class="autori">
            <div class="space"></div>

            <div>
                <h3><b>Proiect realizat de:</b></h3>

                <a href="https://github.com/Fecheta/ProiectTW_DeMo.git">
                <ul>    
                    <li>Timon Roxana-Mihaela</li>
                    <li>Andrei Eduard</li>
                    <li>Fechetă Virgil-Vicențiu</li>
                </ul>
                </a>
            </div>
    </div>

    <div class="sectiune">
        <div class="titlu">
            <h1> 1. INTRODUCERE </h1>
        </div>

        <div class="subpunct">
            <h2> 1.1 Enuntul </h2>
            <p>
                Sa se dezvolte o aplicatie Web pentru gestiunea vizitelor
                de care beneficiaza persoanele condamnate la executarea unei pedepse
                intr-un penitenciar sau intr-o casa de corectie.
            </p>
        </div>

        <div class="subpunct">
            <h2> 1.2 Scopul Aplicatiei </h2>
            <p>
                Aplicatia Detention Monitoring Tool, are ca scop principal fluidizarea
                fluxului de vizite ce pot avea loc in cadrul unui centru de detentie si
                ofera o solutie mai organizata de aface acest lucru.
                <br>
                Aplicatia ofera rudelor detinutilor posibilitatea de a inregistra programari
                pentru vizite ce vor fi procesate de personalul penitenciarului, personalul 
                are posibilitatea de a aproba sau de a respinge anumite vizite iar vizitatorii 
                au posibilitatea de vizualiza un istoric al vizitelor facute si eventual sa 
                modifice o vizita programata daca mai este posibil.
            </p>
        </div>

        <div class="titlu">
            <h1> 2. DESCRIEREA GENERALA </h1>
        </div>

        <div class="subpunct">
            <h2> 2.1 Structura aplicatiei</h2>
            <img src="/../../public/images/UML.png" alt="UML">
            <p>
                poezie;
            </p>
        </div>

        <div class="subpunct">
        <h2> 2.2 Baza de date</h2>
            <img src="/../../public/images/DATABASE.png" alt="DATABASE">
            <p>
                poezie;
            </p>
        </div>

        <div class="subpunct">
            <h2> 2.2 Modul de functionare </h2>
            <p>
                <b>Dupa logarea ca vizitator ai urmatoarele optiuni:</b>
                <br>
                - sa iti faci o programare pentru vizitarea unui detinut;
                <br>
                - sa verifici programarile facute de tine in trecut;
                <br>
                - sa cauti informatii despre un detinut.
                <br><br>
                <b> Dupa logarea ca admin ai urmatoarele optiuni: </b>
                <br>
                - sa verifici istoricul vizitelor efectuate deja;
                <br>
                - sa vizualizezi ce programari sunt facute;
                <br>
                - sa vizualizezi informatii despre toti detinutii;
                <br>
                - sa vizualizezi date despre contul tau.
                <br><br>
                    Daca doresti sa iti creezi un cont, ai optiunea "REGISTER", unde
                iti poti crea un cont, dupa care vei fi redirectionat pe pagina
                de login pentru a te loga.
            </p>
        </div>

        <div class="titlu">
            <h1> 3. INTERFATA GRAFICA </h1>
        </div>

        <div class="subpunct">
            <h2> 3.1 Paginile de start </h2>
            <p>
                Pentru interfata grafica a proiectului am folosit HTML5. 
                Astfel utilizatorul aplicatiei are la dispozitie urmatoarele functionalitati :
                <br><br>
                - pagina principala cu butoane de Login, SignUp si Login as Administrator;
                <br>
                - pagina de Login in care utilizatorul va avea de completat 2 campuri
                care fac referire la adresa/nr de telefon si parola aferenta contului, 
                dupa care va putea sa apese butonul de login, pentru logarea efectiva 
                <br>
                - pagina de SignUp contine campuri de tip text, in care utilizatorul trebuie sa-si 
                introduca datele personale pentru a obtine un cont pentru aplicatia pe care am dezvoltat-o
                <br>
                - pagina de Login as Administrator este exclusiv pentru administratorul penitenciarului 
                care va trebui sa introduca in campurile prezente email-ul care i-a fost atribuit, respectiv parola; 
                <br>
            </p>
        </div>

        <div class="subpunct">
            <h2> 3.2 Paginile Administratorului </h2>
            <p>
                Paginile corespunzatoare contului de administrator ,
                pe care acesta le poate accesa din bara de navigatie:
                <br><br>
                - Home,
                <br>
                - Istoric Vizite ( unde administratorul poate vedea intr-un
                tabel vizitele realizate pana la momentul actual),
                <br>
                - Programari ( administratorul are la dispozitie un tabel in care
                se stocheaza informatiile referitoare la vizitele viitoare)
                <br>
                - Vizualizare detinuti ( o pagina cu profilul detinutilor ), 
                <br>
                - Detalii cont ( o pagina ce contine informatiile personale ale administratorului).
            </p>
        </div>

        <div class="subpunct">
            <h2> 3.3 Paginile Vizitatorului </h2>
            <p>
                Paginile corespunzatoare vizitatorului sunt urmatoarele:
                <br><br>
                - adauga vizita ( unde vizitatorul trebuie sa completeze campurile cu
                referire la datele personale si la datele intalnirii (ora, data), respectiv grad
                de rudenie cu detinutul cu care vizitatorul doreste sa programeze o intalnire,
                <br>
                - pagina Cauta Detinut unde vizitatorul cauta in baza de date a penitenciarului,
                un anumit detinut ( completand campurile : nume, prenume, cnp si cod unic detinut ),
                <br>
                - pagina Istoric vizite ( in care prin intermediul mai multor tabele,
                vizitatorul poate vedea vizitele deja programate), 
                <br>
                - pagina Home ( vizitatorul poate adauga o vizita), 
                <br>
                - pagina Despre (vizitatorul va putea citi functionalitatile aplicatiei DeMo)
            </p>
        </div>

        <div class="titlu">
            <h1> BIBLIOGRAFIE</h1>
        </div>

        <div class="subpunct">
            <a href="https://www.w3schools.com/css/default.asp">
                <p> W3 Schools </p>
            </a>
            <a href="https://stackoverflow.com/">
                <p> Stack Overflow </p>
            </a>
            <a href="https://developer.mozilla.org/en-US/docs/Web/CSS">
                <p> MDN Web Docs </p>
            </a>
        </div>
    </div>

</body>
</html>