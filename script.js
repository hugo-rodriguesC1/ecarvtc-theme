 /* Sélection des éléments HTML */
 let icon = document.getElementById('icon')
 let burger = document.getElementById('burger')


 /* gestionnaire d'événement sur le a#link pour venir changer l'attribution de la classe .open à la ul et au span#burger */
 icon.addEventListener('click', function(e) {
   e.preventDefault()
   burger.classList.toggle('open')

 })


function toggleMenu() {
    var x = document.getElementById("menu-mobile");
    if (x.style.display === "none") {
      x.style.display = "flex";
    } else {
      x.style.display = "none";
    }
  }