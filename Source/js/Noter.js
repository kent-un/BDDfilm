/* ci je clic sur une etoile; alors celle-ci reste colorer */
/* o clic d'une etoile, si une ou plusieurs etoile la précede; alors celle-ci ce color egalement */
/* ci je clic de nouveau sur une etoile, alor annule la coloration des etoiles */


var Etoil1 = document.getElementById("etoile1");
var Etoil2 = document.getElementById("etoile2");
var Etoil3 = document.getElementById("etoile3");
var Etoil4 = document.getElementById("etoile4");
var Etoil5 = document.getElementById("etoile5");
var inputStars= document.getElementById("stars");

Etoil1.addEventListener("click", function() {/* au click de l'etoile1, */
    Etoil1.style.backgroundImage="url('img/starJaune.svg')";/* affiche etoile colorer */
    Etoil1.style.backgroundRepeat="no-repeat";/* ne repete pas l'image */
    inputStars.value="1";
});

Etoil2.addEventListener("click", function() {/* au click de l'Etoile2, */
    Etoil1.style.backgroundImage="url('img/starJaune.svg')";/* affiche etoile1 colorer */
    Etoil1.style.backgroundRepeat="no-repeat";
    Etoil2.style.backgroundImage="url('img/starJaune.svg')";/* affiche etoile2 colorer */
    Etoil2.style.backgroundRepeat="no-repeat"; 
    inputStars.value="2";   
});

Etoil3.addEventListener("click", function() {/* au click de l'Etoile3, */
    Etoil1.style.backgroundImage="url('img/starJaune.svg')";/* affiche etoile1 colorer */
    Etoil1.style.backgroundRepeat="no-repeat";
    Etoil2.style.backgroundImage="url('img/starJaune.svg')";/* affiche etoile2 colorer */
    Etoil2.style.backgroundRepeat="no-repeat"; 
    Etoil3.style.backgroundImage="url('img/starJaune.svg')";/* affiche etoile3 colorer */
    Etoil3.style.backgroundRepeat="no-repeat";
    inputStars.value="3"; 
});

Etoil4.addEventListener("click", function() {/* au click de l'Etoile4, */
    Etoil1.style.backgroundImage="url('img/starJaune.svg')";/* affiche etoile1 colorer */
    Etoil1.style.backgroundRepeat="no-repeat";
    Etoil2.style.backgroundImage="url('img/starJaune.svg')";/* affiche etoile2 colorer */
    Etoil2.style.backgroundRepeat="no-repeat"; 
    Etoil3.style.backgroundImage="url('img/starJaune.svg')";/* affiche etoile3 colorer */
    Etoil3.style.backgroundRepeat="no-repeat"; 
    Etoil4.style.backgroundImage="url('img/starJaune.svg')";/* affiche etoile4 colorer */
    Etoil4.style.backgroundRepeat="no-repeat";
    inputStars.value="4";
});

Etoil5.addEventListener("click", function() {/* au click de l'Etoile5, */
    Etoil1.style.backgroundImage="url('img/starJaune.svg')";/* affiche etoile1 colorer */
    Etoil1.style.backgroundRepeat="no-repeat";
    Etoil2.style.backgroundImage="url('img/starJaune.svg')";/* affiche etoile2 colorer */
    Etoil2.style.backgroundRepeat="no-repeat"; 
    Etoil3.style.backgroundImage="url('img/starJaune.svg')";/* affiche etoile3 colorer */
    Etoil3.style.backgroundRepeat="no-repeat"; 
    Etoil4.style.backgroundImage="url('img/starJaune.svg')";/* affiche etoile4 colorer */
    Etoil4.style.backgroundRepeat="no-repeat";
    Etoil5.style.backgroundImage="url('img/starJaune.svg')";/* affiche etoile5 colorer */
    Etoil5.style.backgroundRepeat="no-repeat";
    inputStars.value="5";
    
});
/* fonction = o clic d'une etoile, l'etoile 
en question ce color, ainsi que toute celle qui
la précède */
function afficheMoyene(AM) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log('oki');
            document.getElementById("recupNoteMoyene").innerHTML = this.responseText;
        }
    };
    
    xhttp.open('GET', "php/updateNoter.php?idFilm="+AM, true);
    xhttp.send();

}

/*--------------- rechargement de ma page ---------------*/



/*    for(i = 0; i < StaticRange.length; i++){
    start[i] = 
}    */

