const form = {
    username: document.getElementById("username"),
    password: document.getElementById("password"),
    submit: document.getElementById("btn"),
    messages: document.getElementById("form-message")
};

const formular = document.getElementById("myForm");
function handleForm(event){event.preventDefault();}
formular.addEventListener('submit', handleForm);

console.log(form);

form.submit.addEventListener('click', () => {
    const request = new XMLHttpRequest();

    request.onload = () => {
        // console.log(request.responseText);
        let responseObject = null;

        try{
            responseObject = JSON.parse(request.responseText);
        }catch(e){
            console.error('could not parse JSON');
        }

        if(responseObject){
            handleResopnse(responseObject);
        }

    }

    const requestData = `username=${form.username.value}&password=${form.password.value}`;

    console.log(requestData);
    request.open('post', '/auth/loginAdmin');
    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    request.send(requestData);
});

function handleResopnse(responseObject){
    // console.log(responseObject);
    if(responseObject.ok){
        location.href = '/admin/index';
    } else {
        while(form.messages.firstChild){
            form.messages.removeChild(form.messages.firstChild);
        }

        responseObject.messages.forEach((message) => {
            const li = document.createElement('li');

            li.textContent = message;
            form.messages.appendChild(li);
        });

        form.messages.style.display = 'flex';
    }
}