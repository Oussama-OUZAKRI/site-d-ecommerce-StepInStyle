let previousPage = document.getElementById("previous");
let page1 = document.getElementById("page1");
let page2 = document.getElementById("page2");
let page3 = document.getElementById("page3");
let nextPage = document.getElementById("next");
let pageList = document.getElementsByClassName("products");
page1.addEventListener("click",(event)=>{
    pageList[0].classList.add("display");
    page1.classList.add("currentPage");
    pageList[1].classList.remove("display");
    pageList[2].classList.remove("display");
});
page2.addEventListener("click",(event)=>{
    pageList[1].classList.add("display");
    pageList[0].classList.remove("display");
    pageList[2].classList.remove("display");
});
page3.addEventListener("click",(event)=>{
    pageList[2].classList.add("display");
    pageList[1].classList.remove("display");
    pageList[0].classList.remove("display");
});
previousPage.addEventListener("click",(event)=>{
    let i=0;
    for (i; i<pageList.length; i++) {
        if (pageList[i].classList.contains("display")) {
            break;
        }
    }
    if (!pageList[0].classList.contains("display")) {
        pageList[i].classList.remove("display");
        pageList[i-1].classList.add("display");
    }
});
nextPage.addEventListener("click",(event)=>{
    let i=0;
    for (i; i<pageList.length; i++) {
        if (pageList[i].classList.contains("display")) {
            break;
        }
    }
    if (!pageList[2].classList.contains("display")) {
        pageList[i].classList.remove("display");
        pageList[i+1].classList.add("display");
    }
});