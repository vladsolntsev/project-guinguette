const demandeInformations = document.getElementById('demandeInformations');
demandeInformations.addEventListener('click', function () {
    demandeInformations.style.backgroundColor = '#C5404D';
    demandeInformations.style.color = 'beige';
    demandeInformations.style.width = '70%';
    reservations.style.background = 'lightgrey';
    reservations.style.color = '#C5404D';
    reservations.style.width = '45%';
    }
);
const reservations = document.getElementById('reservations');
reservations.addEventListener('click', function() {
    reservations.style.backgroundColor = '#C5404D';
    reservations.style.color = 'beige';
    reservations.style.width = '70%';
    demandeInformations.style.backgroundColor = 'lightgrey';
    demandeInformations.style.color = '#C5404D';
    demandeInformations.style.width = '45%';

    }
);

const shakeShake = document.getElementById('shake');
shakeShake.onmouseover = shakeMe;


    function shakeMe() {
const mainButton = document.getElementById("shake");
const firstname = document.getElementById("prenom");
const lastname = document.getElementById("nom");
const telephone = document.getElementById("telephone");
const email = document.getElementById("e-mail");
const message = document.getElementById("message");
if (
    !telephone.checkValidity() ||
    !firstname.checkValidity() ||
    !lastname.checkValidity()  ||
    !telephone.checkValidity() ||
    !email.checkValidity()     ||
    !message.checkValidity()
        ) {
            mainButton.style.animation = 'shake 0.5s';
            mainButton.style.animationIterationCount = '2';
            /*              mainButton.style.backgroundColor = '#621e24';*/

        };
    };

/*    const mainButton = document.getElementById("shake");
    const firstname = document.getElementById("prenom");
    const lastname = document.getElementById("nom");
    const telephone = document.getElementById("telephone");
    const email = document.getElementById("e-mail");
    const message = document.getElementById("message");
    mainButton.addEventListener('mouseover', function () {
            if (
                !telephone.checkValidity() ||
                !firstname.checkValidity() ||
                !lastname.checkValidity()  ||
                !telephone.checkValidity() ||
                !email.checkValidity()     ||
                !message.checkValidity()
            ) {
                mainButton.style.animation = 'shake 0.5s';
                mainButton.style.animationIterationCount = '2';
                mainButton.style.backgroundColor = '#621e24';

            };
        }
    );
*/