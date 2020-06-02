var toggle = document.querySelector('.global-nav__btn');
var menu = document.querySelector('.global-nav__links');

toggle.addEventListener('click', function(){
  if (menu.classList.contains('global-nav__links--active')) {
    menu.classList.remove('global-nav__links--active');
  } else {
    menu.classList.add('global-nav__links--active'); 
  }
});