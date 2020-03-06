$(window).load(function () {
    /** Adapte la taille de la police en fonction de la taille de l'écran **/
    $(".fittext").fitText(2.5, {minFontSize: '10px', maxFontSize: '20px'});


});

$(document).ready(function(){
    $("#service").on('click', function(event) {

        if (this.hash !== "") {
            event.preventDefault();

            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 600, function(){

                window.location.hash = hash;
            });
        }
    });
});

$(document).ready(function(){
    $("#contact").on('click', function(event) {

        if (this.hash !== "") {
            event.preventDefault();

            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 600, function(){

                window.location.hash = hash;
            });
        }
    });
});

function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

function afficher(){
    var saisie =document.getElementById("titre_cv").value;
    var res = document.getElementById("titre_cv1");
    res.innerHTML = saisie;
}

function afficher2(){
    var take =document.getElementById("competences").value;
    var ress = document.getElementById("competences_1");
    ress.innerHTML = take;
}


