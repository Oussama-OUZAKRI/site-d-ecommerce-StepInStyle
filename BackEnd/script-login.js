let signUp = document.querySelector(".sign_up_page");
let signIn = document.querySelector(".sign_in_page");
let btnSignUp = document.getElementById("btnSignUp");
let btnSignIn = document.getElementById("btnSignIn");

btnSignIn.addEventListener("click",(evt)=>{
    signIn.classList.add("display");
    signUp.classList.remove("display");
});

btnSignUp.addEventListener("click",(evt)=>{
    signUp.classList.add("display");
    signIn.classList.remove("display");
});