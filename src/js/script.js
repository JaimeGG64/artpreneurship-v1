var getNavbarToggleButton = document.querySelector(".global-nav__btn");
getNavbarToggleButton.addEventListener("click", () => { 
    let getNavLinks = document.querySelector(".global-nav__links");
    getNavLinks.classList.toggle("global-nav__links--active");

    let getToggleButton = document.querySelector(".global-nav__btn");
    if ( getToggleButton.getAttribute( 'aria-expanded' ) === 'true' ) {
        getToggleButton.setAttribute( 'aria-expanded', 'false' );
    } else {
        getToggleButton.setAttribute( 'aria-expanded', 'true' );
    }
}, false);