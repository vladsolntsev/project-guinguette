const demandeInformations = document.getElementById('demandeInformations');
demandeInformations.addEventListener('click', function () {
    demandeInformations.style.backgroundColor = 'blue';
    reservations.style.background = 'lightgrey';
    }
);
const reservations = document.getElementById('reservations');
reservations.addEventListener('click', function() {
    reservations.style.background = 'blue';
    demandeInformations.style.backgroundColor = 'lightgrey';

    }
);
