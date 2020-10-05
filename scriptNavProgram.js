
/*  JS Navigation */
const burger = document.getElementById('burger');
const menuBurger = document.getElementById('menu-burger')
burger.addEventListener('click', event => {
    menuBurger.classList.toggle('display-block')
})
/* End JS Navigation */


/*JS Programmation Section */

const buttons = document.getElementsByClassName('eventClick');

for (let i = 0; i < buttons.length; i++) {
  buttons[i].addEventListener('click', function (event) {
    let dataId = event.target.getAttribute('data-id');
    let description = document.getElementById('event' + dataId + 'description');
    description.classList.toggle('eventDescription');
  })
}
/* End JS Programmation Section */