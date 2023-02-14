window.onload = function() {


    // $(document).ready(function() {



        
    //     // Modal Gallerie
    //     let modalImageGallerie = document.getElementById('myModal');
    //     let modalImg = document.getElementById("modalImage");
    //     let captionText = document.getElementById("caption");

    //     let arrowNext = document.getElementById("arrowNext");
    //     let arrowPrevious = document.getElementById("arrowPrevious");

    //     let articles = $(".images"); 


    //     // Plutot mettre un toggle pour que ce soit répétable et voir pour hover "zoom-out" (important car usage unique)
    //     modalImg.onclick = function() {
    //       modalImg.style.maxWidth = "1200px";
    //       modalImg.onclick = function() {
    //         modalImg.style.maxWidth = "900px";
    //       }
    //     }


    //     articles.click(function() {

    //       var intTemp = parseInt(this.getAttribute('alt'));

    //       modalImg.src = "img/galerie/" + this.getAttribute('alt') + ".jpg";

    //       modalImageGallerie.style.display = "block";
    //       arrowNext.style.display = "block";
    //       arrowPrevious.style.display = "block";

    //       captionText.innerHTML = this.getAttribute('def');

    //       if (intTemp == 1) {
    //         arrowPrevious.style.opacity = 0.1;
    //         arrowPrevious.style.cursor = "default";
    //       }

    //       arrowNext.onclick = function() {
    //         intTemp++;
    //         modalImg.src = "img/galerie/" + (intTemp) + ".jpg";
    //         arrowPrevious.style.opacity = 1;
    //         arrowPrevious.style.cursor = "pointer";

    //       }

    //       arrowPrevious.onclick = function() {
    //         if (intTemp > 1) {
    //           intTemp--;
    //           modalImg.src = "img/galerie/" + (intTemp) + ".jpg";
    //           arrowPrevious.style.opacity = 1;

    //           if (intTemp == 1) {
    //             arrowPrevious.style.opacity = 0.1;
    //             arrowPrevious.style.cursor = "default";
    //           }
    //         }
    //         else {
    //           arrowPrevious.style.opacity = 0.1;
    //           arrowPrevious.style.cursor = "default";
    //         }
    //       }

    //     })    
        


    //     var span = document.getElementsByClassName("close")[0];

    //     span.onclick = function() {
    //       modalImageGallerie.style.display = "none";
    //       arrowNext.style.display = "none";
    //       arrowPrevious.style.display = "none";
    //     }


    //     window.onclick = function(event) {
    //       if (event.target == modalImageGallerie) {
    //         modalImageGallerie.style.display = "none";
    //         arrowNext.style.display = "none";
    //         arrowPrevious.style.display = "none";
    //       }
    //     }

    //     //***  Fin modals Galerie


    // })














    // document.getElementById("alertDisclaimer1").addEventListener("click", function() {
    //     alert("J'ai fais l'erreur d'utiliser la propriété zoom sur le <body> au tout début du projet car je le trouvais globalement trop zoomé, et n'y ai plus porté attention par la suite. Il s'est ensuite avéré que cette propriété n'est pas reconnue sur Firefox, et il n'y a pas d'alternative qui fonctionne. Il faudra réduire toutes les mesures manuellement.");
    // })

    // document.getElementById("alertDisclaimer2").addEventListener("click", function() {
    //     alert("Les cookies de session de l'<iframe> (aperçu du site depuis le portfolio), ne sont pas partagés pour l'instant.");
    // })




























    // Code included inside $( window ).on( "load", function() { ... }) will run once the entire page (images or iframes), not just the DOM (" window.onload = function({}) "), is ready.
  //   $( window ).on( "load", function() {

  //   // ***PROJET FUN: DARK MODE sur le contenu de l'iframe
  //   // -> Select les elements dans le iframe (balckjackjo.com) pour adapter le style à la charte graphique du portfolio, avec le boutonPhone onclick qui switch avec les vrais couleurs du site)
  //   // Normalement pas possible pour question de sécurité (MAIS Workaround si on est proprio des 2 sites! avec un systeme d'envoi de messages j'ai pas compris: https://stackoverflow.com/questions/25098021/securityerror-blocked-a-frame-with-origin-from-accessing-a-cross-origin-frame)
  //   // var iframe = document.getElementById("iframeElement");
  //   // // var elmnt = iframe.contentWindow.document.getElementsByTagName("H1")[0];
  //   // var elmnt = iframe.contentWindow.document.getElementById("header");
  //   // elmnt.style.background = "red !important";

  //   // const frame = document.getElementById('your-frame-id');
  //   // frame.contentWindow.postMessage(/*any variable or object here*/, 'http://your-second-site.com');


  //   // Solution: postMessage() 

  //     // var iframeWin = document.getElementById("iframeElement").contentWindow,
  //     //     form = document.getElementById("the-form"),
  //     //     myMessage = document.getElementById("my-message");

  //     // myMessage.select(); 

  //     // form.onsubmit = function () {
  //     //     iframeWin.postMessage(myMessage.value, "http://portfolio.basilek.ovh");
  //     //     return false;
  //     // };





  //   // Autre méthode plus simple: https://stackoverflow.com/questions/27269406/change-style-of-an-element-inside-iframe-cross-domain-i-own-the-second-domain
    
  //   iFrame = document.getElementById("iframeElement")

  //   iFrame.onload = function(){
  //     //Send a message immediately after iframe is loaded
  //     // iFrame.contentWindow.postMessage('changeStyle', 'http://www.portfolio.basilek.ovh'); 
  //     iFrame.contentWindow.postMessage('changeStyle', '*'); 

  //   }

  // })

































}