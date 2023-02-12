window.onload = function() {



    // Apparition des articles
    let articles = document.querySelectorAll("article");

    articles.forEach((element, i) => {
        setTimeout(function() {
            element.classList.add("galeriePhotoFadeIn");
        }, i * 40)
    })
    // Fin apparition







    // Modal onClick
    $(document).ready(function() {

        let modalImageGallerie = document.getElementById('myModal');
        let modalImg = document.getElementById("modalImage");
        let captionText = document.getElementById("caption");

        let arrowNext = document.getElementById("arrowNext");
        let arrowPrevious = document.getElementById("arrowPrevious");

        let articles = $(".images"); 


        // Plutot mettre un toggle pour que ce soit répétable et voir pour hover "zoom-out" (important car usage unique)
        modalImg.onclick = function() {
          modalImg.style.maxWidth = "1200px";
          modalImg.onclick = function() {
            modalImg.style.maxWidth = "900px";
          }
        }


        articles.click(function() {

          var intTemp = parseInt(this.getAttribute('alt'));

          modalImg.src = "img/galerie/" + this.getAttribute('alt') + ".jpg";

          modalImageGallerie.style.display = "block";
          arrowNext.style.display = "block";
          arrowPrevious.style.display = "block";

          captionText.innerHTML = this.getAttribute('def');

          if (intTemp == 1) {
            arrowPrevious.style.opacity = 0.1;
            arrowPrevious.style.cursor = "default";
          }

          arrowNext.onclick = function() {
            intTemp++;
            modalImg.src = "img/galerie/" + (intTemp) + ".jpg";
            arrowPrevious.style.opacity = 1;
            arrowPrevious.style.cursor = "pointer";

          }

          arrowPrevious.onclick = function() {
            if (intTemp > 1) {
              intTemp--;
              modalImg.src = "img/galerie/" + (intTemp) + ".jpg";
              arrowPrevious.style.opacity = 1;

              if (intTemp == 1) {
                arrowPrevious.style.opacity = 0.1;
                arrowPrevious.style.cursor = "default";
              }
            }
            else {
              arrowPrevious.style.opacity = 0.1;
              arrowPrevious.style.cursor = "default";
            }
          }

        })    
        


        var span = document.getElementsByClassName("close")[0];

        span.onclick = function() {
          modalImageGallerie.style.display = "none";
          arrowNext.style.display = "none";
          arrowPrevious.style.display = "none";
        }


        window.onclick = function(event) {
          if (event.target == modalImageGallerie) {
            modalImageGallerie.style.display = "none";
            arrowNext.style.display = "none";
            arrowPrevious.style.display = "none";
          }
        }

        //***  Fin modals Galerie


    })




















}