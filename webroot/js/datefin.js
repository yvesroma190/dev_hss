
//Recup. champs de contrôle
var created = document.getElementById('created');
var periode = document.getElementById('periode');
var datefin = document.getElementById('datefin');

// Recup. des valeurs
var valprix = parseInt(prix.value) || 0;
// var valperiode = parseInt(periode.value) || 0;

periode.addEventListener('change', function () {
    // On affiche le contenu de l'élément <option> ciblé par la propriété selectedIndex
    // alert(periode.options[periode.selectedIndex].innerHTML);
    if (periode.selectedIndex === 1) {
        valtotal = valprix * 3;
        // alert(montanttotal.textContent = valtotal.toFixed(3));
         montanttotal.value = valtotal.toFixed(3);
        // alert(montanttotal);
    }
    if (periode.selectedIndex === 2) {
        valtotal = valprix * 6;
        // alert(montanttotal.textContent = valtotal.toFixed(3));
         montanttotal.value = valtotal.toFixed(3);
        // alert(montanttotal);
    }
    if (periode.selectedIndex === 3) {
        valtotal = valprix * 12;
        // alert(montanttotal.textContent = valtotal.toFixed(3));
         montanttotal.value = valtotal.toFixed(3);
        // alert(montanttotal);
    }
}, true);
