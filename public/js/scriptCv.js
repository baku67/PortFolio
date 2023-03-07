window.onload = function() {


    console.log(document.querySelector('.formationSvg path'));
    console.log(document.querySelectorAll('.formationSvg path'));

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


}
