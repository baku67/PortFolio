
window.onload = function() {




    $(document).ready(function() {





        // ***  MODALS GALERIE (Accueil)
        var modalImageGallerie = document.getElementById("myModal");
        var modalImg = document.getElementById("modalImage");

        // var img = document.getElementById("myImg");

        //WIP
        let images = document.getElementsByClassName("images");
        console.log("images[] = " + JSON.stringify(images));
        console.log("images.length: " + images.length);
        

        for (var i = 0; i < images.length; i++) {

            console.log("image[i]: " + JSON.stringify(images[i]));
          
            images[i].addEventListener("click", function() {

              modalImageGallerie.style.display = "block";
              modalImg.src = "img/galerie/" + (i+1).toString() + ".JPG";

              // renvoie bien "img/galerie/5.JPG"
              console.log("img/galerie/" + (i+1).toString() + ".JPG");

            })

            // images[i].onclick = function() {

            //   modalImageGallerie.style.display = "block";
            //   modalImg.src = "img/galerie/" + (i+1).toString() + ".JPG";

            //   // renvoie bien "img/galerie/5.JPG"
            //   console.log("img/galerie/" + (i+1).toString() + ".JPG");

            // }

        }


        



        var captionText = document.getElementById("caption");

        // images.onclick = function() {
        //   console.log("testClick sur element de larray");

        //   modalImageGallerie.style.display = "block";
        //   // Fonctionne et permet de choper le src pour chauqye élément (mais je voulais que le modal affiche la version HD)
        //   // modalImg.src = this.getElementsByClassName('imageGalerie')[0].src;

        //   // for (var i = 1; i < images.length; i++) {
        //   //   modalImg.src = "img/galerie/" + i.toString() + ".JPG";
        //   // }
        //   // modalImg.src = "img/galerie/1.JPG";

        //   captionText.innerHTML = document.getElementsByClassName('imageGalerie')[0].alt;
        //   // Fix pour le clickWindow
        //   captionText.style.height = 'auto';
        // }

        // Pour chaque element de la liste (boucle for), ajouter levenement avec var interpolation

        var span = document.getElementsByClassName("close")[0];

        span.onclick = function() {
          modalImageGallerie.style.display = "none";
        }

        // click fenetre = close modal        
        window.onclick = function(event) {
          if (event.target == modalImageGallerie) {
            modalImageGallerie.style.display = "none";
          }
        }

        //***  Fin modals Galerie


    })












    // Documentation initialisée sur Utilisateur
    $('#docuLoadContainer').load("views/docUtilisateur.html");



    // Load et Styles boutons toggle Documentation User/Tech
    $("#toggleUtilisateur").click(function() {
        document.getElementById("toggleTechnique").classList.remove("buttonSelected");
        document.getElementById("toggleTechnique").classList.add("buttonNonSelected");

        document.getElementById("toggleUtilisateur").classList.remove("buttonNonSelected");
        document.getElementById("toggleUtilisateur").classList.add("buttonSelected");

        $(document).ready(function() {
            $('#docuLoadContainer').load("views/docUtilisateur.html");
        })
    })

    $("#toggleTechnique").click(function() {
        document.getElementById("toggleUtilisateur").classList.remove("buttonSelected");
        document.getElementById("toggleUtilisateur").classList.add("buttonNonSelected");

        document.getElementById("toggleTechnique").classList.remove("buttonNonSelected");
        document.getElementById("toggleTechnique").classList.add("buttonSelected");

        $(document).ready(function() {
            $('#docuLoadContainer').load("views/docTechnique.html");
        })
    })


    document.getElementById("alertDisclaimer1").addEventListener("click", function() {
        alert("J'ai fais l'erreur d'utiliser la propriété zoom sur le <body> au tout début du projet car je le trouvais globalement trop zoomé, et n'y ai plus porté attention par la suite. Il s'est ensuite avéré que cette propriété n'est pas reconnue sur Firefox, et il n'y a pas d'alternative qui fonctionne. Il faudra réduire toutes les mesures manuellement.");
    })

    document.getElementById("alertDisclaimer2").addEventListener("click", function() {
        alert("Les cookies de session de l'<iframe> (aperçu du site depuis le portfolio), ne sont pas partagés pour l'instant.");
    })




























    // Code included inside $( window ).on( "load", function() { ... }) will run once the entire page (images or iframes), not just the DOM (" window.onload = function({}) "), is ready.
    $( window ).on( "load", function() {

    // ***PROJET FUN: DARK MODE sur le contenu de l'iframe
    // -> Select les elements dans le iframe (balckjackjo.com) pour adapter le style à la charte graphique du portfolio, avec le boutonPhone onclick qui switch avec les vrais couleurs du site)
    // Normalement pas possible pour question de sécurité (MAIS Workaround si on est proprio des 2 sites! avec un systeme d'envoi de messages j'ai pas compris: https://stackoverflow.com/questions/25098021/securityerror-blocked-a-frame-with-origin-from-accessing-a-cross-origin-frame)
    // var iframe = document.getElementById("iframeElement");
    // // var elmnt = iframe.contentWindow.document.getElementsByTagName("H1")[0];
    // var elmnt = iframe.contentWindow.document.getElementById("header");
    // elmnt.style.background = "red !important";

    // const frame = document.getElementById('your-frame-id');
    // frame.contentWindow.postMessage(/*any variable or object here*/, 'http://your-second-site.com');


    // Solution: postMessage() 

      // var iframeWin = document.getElementById("iframeElement").contentWindow,
      //     form = document.getElementById("the-form"),
      //     myMessage = document.getElementById("my-message");

      // myMessage.select(); 

      // form.onsubmit = function () {
      //     iframeWin.postMessage(myMessage.value, "http://portfolio.basilek.ovh");
      //     return false;
      // };





    // Autre méthode plus simple: https://stackoverflow.com/questions/27269406/change-style-of-an-element-inside-iframe-cross-domain-i-own-the-second-domain
    
    iFrame = document.getElementById("iframeElement")

    iFrame.onload = function(){
      //Send a message immediately after iframe is loaded
      // iFrame.contentWindow.postMessage('changeStyle', 'http://www.portfolio.basilek.ovh'); 
      iFrame.contentWindow.postMessage('changeStyle', '*'); 

    }

  })































    // *** CSS animation on scroll (Projet): https://coolcssanimation.com/how-to-trigger-a-css-animation-on-scroll/
    // Create the observer
    const observerDocumentations = new IntersectionObserver(entries => {
        // Loop over the entries
        entries.forEach(entry => {

        const elem = entry.target.querySelector('#docuLoadContainer');

          // If the element is visible
          if (entry.isIntersecting) {
            // Add the animation class
            elem.classList.add('docuLoadContainer');
            // return;
          }
          // elem.classList.remove('docuLoadContainer');
        });
      });
    // Tell the observer which elements to track
    observerDocumentations.observe(document.querySelector('#docuLoadContainer-wrapper'));


    const observerDocumentationHeader = new IntersectionObserver(entries => {
        // Loop over the entries
        entries.forEach(entry => {
          // If the element is visible
          if (entry.isIntersecting) {
            // Add the animation class
            entry.target.classList.add('documentationHeaderFadeInScroll');
            return;
          }
          entry.target.classList.remove('documentationHeaderFadeInScroll');

        });
      });
    
    // Tell the observer which elements to track
    observerDocumentationHeader.observe(document.querySelector('#documentationHeaderElem'));



    const observerDisclaimer = new IntersectionObserver(entries => {
        // Loop over the entries
        entries.forEach(entry => {
          // If the element is visible
          if (entry.isIntersecting) {
            // Add the animation class
            entry.target.classList.add('disclaimerContainerStyleScroll');
            return;
          }
        //   entry.target.classList.remove('disclaimerContainerStyleScroll');
        });
      });
    
    // Tell the observer which elements to track
    observerDisclaimer.observe(document.querySelector('#disclaimerContainerElem'));



    const observerFirefox = new IntersectionObserver(entries => {
        // Loop over the entries
        entries.forEach(entry => {
          // If the element is visible
          if (entry.isIntersecting) {
            // Add the animation class
            entry.target.classList.add('disclaimerContenuWrapper');
            return;
          }
        //   entry.target.classList.remove('disclaimerContainerStyleScroll');
        });
      });
    
    // Tell the observer which elements to track
    observerFirefox.observe(document.querySelector('#disclaimerContenuWrapper'));




}