window.onload = function() {

    // ScrollReveal avec observer pour anims slide
    // ScrollReveal().reveal('.formations');
    // ScrollReveal().reveal('.hobbys');
    // ScrollReveal().reveal('.langages');
    // ScrollReveal().reveal('.outils');
    // ScrollReveal().reveal('.langues');



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
