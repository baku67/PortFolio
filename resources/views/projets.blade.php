<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PortFolio - Projet</title>

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
        <script src="{{ asset('js/scriptProjet.js') }}"></script>

        <!-- JQUERY -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script src="https://kit.fontawesome.com/698848973e.js" crossorigin="anonymous"></script>

        
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <!-- SwiperJS pour navigation entre projets -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
    </head>









    <body>

        <!-- Header  -->
        <div>
                
            <!-- Header ("Portfolio. + Basile KUNTZ - Developpeur Web") -->
            <div style="width:100%;">
                <h1 class="testH1"><a href="/">Portfolio <span style="color:#E7E8F2; position:relative; top:6px;">&#9642;</span></a></h1>
                <span  id="lineBreakMobile"></br></span>
                <h2 id="portfolioSousTitre" style="margin-left:6%; color:#ef3b2d; font-size:1.2em;">Basile KUNTZ <span style="color:#E7E8F2; font-size:80%;"> -  Développeur Web <span id="lineBreakMobileStatus"></br></span><span id="status"> En formation</span><span id="status2"><i class="fa-solid fa-magnifying-glass"></i> Alternance CDA</span></span></h2>
            </div>

            <!-- Ancien header  -->
            <!-- <h1 style="color:#ef3b2d; line-height:0; margin: 25px 0px 25px 4%;">Portfolio <span style="color:#E7E8F2; position:relative; top:6px;">&#9642;</span></h1> -->

            <!-- Menu -->
            <div id="NavBarContainer">
                <p id="menuLigneCv" style="color:#E7E8F2;">
                    <a id="accueilMenu" class="menuButton" href="/">Accueil</a> 
                    &nbsp; 
                    <a id="cvMenu" class="menuButton" href="/cv">Mon CV</a> 
                    &nbsp; 
                    <a id="projetsMenu" class="menuButton selected" href="/projets">Projets</a> 
                    &nbsp; 
                    <!-- <a id="veilleMenu" class="menuButton" href="/veille">Veille</a> 
                    &nbsp; -->
                    <a id="contactMenu" class="menuButton" href="/loisirs">Loisirs</a>
                </p>
            </div>

            <!-- Trait séparateur -->
            <div id="traitHeader" class="traitHeaderProjet"></div>
        </div>

        






        <div id="pageContainerProjet">

                
                <!-- SwiperJS pour naviguer entre projet (+proc load contenu page: https://codepen.io/escadesign/pen/VJKxjB "on:slideChange()") -->
                <div class="swiper">
                    <swiper-container id="swiper-container" class="swiper-container" on-slideChange="test()">

                        <!-- <swiper-wrapper class="swiper-wrapper">  -->



                            <swiper-slide>
                                <h3 class="projetNbr">Projet 1</h3>
                                <p class="projetSlideTitle">SquadForge</p>

                                <div id="projectContainer">
                                    <div class="gridProjetHeaderContainer">


                                        <div class="iframe">
                                            <div class="boutonMockup"></div>
                                            <div class="boutonMockup2"></div>
                                            <div class="bouton3Container"><div class="boutonMockup3"></div></div>
                                            <div class="boutonMockup4"></div>
                                            <div class="boutonMockup5"></div>
                                        
                                            <iframe src="https://squadforge.ovh" class="iframeElem" class="iframeElement"></iframe>

                                            <p class="lienBJJ"><a target="_blank" href="https://www.squadforge.ovh">www.squadforge.ovh<img src="img/redirectionOrange.png" class="redirectionPng"></a></p>
                                        </div>

                                        <div class="description">
                                            <p class="projetDescriptionText">Site communautaire "Gaming"</p> 
                                            <ul class="projetSkillsList">
                                                <li>HTML/CSS</li>
                                                <li>Javascript</li>
                                                <li>PHP / Symfony</li>
                                                <li>Doctrine / DQL</li>
                                                <li>Twig</li>
                                            </ul>
                                            <ul class="projetFuncList">
                                                <li>Autentification</li>
                                                <li>Système de modération (validation des public, censure, signalements)</li>
                                                <li>Signalements à la modération</li>
                                                <li>Publication de Topics, Médias, Commentaires</li>
                                                <li>Upvotes et likes/dislikes</li>
                                                <li>Création et candidatures de Teams</li>
                                                <li>Planifications de sessions de gaming (Team)</li>
                                                <li>Jeux favoris -> page d'accueil filtrée</li>
                                                <li>Page de jeux personalisées</li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>

                            </swiper-slide>


                            <swiper-slide>
                                <h3 class="projetNbr">Projet 2</h3>
                                <p class="projetSlideTitle">BlackJackJo'</p>

                                <div id="projectContainer">
                                    <div class="gridProjetHeaderContainer">


                                        <div class="iframe">
                                            <div class="boutonMockup"></div>
                                            <div class="boutonMockup2"></div>
                                            <div class="bouton3Container"><div class="boutonMockup3"></div></div>
                                            <div class="boutonMockup4"></div>
                                            <div class="boutonMockup5"></div>
                                        
                                            <iframe src="https://www.blackjackjo.com" class="iframeElem" class="iframeElement"></iframe>

                                            <p class="lienBJJ"><a target="_blank" href="https://www.blackjackjo.com">www.blackjackjo.com<img src="img/redirectionOrange.png" class="redirectionPng"></a></p>
                                        </div>

                                        <div class="description">
                                            <p class="projetDescriptionText">Application de BlackJack</p> 
                                            <ul class="projetSkillsList">
                                                <li>HTML</li>
                                                <li>CSS</li>
                                                <li>Javascript</li>
                                                <li>PHP</li>
                                                <li>SQL/BDD</li>
                                            </ul>
                                            <ul class="projetFuncList">
                                                <li>Système de compte (+Crédits quotidiens)</li>
                                                <li>Système de progression (expérience/niveaux)</li>
                                                <li>Système de Win-streak</li>
                                                <li>Affichage du top 3 sur l'accueil</li>
                                                <li>Historique et stats personnelles</li>
                                                <li>Mode invité</li>
                                                <li>Espace Admin</li>
                                                <li>Mode Light/Dark</li>
                                                <li>Mode turbo</li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>

                            </swiper-slide>



                            <swiper-slide>
                                <h3 class="projetNbr">Projet 3</h3>
                                <p class="projetSlideTitle">Terrine</p>

                                <div id="projectContainer2">
                                    <div class="gridProjetHeaderContainer">


                                        <div class="iframe">
                                            <div class="boutonMockup"></div>
                                            <div class="boutonMockup2"></div>
                                            <div class="bouton3Container"><div class="boutonMockup3"></div></div>
                                            <div class="boutonMockup4"></div>
                                            <div class="boutonMockup5"></div>
                                        
                                            <iframe src="https://www.eneffet.basilek.ovh/index.php" class="iframeElem" class="iframeElement"></iframe>

                                            <p class="lienBJJ"><a target="_blank" href="https://www.eneffet.basilek.ovh/index.php">Voir le site<img src="img/redirectionOrange.png" class="redirectionPng"></a></p>
                                        </div>

                                        <div class="description">
                                            <p class="projetDescriptionText">Site de gestion de plateforme cinématographique</p> 
                                            <ul class="projetSkillsList">
                                                <li>HTML</li>
                                                <li>CSS</li>
                                                <li>JS</li>
                                                <li>PHP</li>
                                                <li>SQL</li>
                                                <li>MVC</li>
                                            </ul>
                                            <ul class="projetFuncList">
                                                <li>Pages de listing</li>
                                                <li>Pages détaillées et liens/relations</li>
                                                <li>Formulaires d'ajouts d'éléments</li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>

                            </swiper-slide>


                            <swiper-slide>
                                <h3 class="projetNbr">Projet 4</h3>
                                <p class="projetSlideTitle">Pokédia</p>

                                <div id="projectContainer3">
                                    <div class="gridProjetHeaderContainer">


                                        <div class="iframe">
                                            <div class="boutonMockup"></div>
                                            <div class="boutonMockup2"></div>
                                            <div class="bouton3Container"><div class="boutonMockup3"></div></div>
                                            <div class="boutonMockup4"></div>
                                            <div class="boutonMockup5"></div>
                                        
                                            <iframe src="https://www.poke.basilek.ovh/index.html" class="iframeElem" class="iframeElement"></iframe>

                                            <p class="lienBJJ"><a target="_blank" href="https://www.poke.basilek.ovh/index.html">Voir le site<img src="img/redirectionOrange.png" class="redirectionPng"></a></p>
                                        </div>

                                        <div class="description">
                                            <p class="projetDescriptionText">Encyclopédie Pokémon</p> 
                                            <ul class="projetSkillsList">
                                                <li>HTML</li>
                                                <li>CSS</li>
                                                <li>JS</li>
                                                <li>PHP</li>
                                                <li>API</li>
                                            </ul>
                                            <ul class="projetFuncList">
                                                <li><i class="fa-solid fa-triangle-exclamation"></i>&nbsp; Mobile first</li>
                                                <li>Exploitation d'une API pokémon</li>
                                                <li>Listing et détails (Pokémons, actions, items, ...)</li>
                                                <li>Génération Pokémons aléatoires (Sans doublons)</li>
                                                <li>Couleurs adaptées aux types des pokémons</li> 
                                            </ul>
                                        </div>

                                    </div>
                                </div>

                            </swiper-slide>

                        <!-- </swiper-wrapper> -->

                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                        <div class="swiper-pagination" style="background-color: #ef3b2d;"></div>

                    </swiper-container>
                </div>


                <!-- Swiper Propre -->
        

        </div>

        <footer>www.portfolio.basilek.ovh - <a href="https://www.linkedin.com/in/basile-kuntz-719278267/" class="socialFooter"><i class="fa-brands fa-linkedin"></i></a><a href="https://github.com/baku67" class="socialFooter"><i class="fa-brands fa-github"></i></a></footer>



    </body>

</html>