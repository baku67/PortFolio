window.onload = function() {

  document.getElementById("contactButton").addEventListener("click", function() {
    document.getElementById("contactButton").classList.add("fadeOut");
    setTimeout(function() {
      document.getElementById("contactButton").remove();
      document.getElementById("plz-form-4e67dacf-1c2f-4b24-8594-268e8604f643").style.height = "auto";
      document.getElementById("plz-form-4e67dacf-1c2f-4b24-8594-268e8604f643").classList.add("fadeInForm");
      // document.getElementById("contactFormContainer").innerHTML = "<form id='plz-form-4e67dacf-1c2f-4b24-8594-268e8604f643'></form><script async src='https://brain.plezi.co/api/v1/web_forms/scripts?content_web_form_id=4e67dacf-1c2f-4b24-8594-268e8604f643'></script><!-- <iframe src='https://docs.google.com/forms/d/e/1FAIpQLSdt8w6_pAWo7gCHR6d318cRztKuIpBEdwTqLZIo9CINM0q5qQ/viewform?embedded=true' width='640' height='812' frameborder='0' marginheight='0' marginwidth='0'>Chargement…</iframe> -->";
    }, 500)

  })



}