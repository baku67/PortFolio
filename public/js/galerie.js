window.onload = function() {


  document.getElementById("photographieTitle").addEventListener("click", function() {
    document.querySelectorAll(".photosGallerie").forEach(function(elem) {
      if (elem.style.display == "block") {
        elem.style.display = "none";
      }
      else {
        elem.style.display = "block";
      }
    });
  })


    // Apparition des articles
    let articles = document.querySelectorAll("article");
    let articlesImg = document.querySelectorAll("img");
    var nbr = 0;
    

    articles.forEach((element, i) => {
        setTimeout(function() {
            element.classList.add("galeriePhotoFadeIn");
        }, i * 70)

    })
    // Fin apparition

    // Compteur d'image chargées (HS: tout proc à la fin)
    // articlesImg.forEach(element => {
    //   if ((element.complete) && (element.naturalHeight !== 0)) {
    //     nbr += 1;
    //     console.log(nbr);
    //   }
    // });

    // Fade In du message loadingLong au bout de 3s et remove en dessous
    // Mettre au dessus/en dessous du loadSpinner


    // One-liner pour proc quand all img chargées 
    Promise.all(Array.from(document.images).filter(img => !img.complete).map(img => new Promise(resolve => { img.onload = img.onerror = resolve; }))).then(() => {
      // alert('chargé');

      document.getElementById('motion-demo').style.display = "block";
      document.getElementById('motion-demo2').style.display = "block";
      document.getElementById('motion-demo3a').style.display = "block";
      document.getElementById('motion-demo3b').style.display = "block";
      document.getElementById('motion-demo_whaleShark').style.display = "block";

      document.getElementById("messageGalerie").classList.add("fadeInHd");



      document.getElementById('spinnerDiv').remove();
      document.getElementById('messageLoadingLong').remove();
    });






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