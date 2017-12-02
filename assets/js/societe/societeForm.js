var tab = document.getElementsByName("ens");

document.addEventListener('DOMContentLoaded', function () {
    var idem = document.getElementById("idem");
    var enseigne = document.getElementById("idEnseigne");
    idem.addEventListener('click', facturation);
    
    document.addEventListener("keydown",facturation);
    var select = document.getElementById("idEnseigne");
    //select.addEventListener('click', enseigneF);
    select.onclick = function() {
        enseigneF();
    };
});
   
function enseigneF() {
    var idem = document.getElementById("idem");
    if (idem.checked){
        document.getElementById("idEnseigneF").value = document.getElementById("idEnseigne").value;
    }
}
    
function facturation() {
    
    if (idem.checked){
    setTimeout(facture, 0);
    }
}


function facture() {
    document.getElementById("nomF").setAttribute("value", document.getElementById("nom").value);
    document.getElementById("responsableF").setAttribute("value", document.getElementById("responsable").value);
    document.getElementById("mailF").setAttribute("value", document.getElementById("mail").value);
    enseigneF();
    document.getElementById("siretF").setAttribute("value", document.getElementById("siret").value);
    document.getElementById("adresseF").setAttribute("value", document.getElementById("adresse").value);
    document.getElementById("telF").setAttribute("value", document.getElementById("tel").value);
    document.getElementById("faxF").setAttribute("value", document.getElementById("fax").value);
    //for(var i = 0; i < count(tab); i++){
    //    if(tab[i].selected){
    //        
    //    }
    //}
    
    
    }