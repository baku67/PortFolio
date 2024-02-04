//********* Tentative d'affichage de tout les poyssons pendant(avant) le chargement :
// setTimeout(function() {
//   document.getElementById('motion-demo').style.display = "block";
//   document.getElementById('motion-demo2').style.display = "block";
//   document.getElementById('motion-demo3a').style.display = "block";
//   document.getElementById('motion-demo3b').style.display = "block";
//   document.getElementById('motion-demo3c').style.display = "block";
//   document.getElementById('motion-demo_whaleShark').style.display = "block";
//   document.getElementById('motion-demo_tortoise').style.display = "block";
//   setTimeout(function() {
//     document.getElementById('motion-demo_shark1').style.display = "block";
//   }, 2000);

//   // Poisson rapide delai: 
//   poissonRapide = document.createElement("div");
//   poissonRapide.id = "motion-demo_rapid";
//   poissonRapide.style.display = "block";

//   // document.getElementById('motion-demo_rapid').style.display = "block";
//   setInterval(function() {
//     if (document.getElementById('motion-demo_rapid') != null ) {
//       document.getElementById('motion-demo_rapid').remove();
//     }
//     document.getElementById("aquarium").append(poissonRapide);
//   }, 9500)
//   // document.getElementById('motion-demoBubble1').style.display = "block";
// }, 1000)







    // Reprocs de l'anim rotate des "O" dans title Loisirs:"Photographie" (delai initial puis interval entre les procs de l'anim)
    setTimeout(function() {
      let array = document.querySelectorAll(".letterO");


      // document.getElementById("flashPoint").classList.remove("flashPointAnim");

      setInterval(function() {
        // Interval du flash titre
        // document.getElementById("flashPoint").classList.add("flashPointAnim");
        // setTimeout(function() {
        //   document.getElementById("flashPoint").classList.remove("flashPointAnim");
        // }, 3000)

        // Interval des cameraLens rotate/blurr titre
        array.forEach((element) => {
          element.classList.add("lettersOanimProc");
          setTimeout(function() {
            element.classList.remove("lettersOanimProc");
          }, 3000)
        })  
      }, 5000)

      // Interval flash Rectangle
      // setInterval(function() {
      //   document.getElementById("flashRectangle").classList.add("flashRectangleAnim");
      //   setTimeout(function() {
      //     document.getElementById("flashRectangle").classList.remove("flashRectangleAnim");
      //   }, 500)
    
      // }, 5500)
  
  

    }, 2500)








window.onload = function() {




    // Détection si mobile pour imageHD moins lourde
    var mobileAttribute = "";
    var mobileDetection;
    if (navigator.userAgent.match(/Android/i)
    || navigator.userAgent.match(/webOS/i)
    || navigator.userAgent.match(/iPhone/i)
    || navigator.userAgent.match(/iPad/i)
    || navigator.userAgent.match(/iPod/i)
    || navigator.userAgent.match(/BlackBerry/i)
    || navigator.userAgent.match(/Windows Phone/i)) {
      mobileDetection = true ;
      mobileAttribute = "mobile"
    } else {
      mobileDetection = false ;
      mobileAttribute = ""
    }

    // (DESKTOP) On scrool page : sideNav
    if(!mobileDetection) {



      // On eneleve l'animation finie du body (car le filter mess up les positions fixed)
      setTimeout(function() {
        document.getElementById('bodyLoisir').style.animation = "none";


        
        // Effets border navBarre Desktop
        document.getElementById('sideNavDesktop').addEventListener('mouseenter', () => {
          document.getElementById("sideNavDesktop").style.borderLeft = "1px solid #80808000";
          document.getElementById("sideNavDesktop").style.paddingLeft = "20px";
        })
        document.getElementById('sideNavDesktop').addEventListener('mouseleave', () => {
          document.getElementById("sideNavDesktop").style.borderLeft = "1px solid rgba(128, 128, 128, 0.3)";
          document.getElementById("sideNavDesktop").style.paddingLeft = "0px";
        })
      }, 3500)

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





    // **********  MOBILE: Click outside nav burger si actif = closeNav
    var sidenav = document.getElementById("mySidenav");
    var openBtn = document.getElementById("openBtn");
    var closeBtn = document.getElementById("closeBtn");

    openBtn.onclick = openNav;
    document.getElementById('closeBtn').addEventListener('click', function() {
      closeNav();
    })


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
        document.getElementById("titleH1").style.opacity = "0.6";
        // document.getElementById("pageTitle").style.opacity = "0.6";
    }

    /* Set the width of the side navigation to 0 */
    function closeNav() {
        sidenav.classList.remove("active");
        openBtn.style.display = "block";

        // Blur() derrière ram sur mobile:
        // document.getElementById("pageContainer").style.filter = "blur(0px)";
        document.getElementById("pageContainer").style.opacity = "1";
        document.getElementById("titleH1").style.opacity = "1";
        // document.getElementById("pageTitle").style.opacity = "1";
    }
    //******  */ FIN



    // *** LIGHTMODE: State des element avec data-theme (selon darkMode localStorage)
    const themeToggle = document.getElementById('themeToggle');
    const body = document.body;

    if (localStorage.getItem('darkMode') == "false") {

        themeToggle.checked = true;

        // body.setAttribute('data-theme', 'light');

    }

    // LIGHTMODE: changement du theme (toggle)
    themeToggle.addEventListener('change', function () {

        if (themeToggle.checked) {

            localStorage.setItem('darkMode', "false");

            // body.setAttribute('data-theme', 'light');
        
        } else {

            localStorage.setItem('darkMode', "true");

            // body.setAttribute('data-theme', 'dark');

        }
    });

    

  // Mettre des fadeIn et fadeOut
  document.getElementById("photographieTitle").addEventListener("click", function() {
    document.querySelectorAll(".photosGallerie").forEach(function(elem) {
      if (elem.style.display == "block") {
        elem.classList.remove("fadeIn");
        elem.classList.add("fadeOut");
        setTimeout(function() {
          elem.style.display = "none";
          elem.classList.remove("fadeOut");
        }, 500)
      }
      else {
        elem.classList.remove("fadeOut");

          elem.style.display = "block";
          elem.classList.add("fadeIn");
          setTimeout(function() {
            elem.classList.remove("fadeIn");
          })
      }
    });
    msgHd = document.getElementById("messageGalerie");
    if (msgHd.style.display == "block") {
      msgHd.classList.remove("fadeInHd");
      msgHd.classList.add("fadeOut");
      setTimeout(function() {
        msgHd.style.display = "none";
      }, 500)
    }
    else if (msgHd.style.display == "none") {
      msgHd.classList.remove("fadeOut");
      msgHd.classList.add("fadeInHd");
      msgHd.style.display = "block";
    }
  })


    //**  Apparition FadeIn successif des photos
    let articles = document.querySelectorAll("article");
    let articlesImg = document.querySelectorAll("img");
    var nbr = 0;
  
    articles.forEach((element, i) => {
        setTimeout(function() {
            element.classList.add("galeriePhotoFadeIn");
        }, i * 70)

    })
    // Fin apparition

    //** Test Apparition sans fadeIn successif (ça ram sur mobile pour ça?)
    // articles.forEach((element, i) => {
    //         element.classList.add("galeriePhotoFadeIn");
    // })



    // Compteur d'image chargées (HS: tout proc à la fin)
    // articlesImg.forEach(element => {
    //   if ((element.complete) && (element.naturalHeight !== 0)) {
    //     nbr += 1;
    //     console.log(nbr);
    //   }
    // });






    // One-liner pour display les animation poissons quand all img chargées 
    Promise.all(Array.from(document.images).filter(img => !img.complete).map(img => new Promise(resolve => { img.onload = img.onerror = resolve; }))).then(() => {

      document.getElementById('motion-demo').style.display = "block";
      document.getElementById('motion-demo2').style.display = "block";
      document.getElementById('motion-demo3a').style.display = "block";
      document.getElementById('motion-demo3b').style.display = "block";
      document.getElementById('motion-demo3c').style.display = "block";
      document.getElementById('motion-demo_whaleShark').style.display = "block";
      document.getElementById('motion-demo_tortoise').style.display = "block";
      document.getElementById('coral1').style.display = "block";
      document.getElementById('coral2').style.display = "block";
      document.getElementById('coral3').style.display = "block";
      document.getElementById('coral4').style.display = "block";
      document.getElementById('motion-demo_whalePc').style.display = "block";
      document.getElementById('scubaDiverFlash').style.display = "block";
      // document.getElementById('motion-demo_whale2Pc').style.display = "block";
      document.getElementById('scubaDiver').style.display = "block";
      // document.getElementById("aquarium").classList.add("aquariumScubaFlash");


      // document.getElementById('motion-demoBubble1').style.display = "block";
      setTimeout(function() {
        document.getElementById('motion-demo_shark1').style.display = "block";
      }, 2000);

      // Interval proc Shark/Requin(rotate haut-droite) interval :
      sharkCorner = document.createElement("div");
      sharkCorner.id = "motion-demo_shark1";
      sharkCorner.style.display = "block";
      setInterval(function() {
        if (document.getElementById('motion-demo_shark1') != null ) {
          document.getElementById('motion-demo_shark1').remove();
        }
        document.getElementById("aquarium").append(sharkCorner);
      }, 15000)

  
      // Espadon interval (à appliquer à toutes les anims pour temporiser et ajouter de la faune): 
      poissonRapide = document.createElement("div");
      poissonRapide.id = "motion-demo_rapid";
      poissonRapide.style.display = "block";

      poissonRapide2 = document.createElement("div");
      poissonRapide2.id = "motion-demo_rapid2";
      poissonRapide2.style.display = "block";

      poissonRapide3 = document.createElement("div");
      poissonRapide3.id = "motion-demo_rapid3";
      poissonRapide3.style.display = "block";

      setInterval(function() {
        if (document.getElementById('motion-demo_rapid') != null ) {
          document.getElementById('motion-demo_rapid').remove();
        }
        document.getElementById("aquarium").append(poissonRapide);
      }, 9000)

      setInterval(function() {
        if (document.getElementById('motion-demo_rapid2') != null ) {
          document.getElementById('motion-demo_rapid2').remove();
        }
        document.getElementById("aquarium").append(poissonRapide2);
      }, 9000)

      setInterval(function() {
        if (document.getElementById('motion-demo_rapid3') != null ) {
          document.getElementById('motion-demo_rapid3').remove();
        }
        document.getElementById("aquarium").append(poissonRapide3);
      }, 9000)
      // FIN






      document.getElementById("messageGalerie").classList.add("fadeInHd");

      document.getElementById('spinnerDiv').remove();
      document.getElementById('messageLoadingLong').remove();
    });









    // Modal onClick
    $(document).ready(function() {

        let modalImageGallerie = document.getElementById('myModal');
        let modalImg = document.getElementById("modalImage");
        let captionText = document.getElementById("caption");

        let arrowNext = document.getElementById("arrowNext");
        let arrowPrevious = document.getElementById("arrowPrevious");

        let articles = $(".images"); 


        // Plutot mettre un toggle pour que ce soit répétable et voir pour hover "zoom-out" (important car usage unique)
        modalImg.onclick = function() {
          modalImg.style.maxWidth = "1200px";
          modalImg.onclick = function() {
            modalImg.style.maxWidth = "900px";
          }
        }


        articles.click(function() {

          var intTemp = parseInt(this.getAttribute('alt'));

          modalImg.src = "img/galerie/" + this.getAttribute('alt') + (mobileAttribute) + ".jpg";

          modalImageGallerie.style.display = "block";
          arrowNext.style.display = "block";
          arrowPrevious.style.display = "block";

          captionText.innerHTML = this.getAttribute('def');

          if (intTemp == 1) {
            arrowPrevious.style.opacity = 0.1;
            arrowPrevious.style.cursor = "default";
          }

          arrowNext.onclick = function() {
            intTemp++;
            modalImg.src = "img/galerie/" + (intTemp) + (mobileAttribute) + ".jpg";
            arrowPrevious.style.opacity = 1;
            arrowPrevious.style.cursor = "pointer";

          }

          arrowPrevious.onclick = function() {
            if (intTemp > 1) {
              intTemp--;
              modalImg.src = "img/galerie/" + (intTemp) + (mobileAttribute) + ".jpg";
              arrowPrevious.style.opacity = 1;

              if (intTemp == 1) {
                arrowPrevious.style.opacity = 0.1;
                arrowPrevious.style.cursor = "default";
              }
            }
            else {
              arrowPrevious.style.opacity = 0.1;
              arrowPrevious.style.cursor = "default";
            }
          }

        })    
        


        var span = document.getElementsByClassName("close")[0];

        span.onclick = function() {
          modalImageGallerie.style.display = "none";
          arrowNext.style.display = "none";
          arrowPrevious.style.display = "none";
        }


        window.onclick = function(event) {
          if (event.target == modalImageGallerie) {
            modalImageGallerie.style.display = "none";
            arrowNext.style.display = "none";
            arrowPrevious.style.display = "none";
          }
        }

        //***  Fin modals Galerie


    })




















}