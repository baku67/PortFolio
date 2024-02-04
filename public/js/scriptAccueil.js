window.onload = function() {


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
      console.log("Mobile detection JS: " + mobileDetection);



      // *** LIGHTMODE: State des element avec data-theme (selon darkMode localStorage)
      const themeToggle = document.getElementById('themeToggle');
      const body = document.body;

      if (localStorage.getItem('darkMode') == "false") {

        themeToggle.checked = true;

        body.setAttribute('data-theme', 'light');
        document.getElementById('currentThemeIcon').setAttribute('data-theme', 'light');
        document.getElementById('pageTitle').setAttribute('data-theme', 'light');
        document.getElementById('paragrapheAccueil').setAttribute('data-theme', 'light');
        document.getElementById('menuLigneCv').setAttribute('data-theme', 'light');
        document.getElementById('headerAccueil').setAttribute('data-theme', 'light');
        document.getElementById('mySidenav').setAttribute('data-theme', 'light');
        document.getElementById('githubBtnImg').setAttribute('data-theme', 'light');
        document.getElementById('portraitAccueil').setAttribute('data-theme', 'light');
        document.getElementById('portfolioSousTitre').setAttribute('data-theme', 'light');
        document.getElementById('lightBulbWrapperDiv').setAttribute('data-theme', 'light');
        document.getElementById('inspirationContainer').setAttribute('data-theme', 'light');
        document.getElementById('quoteContent').setAttribute('data-theme', 'light');
        document.getElementById('accueilKeyboardPng').setAttribute('data-theme', 'light');
        document.getElementById('accueilProjectsBtnLabel').setAttribute('data-theme', 'light');
        document.getElementById('inspirationTitle').setAttribute('data-theme', 'light');
        document.getElementById('navBurger_cvIcon').setAttribute('data-theme', 'light');
        document.getElementById('navBurger_projectsIcon').setAttribute('data-theme', 'light');
        document.getElementById('navBurger_loisirsIcon').setAttribute('data-theme', 'light');
        [...document.getElementsByClassName('accueilVideo')].forEach((elem) => {
            elem.setAttribute('data-theme', 'light');
        });
        [...document.getElementsByClassName('selected')].forEach((elem) => {
          elem.setAttribute('data-theme', 'light');
        });
        document.getElementById('accueilProjectsRightDivSpan').setAttribute('data-theme', 'light');
        
        document.getElementById('currentThemeIcon').classList.remove('fa-moon');
        document.getElementById('currentThemeIcon').classList.add('fa-sun');
        
      }

      // LIGHTMODE: changement du theme (toggle)
      themeToggle.addEventListener('change', function () {

          if (themeToggle.checked) {

              localStorage.setItem('darkMode', "false");

              body.setAttribute('data-theme', 'light');
              document.getElementById('currentThemeIcon').setAttribute('data-theme', 'light');
              document.getElementById('pageTitle').setAttribute('data-theme', 'light');
              document.getElementById('paragrapheAccueil').setAttribute('data-theme', 'light');
              document.getElementById('menuLigneCv').setAttribute('data-theme', 'light');
              document.getElementById('headerAccueil').setAttribute('data-theme', 'light');
              document.getElementById('mySidenav').setAttribute('data-theme', 'light');
              document.getElementById('githubBtnImg').setAttribute('data-theme', 'light');
              document.getElementById('portraitAccueil').setAttribute('data-theme', 'light');
              document.getElementById('portfolioSousTitre').setAttribute('data-theme', 'light');
              document.getElementById('lightBulbWrapperDiv').setAttribute('data-theme', 'light');
              document.getElementById('inspirationContainer').setAttribute('data-theme', 'light');
              document.getElementById('quoteContent').setAttribute('data-theme', 'light');
              document.getElementById('accueilKeyboardPng').setAttribute('data-theme', 'light');
              document.getElementById('accueilProjectsBtnLabel').setAttribute('data-theme', 'light');
              document.getElementById('inspirationTitle').setAttribute('data-theme', 'light');
              document.getElementById('navBurger_cvIcon').setAttribute('data-theme', 'light');
              document.getElementById('navBurger_projectsIcon').setAttribute('data-theme', 'light');
              document.getElementById('navBurger_loisirsIcon').setAttribute('data-theme', 'light');
              [...document.getElementsByClassName('accueilVideo')].forEach((elem) => {
                  elem.setAttribute('data-theme', 'light');
              });
              [...document.getElementsByClassName('selected')].forEach((elem) => {
                elem.setAttribute('data-theme', 'light');
              });
              document.getElementById('accueilProjectsRightDivSpan').setAttribute('data-theme', 'light');
              
              document.getElementById('currentThemeIcon').classList.remove('fa-moon');
              document.getElementById('currentThemeIcon').classList.add('fa-sun');

          } else {

              localStorage.setItem('darkMode', "true");

              body.setAttribute('data-theme', 'dark');
              document.getElementById('currentThemeIcon').setAttribute('data-theme', 'dark');
              document.getElementById('pageTitle').setAttribute('data-theme', 'dark');
              document.getElementById('paragrapheAccueil').setAttribute('data-theme', 'dark');
              document.getElementById('menuLigneCv').setAttribute('data-theme', 'dark');
              document.getElementById('headerAccueil').setAttribute('data-theme', 'dark');
              document.getElementById('mySidenav').setAttribute('data-theme', 'dark');
              document.getElementById('githubBtnImg').setAttribute('data-theme', 'dark');
              document.getElementById('portraitAccueil').setAttribute('data-theme', 'dark');
              document.getElementById('portfolioSousTitre').setAttribute('data-theme', 'dark');
              document.getElementById('lightBulbWrapperDiv').setAttribute('data-theme', 'dark');
              document.getElementById('inspirationContainer').setAttribute('data-theme', 'dark');
              document.getElementById('quoteContent').setAttribute('data-theme', 'dark');
              document.getElementById('accueilKeyboardPng').setAttribute('data-theme', 'dark');
              document.getElementById('accueilProjectsBtnLabel').setAttribute('data-theme', 'dark');
              document.getElementById('accueilVideo').setAttribute('data-theme', 'dark');
              document.getElementById('inspirationTitle').setAttribute('data-theme', 'dark');
              document.getElementById('navBurger_cvIcon').setAttribute('data-theme', 'dark');
              document.getElementById('navBurger_projectsIcon').setAttribute('data-theme', 'dark');
              document.getElementById('navBurger_loisirsIcon').setAttribute('data-theme', 'dark');
              [...document.getElementsByClassName('accueilVideo')].forEach((elem) => {
                  elem.setAttribute('data-theme', 'dark');
              });
              [...document.getElementsByClassName('selected')].forEach((elem) => {
                elem.setAttribute('data-theme', 'dark');
              });
              document.getElementById('accueilProjectsRightDivSpan').setAttribute('data-theme', 'dark');


              document.getElementById('currentThemeIcon').classList.remove('fa-sun');
              document.getElementById('currentThemeIcon').classList.add('fa-moon');
          }
      });

  

      // Effets border navBarre Desktop
      document.getElementById('sideNavDesktop').addEventListener('mouseenter', () => {
        document.getElementById("sideNavDesktop").style.borderLeft = "1px solid #80808000";
        document.getElementById("sideNavDesktop").style.paddingLeft = "20px";
      })
      document.getElementById('sideNavDesktop').addEventListener('mouseleave', () => {
        document.getElementById("sideNavDesktop").style.borderLeft = "1px solid rgba(128, 128, 128, 0.3)";
        document.getElementById("sideNavDesktop").style.paddingLeft = "0px";
      })


    // (DESKTOP) On scrool page : sideNav
    if(!mobileDetection) {
      // Observer navBarre:
      const observerContactButton = new IntersectionObserver(entries => {
        console.log('test observer pc nav')
        // Loop over the entries
        entries.forEach(entry => {
          // If the element is visible
          if (!entry.isIntersecting) {
            document.getElementById("sideNavDesktop").classList.add("fadeInDesktopNav")
          }
          else {
            document.getElementById("sideNavDesktop").classList.remove("fadeInDesktopNav");
          }
        })
      })
      observerContactButton.observe(document.querySelector('#menuLigneCv'));
    }

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

    // **********  MOBILE: Click outside nav burger si actif = closeNav
    var sidenav = document.getElementById("mySidenav");
    var openBtn = document.getElementById("openBtn");
    var closeBtn = document.getElementById("closeBtn");

    openBtn.onclick = openNav;
    closeBtn.onclick = closeNav;


    document.getElementById("pageContainer").addEventListener('click', function(e){   

        if (document.getElementById('mySidenav').contains(e.target)){
            // click dans nav burger
        } else {
            // click en dehors nav burger
            if (sidenav.classList.contains("active")) {
                closeNav();
            }
        }
    });
    

    /* Set the width of the side navigation to 250px */
    function openNav() {
        sidenav.classList.add("active");
        openBtn.style.display = "none";

        // Blur() derrière ram sur mobile:
        // document.getElementById("pageContainer").style.filter = "blur(2px)";
        document.getElementById("pageContainer").style.opacity = "0.6";
        document.getElementById("pageTitleDiv").style.opacity = "0.6";

    }

    /* Set the width of the side navigation to 0 */
    function closeNav() {
        sidenav.classList.remove("active");
        openBtn.style.display = "block";

        // Blur() derrière ram sur mobile:
        // document.getElementById("pageContainer").style.filter = "blur(0px)";
        document.getElementById("pageContainer").style.opacity = "1";
        document.getElementById("pageTitleDiv").style.opacity = "1";
    }
    //******  */ FIN




    // Smiley titre portfolio
    document.getElementById('titleH1').addEventListener("mouseenter", function() {
        document.getElementById('smilePath').style.stroke = "var(--secondaryColor)";
        document.getElementById('smilePath').classList.toggle("smilePathResp");
        document.getElementById('smileSvgContainer').classList.toggle("smileSvgContainerResp");

        [...document.getElementsByClassName('titleO')].forEach((elem) => {
            elem.style.color = "var(--secondaryColor)";
        });
    })
    document.getElementById('titleH1').addEventListener("mouseleave", function() {
        document.getElementById('smilePath').style.stroke = "#ef3b2d";
        document.getElementById('smilePath').classList.toggle("smilePathResp");
        document.getElementById('smileSvgContainer').classList.toggle("smileSvgContainerResp");

        [...document.getElementsByClassName('titleO')].forEach((elem) => {
            elem.style.color = "#ef3b2d";
        });
    })




    
    // FadeIn du text Présentation:
    if(mobileDetection) {

      setTimeout(function() {
        document.querySelectorAll(".accueilWord").forEach((elem, i) => {
          setTimeout(() => {
            elem.classList.add("fadeInWordPresentation");
          }, i * 50);
        });
      }, 350)

    } else {

      setTimeout(function() {
        document.querySelectorAll(".accueilWord").forEach((elem, i) => {
          setTimeout(() => {
            elem.classList.add("fadeInWordPresentation");
          }, i * 20);
        });
      }, 350)

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
    // setTimeout(function() {
    //   var pathRec = document.querySelector('.rectangleSvg path');
    //   var lengthRec = pathRec.getTotalLength();
    //   // Clear any previous transition
    //   pathRec.style.transition = pathRec.style.WebkitTransition = 'none';
    //   // Set up the starting positions
    //   pathRec.style.strokeDasharray = lengthRec + ' ' + lengthRec;
    //   pathRec.style.strokeDashoffset = lengthRec;
    //   // Trigger a layout so styles are calculated & the browser
    //   // picks up the starting position before animating
    //   pathRec.getBoundingClientRect();
    //   // Define our transition
    //   pathRec.style.transition = pathRec.style.WebkitTransition =
    //     'stroke-dashoffset 3.4s ease';
    //   // Go!
    //   document.getElementById("rectangleSvg").style.opacity = "1";
    //   pathRec.style.strokeDashoffset = '0';
    // }, 750)

          
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
        document.getElementById("contactBtnFade").classList.add("fadeInForm")
        setTimeout(function() {
          document.getElementById("contactBtnFade").style.opacity = "1";
          document.getElementById("contactBtnFade").classList.remove("fadeInForm")
        }, 1005)
      }
    })
  })
  observerContactButton.observe(document.querySelector('#contactBtnFade'));

  


  const observerProjectsButton = new IntersectionObserver(entries => {
    // Loop over the entries
    entries.forEach(entry => {
      // If the element is visible
      if (entry.isIntersecting) {
        document.getElementById("accueilProjectsDiv").classList.add("fadeInForm")
        setTimeout(function() {
          document.getElementById("accueilProjectsDiv").style.opacity = "1";
          document.getElementById("accueilProjectsDiv").classList.remove("fadeInForm")
        }, 1005)
      }
    })
  })
  observerProjectsButton.observe(document.querySelector('#accueilProjectsDiv'));




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

    document.getElementById("contactBtnFade").classList.add("fadeOutContact");

    setTimeout(function() {

      document.getElementById("contactBtnFade").style.display = "none";
      document.getElementById("plz-form-4e67dacf-1c2f-4b24-8594-268e8604f643").style.height = "auto";
      document.getElementById("plz-form-4e67dacf-1c2f-4b24-8594-268e8604f643").classList.add("fadeInForm");

      document.getElementById("formBackBtn").style.display = "block";
      document.getElementById("formBackBtn").classList.remove("fadeOut");

    }, 300)
  })

  // Bouton retour arriere
  document.getElementById("formBackBtn").addEventListener("click", function() {

    document.getElementById("formBackBtn").classList.add("fadeOut");

    document.getElementById("plz-form-4e67dacf-1c2f-4b24-8594-268e8604f643").classList.remove("fadeInForm");
    document.getElementById("plz-form-4e67dacf-1c2f-4b24-8594-268e8604f643").classList.add("fadeOutForm");


    document.getElementById("contactBtnFade").classList.remove("fadeOutContact");
    document.getElementById("contactBtnFade").classList.add("fadeInContact");
    
  });



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