window.onload = function() {

  // LightBulb Ampoule SVG (https://jakearchibald.com/2013/animated-line-drawing-svg/)
  var path = document.querySelector('.lightBulbContainer path');
  console.log(path);
  var length = path.getTotalLength();
  // Clear any previous transition
  path.style.transition = path.style.WebkitTransition = 'none';
  // Set up the starting positions
  path.style.strokeDasharray = length + ' ' + length;
  path.style.strokeDashoffset = length;
  // Trigger a layout so styles are calculated & the browser
  // picks up the starting position before animating
  path.getBoundingClientRect();
  // Define our transition
  path.style.transition = path.style.WebkitTransition =
    'stroke-dashoffset 2s ease-in-out, stroke 0.4s linear, stroke-width 0.4s linear';
  // Go!
  path.style.strokeDashoffset = '0';
  // Apres fin dessin, "transition" est utlisée pour le :hover
  // setTimeout(function() {
    
  // })



  document.getElementById("contactButton").addEventListener("click", function() {
    document.getElementById("contactButton").classList.add("fadeOut");
    setTimeout(function() {
      document.getElementById("contactButton").remove();
      document.getElementById("plz-form-4e67dacf-1c2f-4b24-8594-268e8604f643").style.height = "auto";
      document.getElementById("plz-form-4e67dacf-1c2f-4b24-8594-268e8604f643").classList.add("fadeInForm");
      // document.getElementById("contactFormContainer").innerHTML = "<form id='plz-form-4e67dacf-1c2f-4b24-8594-268e8604f643'></form><script async src='https://brain.plezi.co/api/v1/web_forms/scripts?content_web_form_id=4e67dacf-1c2f-4b24-8594-268e8604f643'></script><!-- <iframe src='https://docs.google.com/forms/d/e/1FAIpQLSdt8w6_pAWo7gCHR6d318cRztKuIpBEdwTqLZIo9CINM0q5qQ/viewform?embedded=true' width='640' height='812' frameborder='0' marginheight='0' marginwidth='0'>Chargement…</iframe> -->";
    }, 500)

  })


  let quotes = [
    "Digital design is like painting, except the paint never dries. - Neville Brody",
    "There are three responses to a piece of design — yes, no, and WOW! Wow is the one to aim for. – Milton Glaser",
    "Writing the first 90 percent of a computer program takes 90 percent of the time. The remaining ten percent also takes 90 percent of the time and the final touches also take 90 percent of the time. – N.J. Rubenking",
    "Software and cathedrals are much the same — first we build them, then we pray. - Simon Harrer",
    "Java is to JavaScript what car is to Carpet. – Chris Heilmann",
  ]

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