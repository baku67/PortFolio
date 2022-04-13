
window.onload = function() {


    // $("#accueilMenu").click(function() {
    //     $("#pageContainer").load("accueil.php");
    // })


    $("#toggleUtilisateur").click(function() {
        document.getElementById("toggleTechnique").classList.remove("buttonSelected");
        document.getElementById("toggleTechnique").classList.add("buttonNonSelected");

        document.getElementById("toggleUtilisateur").classList.remove("buttonNonSelected");
        document.getElementById("toggleUtilisateur").classList.add("buttonSelected");

        $(document).ready(function() {
            alert('dedans');
            $('#docuLoadContainer').load("ressources/loads/docUtilisateur.html");
        })
    })

    $("#toggleTechnique").click(function() {
        document.getElementById("toggleUtilisateur").classList.remove("buttonSelected");
        document.getElementById("toggleUtilisateur").classList.add("buttonNonSelected");

        document.getElementById("toggleTechnique").classList.remove("buttonNonSelected");
        document.getElementById("toggleTechnique").classList.add("buttonSelected");

        $(document).ready(function() {
            alert('dedans');
            $('#docuLoadContainer').load("ressources/loads/docTechnique.html");
        })
    })

}