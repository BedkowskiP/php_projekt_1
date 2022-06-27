function closeErr(){
    const errorBox = document.getElementById("error");
    errorBox.classList.add('hidden')
    errorBox.classList.remove('display')
    console.log("closed")
}

function validateLogin(){
    const error = "Nieprawidłowy format email!"
    const errorBox = document.getElementById("error");
    const form = document.loginForm
    const email = form.login.value
    const regex = /^[a-zA-Z0-9.!#$%&'*+\=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-][a-zA-Z0-9-]+)+/;


    if(email.match(regex)) return true;
    else{
        console.log("show")
        errorBox.classList.add('display')
        errorBox.classList.remove('hidden')
        errorBox.innerHTML = "<button onclick='closeErr()'>Zamknij</button>" + "<p>" + error + "</p>"
        return false;
    }

}

function validateRegister(){
    const error = [
        "<p>Nieprawidłowy format imienia!</p>",//0
        "<p>Nieprawidłowy format nazwiska!</p>",//1
        "<p>Nieprawidłowy format pesel!</p>",//2
        "<p>Nieprawidłowy format adresu zamieszkania!</p>",//3
        "<p>Nieprawidłowy format nazwy miasta!</p>",//4
        "<p>Nieprawidłowy format email!</p>",//5
        "<p>Hasło powinno zawierać przynajmniej jedną duża litere i cyfrę!</p>",//6
        "<p>Hasło nie może być krótsze niż 8 znaków!</p>",//7
        "<p>Podane hasła nie są takie same!</p>",//8
        "<p>Nieprawidłowa data urodzenia</p>"//9
    ]
    const regex = [
        /^[A-Z][a-z]+/,//0
        /^[0-9]{11}/,//1
        /^[a-zA-Z0-9\s,.'-]{3,}$/,//2
        /^[a-zA-Z0-9.!#$%&'*+\=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-][a-zA-Z0-9-]+)+/, //3
        /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])/ //4
    ]
    var er = 0
    const errorBox = document.getElementById("error");
    errorBox.innerHTML = "<button onclick='closeErr()'>Zamknij</button>"
    const form = document.regForm

    if(!form.imie.value.match(regex[0])){
        errorBox.innerHTML += error[0]
        er = 1
    }
    if(!form.nazwisko.value.match(regex[0])){
        errorBox.innerHTML += error[1]
        er = 1
    }
    if(!form.pesel.value.match(regex[1])){
        errorBox.innerHTML += error[2]
        er = 1
    }
    if(!form.adres_zam.value.match(regex[2])){
        errorBox.innerHTML += error[3]
        er = 1
    }
    if(!form.miasto.value.match(regex[0])){
        errorBox.innerHTML += error[4]
        er = 1
    }
    if(!form.email.value.match(regex[3])){
        errorBox.innerHTML += error[5]
        er = 1
    }
    if(!form.psswd.value.match(regex[4])){
        errorBox.innerHTML += error[6]
        er = 1
    }
    if(!form.psswd.value.length > 8){
        errorBox.innerHTML += error[7]
        er = 1
    }
    if(form.passwd != form.passwd2){
        errorBox.innerHTML += error[8]
        er = 1
    }
    var date = new Date();
    if(form.data_uro.value > date.getDate - 1){
        errorBox.innerHTML += error[9]
        er = 1
    }

    if(er > 0){
        console.log("show")
        errorBox.classList.add('display')
        errorBox.classList.remove('hidden')
        return false
    } else return true
}