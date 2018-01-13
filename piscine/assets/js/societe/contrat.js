 

document.addEventListener('DOMContentLoaded', function () {
   var nbJ = document.getElementById("nbJ");
    var tarifJ = document.getElementById("tarifJ");
    nbJ.addEventListener('keydown', time);
    tarifJ.addEventListener('keydown', time);
    
    
    
});


function time() {
    
   
    setTimeout(calcul, 0);
    
} 

function calcul() {
    document.getElementById("tarifT").setAttribute("value", tarifJ.value * nbJ.value);
}
   

