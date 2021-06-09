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
        <div class="rezultatTitlu">
            <p>RAPORT</p>
        </div>
    </div>

    <div class="head">
        Scholarly HTML
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

        <div class="subpunct">
            <h2> 1.3 Publicul Tinta </h2>
            <p>
                Actorii sunt: 
                <br><br>
	            <b>Vizitatorul:</b> O persoana care are o relatie de rudenit cu un detinut
                sau care are dreptul la vizita pentru un detinut(avocat, procuror, etc.),
                aceasta isi poate crea un cont de vizitator si poate prin intermediul aplicatiei sa programeza o vizita.
                <br><br>
	            <b>Angajat al penitenciarului (Administrator):</b> O persoana care este angajata la penitenciar
                si care primeste la angajare un cont de administrator, aceasta persoana trebuie sa verifice
                programarile facute de vizitatori si sa le accepte sau sa le respinga pe cele care nu au
                putut fi procesate automat din varii motive.
            </p>
        </div>

        <div class="titlu">
            <h1> 2. DESCRIEREA GENERALA </h1>
        </div>

        <div class="subpunct">
            <h2> 2.1 Perspectva </h2>
            <p>
                Pagina noastra web reprezinta pagina unui penitenciar, care va avea
                la dispozitie functionalitati precum: inregistrare si autentificare
                ca fiind un vizitator, o inregistrare ca admin al paginii.
            </p>
        </div>

        <div class="subpunct">
            <h2> 2.2 Modul de functionare </h2>
            <p>>
            <img src="/../../public/images/start.png" alt="start">
          
                Daca esti un utilizator nou, va trebui sa iti creezi un cont,
                completand formularul cu datele personale. Pagina de SignUp contine campuri de tip text,
                 in care utilizatorul trebuie sa-si introduca datele personale 
                 pentru a obtine un cont pentru aplicatia pe care am dezvoltat-o
                <img src="/../../public/images/signup.png" alt="start">
                Dupa crearea contului, il poti folosi pentru a te loga si a 
                beneficia de toate optiunile unui vizitator.
                Utilizatorul va avea de completat 2 campuri
                care fac referire la adresa/nr de telefon si parola aferenta contului, 
                dupa care va putea sa apese butonul de login, pentru logarea efectiva 
                <img src="/../../public/images/login.png" alt="start">
                <b>Dupa logarea ca vizitator ai urmatoarele optiuni:</b>
                <img src="/../../public/images/advizita.png" alt="start">
                <br>
                - sa iti faci o programare pentru vizitarea unui detinut;
                <br>
                - sa verifici programarile facute de tine in trecut, si sa vezi 
                statusul lor:
                -acceptata:
                <img src="/../../public/images/vizit.png" alt="start">
                -consemnata (dupa efectuarea vizitei, un administrator trebuie sa 
                relateze cum a decurs vizita)
                <img src="/../../public/images/cons.png" alt="start">
                -respinsa(nu poti efectua vizita, din diferite motive):
                <img src="/../../public/images/res.png" alt="start">
                <br>
                
                - sa cauti informatii despre un detinut.
                <img src="/../../public/images/caudet.png" alt="start">
                <img src="/../../public/images/detalii.png" alt="start">
                <br><br>
                <b>Sau ai optiunea de a te loga cu un cont de admin:</b>
                - pagina de Login as Administrator este exclusiv pentru administratorul 
                penitenciarului care va trebui sa introduca in campurile prezente email-ul
                 care i-a fost atribuit, respectiv parola; </b>
                <img src="/../../public/images/admin.png" alt="start">
                <b> Dupa logarea ca admin ai urmatoarele optiuni: </b>
                <br>
                - sa verifici istoricul vizitelor efectuate deja, pe care
                ai optiunea sa le consemnezi;
                <img src="/../../public/images/consemneaza.png" alt="start">
                -iar dupa ce le consemnezi ele vor aparea ca vizite consemnate;
                <img src="/../../public/images/consemnat.png" alt="start">
                <br>
                - sa vizualizezi ce programari sunt facute, pe care ai optiunea de 
                a le accepta sau respinge;
                <img src="/../../public/images/optiune.png" alt="start">
                -daca accepti o programare, ea va aparea ca programare aprobata;
                <img src="/../../public/images/acc.png" alt="start">
                -daca respingi o progamare, trebuie sa ii dai un motiv si va apare
                ca programare respinsa;
                <img src="/../../public/images/respinss.png" alt="start">
                <br>
                - sa cauti un detinut;
                <img src="/../../public/images/caudet.png" alt="start">
                -sa vizualizezi informatii despre acesta;
                <img src="/../../public/images/detalii.png" alt="start">
                <br>
                - sa adaugi un detinut;
                <img src="/../../public/images/adauga1.png" alt="start">
                <img src="/../../public/images/adauga2.png" alt="start">
                <br><br>
                
            </p>
        </div>

        <div class="subpunct">
            <h2> 2.3 Implementare </h2>
            <p>
                Am respectat principiul responsiv specific pentru designul web,
                încât aplicația este accesibilă și utilizabilă de pe orice 
                platformă, având o interfață atractivă pentru utilizator.
                    Am realizat partea grafica pentru toate functionalitatile mentionate
                mai sus.
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