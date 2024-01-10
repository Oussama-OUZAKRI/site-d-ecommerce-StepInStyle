
document.addEventListener("DOMContentLoaded", function() {
    // Sélectionnez tous les liens internes
    var links = document.querySelectorAll('a[href^="#"]');

    // Ajoutez un gestionnaire d'événements à chaque lien
    links.forEach(function(link) {
        link.addEventListener('click', function(e) {
            e.preventDefault(); // Empêche le comportement de lien par défaut

            var targetId = this.getAttribute('href').substring(1); // Récupère l'ID de la cible

            // Trouve l'élément cible
            var targetElement = document.getElementById(targetId);

            if (targetElement) {
                // Utilise smooth scrolling pour le défilement
                window.scrollTo({
                    top: targetElement.offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
});
