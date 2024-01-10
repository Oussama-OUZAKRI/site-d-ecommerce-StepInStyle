function afficherPopup(){
    document.getElementById("popUpBackground").style.display = 'flex'
}
function masquerPopup(){
    document.getElementById("popUpBackground").style.display = 'none'
}
function initAddEventListnerPopup(){
    document.getElementById("User").addEventListener("click",()=>{
        afficherPopup()
    })
    document.getElementById("popUpBackground").addEventListener("click",(event)=>{
        if (event.target === document.getElementById("popUpBackground")) {
            masquerPopup()
        }
    })
}
initAddEventListnerPopup()