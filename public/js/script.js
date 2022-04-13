
window.onload = function() {


    // Documentation initialisée sur Utilisateur
    $(document).ready(function() {
        $('#docuLoadContainer').load("views/docUtilisateur.html");
    })

    // Load et Styles boutons toggle Documentation User/Tech
    $("#toggleUtilisateur").click(function() {
        document.getElementById("toggleTechnique").classList.remove("buttonSelected");
        document.getElementById("toggleTechnique").classList.add("buttonNonSelected");

        document.getElementById("toggleUtilisateur").classList.remove("buttonNonSelected");
        document.getElementById("toggleUtilisateur").classList.add("buttonSelected");

        $(document).ready(function() {
            $('#docuLoadContainer').load("views/docUtilisateur.html");
        })
    })

    $("#toggleTechnique").click(function() {
        document.getElementById("toggleUtilisateur").classList.remove("buttonSelected");
        document.getElementById("toggleUtilisateur").classList.add("buttonNonSelected");

        document.getElementById("toggleTechnique").classList.remove("buttonNonSelected");
        document.getElementById("toggleTechnique").classList.add("buttonSelected");

        $(document).ready(function() {
            $('#docuLoadContainer').load("views/docTechnique.html");
        })
    })

}