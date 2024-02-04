

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




    // Observer checkbox <Compétences/> CV
    const observerCompetences = new IntersectionObserver(entries => {
        // Loop over the entries
        entries.forEach(entry => {
            // If the element is visible
            if (entry.isIntersecting) {

                // document.getElementById("competences").classList.add("competencesAnim")

                // Draw du checkbox <Compétences/> CV
                var skillsPathes = document.querySelectorAll('.arrowsSvg path');
                skillsPathes.forEach(element => {
                    var lengthRec2 = element.getTotalLength();
                    element.style.transition = element.style.WebkitTransition = 'none';
                    element.style.strokeDasharray = lengthRec2 + ' ' + lengthRec2;
                    element.style.strokeDashoffset = lengthRec2;
                    element.getBoundingClientRect();
                    element.style.transition = element.style.WebkitTransition =
                    'stroke-dashoffset 1s 0s ease-in-out';
                    element.style.strokeDashoffset = '0';    
                });

                // setTimeout(function() {
                //     document.getElementById("competences").style.opacity = "1";
                //     document.getElementById("competences").classList.remove("competencesAnim")
                // }, 2001)
            }
        })
    })
    observerCompetences.observe(document.querySelector('#description'));




    
}





