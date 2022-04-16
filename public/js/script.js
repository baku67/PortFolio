
window.onload = function() {


    // Documentation initialisée sur Utilisateur
    $(document).ready(function() {
        $('#docuLoadContainer').load("views/docUtilisateur.html");


    
    })

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




































    // ***PROJET FUN: DARK MODE 
    // -> Select les elements dans le iframe (balckjackjo.com) pour adapter le style à la charte graphique du portfolio, avec le boutonPhone onclick qui switch avec les vrais couleurs du site)
    // Normalement pas possible pour question de sécurité (MAIS Workaround si on est proprio des 2 sites! avec un systeme d'envoi de messages j'ai pas compris: https://stackoverflow.com/questions/25098021/securityerror-blocked-a-frame-with-origin-from-accessing-a-cross-origin-frame)
    // var iframe = document.getElementById("iframeElement");
    // // var elmnt = iframe.contentWindow.document.getElementsByTagName("H1")[0];
    // var elmnt = iframe.contentWindow.document.getElementById("header");
    // elmnt.style.background = "red !important";

    // const frame = document.getElementById('your-frame-id');
    // frame.contentWindow.postMessage(/*any variable or object here*/, 'http://your-second-site.com');



































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
            return;
          }
          elem.classList.remove('docuLoadContainer');
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




}