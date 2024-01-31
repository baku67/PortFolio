

window.onload = function() {


    // **********  MOBILE: Click outside nav burger si actif = closeNav
    var sidenav = document.getElementById("mySidenav");
    var openBtn = document.getElementById("openBtn");
    var closeBtn = document.getElementById("closeBtn");

    openBtn.onclick = openNav;
    closeBtn.onclick = closeNav;


    document.getElementById("pageContainerProjet").addEventListener('click', function(e){   

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

    }

    /* Set the width of the side navigation to 0 */
    function closeNav() {
        sidenav.classList.remove("active");
        openBtn.style.display = "block";
    }
    //******  */ FIN



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





