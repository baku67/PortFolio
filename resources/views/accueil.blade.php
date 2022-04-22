<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PortFolio - Accueil</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styleMediaQueries.css') }}" />

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
        <link rel="manifest" href="img/favicon/site.webmanifest">

        <!-- ScriptJS -->
        <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>

        <!-- JQUERY -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <style>/*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}</style>
    </head>









    <body>

        <!-- Header ("Portfolio. + Basile KUNTZ - Developpeur Web") -->
        <div style="width:100%;">
            <h1 id="portfolioTitle" style="margin-left:4%; color:#ef3b2d; margin-block-start:0.1em;">Portfolio <span style="color:#E7E8F2; position:relative; top:6px;">&#9642;</span></h1>
            </br>
            <h2 id="portfolioSousTitre" style="margin-left:6%; color:#ef3b2d; font-size:1.2em;">Basile KUNTZ <span style="color:#E7E8F2; font-size:80%;"> -  Développeur Web</span></h2>
        </div>

        <!-- Menu -->
        <div id="NavBarContainer" style="position:absolute; top:0%; right:0%; margin-right:2%;">
            <p id="menuLigneCv" style="color:#E7E8F2;">
                <a id="accueilMenu" class="menuButton selected" href="/">Accueil</a> 
                &nbsp; 
                <a id="cvMenu" class="menuButton" href="/cv">C.V.</a> 
                &nbsp; 
                <a id="projetsMenu" class="menuButton" href="/projets">Projet</a> 
                &nbsp; 
                <a id="veilleMenu" class="menuButton" href="/veille">Veille</a> 
                &nbsp;
                <a id="contactMenu" class="menuButton" href="/contact">Contact</a>
            </p>
        </div>

        <!-- Trait séparateur -->
        <!-- <div id="traitHeader"></div> -->


        <!-- Contenu (load JS) -->
        <div id="pageContainer">

            <h2 class="pageTitle">Présentation</h2>

            </br>

            <div class="accueilGrid">


                <div>
                    <img class="imgAccueil" src="img/moi4.jpg" style=""/>
                </div>

                <p class="paragrapheAccueil" >
                    <span style="margin-left: 10px; font-size: 120%;">Bonjour </span>
                    <br><br>
                    &nbsp;&nbsp;&nbsp;Je m'appelle Basile, jai 25 ans et je suis actuellement en 2ème année de BTS SIO - option SLAM (Solutions Logicielles et Applications Métiers) à la CCI de Strasbourg.
                     J'éffectue cette formation en alternance dans la société Europe Tech Group, basée à Haguenau, qui développe et vends ses solutions de gestion à des entreprises de portage salarial notamment. 

                    <br><br>
                    &nbsp;&nbsp;&nbsp;Je me suis lancé dans le developpement Web au moment du premier confinement, pendant mon Service civique au pôle numérique de l'Escale il y a 2 ans. 
                    J'avais coder un simple site vitrine d'un bar fictif pour me familiariser avec les premiers langages HTML et CSS et j'ai très vite abandonné les jeux vidéos 
                    pour ne faire que ça par la suite. J'aime particulièrement passer du temps sur le front-end pour rendre le site visuellement agréable tout en simplfiant son utilisation.
                    Durant ma formation, j'ai consolider ces acquis et découvert les langages JavaScript, Php et React au travers de divers projets, mais aussi aquis une méthode de travail plus rigoureuse et efficace. 
                    En entreprise, j'ai pu découvrir et m'acclimater à l'univers professionnel du métier tout en effectuant un travail de support client, HotFix, et développement.
                
                    <br><br>
                    &nbsp;&nbsp;&nbsp;A part tout ça, je suis également passionné de plongée et de photographie sous-marine. J'aime beaucoup la photographie macroscopique car elle consiste à chercher patiemment dans les petits détails et pendant parfois un certain temps pour pouvoir prendre de bonnes photos. Il faut également être assez calme, posé et observateur pour ne pas effrayer les bêtes, ce qui correspond plutôt bien avec mon tempérament. Tout au long de mes vacances, j'ai passé plusieurs niveaux de plongée avec le système américain PADI (OpenWater, Advanced, Nitrox, Deep, Rescue) ainsi que des stages de photographie sous-marine et "terrestre" . 
                    Je suis également assez doué avec un crayon et j'ai de bonnes notions en retouches et éditions numériques. Mon métier rêvé, quand j'étais petit et "moyen-grand", était artiste de rue car je passait mon temps à dessiner. 
                    Désormais, mon but est d'alier la création, le design graphique et le développement web.                
                </p>

            </div>

            <br><br><br><br><br><br>

            <div class="galerieDiv">

                <h3 style="font-size:170%; text-align:center;">Galerie: </h3>

                <br>
                <div class="galerieAccueil">

                    <article class="location-listing" style="margin:auto; position:relative;">
                        <a class="loupesGalerie" href="#">Zoom</a>
                        <div class="photosGallerie photo1 location-image">
                                <img style="width:100%; height:auto; margin:auto; vertical-align:middle; border-radius:3px;" src="img/galerie/1_preview.jpg"/>
                            </a>
                        </div>
                    </article>

                    <article class="location-listing" style="margin:auto; position:relative;">
                        <a class="loupesGalerie" href="#">Zoom</a>
                        <div class="photosGallerie photo2 location-image">
                                <img style="width:100%; height:auto; margin:auto; vertical-align:middle; border-radius:3px;" src="img/galerie/2_preview.jpg"/>
                            </a>
                        </div>
                    </article>

                    <article class="location-listing" style="margin:auto; position:relative;">
                        <a class="loupesGalerie" href="#">Zoom</a>
                        <div class="photosGallerie photo3 location-image">
                                <img style="width:100%; height:auto; margin:auto; vertical-align:middle; border-radius:3px;" src="img/galerie/3_preview.jpg"/>
                            </a>
                        </div>
                    </article>

                    <article class="location-listing" style="margin:auto; position:relative;">
                        <a class="loupesGalerie" href="#">Zoom</a>
                        <div class="photosGallerie photo4 location-image">
                                <img style="width:100%; height:auto; margin:auto; vertical-align:middle; border-radius:3px;" src="img/galerie/4_preview.jpg"/>
                            </a>
                        </div>
                    </article>

                    <article class="location-listing" style="margin:auto; position:relative;">
                        <a class="loupesGalerie" href="#">Zoom</a>
                        <div class="photosGallerie photo5 location-image">
                                <img style="width:100%; height:auto; margin:auto; vertical-align:middle; border-radius:3px;" src="img/galerie/5_preview.jpg"/>
                            </a>
                        </div>
                    </article>

                    <article class="location-listing" style="margin:auto; position:relative;">
                        <a class="loupesGalerie" href="#">Zoom</a>
                        <div class="photosGallerie photo6 location-image">
                                <img style="width:100%; height:auto; margin:auto; vertical-align:middle; border-radius:3px;" src="img/galerie/6_preview.jpg"/>
                            </a>
                        </div>
                    </article>

                    <article class="location-listing" style="margin:auto; position:relative;">
                        <a class="loupesGalerie" href="#">Zoom</a>
                        <div class="photosGallerie photo7 location-image">
                                <img style="width:100%; height:auto; margin:auto; vertical-align:middle; border-radius:3px;" src="img/galerie/7_preview.jpg"/>
                            </a>
                        </div>
                    </article>

                    <article class="location-listing" style="margin:auto; position:relative;">
                        <a class="loupesGalerie" href="#">Zoom</a>
                        <div class="photosGallerie photo8 location-image">
                                <img style="width:100%; height:auto; margin:auto; vertical-align:middle; border-radius:3px;" src="img/galerie/8_preview.jpg"/>
                            </a>
                        </div>
                    </article>

                    <article class="location-listing" style="margin:auto; position:relative;">
                        <a class="loupesGalerie" href="#">Zoom</a>
                        <div class="photosGallerie photo9 location-image">
                                <img style="width:100%; height:auto; margin:auto; vertical-align:middle; border-radius:3px;" src="img/galerie/9_preview.jpg"/>
                            </a>
                        </div>
                    </article>

                    <article class="location-listing" style="margin:auto; position:relative;">
                        <a class="loupesGalerie" href="#">Zoom</a>
                        <div class="photosGallerie photo10 location-image">
                                <img style="width:100%; height:auto; margin:auto; vertical-align:middle; border-radius:3px;" src="img/galerie/10_preview.jpg"/>
                            </a>
                        </div>
                    </article>

                    <!-- <article class="location-listing" style="margin:auto; position:relative;">
                        <a class="loupesGalerie" href="#">Zoom</a>
                        <div class="photosGallerie photo11 location-image">
                                <img style="width:100%; height:auto; margin:auto; vertical-align:middle; border-radius:3px;" src=""/>
                            </a>
                        </div>
                    </article> -->

                    <!-- <article class="location-listing" style="margin:auto; position:relative;">
                        <a class="loupesGalerie" href="#">Zoom</a>
                        <div class="photosGallerie photo12 location-image">
                                <img style="width:100%; height:auto; margin:auto; vertical-align:middle; border-radius:3px;" src=""/>
                            </a>
                        </div>
                    </article> -->

                    <!-- <article class="location-listing" style="margin:auto; position:relative;">
                        <a class="loupesGalerie" href="#">Zoom</a>
                        <div class="photosGallerie photo13 location-image">
                                <img style="width:100%; height:auto; margin:auto; vertical-align:middle; border-radius:3px;" src=""/>
                            </a>
                        </div>
                    </article> -->

                    <!-- <article class="location-listing" style="margin:auto; position:relative;">
                        <a class="loupesGalerie" href="#">Zoom</a>
                        <div class="photosGallerie photo14 location-image">
                                <img style="width:100%; height:auto; margin:auto; vertical-align:middle; border-radius:3px;" src=""/>
                            </a>
                        </div>
                    </article> -->

                    <!-- <article class="location-listing" style="margin:auto; position:relative;">
                        <a class="loupesGalerie" href="#">Zoom</a>
                        <div class="photosGallerie photo15 location-image">
                                <img style="width:100%; height:auto; margin:auto; vertical-align:middle; border-radius:3px;" src=""/>
                            </a>
                        </div>
                    </article> -->

                </div>

            </div>

        </div>

        

    </body>

</html>