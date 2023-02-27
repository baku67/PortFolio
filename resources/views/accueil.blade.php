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
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styleMediaQueries2k.css') }}" />

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
        <link rel="manifest" href="img/favicon/site.webmanifest">

        <!-- ScriptJS -->
        <script type="text/javascript" src="{{ URL::asset('js/scriptAccueil.js') }}"></script>

        <!-- JQUERY -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <style>/*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}</style>
    
        <!-- Formulaire de contact  -->
        <script type="text/javascript" async src="https://brain.plezi.co/api/v1/analytics?tenant=3ac68973-0344-4105-94e9-d5ff3d7c2f5e&tw=77a25b05-c57a-49c7-b93a-59b2e7815c8b"></script>
    </head>




    <body>

        <!-- Header ("Portfolio. + Basile KUNTZ - Developpeur Web") -->
        <div style="width:100%;">
            <h1 class="testH1"><a href="/">Portfolio <span style="color:#E7E8F2; position:relative; top:6px;">&#9642;</span></a></h1>
            <span  id="lineBreakMobile"></br></span>
            <h2 id="portfolioSousTitre" style="margin-left:6%; color:#ef3b2d; font-size:1.2em;">Basile KUNTZ <span style="color:#E7E8F2; font-size:80%;"> -  Développeur Web <span id="lineBreakMobileStatus"></br></span><span id="status"> En formation</span><span id="status2"> En recherche de stage</span></span></h2>
        </div>

        <!-- Menu -->
        <div id="NavBarContainer">
            <p id="menuLigneCv" style="color:#E7E8F2;">
                <a id="accueilMenu" class="menuButton selected" href="/">Accueil</a> 
                &nbsp; 
                <a id="cvMenu" class="menuButton" href="/cv">Mon CV</a> 
                &nbsp; 
                <a id="projetsMenu" class="menuButton" href="/projets">Projets</a> 
                &nbsp; 
                <!-- <a id="veilleMenu" class="menuButton" href="/veille">Veille</a> 
                &nbsp; -->
                <a id="contactMenu" class="menuButton" href="/loisirs">Loisirs</a>
            </p>
        </div>

        <!-- Trait séparateur -->
        <div id="traitHeader"></div>


        <!-- Contenu (load JS) -->
        <div id="pageContainer">

            <h2 class="pageTitle">Bienvenue sur mon portfolio</h2>
            </br>

            <div class="accueilGrid">


                <div>
                    <img class="imgAccueil" src="img/basile_compressed.png"/>

                </div>

                <p class="paragrapheAccueil" >
                    <!-- <span style="margin-left: 5px; font-size: 130%;">Bienvenue, </span>
                    <br><br> -->
                    &nbsp;&nbsp;&nbsp;&nbsp;Je suis Basile KUNTZ, un jeune en pleine form(e)ation de développeur web et web mobile au centre Elan Formation de Strasbourg. Je cherche actuellement à mettre à profit mes compétences et à m'améliorer dans le cadre d'un stage professionel.
                    J’apprécie les choses simples de la vie, ma personnalité et ma créativité parleront d’elles-même. 
                    <br>Donner vie à un site web, c’est surprenant, motivant, beau, captivant, fascinant, prenant… et ça j’adore ! 
                    <br>Et si on se rencontrait pour discuter de votre projet ? 
                </p>

            </div>


            </br>

            <div id="citationAndLightBulbWrapper">
                <div id="inspirationContainer">
                    <h3 id="inspirationTitle">Inspirations:</h3>
                    <div style="position:relative;">
                        <img class="quote1" src="img/quote1.png" />
                        <!-- <a href="https://www.flaticon.com/free-icons/quotation-marks" title="quotation marks icons">Quotation marks icons created by Retinaicons - Flaticon</a> -->
                        <quote style="position:relative;"><span id="quoteContent">There are three responses to a piece of design — yes, no, and WOW! Wow is the one to aim for. – Milton Glaser</span></quote>
                        <img class="quote2" src="img/quote2.png" />
                    </div>
                    <button id="changeQuotation">Changer</button>
                </div>

                <!-- LightBulb Ampoule SVG (https://jakearchibald.com/2013/animated-line-drawing-svg/) -->
                <div class="lightBulbWrapperDiv">
                    <svg class="lightBulbContainer">
                        <path 
                            id="lightBulbPath"
                            d="M 344 11 C -14 10 -70 407 185 533 C 207 545 247 556 247 606 L 247 642 C 235 663 236 677 247 696 C 236 712 236 727 247 745 C 237 761 238 777 247 792 C 295 808 390 812 450 793 C 459 780 458 760 450 745 C 460 728 459 709 450 695 C 459 679 458 658 449 642 L 448 606 C 446 552 492 541 514 530 C 754 408 708 9 344 11"
                        />
                    </svg>

                    <!-- Calque 1 (fils de cuivre) -->
                    <svg class="lightBulbContainer2">
                        <path 
                            id="lightBulbPath2"
                            d="M 294 605 L 295 603 M 295 603 C 293 536 305 335 287 196 Q 277 122 251 196 Q 228 274 342 275 Q 440 273 420 197 Q 392 117 375 197 C 358 334 383.6667 466 388 604"
                        />
                    </svg>

                    <!-- Calque 2 (Halo lumière) -->
                    <div class="lightBulbContainer3">
                    </div>

                    <!-- Calque 3 (effet vis) -->
                    <svg class="lightBulbContainer4">
                        <path 
                            id="lightBulbPath4"
                            d="M 265 641 L 267 642 M 267 642 C 314 661 370 661 411 649 Q 448 638 411 633 Q 249 622 270 686 Q 276 710 397 705 Q 410 705 421 701 Q 449 691 412 685 Q 247 676 269 736 Q 277 758 403 754 Q 417 752 422 750 Q 449 740 413 734 Q 246 727 272 750"
                        />
                    </svg>
                </div>

            </div>


            </br>

            <!-- form https://enjoy.plezi.co -->
            <button id="contactButton">Me contacter</button>
            <form id="plz-form-4e67dacf-1c2f-4b24-8594-268e8604f643"></form>
            <script async src="https://brain.plezi.co/api/v1/web_forms/scripts?content_web_form_id=4e67dacf-1c2f-4b24-8594-268e8604f643"></script>            
            <br><br>


        </div>
        
        <footer class="footerAccueil">www.portfolio.basilek.ovh</footer>


    </body>

</html>