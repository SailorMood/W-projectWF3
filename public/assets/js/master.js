$(function(){

  var container = $('#wrap');
  var formSign = $('#formSignup');
  var formLog = $('#formLogin');
  var formMsg = $('#formAvis');
  var formContact = $('#formContact');
  var formItinerary = $('#formItinerary');

// cacher le background et les formulaires --------------
  container.hide();
  formSign.hide();
  formLog.hide();
  formMsg.hide();
  formContact.hide();
  formItinerary.hide();

  // TRANSITION du formulaire d'inscription-----------------------
  $("#signup").click(function (){
    container.show();
    formSign.show();
    formLog.hide();
    formMsg.hide();
    formContact.hide();
    formItinerary.hide();
  });

  // TRANSITION du formulaire de connexion -----------------------
  $("#login").click(function (){
    container.show();
    formLog.show();
    formSign.hide();
    formMsg.hide();
    formContact.hide();
    formItinerary.hide();
  });

  // TRANSITION du formulaire d'avis
  $("#avis").click(function (){
    container.show();
    formLog.hide();
    formSign.hide();
    formMsg.show();
    formContact.hide();
    formItinerary.hide();
  });

  // TRANSITION du formulaire de contact
  $("#contact").click(function (){
    container.show();
    formLog.hide();
    formSign.hide();
    formMsg.hide();
    formContact.show();
    formItinerary.hide();
  });

  // TRANSITION du formulaire de trajet
  $("#itinerary").click(function (){
    container.show();
    formLog.hide();
    formSign.hide();
    formMsg.hide();
    formContact.hide();
    formItinerary.show();
  });

  // annulation de la TRANSITION ---------------------------
  container.click(function(){
    container.hide();
    formSign.hide();
    formLog.hide();
    formMsg.hide();
    formContact.hide();
    formItinerary.hide();
  });

  // Faire défiler des images en background -----------------

    var images = [
        "images/taxi1.jpg",
        "images/taxi4.jpg",
        "images/taxi5.jpg"
    ];
    var $body = $("body"),
        $bg = $(".back"),
        n = images.length,
        c = 0; // Loop Counter

  // Preload Array of images...
    for(var i=0; i<n; i++){
        var tImg = new Image();
        tImg.src = images[i];
    }

    $body.css({backgroundImage : "url("+images[c]+")"});

    (function loopBg(){
        $bg.hide().css({backgroundImage : "url("+images[++c%n]+")"}).delay(3000).fadeTo(2000, 1, function(){
            $body.css({backgroundImage : "url("+images[c%n]+")"});
            loopBg();
        });
    }());
});
