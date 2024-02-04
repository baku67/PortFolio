window.onload = function() {

    // ScrollReveal avec observer pour anims slide
    // ScrollReveal().reveal('.formations');
    // ScrollReveal().reveal('.hobbys');
    // ScrollReveal().reveal('.langages');
    // ScrollReveal().reveal('.outils');
    // ScrollReveal().reveal('.langues');

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


    // Effets border navBarre Desktop
    document.getElementById('sideNavDesktop').addEventListener('mouseenter', () => {
    document.getElementById("sideNavDesktop").style.borderLeft = "1px solid #80808000";
    document.getElementById("sideNavDesktop").style.paddingLeft = "20px";
    })
    document.getElementById('sideNavDesktop').addEventListener('mouseleave', () => {
    document.getElementById("sideNavDesktop").style.borderLeft = "1px solid rgba(128, 128, 128, 0.3)";
    document.getElementById("sideNavDesktop").style.paddingLeft = "0px";
    })



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



    // TODO: Remplacer par toggle et tout
    document.getElementById('stageBandeau1').addEventListener("click", function() {
        document.getElementById('stage1content').style.display = "block";
    })
    document.getElementById('stageBandeau2').addEventListener("click", function() {
        document.getElementById('stage2content').style.display = "block";
    })

    // Observer Titre CV
    const observerTitleCv = new IntersectionObserver(entries => {
        // Loop over the entries
        entries.forEach(entry => {
            // If the element is visible
            if (entry.isIntersecting) {
                

            }
        })
    })
    observerTitleCv.observe(document.querySelector('#formations'));


    // Observer diplome <Formation/> CV
    const observerFormations = new IntersectionObserver(entries => {
        // Loop over the entries
        entries.forEach(entry => {
            // If the element is visible
            if (entry.isIntersecting) {

                document.getElementById("formations").classList.add("formationsAnim")

                // Draw du chapeau diplome <Formation/> CV
                var formationPathes = document.querySelectorAll('.formationSvg path');
                formationPathes.forEach(element => {
                    var lengthRec = element.getTotalLength();
                    element.style.transition = element.style.WebkitTransition = 'none';
                    element.style.strokeDasharray = lengthRec + ' ' + lengthRec;
                    element.style.strokeDashoffset = lengthRec;
                    element.getBoundingClientRect();
                    element.style.transition = element.style.WebkitTransition =
                    'stroke-dashoffset 2.5s 0.5s ease-in-out';
                    element.style.strokeDashoffset = '0';    
                });

                setTimeout(function() {
                    document.getElementById("formations").style.opacity = "1";
                    document.getElementById("formations").classList.remove("formationsAnim")
                }, 2001)
            }
        })
    })
    observerFormations.observe(document.querySelector('#formations'));
    


    // Observer checkbox <Compétences/> CV
    const observerCompetences = new IntersectionObserver(entries => {
        // Loop over the entries
        entries.forEach(entry => {
            // If the element is visible
            if (entry.isIntersecting) {

                document.getElementById("competences").classList.add("competencesAnim")

                // Draw du checkbox <Compétences/> CV
                var skillsPathes = document.querySelectorAll('.skillsSvg path');
                skillsPathes.forEach(element => {
                    var lengthRec2 = element.getTotalLength();
                    element.style.transition = element.style.WebkitTransition = 'none';
                    element.style.strokeDasharray = lengthRec2 + ' ' + lengthRec2;
                    element.style.strokeDashoffset = lengthRec2;
                    element.getBoundingClientRect();
                    element.style.transition = element.style.WebkitTransition =
                    'stroke-dashoffset 2.5s 0.5s ease-in-out';
                    element.style.strokeDashoffset = '0';    
                });

                setTimeout(function() {
                    document.getElementById("competences").style.opacity = "1";
                    document.getElementById("competences").classList.remove("competencesAnim")
                }, 2001)
            }
        })
    })
    observerCompetences.observe(document.querySelector('#competences'));
    

    // Observer poisson <Hobbies/> CV
    const observerHobbies = new IntersectionObserver(entries => {
        // Loop over the entries
        entries.forEach(entry => {
            // If the element is visible
            if (entry.isIntersecting) {

                document.getElementById("hobbies").classList.add("hobbiesAnim")

                // Draw du poisson <Hobbies/> CV
                var hobbiesPathes = document.querySelectorAll('.hobbiesSvg path');
                hobbiesPathes.forEach(element => {
                    var lengthRec3 = element.getTotalLength();
                    element.style.transition = element.style.WebkitTransition = 'none';
                    element.style.strokeDasharray = lengthRec3 + ' ' + lengthRec3;
                    element.style.strokeDashoffset = lengthRec3;
                    element.getBoundingClientRect();
                    element.style.transition = element.style.WebkitTransition =
                    'stroke-dashoffset 2.5s 0.5s ease-in-out';
                    element.style.strokeDashoffset = '0';    
                });

                setTimeout(function() {
                    document.getElementById("hobbies").style.opacity = "1";
                    document.getElementById("hobbies").classList.remove("hobbiesAnim")
                }, 2001)
            }
        })
    })
    observerHobbies.observe(document.querySelector('#hobbies'));
    



    // Observer bulles discussion <Langues/> CV
    const observerLang = new IntersectionObserver(entries => {
        // Loop over the entries
        entries.forEach(entry => {
            // If the element is visible
            if (entry.isIntersecting) {

                document.getElementById("langues").classList.add("langsAnim")

                // Draw bulles discussion <Langues/> CV
                var langsPathes = document.querySelectorAll('.langsSvg path');
                langsPathes.forEach(element => {
                    var lengthRec5 = element.getTotalLength();
                    element.style.transition = element.style.WebkitTransition = 'none';
                    element.style.strokeDasharray = lengthRec5 + ' ' + lengthRec5;
                    element.style.strokeDashoffset = lengthRec5;
                    element.getBoundingClientRect();
                    element.style.transition = element.style.WebkitTransition =
                    'stroke-dashoffset 2.5s 0.5s ease-in-out';
                    element.style.strokeDashoffset = '0';    
                });

                setTimeout(function() {
                    document.getElementById("langues").style.opacity = "1";
                    document.getElementById("langues").classList.remove("langsAnim")
                }, 2001)
            }
        })
    })
    observerLang.observe(document.querySelector('#langues'));
    



    // Observer clée à molette <Outils/> CV
    const observerOutils = new IntersectionObserver(entries => {
        // Loop over the entries
        entries.forEach(entry => {
          // If the element is visible
          if (entry.isIntersecting) {

            document.getElementById("outils").classList.add("outilsAnim")

                // Draw clée à molette <Outils/> CV
                var outilsPathes = document.querySelectorAll('.outilsSvg path');
                outilsPathes.forEach(element => {
                    var lengthRec4 = element.getTotalLength();
                    element.style.transition = element.style.WebkitTransition = 'none';
                    element.style.strokeDasharray = lengthRec4 + ' ' + lengthRec4;
                    element.style.strokeDashoffset = lengthRec4;
                    element.getBoundingClientRect();
                    element.style.transition = element.style.WebkitTransition =
                    'stroke-dashoffset 2.5s 0.5s ease-in-out';
                    element.style.strokeDashoffset = '0';    
                });

            setTimeout(function() {
                document.getElementById("outils").style.opacity = "1";
                document.getElementById("outils").classList.remove("outilsAnim")
            }, 2001)
          }
        })
      })
      observerOutils.observe(document.querySelector('#outils'));
    



}
