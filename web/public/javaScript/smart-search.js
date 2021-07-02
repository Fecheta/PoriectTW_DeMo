var resultArea = document.getElementById("resultArea");
var search = document.getElementById("findDet");
var button = document.getElementById("btn");
var responseObject = null;

var findSmb = document.createElement('h1');
findSmb.textContent = 'Cauta un detinut dupa nume si prenume sau dupa cod';
resultArea.appendChild(findSmb);

const request = new XMLHttpRequest();
request.onload = function(){
    try{
        responseObject = JSON.parse(this.responseText);
    }catch(e){
        console.error('could not parse JSON');
    }

    if(responseObject){
        console.log(responseObject);
    }
}

request.open("GET", "/vizitator/detinuti");
request.send();

// button.onclick = function(){
//     console.log(responseObject);
// }

search.oninput = function(){
    emptyResult();
    var ok = 0;
    var value = this.value.toLowerCase();
    if(value.length <= 0){
        var notFound = document.createElement('h1');
        notFound.textContent = "Nu am gasit nici un detinut pentru datele introduse";
        resultArea.appendChild(notFound);
        return;
    }
    if(responseObject){
        responseObject.forEach((detinut) => {
            var nume = detinut.nume.toLowerCase();
            var prenume = detinut.prenume.toLowerCase();
            var id = detinut.id_detinut.toLowerCase();

            if(nume.startsWith(value) || prenume.startsWith(value) || id.startsWith(value) || (nume + ' ' + prenume).startsWith(value)){
                ok++;
                // console.log(nume);
                // console.log(prenume);
                // console.log(id);

                createCard(detinut.poza, detinut.nume, detinut.prenume,
                           detinut.id_detinut, detinut.varsta, detinut.infractiune_comisa,
                           detinut.data_condamnarii, detinut.pedeapsa_ramasa, detinut.pedeapsa_primita);
            }
        });
        if(ok === 0){
            var notFound = document.createElement('h1');
            notFound.textContent = "Nu am gasit nici un detinut pentru datele introduse";
            resultArea.appendChild(notFound);
        }
    }
}

function createCard(poza, nume, prenume, id, varsta, infractiune, data, ramas, primit){
    // h2 = document.createElement('h2');
    // h2.textContent = nume + prenume + id;
    // resultArea.append(h2);

    var profil = document.createElement('div');
    profil.setAttribute('class', 'profil');

    var numePoza = document.createElement('div');
    numePoza.setAttribute('class', 'numePoza');
    var forImg = document.createElement('img');
    forImg.setAttribute('class', 'forImg');
    forImg.setAttribute('src', '/public/images/'+poza);
    forImg.setAttribute('alt', 'prisoner');

    var info = document.createElement('div')
    info.setAttribute('class', 'info');
    infoH4 = document.createElement('h4');
    infoH4.textContent = nume + ' ' + prenume;
    infoH5 = document.createElement('h5');
    infoH5.textContent = '( #' + id + ' )';
    info.appendChild(infoH4);
    info.appendChild(infoH5);
    numePoza.appendChild(forImg);
    numePoza.appendChild(info);

    var pData = document.createElement('div');
    pData.setAttribute('class', 'pData');

    var age = document.createElement('div');
    age.setAttribute('class', 'rawData');
    var ageP1 = document.createElement('p');
    ageP1.setAttribute('class', 'col1Data');
    ageP1.textContent = 'Varsta: ';
    var ageP2 = document.createElement('p');
    ageP2.setAttribute('class', 'col2Data');
    ageP2.textContent = varsta + ' Ani';
    age.appendChild(ageP1);
    age.appendChild(ageP2);
    pData.appendChild(age);

    var comis = document.createElement('div');
    comis.setAttribute('class', 'rawData');
    var comisP1 = document.createElement('p');
    comisP1.setAttribute('class', 'col1Data');
    comisP1.textContent = 'Fapta comisa: ';
    var comisP2 = document.createElement('p');
    comisP2.setAttribute('class', 'col2Data');
    comisP2.textContent = infractiune;
    comis.appendChild(comisP1);
    comis.appendChild(comisP2);
    pData.appendChild(comis);

    var dataComis = document.createElement('div');
    dataComis.setAttribute('class', 'rawData');
    var dataComisP1 = document.createElement('p');
    dataComisP1.setAttribute('class', 'col1Data');
    dataComisP1.textContent = 'Data Condamnarii: ';
    var dataComisP2 = document.createElement('p');
    dataComisP2.setAttribute('class', 'col2Data');
    dataComisP2.textContent = data;
    dataComis.appendChild(dataComisP1);
    dataComis.appendChild(dataComisP2);
    pData.appendChild(dataComis);

    var ramasDe = document.createElement('div');
    ramasDe.setAttribute('class', 'rawData');
    var ramasDeP1 = document.createElement('p');
    ramasDeP1.setAttribute('class', 'col1Data');
    ramasDeP1.textContent = 'Pedeapsa ramasa:';
    var ramasDeP2 = document.createElement('p');
    ramasDeP2.setAttribute('class', 'col2Data');
    ramasDeP2.textContent = ramas;
    ramasDe.appendChild(ramasDeP1);
    ramasDe.appendChild(ramasDeP2);
    pData.appendChild(ramasDe);

    var totalDe = document.createElement('div');
    totalDe.setAttribute('class', 'rawData');
    var totalDeP1 = document.createElement('p');
    totalDeP1.setAttribute('class', 'col1Data');
    totalDeP1.textContent = 'Pedeapsa totala: ';
    var totalDeP2 = document.createElement('p');
    totalDeP2.setAttribute('class', 'col2Data');
    totalDeP2.textContent = primit;
    totalDe.appendChild(totalDeP1);
    totalDe.appendChild(totalDeP2);
    pData.appendChild(totalDe);

    profil.appendChild(numePoza);
    profil.appendChild(pData);
    resultArea.appendChild(profil);
}

function emptyResult(){
    while(resultArea.firstChild){
        resultArea.removeChild(resultArea.firstChild);
    }
}


