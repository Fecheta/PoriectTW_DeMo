var day = document.getElementById("day");

var cday = new Date();
const fromD = String(cday.getDay() - 1).padStart(2, '0');
const fromM = String(cday.getMonth() + 1).padStart(2, '0');
const fromY = cday.getFullYear();

Date.prototype.addDays = function (days) {
    var d = new Date(this.valueOf());
    d.setDate(d.getDate() + days);
    return d;
}

var cday1 = cday.addDays(30);
const toD = String(cday1.getDay() - 1).padStart(2, '0');
const toM = String(cday1.getMonth() + 1).padStart(2, '0');
const toY = cday1.getFullYear();

var from = fromY + '-' + fromM + '-' + fromD;
var to = toY + '-' + toM + '-' + toD;

day.setAttribute("min", from);
day.setAttribute("max", to);

var idProgramare = "";
var idDetinut = "";
var idUser1 = "";
var idUser2 = "";
var idUser3 = "";
var dataVizitei = "";
var oraVizitei = "";
var relatiaCuCondamnatul = "";
var naturaVizitei = "";

var registerForm = document.getElementById("register-visit-form");
var startVisit = document.getElementById("start-visit");
var findDetinut = document.getElementById("find-detinut");
var titlu = document.getElementById("titlu");
var startFindBtn = document.getElementById("startFind");
var numeCodInp = document.getElementById("nume_cod");
var prisonerCard = {
    main: document.getElementById("prisoner-card"),
    photo: document.getElementById("photo-card"),
    infoNumeCod: document.getElementById("info-nume-cod"),
    infoPedeapsa: document.getElementById("info-pedeapsa")
}

startVisit.onclick = function () {
    console.log("clicked");
    if (window.innerWidth >= 1000) {
        findDetinut.style.display = "flex";
        titlu.style.display = "flex";
    }
    else {
        findDetinut.style.display = "block";
        titlu.style.display = "block";
    }
    startVisit.style.display = "none";
};

startFindBtn.onclick = function () {
    console.log('click find');
    const request = new XMLHttpRequest();

    request.onload = function () {
        let responseObject = null;
        // console.log(request.responseText);

        responseObject = JSON.parse(request.responseText);
        console.log(responseObject);


        if (responseObject) {
            prisonerCard.main.style.display = "flex";
            if (responseObject.found) {
                idDetinut = responseObject.cod;
                prisonerCard.photo.style.display = "block";
                prisonerCard.infoPedeapsa.style.display = "block";
                prisonerCard.photo.setAttribute('src', '/public/images/' + responseObject.photo);
                prisonerCard.infoNumeCod.textContent = responseObject.nume + ' ' + responseObject.prenume + ' ( #' + responseObject.cod + ' )';
                prisonerCard.infoPedeapsa.textContent = responseObject.fapta;
                addUser.style.display = "flex";
            } else {
                prisonerCard.photo.style.display = "none";
                prisonerCard.infoPedeapsa.style.display = "none";
                prisonerCard.infoNumeCod.textContent = "NU AM GASIT NICI UN PRIZONIER PENTRU DATELE INTRODUSE!"
            
                idDetinut = "";
            }
        }
    }

    const requestData = `detinut=${numeCodInp.value}`;

    console.log(requestData);
    request.open('post', '/registerVisit/detinut');
    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    request.send(requestData);
};


var addUser = document.getElementById("add-user");
var vizitator1 = {
    mainUserFind: document.getElementById("find-user1"),
    numeCod: document.getElementById("nume_cod1"),
    btn: document.getElementById("startFindUser1"),
    mainUC: document.getElementById("vizitator-card1"),
    photo: document.getElementById("photo-vizitator1"),
    info: document.getElementById("info-nume-cod-v1")
}
var vizitator2 = {
    mainUserFind: document.getElementById("find-user2"),
    numeCod: document.getElementById("nume_cod2"),
    btn: document.getElementById("startFindUser2"),
    mainUC: document.getElementById("vizitator-card2"),
    photo: document.getElementById("photo-vizitator2"),
    info: document.getElementById("info-nume-cod-v2")
}

var vizitator3 = {
    mainUserFind: document.getElementById("find-user3"),
    numeCod: document.getElementById("nume_cod3"),
    btn: document.getElementById("startFindUser3"),
    mainUC: document.getElementById("vizitator-card3"),
    photo: document.getElementById("photo-vizitator3"),
    info: document.getElementById("info-nume-cod-v3")
}

var visitDate = document.getElementById("visit-date");
var valueDate = document.getElementById("day");

var visitHour = document.getElementById("visit-hour");
var valueHour = document.getElementById("hour");

var visitRelation = document.getElementById("visit-relation");
var valueRelation = document.getElementById("rude");

var visitScope = document.getElementById("visit-scope");
var valueScope = document.getElementById("scop");

var submitBtn = document.getElementById("submitBtn");

addUser.onclick = function () {
    if (idUser1 == "") {
        vizitator1.mainUserFind.style.display = "flex";
        // vizitator1.mainUC.style.display="flex";
    } else if (idUser2 == "") {
        vizitator2.mainUserFind.style.display = "flex";
        // vizitator2.mainUC.style.display="flex";
    } else if (idUser3 == "") {
        vizitator3.mainUserFind.style.display = "flex";
        addUser.style.display = "none";
        // vizitator3.mainUC.style.display="flex";
    }
}

vizitator1.btn.onclick = function () {
    const request = new XMLHttpRequest();

    request.onload = function () {
        let responseObject = null;
        // console.log(request.responseText);

        responseObject = JSON.parse(request.responseText);
        console.log(responseObject);


        if (responseObject) {
            prisonerCard.main.style.display = "flex";
            if (responseObject.found) {
                idUser1 = responseObject.cod;

                vizitator1.mainUC.style.display = "flex";
                vizitator1.photo.style.display = "block";
                vizitator1.photo.setAttribute('src', '/public/images/' + responseObject.photo);
                vizitator1.info.textContent = responseObject.nume + ' ' + responseObject.prenume + ' ( #' + responseObject.cod + ' )';
                addUser.style.display = "flex";

                visitDate.style.display = "block";
                visitHour.style.display = "block";
                visitScope.style.display = "block";
                visitRelation.style.display = "block";
                submitBtn.style.display = "block";
            } else {
                idUser1 = "";

                vizitator1.mainUC.style.display = "flex";
                vizitator1.photo.style.display = "none";
                vizitator1.info.textContent = "NU AM GASIT NICI UN USER PENTRU DATELE INTRODUSE!"
            }
        }
    }

    const requestData = `user=${vizitator1.numeCod.value}`;

    console.log(requestData);
    request.open('post', '/registerVisit/user');
    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    request.send(requestData);
}

vizitator2.btn.onclick = function () {
    const request = new XMLHttpRequest();

    request.onload = function () {
        let responseObject = null;
        // console.log(request.responseText);

        responseObject = JSON.parse(request.responseText);
        console.log(responseObject);


        if (responseObject) {
            prisonerCard.main.style.display = "flex";
            if (responseObject.found) {
                idUser2 = responseObject.cod;

                vizitator2.mainUC.style.display = "flex";
                vizitator2.photo.style.display = "block";
                vizitator2.photo.setAttribute('src', '/public/images/' + responseObject.photo);
                vizitator2.info.textContent = responseObject.nume + ' ' + responseObject.prenume + ' ( #' + responseObject.cod + ' )';
                addUser.style.display = "flex";
            } else {
                idUser2 = "";

                vizitator2.mainUC.style.display = "flex";
                vizitator2.photo.style.display = "none";
                vizitator2.info.textContent = "NU AM GASIT NICI UN USER PENTRU DATELE INTRODUSE!"
            }
        }
    }

    const requestData = `user=${vizitator2.numeCod.value}`;

    console.log(requestData);
    request.open('post', '/registerVisit/user');
    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    request.send(requestData);
}

vizitator3.btn.onclick = function () {
    const request = new XMLHttpRequest();

    request.onload = function () {
        let responseObject = null;
        // console.log(request.responseText);

        responseObject = JSON.parse(request.responseText);
        console.log(responseObject);


        if (responseObject) {
            prisonerCard.main.style.display = "flex";
            if (responseObject.found) {
                idUser3 = responseObject.cod;

                vizitator3.mainUC.style.display = "flex";
                vizitator3.photo.style.display = "block";
                vizitator3.photo.setAttribute('src', '/public/images/' + responseObject.photo);
                vizitator3.info.textContent = responseObject.nume + ' ' + responseObject.prenume + ' ( #' + responseObject.cod + ' )';
                addUser.style.display = "flex";
            } else {
                idUser3 = "";

                vizitator3.mainUC.style.display = "flex";
                vizitator3.photo.style.display = "none";
                vizitator3.info.textContent = "NU AM GASIT NICI UN USER PENTRU DATELE INTRODUSE!"
            }
        }
        addUser.style.display = "none";
    }

    const requestData = `user=${vizitator3.numeCod.value}`;

    console.log(requestData);
    request.open('post', '/registerVisit/user');
    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    request.send(requestData);
}

var messageBox = document.getElementById("messageBox");

submitBtn.onclick = function () {
    dataVizitei = valueDate.value;
    oraVizitei = valueHour.value;
    relatiaCuCondamnatul = valueRelation.value;
    naturaVizitei = valueScope.value;

    const request = new XMLHttpRequest();

    request.onload = () => {
        console.log(request.responseText);
        let responseObject = null;

        try {
            responseObject = JSON.parse(request.responseText);
        } catch (e) {
            console.error('could not parse JSON');
        }

        if (responseObject) {
            messageBox.style.display = "flex";

            while (messageBox.firstChild) {
                messageBox.removeChild(messageBox.firstChild);
            }

            if (responseObject.ok) {
                var label = document.createElement('label');
                label.textContent = "Programare Inregistrata cu id-ul #" + responseObject.idProgramare;
                messageBox.appendChild(label);

                while(registerForm.firstChild){
                    registerForm.removeChild(registerForm.firstChild);
                }

                var titlu = document.createElement('label');
                titlu.setAttribute('class', 'titlu');
                titlu.style.display = "block";
                titlu.textContent = "Da click pe istoric vizite pentru a vedea vizita inregistrata";
                registerForm.appendChild(titlu);
            } else {
                responseObject.messages.forEach((message) => {
                    var label = document.createElement('label');
                    label.textContent = message;
                    messageBox.appendChild(label);
                });
            }
        }

    }

    const requestData = `idDetinut=${idDetinut}
                         &idUser1=${idUser1}
                         &idUser2=${idUser2}
                         &idUser3=${idUser3}
                         &dataVizita=${dataVizitei}
                         &oraVizita=${oraVizitei}
                         &relatie=${relatiaCuCondamnatul}
                         &scop=${naturaVizitei}`;

    request.open('post', '/registerVisit/register');
    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    request.send(requestData);



    console.log(idDetinut);
    console.log(idUser1);
    console.log(idUser2);
    console.log(idUser3);
    console.log(dataVizitei);
    console.log(oraVizitei);
    console.log(relatiaCuCondamnatul);
    console.log(naturaVizitei);
}