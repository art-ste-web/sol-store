//toggle mob menu
const mobMenuBtn = document.querySelector(".mob-menu-btn");
const closeMenuBtn = document.querySelector(".close-mob-menu-btn");
const mobMenuContainer = document.querySelector(".nav-mobile");


if(mobMenuBtn) {
    mobMenuBtn.addEventListener("click", ()=> {
        mobMenuContainer.style.display = "block";
        mobMenuBtn.style.display = "none";
        closeMenuBtn.style.display = "flex";
         console.log("show menu");
    })
}

if(closeMenuBtn) {
    closeMenuBtn.addEventListener("click", ()=>{
        mobMenuContainer.style.display = "none";
        mobMenuBtn.style.display = "flex";
        closeMenuBtn.style.display = "none";
        console.log("hide menu");
    })
}