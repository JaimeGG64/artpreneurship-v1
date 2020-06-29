var getNavbarToggleButton = document.querySelector(".global-nav__btn");
getNavbarToggleButton.addEventListener("click", () => { 
    let getNavLinks = document.querySelector(".global-nav__links");
    getNavLinks.classList.toggle("global-nav__links--active");
    if ( button.getAttribute( 'aria-expanded' ) === 'true' ) {
        button.setAttribute( 'aria-expanded', 'false' );
    } else {
        button.setAttribute( 'aria-expanded', 'true' );
    }
}, false);