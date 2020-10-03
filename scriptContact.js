const demandeInformations = document.getElementById('demandeInformations');
demandeInformations.addEventListener('click', function () {
    demandeInformations.style.backgroundColor = '#C5404D';
    demandeInformations.style.color = 'beige';
    demandeInformations.style.width = '90%';
    reservations.style.background = 'lightgrey';
    reservations.style.color = '#C5404D';
    reservations.style.width = '75%';
    }
);
const reservations = document.getElementById('reservations');
reservations.addEventListener('click', function() {
    reservations.style.backgroundColor = '#C5404D';
    reservations.style.color = 'beige';
    reservations.style.width = '90%';
    demandeInformations.style.backgroundColor = 'lightgrey';
    demandeInformations.style.color = '#C5404D';
    demandeInformations.style.width = '75%';

    }
);
