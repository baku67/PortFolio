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
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style4k.css') }}" />

        <script src="https://kit.fontawesome.com/698848973e.js" crossorigin="anonymous"></script>

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
        <link rel="manifest" href="img/favicon/site.webmanifest">

        <!-- ScriptJS -->
        <script type="text/javascript" src="{{ URL::asset('js/scriptAccueil.js') }}"></script>
        <!-- <script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script> -->

        <!-- JQUERY -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <style>/*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}</style>
    
        <!-- Formulaire de contact  -->
        <script type="text/javascript" async src="https://brain.plezi.co/api/v1/analytics?tenant=3ac68973-0344-4105-94e9-d5ff3d7c2f5e&tw=77a25b05-c57a-49c7-b93a-59b2e7815c8b"></script>
    </head>




    <body id="body" data-theme="dark">




        <!-- WIP menu-burger mobile -->
        <div id="mySidenav" class="sidenav isMobile" data-theme="dark">

            <a id="closeBtn" href="#" class="close">×</a>

            <ul style="position:relative;">
                <li>
                    <a id="accueilMenu" class="menuButton selected" href="/">
                        <i class="fa-solid fa-house homeIconFa"></i>
                        <span style="margin-left:7px;">Accueil</span>
                    </a>
                </li>
                <li>
                    <a id="cvMenu" class="menuButton burgerMenuButtonWithImg" href="/cv" style="position:relative; right:3px;">
                        <img src="img\navBurgerImg\nav_cv_red.png" id="navBurger_cvIcon" class="navBurger_cvIcon" style="opacity:0.9;" data-theme="dark" />
                        <span>Mon CV</span>
                    </a>
                </li>
                <li>
                    <a id="projetsMenu" class="menuButton burgerMenuButtonWithImg" href="/projets">
                        <img src="img\navBurgerImg\nav_projets_red.png" id="navBurger_projectsIcon" class="navBurger_projectsIcon" style="opacity:0.9;" data-theme="dark" />
                        <span>Projets</span>
                    </a>
                </li>
                <li>
                    <a id="contactMenu" class="menuButton burgerMenuButtonWithImg" href="/loisirs">
                        <img src="img\navBurgerImg\nav_loisirs_red.png" id="navBurger_loisirsIcon" class="navBurger_loisirsIcon" style="opacity:0.9;" data-theme="dark" />
                        <span>Loisirs</span>
                    </a>
                </li>
                <li class="lablelsBurgerContainer">
                    <span id="status"> #OpenToWork</span>
                    <span id="status2"><i class="fa-solid fa-magnifying-glass"></i> Alternance CDA</span>
                </li>
                <li class="socialBurgerContainer">
                    <a href="https://github.com/baku67" target="_blank" style="padding:2px">
                        <i class="fa-brands fa-github burgerSocialBtn"></i>
                    </a>
                    <a href="https://linkedin.com/in/basile-kuntz-719278267" target="_blank" style="padding:2px">
                        <i class="fa-brands fa-linkedin burgerSocialBtn"></i>
                    </a>
                </li>
            </ul>

            <!-- Toggle light-theme (scriptAccueil.js) -->
            <div class="containerToggleLight isMobile">
                <i id="currentThemeIcon" class="currentThemeIcon fa-solid fa-moon" data-theme="dark"></i>
                <label class="switch">
                    <input type="checkbox" id="themeToggle">
                    <span class="slider"></span>
                </label>
            </div>

        </div>

        <a href="#" id="openBtn">
            <span class="burger-icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </a>

        <script>
            
        </script>
        <!-- FIN -->






        <!-- Raie ajoutée en JS interval -->
        <!-- <div id="raieAccueil1"></div> -->


        <main id="pageContainer" class="pageContainerAccueil" style="margin:0% 0%;">

            <!-- (Desktop) Lors scroll: sideNav -->
            <ul id="sideNavDesktop">
                <li class="sideNavDesktop sideNavDesktopActif">
                    <a href="/" style="position:relative; right:2px;">
                        <i class="fa-solid fa-house desktopNavAccueil desktopNavAccueilActif"></i>
                        <span class="desktopNavSpan desktopSpanActif">Accueil</span>
                    </a>
                </li>
                <li class="sideNavDesktop sideNavDesktopCv">
                    <a href="/cv" style="position:relative;left:2px;">
                        <img src="img/navBurgerImg/nav_cv_grey.png" class="desktopNavCv notActifNavDesktop" />
                        <span class="desktopNavSpan desktopNavSpanCV">Mon CV</span>
                    </a>
                </li>
                <li class="sideNavDesktop sideNavDesktopProjets">
                    <a href="/projets">
                        <img src="img/navBurgerImg/nav_projets_grey.png" class="desktopNavProjets notActifNavDesktop" />
                        <span class="desktopNavSpan">Projets</span>
                    </a>
                </li>
                <li class="sideNavDesktop sideNavDesktopLoisirs">
                    <a href="/loisirs"> 
                        <img src="img/navBurgerImg/nav_loisirs_grey.png" class="desktopNavLoisirs notActifNavDesktop" />
                        <span class="desktopNavSpan">Loisirs</span>
                    </a>
                </li>
            </ul>
            <!-- FIN -->
 

            <!-- Header -->
            <header id="headerAccueil" style="position:relative;" data-theme="dark">
                <div id="pageTitleDiv" style="width:100%;">
                    <h1 id="titleH1" class="testH1">
                        <a href="/">
                            Portf<span class="titleO">o</span>li<span class="titleO">o</span> 
                            <!-- <span style="color:#E7E8F2; position:relative; top:6px;">&#9642;</span> -->
                        </a>
                        <!-- Smiley -->
                        <!-- <span id="titleSmile" class="titleSmile">)</span> -->
                        <svg id="smileSvgContainer" class="smileSvgContainer" style="position:absolute;">
                            <g class="smileSvg">
                                <path 
                                    id="smilePath"
                                    class="smileSvgPath"
                                    d="M 0 0 C 11.556 7.704 39.804 7.704 51.36 0"
                                />
                            </g>
                        </svg>
                    </h1>
                    <!-- oskour -->
                    <span  id="lineBreakMobile"></br></span>
                    <h2 id="portfolioSousTitre" style="margin-left:6%; color:#ef3b2d;">
                        <span class="authorTitle">Basile KUNTZ </span>
                        <span style="color:#E7E8F2; font-size:80%;">
                            -  Développeur Web <span id="lineBreakMobileStatus"></br></span>
                            <span id="status" class="isDesktopInline"> #OpenToWork</span>
                            <span id="status2" class="isDesktopInline">
                                <i class="fa-solid fa-magnifying-glass"></i> Alternance CDA
                            </span>
                        </span>
                    </h2>
                </div>

                <!-- NavBarre -->
                <div id="NavBarContainer" class="navBarContainerMobile isDesktop">
                    <p id="menuLigneCv" data-theme="dark">
                        <a id="accueilMenu" class="menuButton selected" href="/">Accueil</a> 
                        <!-- &nbsp;  -->
                        <a id="cvMenu" class="menuButton" href="/cv">Mon CV</a> 
                        <!-- &nbsp;  -->
                        <a id="projetsMenu" class="menuButton" href="/projets">Projets</a> 
                        <!-- &nbsp;  -->
                        <a id="contactMenu" class="menuButton" href="/loisirs">Loisirs</a>
                    </p>
                </div>

                <!-- Trait séparateur -->
                <div id="traitHeader"></div>

            </header>


            <div class="accueilPageContent">


                <div style="position:relative">
                        <a class="gitHubLink" target="_blank" href="https://github.com/baku67">
                            <img src="img/githubLogo2.png" id="githubBtnImg" class="githubLogo" data-theme="dark">
                        </a>
                    <h2 id="pageTitle" class="pageTitle" data-theme="dark">Bienvenue sur mon portfolio</h2>
                </div>

                </br>

                <div class="accueilGrid">

                    <div class="fixScalePortraitPC" style="position:relative;">
                        
                        <div id="portraitAccueil" class="imgAccueil" style="z-index:999;" data-theme="dark">
                            <img src="img\portraits\portraitPng2Test.png" class="testPopPortraitImg" />
                        </div>

                    </div>

                    <p id="paragrapheAccueil" class="paragrapheAccueil" data-theme="dark"> 
                        <!-- <span style="margin-left: 5px; font-size: 130%;">Bienvenue, </span>
                        <br><br> -->
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="accueilWord">Je</span> <span class="accueilWord">suis</span> <span class="accueilWord">Basile</span> <span class="accueilWord">KUNTZ,</span> <span class="accueilWord">et</span> <span class="accueilWord">je</span> <span class="accueilWord">viens</span> <span class="accueilWord">d'obtenir</span> <span class="accueilWord">mon</span> <span class="accueilWord">titre</span> <span class="accueilWord">de</span> <strong><span class="accueilWord">développeur</span> <span class="accueilWord">web</span> <span class="accueilWord">et</span> <span class="accueilWord">web</span> <span class="accueilWord">mobile</span></strong> <span class="accueilWord">au</span> <span class="accueilWord">centre</span> <span class="accueilWord">Élan</span> <span class="accueilWord">Formation</span> <span class="accueilWord">à</span> <span class="accueilWord">Strasbourg.</span> <span class="accueilWord">Je</span> <span class="accueilWord">cherche</span> <span class="accueilWord">actuellement</span> <span class="accueilWord">à</span> <span class="accueilWord">mettre</span> <span class="accueilWord">à</span> <span class="accueilWord">profit</span> <span class="accueilWord">mes</span> <span class="accueilWord">compétences</span> <span class="accueilWord">et</span> <span class="accueilWord">à</span> <span class="accueilWord">m'améliorer</span> <span class="accueilWord">dans</span> <span class="accueilWord">le</span> <span class="accueilWord">cadre</span> <span class="accueilWord">d'une</span> <strong><span class="accueilWord">alternance</span> <span class="accueilWord">en</span> <span class="accueilWord">licence</span> <span class="accueilWord">CDA</span></strong><span class="accueilWord">.</span>
                        <span class="accueilWord">J’apprécie</span> <span class="accueilWord">les</span> <span class="accueilWord">choses</span> <span class="accueilWord">simples</span> <span class="accueilWord">de</span> <span class="accueilWord">la</span> <span class="accueilWord">vie,</span> <span class="accueilWord">ma</span> <span class="accueilWord">personnalité</span> <span class="accueilWord">et</span> <span class="accueilWord">ma</span> <span class="accueilWord">créativité</span> <span class="accueilWord">parleront</span> <span class="accueilWord">d’elles-même.</span>
                        <br><span class="accueilWord">Donner</span> <span class="accueilWord">vie</span> <span class="accueilWord">à</span> <span class="accueilWord">un</span> <span class="accueilWord">site</span> <span class="accueilWord">web,</span> <span class="accueilWord">c’est</span> <span class="accueilWord">surprenant,</span> <span class="accueilWord">motivant,</span> <span class="accueilWord">beau,</span> <span class="accueilWord">captivant,</span> <span class="accueilWord">fascinant,</span> <span class="accueilWord">prenant…</span> <span class="accueilWord">et</span> <span class="accueilWord">ça</span> <span class="accueilWord">j’adore</span> <span class="accueilWord">!</span> 
                        <br><span class="accueilWord">Et</span> <span class="accueilWord">si</span> <span class="accueilWord">on</span> <span class="accueilWord">se</span> <span class="accueilWord">rencontrait</span> <span class="accueilWord">pour</span> <span class="accueilWord">discuter</span> <span class="accueilWord">de</span> <span class="accueilWord">votre</span> <span class="accueilWord">projet</span> <span class="accueilWord">?</span>
                    </p>

                </div>


                </br>

                
                <div id="contactDiv">

                    <div id="citationAndLightBulbWrapper">
                        
                        <!-- LightBulb Ampoule SVG (https://jakearchibald.com/2013/animated-line-drawing-svg/) -->
                        <div id="lightBulbWrapperDiv" class="lightBulbWrapperDiv" data-theme="dark">
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

                            
                            <!-- Calque 4 (Hover me text SVG) -->
                            <svg class="lightBulbContainer5">
                                <path 
                                    id="lightBulbPath5"
                                    d="M 163.2212 793.6805 L 163.134 792.6843 M 139.2637 703.4251 L 163.134 792.6843 Q 146.9962 745.9128 173.0716 745.6392 Q 197.9764 743.4603 181.5772 693.7002 L 200.205 780.4067 C 204.2891 804.141 207.7144 728.5549 239.6798 726.7621 C 280.1751 719.2039 288.4306 767.6688 246.8518 774.3179 C 210.9017 776.4594 206.7182 728.642 245.5698 725.2429 Q 285.3679 709.7152 293.6983 736.0895 Q 321.4043 788.8757 319.2507 729.8387 C 321.7539 712.5548 359.8829 735.3182 385.8215 722.0069 Q 407.2523 703.067 379.6578 697.4506 Q 349.249 694.0881 343.5952 732.7279 Q 338.8504 770.2844 416.1553 747.46 C 425.9429 744.596 428.3964 715.2706 431.4599 692.9185 C 441.9448 698.0241 453.2516 701.0502 470.5355 703.5533 Q 456.625 759.168 447.13 760.848 C 397.414 767.437 367.499 783.341 368.97 802.47 Q 371.282 818.025 392.092 824.331 C 416.862 828.078 412 818.3333 433 796 Q 447 783 455 798 C 458 805 453 821.3333 452 833 C 455 805 460 797 464 793 Q 472 787 478 798 C 483 813 478 840 480 832 C 479 786 496 796 498 807 C 501 825 497 828 502 835 C 506 836 506 836 509 834 C 514 829 514 824 521 819 C 526 815 545 821 560 816 C 564 814 568 810 568 805 C 568 800 563 794 550 794 C 540 794 534 796 528 803 C 522 808 501 858 568 837"
                                />
                            </svg>

                            <!-- Poisson qui passe devant: popé depuis JS avec intervals -->
                            <!-- <div id="poissonAcueil1"></div> -->

                        </div>

                        <div id="inspirationContainer" data-theme="dark">
                            <h3 id="inspirationTitle" data-theme="dark">Inspirations:</h3>
                            <div style="position:relative;">
                                <img class="quote1" src="img/quote1.png" />
                                <!-- <a href="https://www.flaticon.com/free-icons/quotation-marks" title="quotation marks icons">Quotation marks icons created by Retinaicons - Flaticon</a> -->
                                <quote style="position:relative;">
                                    <span id="quoteContent" data-theme="dark">Digital design is like painting, except the paint never dries. 
                                        <span class="quoteAuthor">- Neville Brody</span>
                                    </span>
                                </quote>
                                <img class="quote2" src="img/quote2.png" />
                            </div>
                            <button id="changeQuotation"><i class="fa-solid fa-rotate"></i></button>
                        </div>

                    </div>


                    <br>


                    <div id="accueilProjectsDiv" class="accueilProjectsDiv">

                        <!-- Label bouton mobile -->
                        <a href="https://portfolio.basilek.ovh/projets" class="accueilProjectsLabelLink">
                            <div id="accueilProjectsBtnLabel" class="accueilProjectsBtnLabel">
                                <span id="accueilProjectsRightDivSpan" class="accueilProjectsRightDivSpan">
                                    Voir mes projets 
                                </span>
                            </div>
                        </a>

                        <!-- Desktop (avec controls) video large -->
                        <div class="accueilVideoPcDiv1 isDesktop">
                            <div class="accueilVideoPcDiv isDesktop">

                                <video autoplay controls muted loop id="accueilVideo" class="accueilVideoPcVideo isDesktop" data-theme="dark">
                                    <source src="img\demos\projectsPreview_trimmedPc2.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>

                            </div>

                            <!-- Desktop: icones keyboard+mouse PC -->
                            <img src="img/keyboard_blue.png" class="accueilKeyboardPngDesktop isDesktop">

                        </div>

                        <!-- Mobile Bouton (sans controls) video trimmed -->
                        <video autoplay muted loop id="accueilVideo" class="accueilVideo isMobile" data-theme="dark">
                            <source src="img\demos\projectsPreview_trimmedMobile4.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>

                        <!-- Bouton PC -->
                        <a href="https://portfolio.basilek.ovh/projets" style="height:fit-content; z-index:9;" class="accueilProjectsRightLink">
                            <div class="accueilProjectsRightDiv">
                                <img src="img/projectsIcon2.png" class="accueilProjectsIcon" />
                                <span class="accueilProjectsRightDivSpan">
                                    Voir <br>mes projets 
                                    <!-- <i class="fa-solid fa-square-up-right redirectProjectsIcon"></i> -->
                                </span>
                            </div>
                        </a>

                        <div class="accueilProjectsTrait"></div>

                        <!-- Mobile: icones keyboard+mouse Mobile -->
                        <img src="img/keyboard_blue.png" id="accueilKeyboardPng" class="accueilKeyboardPng isMobile" data-theme="dark">

                    </div>


                    <!-- <div class="accueilGrid2"> -->

                        <!-- form https://enjoy.plezi.co -->
                        <div class="contactBtnDiv" style="position:relative;">
                            <div id="contactBtnFade">
                                <button id="contactButton">
                                    <i class="fa-regular fa-paper-plane"></i>
                                    <span> Contactez-moi</span>
                                </button>
                                <a href="https://www.linkedin.com/in/basile-kuntz-719278267/"><i class="fa-brands fa-linkedin-in linkedinBtn"></i></a>
                            </div>
                            <form id="plz-form-4e67dacf-1c2f-4b24-8594-268e8604f643"></form>
                            <script async src="https://brain.plezi.co/api/v1/web_forms/scripts?content_web_form_id=4e67dacf-1c2f-4b24-8594-268e8604f643"></script>      
                            
                            <i id="formBackBtn" class="fa-solid fa-arrow-left"></i>
                        </div>
                    <!-- </div> -->

                </div>

            </div>


        </main>
        


        <footer class="footerAccueil">www.portfolio.basilek.ovh - <a href="https://www.linkedin.com/in/basile-kuntz-719278267/" class="socialFooter"><i class="fa-brands fa-linkedin"></i></a><a href="https://github.com/baku67" class="socialFooter"><i class="fa-brands fa-github"></i></a></footer>



    </body>

</html>