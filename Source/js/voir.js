
$('.card').mouseenter(function (e) {
        $('#'+e.currentTarget.id).css("box-shadow", "0px 0px 10px black");
        $('#overlay-'+e.currentTarget.id).css("display", "block");
        $('#img-'+e.currentTarget.id).css("opacity", "0.20");
});

$('.card').mouseleave(function (e) {
    $('#'+e.currentTarget.id).css("box-shadow", "none");
    $('#overlay-'+e.currentTarget.id).css("display", "none");
    $('#img-'+e.currentTarget.id).css("opacity", "1");
});

function loadInfo(x) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("ModalCenterTitle").innerHTML = this.response;
    }
    };
    xhttp.open("GET", "titreFilm.php?nbFilm="+x , true);
    xhttp.send(); 

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("modalBody").innerHTML = this.response;
    }
    };
    xhttp.open("GET", "infoFilm.php?nbFilm="+x , true);
    xhttp.send(); 
}