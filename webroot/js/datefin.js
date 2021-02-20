
//Recup. champs de contrôle
var created = document.getElementById('created');
var periode = document.getElementById('periode');
var datefin = document.getElementById('datefin');

// Recup. des valeurs
//var valprix = parseInt(prix.value) || 0;
//var valcreated = Date.parse(created.value);
var datef = new Date();
//var valdatefin = datefin.value;

periode.addEventListener('change', function () {
    // On affiche le contenu de l'élément <option> ciblé par la propriété selectedIndex
    // alert(periode.options[periode.selectedIndex].innerHTML);
    if (periode.selectedIndex === 1) {
		datefin.value = datef.setMonth(today.getMonth()-3);
		/* valdatefin = new Date(today.getFullYear(), getMonth()-3,0);
		datefin.value = valdatefin.setDate(Math.min(today.getDate(),valdatefin.getDate())); */
		alert(datefin.value);
		
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

