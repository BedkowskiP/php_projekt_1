function hideAll(){
    const body = document.getElementsByTagName("article")
    const nav = document.getElementsByClassName("nav")
    for(var i = 0; i< body.length; i++){
        body[i].classList.add("hidden")
        body[i].classList.remove("display")
        nav[i].classList.add("no-active")
        nav[i].classList.remove("active")
    }
}

function podShow(){
    hideAll()
    const item = document.getElementsByClassName("main-pod")
    item[1].classList.remove("hidden")
    item[1].classList.add("display")
    item[0].classList.remove("no-active")
    item[0].classList.add("active")
}

function lekShow(){
    hideAll()
    const item = document.getElementsByClassName("main-lek")
    item[1].classList.remove("hidden")
    item[1].classList.add("display")
    item[0].classList.remove("no-active")
    item[0].classList.add("active")
}

function pacShow(){
    hideAll()
    const item = document.getElementsByClassName("main-pac")
    item[1].classList.remove("hidden")
    item[1].classList.add("display")
    item[0].classList.remove("no-active")
    item[0].classList.add("active")
}

function wizShow(){
    hideAll()
    const item = document.getElementsByClassName("main-wiz")
    item[1].classList.remove("hidden")
    item[1].classList.add("display")
    item[0].classList.remove("no-active")
    item[0].classList.add("active")
}

function regShow(){
    hideAll()
    const item = document.getElementsByClassName("main-reg")
    item[1].classList.remove("hidden")
    item[1].classList.add("display")
    item[0].classList.remove("no-active")
    item[0].classList.add("active")
}

function infShow(){
    hideAll()
    const item = document.getElementsByClassName("main-info")
    item[1].classList.remove("hidden")
    item[1].classList.add("display")
    item[0].classList.remove("no-active")
    item[0].classList.add("active")
}

function firShow(){
    hideAll()
    const item = document.getElementsByClassName("main-firma")
    item[1].classList.remove("hidden")
    item[1].classList.add("display")
    item[0].classList.remove("no-active")
    item[0].classList.add("active")
}

function uslShow(){
    hideAll()
    const item = document.getElementsByClassName("main-uslugi")
    item[1].classList.remove("hidden")
    item[1].classList.add("display")
    item[0].classList.remove("no-active")
    item[0].classList.add("active")
}
function allWizShow(){
    hideAll()
    const item = document.getElementsByClassName("main-wiz")
    item[1].classList.remove("hidden")
    item[1].classList.add("display")
    item[0].classList.remove("no-active")
    item[0].classList.add("active")
}
function newWizShow(){
    hideAll()
    const item = document.getElementsByClassName("main-umow")
    item[1].classList.remove("hidden")
    item[1].classList.add("display")
    item[0].classList.remove("no-active")
    item[0].classList.add("active")
}