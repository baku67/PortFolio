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
    //     });
    //   });
    // // Tell the observer which elements to track
    // observerDocumentations.observe(document.querySelector('#docuLoadContainer-wrapper'));



    // FadeIn du text Présentation:
    setTimeout(function() {
      document.querySelectorAll(".accueilWord").forEach((elem, i) => {
        setTimeout(() => {
          elem.classList.add("fadeInWordPresentation");
        }, i * 10);
      });
    }, 350)
    // Fin



    // Détection mobile
    var mobileDetection;
    if (navigator.userAgent.match(/Android/i)
    || navigator.userAgent.match(/webOS/i)
    || navigator.userAgent.match(/iPhone/i)
    || navigator.userAgent.match(/iPad/i)
    || navigator.userAgent.match(/iPod/i)
    || navigator.userAgent.match(/BlackBerry/i)
    || navigator.userAgent.match(/Windows Phone/i)) {
      mobileDetection = true ;
    } else {
      mobileDetection = false ;
    }
    // Fin

    // 
    // Interval Raie Accueil (s'adapte à l'écran car durée de l'anim différentes):
    poissonAccueil1 = document.createElement("div");
    poissonAccueil1.id = "raieAccueil1";
    poissonAccueil1.style.display = "block";
    document.getElementById("body").append(poissonAccueil1);
    
    if (window.matchMedia("(min-width: 1300px)").matches) {
      setInterval(function() {
        if (document.getElementById('raieAccueil1') != null ) {
          document.getElementById('raieAccueil1').remove();
        }
        document.getElementById("body").append(poissonAccueil1);
      }, 35000)
    } else {
      setInterval(function() {
        if (document.getElementById('raieAccueil1') != null ) {
          document.getElementById('raieAccueil1').remove();
        }
        document.getElementById("body").append(poissonAccueil1);
      }, 22500)
    }
    //


    // Interval Raie Accueil:
    // poissonAccueil1 = document.createElement("div");
    // poissonAccueil1.id = "raieAccueil1";
    // poissonAccueil1.style.display = "block";

    // setInterval(function() {
    //   if (document.getElementById('raieAccueil1') != null ) {
    //     document.getElementById('raieAccueil1').remove();
    //   }
    //   document.getElementById("body").append(poissonAccueil1);
    // }, 25000)
    // Fin interval





    // Poisson autour du lightBulb interval entre passe devant et passe derriere: 
    poissonLightBulb = document.createElement("div");
    poissonLightBulb.id = "poissonAcueil1";
    poissonLightBulb.classList.add("poissonAcueil1AnimFront");

    // Poisson ajouté à la main dès le début (le setInterval donne delai de premier pop :/)
    document.getElementById("lightBulbWrapperDiv").append(poissonLightBulb);
    setTimeout(function() {
      document.getElementById("poissonAcueil1").classList.remove("poissonAcueil1AnimFront");
      document.getElementById("poissonAcueil1").classList.add("poissonAcueil1AnimBack");
    }, 6001)
    setTimeout(function() {
      document.getElementById("poissonAcueil1").classList.remove("poissonAcueil1AnimBack");
      document.getElementById("poissonAcueil1").remove();
    }, 12000);

    // Interval de repop: 
    setInterval(function() {

      if (document.getElementById("poissonAcueil1") !== null) {
        poissonLightBulb.classList.remove("poissonAcueil1AnimFront");
      }

      document.getElementById("lightBulbWrapperDiv").append(poissonLightBulb);
      document.getElementById("poissonAcueil1").classList.add("poissonAcueil1AnimFront");

      setTimeout(function() {
        poissonLightBulb.classList.remove("poissonAcueil1AnimFront");
        poissonLightBulb.classList.add("poissonAcueil1AnimBack");
      }, 6001);

      setTimeout(function() {
        poissonLightBulb.classList.remove("poissonAcueil1AnimBack");
        document.getElementById('poissonAcueil1').remove();
      }, 12002)

    }, 12150)


    // Rectangle photo SVG drawing
    setTimeout(function() {
      var pathRec = document.querySelector('.rectangleSvg path');
      var lengthRec = pathRec.getTotalLength();
      // Clear any previous transition
      pathRec.style.transition = pathRec.style.WebkitTransition = 'none';
      // Set up the starting positions
      pathRec.style.strokeDasharray = lengthRec + ' ' + lengthRec;
      pathRec.style.strokeDashoffset = lengthRec;
      // Trigger a layout so styles are calculated & the browser
      // picks up the starting position before animating
      pathRec.getBoundingClientRect();
      // Define our transition
      pathRec.style.transition = pathRec.style.WebkitTransition =
        'stroke-dashoffset 3.4s ease';
      // Go!
      document.getElementById("rectangleSvg").style.opacity = "1";
      pathRec.style.strokeDashoffset = '0';
    }, 750)

          
    // Rotate changeQuotation onClick
    let changeQuot = document.getElementById("changeQuotation");
    changeQuot.addEventListener("click", function() {
      changeQuot.classList.add("rotateChangeQuot")
      setTimeout(function() {
        changeQuot.classList.remove("rotateChangeQuot");
      }, 705)
    })


    // Observeur pour lancer le "drawing" de l'ampoule onScrollView et le fadeIn citation
    const observerDocumentationHeader = new IntersectionObserver(entries => {
      // Loop over the entries
      entries.forEach(entry => {
        // If the element is visible
        if (entry.isIntersecting) {

          document.getElementById("lightBulbWrapperDiv").style.opacity = "1";
          // FadeIn Citation:
          document.getElementById("inspirationContainer").classList.add("fadeInCitation")
          setTimeout(function() {
            document.getElementById("inspirationContainer").style.opacity = "1";
            document.getElementById("inspirationContainer").classList.remove("fadeInCitation")
          }, 1005)

          //** Anim Ampoule SVG drawing */
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
      
          // Calque 4 (Hover Me text SVG)
          var path4 = document.querySelector('.lightBulbContainer5 path');
          var length4 = path4.getTotalLength();
          path4.style.transition = path4.style.WebkitTransition = 'none';
          path4.style.strokeDasharray = length4 + ' ' + length4;
          path4.style.strokeDashoffset = length4;
          path4.getBoundingClientRect();
          path4.style.transition = path4.style.WebkitTransition =
            'stroke-dashoffset 3s 2.5s ease, stroke 0.4s linear, stroke-width 0.4s linear';
          path4.style.strokeDashoffset = '0';
      
          return;
        }
      });
    });
  
  // Tell the observer which elements to track
  observerDocumentationHeader.observe(document.querySelector('#inspirationTitle'));





  const observerContactButton = new IntersectionObserver(entries => {
    // Loop over the entries
    entries.forEach(entry => {
      // If the element is visible
      if (entry.isIntersecting) {
        document.getElementById("contactButton").classList.add("fadeInForm")
        setTimeout(function() {
          document.getElementById("contactButton").style.opacity = "1";
          document.getElementById("contactButton").classList.remove("fadeInForm")
        }, 1005)
      }
    })
  })
  observerContactButton.observe(document.querySelector('#contactButton'));


  const observerProjects = new IntersectionObserver(entries => {
    // Loop over the entries
    entries.forEach(entry => {
      // If the element is visible
      if (entry.isIntersecting) {
        document.getElementById("accueilProjectsDiv").classList.add("slideInProjectBtn")
        setTimeout(function() {
          // document.getElementById("accueilProjectsDiv").style.opacity = "1";
          document.getElementById("accueilProjectsDiv").classList.remove("slideInProjectBtn")
        }, 1005)
      }
    })
  })
  observerProjects.observe(document.querySelector('#accueilProjectsDiv'));




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
    "Digital design is like painting, except the paint never dries. <span style='color:#ef3b2d;'>- Neville Brody</span>",
    "There are three responses to a piece of design — yes, no, and WOW! Wow is the one to aim for. <span style='color:#ef3b2d;'>– Milton Glaser</span>",
    "Writing the first 90 percent of a computer program takes 90 percent of the time. The remaining ten percent also takes 90 percent of the time and the final touches also take 90 percent of the time. <span style='color:#ef3b2d;'>– N.J. Rubenking</span>",
    "Software and cathedrals are much the same — first we build them, then we pray. <span style='color:#ef3b2d;'>- Simon Harrer</span>",
  ];

  actualIndex = 0;

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
      document.getElementById("quoteContent").innerHTML = chosenQuote;
      document.getElementById("quoteContent").classList.add("fadeInQuote");
    }, 351)
  })



}