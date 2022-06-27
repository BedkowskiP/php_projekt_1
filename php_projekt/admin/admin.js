function addLek(){
    const tab = document.getElementsByClassName("lek-tab")
    const form = document.getElementsByClassName("lek-form")
    const butAdd = document.getElementsByClassName("add")
    const butTab = document.getElementsByClassName("tab")

    tab[0].classList.remove("display")
    tab[0].classList.add("hidden")
    form[0].classList.remove("hidden")
    form[0].classList.add("display")
    butAdd[0].classList.remove("display")
    butAdd[0].classList.add("hidden")
    butTab[0].classList.remove("hidden")
    butTab[0].classList.add("display")
}
function tabShow(){
    const tab = document.getElementsByClassName("lek-tab")
    const form = document.getElementsByClassName("lek-form")
    const butAdd = document.getElementsByClassName("add")
    const butTab = document.getElementsByClassName("tab")
    
    form[0].classList.remove("display")
    form[0].classList.add("hidden")
    tab[0].classList.remove("hidden")
    tab[0].classList.add("display")
    butTab[0].classList.remove("display")
    butTab[0].classList.add("hidden")
    butAdd[0].classList.remove("hidden")
    butAdd[0].classList.add("display")
}