
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

/* Script Happy Hours */
var affiche=document.getElementById("Compte");
    function Rebour() {
    var date1 = new Date();
    var date2 = new Date ("Oct 9 17:00:00 2020");
    var sec = (date2 - date1) / 1000;
    var n = 24 * 3600;
    if (sec > 0) {
    j = Math.floor (sec / n);
    h = Math.floor ((sec - (j * n)) / 3600);
    mn = Math.floor ((sec - ((j * n + h * 3600))) / 60);
    sec = Math.floor (sec - ((j * n + h * 3600 + mn * 60)));
    affiche.innerHTML = "Happy Hours dans :   " + h +" h "+ mn +" min "+ sec + " s";
    window.status = "Temps restant : " + j +" j "+ h +" h "+ mn +" min "+ sec + " s ";
    }
    tRebour=setTimeout ("Rebour();", 1000);
    }
    Rebour();