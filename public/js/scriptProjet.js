



    // Observer Arrow Projects 
    const observerArrow = new IntersectionObserver(entries => {
        // Loop over the entries
        entries.forEach(entry => {
            // If the element is visible
            if (entry.isIntersecting) {

                // document.getElementById("competences").classList.add("competencesAnim")

                // Draw du checkbox <Compétences/> CV
                var arrowPathes = document.querySelectorAll('.arrowSvg path');
                arrowPathes.forEach(element => {
                    var lengthArrow = element.getTotalLength();
                    element.style.transition = element.style.WebkitTransition = 'none';
                    element.style.strokeDasharray = lengthArrow + ' ' + lengthArrow;
                    element.style.strokeDashoffset = lengthArrow;
                    element.getBoundingClientRect();
                    element.style.transition = element.style.WebkitTransition =
                    'stroke-dashoffset 2.5s 0.5s ease-in-out';
                    element.style.strokeDashoffset = '0';    
                });

                // setTimeout(function() {
                //     document.getElementById("competences").style.opacity = "1";
                //     document.getElementById("competences").classList.remove("competencesAnim")
                // }, 2001)
            }
        })
    })
    observerArrow.observe(document.querySelector('#projectSlide1'));
    




