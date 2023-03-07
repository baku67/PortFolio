window.onload = function() {

    // ScrollReveal avec observer pour anims slide
    // ScrollReveal().reveal('.formations');
    // ScrollReveal().reveal('.hobbys');
    // ScrollReveal().reveal('.langages');
    // ScrollReveal().reveal('.outils');
    // ScrollReveal().reveal('.langues');

    // Draw du chapeau diplome <Formation/> CV
    var formationPathes = document.querySelectorAll('.formationSvg path');
    formationPathes.forEach(element => {
        var lengthRec = element.getTotalLength();
        element.style.transition = element.style.WebkitTransition = 'none';
        element.style.strokeDasharray = lengthRec + ' ' + lengthRec;
        element.style.strokeDashoffset = lengthRec;
        element.getBoundingClientRect();
        element.style.transition = element.style.WebkitTransition =
        'stroke-dashoffset 2.5s 1s ease-in-out';
        element.style.strokeDashoffset = '0';    
    });

    // Draw du checkbox <Compétences/> CV
    var skillsPathes = document.querySelectorAll('.skillsSvg path');
    skillsPathes.forEach(element => {
        var lengthRec2 = element.getTotalLength();
        element.style.transition = element.style.WebkitTransition = 'none';
        element.style.strokeDasharray = lengthRec2 + ' ' + lengthRec2;
        element.style.strokeDashoffset = lengthRec2;
        element.getBoundingClientRect();
        element.style.transition = element.style.WebkitTransition =
        'stroke-dashoffset 2.5s 2.3s ease-in-out';
        element.style.strokeDashoffset = '0';    
    });

    // Draw du poisson <Hobbies/> CV
    var hobbiesPathes = document.querySelectorAll('.hobbiesSvg path');
    hobbiesPathes.forEach(element => {
        var lengthRec3 = element.getTotalLength();
        element.style.transition = element.style.WebkitTransition = 'none';
        element.style.strokeDasharray = lengthRec3 + ' ' + lengthRec3;
        element.style.strokeDashoffset = lengthRec3;
        element.getBoundingClientRect();
        element.style.transition = element.style.WebkitTransition =
        'stroke-dashoffset 2.5s 2.3s ease-in-out';
        element.style.strokeDashoffset = '0';    
    });

    // Draw clée à molette <Outils/> CV
    var outilsPathes = document.querySelectorAll('.outilsSvg path');
    outilsPathes.forEach(element => {
        var lengthRec4 = element.getTotalLength();
        element.style.transition = element.style.WebkitTransition = 'none';
        element.style.strokeDasharray = lengthRec4 + ' ' + lengthRec4;
        element.style.strokeDashoffset = lengthRec4;
        element.getBoundingClientRect();
        element.style.transition = element.style.WebkitTransition =
        'stroke-dashoffset 2.5s 2.3s ease-in-out';
        element.style.strokeDashoffset = '0';    
    });

    // Draw bulles discussion <Langues/> CV
    var langsPathes = document.querySelectorAll('.langsSvg path');
    langsPathes.forEach(element => {
        var lengthRec5 = element.getTotalLength();
        element.style.transition = element.style.WebkitTransition = 'none';
        element.style.strokeDasharray = lengthRec5 + ' ' + lengthRec5;
        element.style.strokeDashoffset = lengthRec5;
        element.getBoundingClientRect();
        element.style.transition = element.style.WebkitTransition =
        'stroke-dashoffset 2.5s 2.3s ease-in-out';
        element.style.strokeDashoffset = '0';    
    });

}
