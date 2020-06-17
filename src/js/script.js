var getNavbarToggleButton = document.querySelector(".global-nav__btn");
getNavbarToggleButton.addEventListener("click", () => { 
    let getNavLinks = document.querySelector(".global-nav__links");
    getNavLinks.classList.toggle("global-nav__links--active");
}, false);