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

function afficher(){
    var saisie =document.getElementById("titre_cv").value;
    var res = document.getElementById("titre_cv1");
    res.innerHTML = saisie;
}

function plus(){
    var saisie =document.getElementById("test").value;
    var res = document.getElementById("plus");
    res.innerHTML = saisie;
}

