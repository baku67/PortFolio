

window.onload = function() {

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



