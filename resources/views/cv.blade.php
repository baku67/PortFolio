<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PortFolio - CV</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styleMediaQueries.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styleMediaQueries2k.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style4k.css') }}" />

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
        <link rel="manifest" href="img/favicon/site.webmanifest">

        <!-- ScriptJS -->
        <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/scriptCv.js') }}"></script>

        <!-- JQUERY -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script src="https://kit.fontawesome.com/698848973e.js" crossorigin="anonymous"></script>
        
        <!-- ScrollReveal -->
        <script src="https://unpkg.com/scrollreveal"></script>

        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
    </head>









    <body>

        <!-- Header -->
        <header id="headerCv" class="darkedHeader" style="position:relative;">
            <div style="width:100%;">
                <h1 class="testH1"><a href="/">Portfolio <span style="color:#E7E8F2; position:relative; top:6px;">&#9642;</span></a></h1>
                <span  id="lineBreakMobile"></br></span>
                <h2 id="portfolioSousTitre" style="margin-left:6%; color:#ef3b2d;">Basile KUNTZ <span style="color:#E7E8F2; font-size:80%;"> -  Développeur Web <span id="lineBreakMobileStatus"></br></span><span id="status"> #OpenToWork</span><span id="status2"><i class="fa-solid fa-magnifying-glass"></i> Alternance CDA</span></span></h2>
            </div>

            <!-- NavBarre -->
            <div id="NavBarContainer">
                <p id="menuLigneCv" style="color:#E7E8F2;">
                    <a id="accueilMenu" class="menuButton" href="/">Accueil</a> 
                    &nbsp; 
                    <a id="cvMenu" class="menuButton selected" href="/cv">Mon CV</a> 
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
        </header>








        <!-- Contenu Page -->
        <div id="pageContainer">

            <div>
                <h2 id="titleCv" class="cvTitle">
                    <a href="CV_BasileKuntz_2024_v2.pdf" download="CV_basileKuntz" id="dlCv">
                        <i class="fa-solid fa-file-arrow-down downloadCvIcon"></i>Télécharger en PDF
                    </a><span id="underlineCV">Mon &nbsp;<span style="letter-spacing:3px;">CV</span></span>
                </h2>
            </div>

            <!-- </br>

            <p style="color: white;">E-mail: <span style="color:#ef3b2d;">basile08@hotmail.fr</span></p> -->

            </br>

            <div class="gridContainer" style="color:#E7E8F2;">

                <div id="formations" class="formations">
                    <p class="pageSectionTitle">
                        <span class="highlightSpan">&#x3c;</span> Formations <span class="highlightSpan">/&#x3e;</span>
                        <svg class="trainingSvgContainer" style="position:absolute;">
                            <g class="formationSvg">
                                <path 
                                    class="formationSvgPath"
                                    d="M 4.707 26.52 C 1.901 24.862 2.156 22.566 4.58 21.545 L 59.172 4.964 C 61.008 4.318 62.579 4.262 64.529 4.964 C 83.304 11.933 102.257 19.376 119.5 25.149 C 121.396 25.86 121.87 28.526 119.559 29.474 L 65.966 50.22 C 63.684 51.202 61.46 51.086 59.186 50.091 L 4.835 26.647"
                                />
                                <path 
                                    class="formationSvgPath"
                                    d="M 29.019 44.985 L 28.868 45.443 M 28.869 45.44 L 24.623 74.488 C 23.871 78.863 24.623 79.341 25.922 80.504 C 49.986 93.219 76.101 95.065 101.132 81.334 C 103.125 79.923 103.105 77.974 102.49 75.512 L 96.905 45.739"
                                />
                                <path 
                                    class="formationSvgPath"
                                    d="M 62.147 14.953 L 61.934 14.996 M 61.928 15.005 L 21.043 30.068 C 11.277 34.372 11.443 46.124 7.834 57.12 Q 4.523 72.017 1.378 75.162 Q 9.986 77.48 16.607 82.115 Q 14.124 65.065 7.999 57.12"
                                />
                            </g>
                        </svg>
                    </p>



                    <ul>
                        <li>2023: Formation <span class="highlightSpan">"Développeur web et web mobile"</span> à Élan Formation Strasbourg (validé)
                            <br>
                            <i class="fa-solid fa-arrow-right" style="margin-right:4px; color:#ef3b2d;"></i> <span class="highlightSpan secondaryColorVif">Stage</span> chez Hoplunch (Oberhausbergen)
                        </li>
                        <div class="separateurListe light"></div>
                        <li>2020-2022: <span class="highlightSpan">BTS SIO</span> - Option <span class="highlightSpan">SLAM</span> (Solutions Logicielles et Applications Métiers) <br>CCI campus Illkirch
                            </br>
                            <i class="fa-solid fa-arrow-right" style="margin-right:4px; color:#ef3b2d;"></i> <span class="highlightSpan secondaryColorVif">Alternance</span> chez Europe Tech Group (Haguenau)
                        </li>
                        <div class="separateurListe light"></div>
                        <li>2019: <span class="highlightSpan">Service Civique</span> (Inclusion numérique)</li>
                        <div class="separateurListe light"></div>
                        <!-- <li>2017-2018: L1 Maths-Informatiques (Faculté de Strasbourg)</li>
                        <div class="separateurListe light"></div> -->
                        <li>2015: Baccalauréat Scientifique</li>
                        <!-- <div class="separateurListe light"></div> -->
                    </ul>
                </div>

                <div id="hobbies" class="hobbys">
                    <p class="pageSectionTitle">
                        <span class="highlightSpan">&#x3c;</span> Hobbies <span class="highlightSpan">/&#x3e;</span>

                        <svg class="hobbiesSvgContainer" style="position:absolute;">
                            <g class="hobbiesSvg">
                                <path 
                                    class="hobbiesSvgPath"
                                    d="M 108.395 46.172 C 102.344 44.443 94.131 35.078 86.207 22.975 C 77.13 10.44 53.017 3.31 10.084 6.465 C 5.05 6.474 7.92 7.537 9.939 8.015 C 21.158 11.475 25.768 19.112 28.362 30.35 C 29.37 34.961 25.336 37.41 21.734 34.24 C 16.403 29.053 8.19 27.469 7.326 35.681 C 6.317 42.165 6.173 47.784 7.758 56.429 C 9.055 62.624 19.141 58.734 21.878 55.42 C 24.328 52.251 26.345 56.717 25.624 59.31 C 23.751 67.235 20.581 74.151 10.784 84.813 C 26.489 85.389 38.015 84.813 56.458 76.168 C 58.811 74.861 60.881 75.358 60.348 76.744 C 59.382 80.522 54.8053 83.2007 52.034 86.429 C 50.436 88.285 53.093 88.178 57.082 86.27 C 57.968 85.793 58.65 86.339 57.9 86.952 C 51.695 92.339 58.582 90.771 60.355 89.816 C 64.806 87.704 69.993 80.068 74.603 74.305 C 75.229 73.46 76.165 73.137 76.778 73.073 C 88.08 70.666 95.716 60.292 106.378 53.665 C 108.539 52.08 110.557 47.037 108.251 46.172"
                                />
                                <path 
                                    class="hobbiesSvgPath"
                                    d="M 88.464 41.542 L 88.425 41.538 M 88.426 41.542 C 82.863 41.56 82.817 49.441 88.361 49.487 C 94.088 49.502 94.058 41.545 88.464 41.538"
                                />
                                <path 
                                    class="hobbiesSvgPath"
                                    d="M 22.4849 38.6635 L 22.2572 38.4619 M 22.2842 38.4709 C 15.5801 32.8081 12.0845 33.5974 10.8443 38.2198 C 9.3791 43.9699 10.5059 49.2691 11.7461 53.2156 C 12.8738 56.5978 18.0605 54.1174 21.8936 51.1861 C 27.0794 47.578 25.5017 41.4895 22.4597 38.6635"
                                />
                                <path 
                                    class="hobbiesSvgPath"
                                    d="M 31.235 20.561 L 31.494 20.727 M 31.487 20.739 C 46.863 34.937 41.175 62.549 30.361 67.527 C 29.895 67.768 30.895 67.594 31.371 67.376 C 48.643 55.077 41.937 28.015 32.274 21.023 C 31.679 20.567 31.241 20.262 31.254 20.54"
                                />
                                <path 
                                    class="hobbiesSvgPath"
                                    d="M 47.9585 17.6171 L 48.2434 17.7997 M 48.2357 17.8129 C 65.1493 33.4307 58.8925 63.8039 46.9971 69.2797 C 46.4845 69.5448 47.5845 69.3534 48.1081 69.1136 C 67.1073 55.5847 59.7307 25.8165 49.1014 18.1253 C 48.4469 17.6237 47.9651 17.2882 47.9794 17.594"
                                />
                                <path 
                                    class="hobbiesSvgPath"
                                    d="M 70.448 20.672 L 70.494 20.727 M 70.487 20.739 C 78.307 34.557 79.597 61.6 69.361 67.527 C 69.107 68.014 70.029 67.835 70.371 67.376 C 85.743 52.872 73.083 23.618 71.274 21.023 C 71.04 20.444 70.241 20.262 70.506 20.763"
                                />

                            </g>
                        </svg>
                    </p>

                    <ul>
                        <li>Plongée sous-marine (Niveau Rescue/Deep diver)</li>
                        <div class="separateurListe2"></div>
                        <li>Photographie sous-marine ("Coup de coeur de la rédaction", Divosea Août 2014)</li>
                        <div class="separateurListe2"></div>
                        <li>Scoutisme, Camping, Randonnée</li>
                        <div class="separateurListe2"></div>
                        <li>Dessin crayon, retouches numériques</li>
                        <div class="separateurListe2"></div>
                        <li>Découverte de jeux vidéos</li>
                        <div class="separateurListe2"></div>
                    </ul>
                </div>

                <div id="competences" class="langages">

                    <!-- Titre compétences et svg checkbox -->
                    <p class="pageSectionTitle" style="text-align: center;">
                        <span class="highlightSpan">&#x3c;</span> Compétences <span class="highlightSpan">/&#x3e;</span>

                        <svg class="skillsSvgContainer" style="position:absolute;">
                            <g class="skillsSvg">
                                <path 
                                    class="skillsSvgPath"
                                    d="M 4.08 8.138 L 4.08 8.213 M 4.077 8.216 L 4.066 91.17 C 4.084 94.618 6.133 96.206 8.998 96.217 L 88.709 96.446 C 91.576 96.446 94.321 94.492 94.329 91.973 L 94.329 8.134 C 94.331 5.273 91.564 3.377 88.594 3.317 L 9.916 3.317 C 7.046 3.342 4.089 4.896 4.08 8.204"
                                />
                                <path 
                                    class="skillsSvgPath"
                                    d="M 25.368 32.004 L 25.917 32.584 M 25.901 32.578 L 54.577 63.121 L 134.826 -21.452 L 139.207 -17.186 L 54.78 71.48 L 21.074 36.234 L 25.352 31.957"
                                />

                            </g>
                        </svg>
                    </p>

                    <div class="gridCompetences">
                        <div class="carreCompetences grid-html5">
                            <img class="imgCompetences" src="img/competences/html5.png">
                            <br>
                            <p class="textCompetences">HTML5</p>
                        </div>
                        <div class="carreCompetences grid-css3">
                            <img class="imgCompetences" src="img/competences/css3.png">
                            <p class="textCompetences">CSS3</p>
                        </div>
                        <div class="carreCompetences grid-javascript">
                            <img class="imgCompetences exeptionJs" src="img/competences/javascript.png">
                            <p class="textCompetences">JavaScript</p>
                        </div>
                        <div class="carreCompetences grid-php" style="position:relative;">
                            <img class="imgCompetences" src="img/competences/php.png">
                            <p class="textCompetences">PHP</p>
                            <!-- Symfony shape bottom right -->
                            <div class="symfonyShapeDiv"> 
                                <span class="symfonyShapeTxt">Symfony</span>
                            </div>
                        </div>
                        <div class="carreCompetences grid-bdd">
                            <img class="imgCompetences" src="img/competences/sql.png">
                            <p class="textCompetences">SQL</p>
                        </div>
                        <div class="carreCompetences grid-sql">
                            <!-- <img src="img/competences/bdd.png"> -->
                            <img class="imgCompetences" src="img/competences/bdd2.png">
                            <p class="textCompetences">BDD</p>
                        </div>
                    </div>

                </div>

                <div id="outils" class="outils">
                    <p class="pageSectionTitle">
                        <span class="highlightSpan">&#x3c;</span> Outils <span class="highlightSpan">/&#x3e;</span>

                        <svg class="outilsSvgContainer" style="position:absolute;">
                            <g class="outilsSvg">
                                <path 
                                    class="outilsSvgPath"
                                    d="M 13.3542 25.5222 C 7.1433 39.8277 17.343 51.948 30.1437 49.8375 C 33.2181 49.4253 35.5833 48.8277 38.7117 51.2559 L 83.9484 93.645 C 85.0095 95.8716 84.8961 97.8597 84.0294 101.1402 C 80.469 113.1363 93.5496 125.856 111.4236 119.3886 L 97.5636 106.4304 C 92.8233 101.7486 101.1033 92.268 107.3439 96.7086 L 121.3839 109.4283 C 126.6633 93.7089 114.0633 82.188 103.9743 84.2787 C 100.3833 84.9483 98.1036 84.5883 96.2865 83.0871 L 49.743 40.5477 C 47.1033 38.0277 48.4227 36.2277 48.7827 32.868 C 50.2227 23.148 38.583 11.0277 22.4694 16.875 L 37.503 30.348 C 41.58 34.7364 33.1803 44.0964 27.9027 39.1077 L 13.4172 25.4799 M 156.1563 113.697"
                                />
                                <path 
                                    class="outilsSvgPath"
                                    d="M 104.4778 13.3542 C 90.1723 7.1433 78.052 17.343 80.1625 30.1437 C 80.5747 33.2181 81.1723 35.5833 78.7441 38.7117 L 36.355 83.9484 C 34.1284 85.0095 32.1403 84.8961 28.8598 84.0294 C 16.8637 80.469 4.144 93.5496 10.6114 111.4236 L 23.5696 97.5636 C 28.2514 92.8233 37.732 101.1033 33.2914 107.3439 L 20.5717 121.3839 C 36.2911 126.6633 47.812 114.0633 45.7213 103.9743 C 45.0517 100.3833 45.4117 98.1036 46.9129 96.2865 L 89.4523 49.743 C 91.9723 47.1033 93.7723 48.4227 97.132 48.7827 C 106.852 50.2227 118.9723 38.583 113.125 22.4694 L 99.652 37.503 C 95.2636 41.58 85.9036 33.1803 90.8923 27.9027 L 104.5201 13.4172 M 16.303 156.1563"
                                />

                            </g>
                        </svg>

                    </p>

                    <ul>
                        <li>Visual Studio</li>
                        <li>Git</li>
                        <li>Photoshop / pixlr.com</li>
                        <li>Figma</li>
                        <li>Postman/Insomnia</li>
                        <li>Design Pattern MVC</li>
                    </ul>
                </div>

                <div id="langues" class="langues">
                    <p class="pageSectionTitle">
                        <span class="highlightSpan">&#x3c;</span> Langues <span class="highlightSpan">/&#x3e;</span>

                        <svg class="langsSvgContainer" style="position:absolute;">
                            <g class="langsSvg">
                                <path 
                                    class="langsSvgPath"
                                    d="M 22.4732 17.2294 C 18.8465 17.2988 16.7454 20.727 16.7948 23.8959 L 16.7759 73.669 C 16.7759 77.6759 20.0938 80.1328 23.708 80.1906 L 38.2757 80.1906 L 38.2757 94.2638 L 52.8434 80.4374 L 100.7433 80.4374 C 104.1632 80.4331 106.9646 77.0721 107.0076 73.5924 L 107.0076 22.8795 C 107.0076 19.8923 104.7669 17.3922 101.6358 17.3261 L 22.5173 17.2347 M 155.2373 137.8209"
                                />
                                <path 
                                    class="langsSvgPath"
                                    d="M 110.658 26.643 L 110.855 26.658 M 110.87 26.656 L 118.213 26.656 C 121.533 26.645 122.85 29.227 122.886 32.331 L 122.664 83.508 C 122.641 86.706 120.428 88.761 116.767 88.737 L 101.525 88.626 L 101.425 102.761 L 88.823 88.69 L 61.027 88.626 C 58.318 88.55 55.79 87.76 55.798 84.176 L 55.793 82.73"
                                />

                            </g>
                        </svg>
                    </p>
                    <ul>
                        <li>Anglais (B2)</li>
                        <li>Allemand (B1)</li>
                        <li>Chinois (notions)</li>
                    </ul>
                    
                </div>

            </div>

        </div>

        <footer>www.portfolio.basilek.ovh - <a href="https://www.linkedin.com/in/basile-kuntz-719278267/" class="socialFooter"><i class="fa-brands fa-linkedin"></i></a><a href="https://github.com/baku67" class="socialFooter"><i class="fa-brands fa-github"></i></a></footer>

    </body>

</html>