window.onload = function() {

    // Create the observer
    //   const observerDocumentations = new IntersectionObserver(entries => {
    //     // Loop over the entries
    //     entries.forEach(entry => {

    //     const elem = entry.target.querySelector('#docuLoadContainer');

    //       // If the element is visible
    //       if (entry.isIntersecting) {
    //         // Add the animation class
    //         elem.classList.add('docuLoadContainer');
    //         // return;
    //       }
    //       // elem.classList.remove('docuLoadContainer');
    //     });
    //   });
    // // Tell the observer which elements to track
    // observerDocumentations.observe(document.querySelector('#docuLoadContainer-wrapper'));


  // Ajouter un observer onIntoView => Proc 
    // LightBulb Ampoule SVG (https://jakearchibald.com/2013/animated-line-drawing-svg/)
    var path = document.querySelector('.lightBulbContainer path');
    var length = path.getTotalLength();
    // Clear any previous transition
    path.style.transition = path.style.WebkitTransition = 'none';
    // Set up the starting positions
    path.style.strokeDasharray = length + ' ' + length;
    path.style.strokeDashoffset = length;
    // Trigger a layout so styles are calculated & the browser
    // picks up the starting position before animating
    path.getBoundingClientRect();
    // Define our transition (+EFFET de delai sur le hover pour allumage en 2 temps:)
    path.style.transition = path.style.WebkitTransition =
      'stroke-dashoffset 3s ease, stroke 0.4s 0.4s linear, stroke-width 0.4s 0.4s linear';
    // Go!
    path.style.strokeDashoffset = '0';


    // Calque 1 (fils de cuivre)
    var path2 = document.querySelector('.lightBulbContainer2 path');
    var length2 = path2.getTotalLength();
    path2.style.transition = path2.style.WebkitTransition = 'none';
    path2.style.strokeDasharray = length2 + ' ' + length2;
    path2.style.strokeDashoffset = length2;
    path2.getBoundingClientRect();
    path2.style.transition = path2.style.WebkitTransition =
      'stroke-dashoffset 3s 0.5s ease, stroke 0.4s linear, stroke-width 0.4s linear';
    path2.style.strokeDashoffset = '0';

    // Calque 3 (effet Vis)
    var path3 = document.querySelector('.lightBulbContainer4 path');
    var length3 = path3.getTotalLength();
    path3.style.transition = path3.style.WebkitTransition = 'none';
    path3.style.strokeDasharray = length3 + ' ' + length3;
    path3.style.strokeDashoffset = length3;
    path3.getBoundingClientRect();
    path3.style.transition = path3.style.WebkitTransition =
      'stroke-dashoffset 2.3s 1s ease, stroke 0.4s 0.4s linear, stroke-width 0.4s 0.4s linear';
    path3.style.strokeDashoffset = '0';









  // Apparition formulaire de contact
  document.getElementById("contactButton").addEventListener("click", function() {
    document.getElementById("contactButton").classList.add("fadeOut");
    setTimeout(function() {
      document.getElementById("contactButton").remove();
      document.getElementById("plz-form-4e67dacf-1c2f-4b24-8594-268e8604f643").style.height = "auto";
      document.getElementById("plz-form-4e67dacf-1c2f-4b24-8594-268e8604f643").classList.add("fadeInForm");
    }, 500)
  })



  // Systeme de Citations et randomize
  let quotes = [
    "Digital design is like painting, except the paint never dries. - Neville Brody",
    "There are three responses to a piece of design — yes, no, and WOW! Wow is the one to aim for. – Milton Glaser",
    "Writing the first 90 percent of a computer program takes 90 percent of the time. The remaining ten percent also takes 90 percent of the time and the final touches also take 90 percent of the time. – N.J. Rubenking",
    "Software and cathedrals are much the same — first we build them, then we pray. - Simon Harrer",
    "Java is to JavaScript what car is to Carpet. – Chris Heilmann",
  ];

  actualIndex = 1;

  document.getElementById("changeQuotation").addEventListener("click", function() {
    let index = Math.floor(Math.random()*quotes.length)

    if (index != actualIndex) {
      var chosenQuote = quotes[index];
      actualIndex = index;
    }
    else {
      while (index == actualIndex) {
        index = Math.floor(Math.random()*quotes.length)
      }
      var chosenQuote = quotes[index];
      actualIndex = index;
    }

    document.getElementById("quoteContent").classList.remove("fadeInQuote");
    document.getElementById("quoteContent").classList.add("fadeOutQuote");
    setTimeout(function() {
      document.getElementById("quoteContent").classList.remove("fadeOutQuote");
      document.getElementById("quoteContent").innerText = chosenQuote;
      document.getElementById("quoteContent").classList.add("fadeInQuote");
    }, 351)
  })



}