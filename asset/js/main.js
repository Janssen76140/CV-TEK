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

function ajouter() {
    $('.ajouter1').css('display', 'block')
}

function enlever() {
    $('.ajouter1').css('display', 'none')
}

function ajouter1() {
    $('.ajouter2').css('display', 'block')
}

function enlever1() {
    $('.ajouter2').css('display', 'none')
}

