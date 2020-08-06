
//Recup. champs de contrôle
var prix = document.getElementById('prix');
var periode = document.getElementById('periode');
var montanttotal = document.getElementById('montanttotal');
montanttotal.disabled = true;

// Recup. des valeurs
var valprix = parseFloat(prix.value) || 0;
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

// valtotal = valprix*valperiode;

//Affectation des valeurs
// prix.textContent = valprix.toFixed(2);
// montanttotal.textContent = valtotal.toFixed(3);
