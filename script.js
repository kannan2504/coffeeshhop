const menuopen=document.querySelector("#menu-open-button");
const menuclose=document.querySelector("#menu-close-button");
menuopen.addEventListener("click",()=>{
    document.body.classList.add("show-mobile-menu");
});
menuclose.addEventListener("click",()=>{
    document.body.classList.remove("show-mobile-menu");
});