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


        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
        <link rel="manifest" href="img/favicon/site.webmanifest">

        <!-- ScriptJS -->
        <script src="{{ asset('js/scriptProjet.js') }}"></script>

        <!-- JQUERY -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
    </head>









    <body>

        <!-- Header  -->
        <div>
                
            <!-- Header ("Portfolio. + Basile KUNTZ - Developpeur Web") -->
            <div style="width:100%;">
                <h1 id="portfolioTitle" style="margin-left:4%; color:#ef3b2d; margin-block-start:0.1em;">Portfolio <span style="color:#E7E8F2; position:relative; top:6px;">&#9642;</span></h1>
                </br>
                <h2 id="portfolioSousTitre" style="margin-left:6%; color:#ef3b2d; font-size:1.2em;">Basile KUNTZ <span style="color:#E7E8F2; font-size:80%;"> -  Développeur Web</span></h2>
            </div>

            <!-- Ancien header  -->
            <!-- <h1 style="color:#ef3b2d; line-height:0; margin: 25px 0px 25px 4%;">Portfolio <span style="color:#E7E8F2; position:relative; top:6px;">&#9642;</span></h1> -->

            <!-- Menu -->
            <div id="NavBarContainer" style="position:absolute; top:0%; right:0%; margin-right:2%;">
                <p id="menuLigneCv" style="color:#E7E8F2;">
                    <a id="accueilMenu" class="menuButton" href="/">Accueil</a> 
                    &nbsp; 
                    <a id="cvMenu" class="menuButton" href="/cv">Mon parcours</a> 
                    &nbsp; 
                    <a id="projetsMenu" class="menuButton selected" href="/projets">Projets</a> 
                    &nbsp; 
                    <!-- <a id="veilleMenu" class="menuButton" href="/veille">Veille</a> 
                    &nbsp; -->
                    <a id="contactMenu" class="menuButton" href="/contact">Loisirs</a>
                </p>
            </div>

            <!-- Trait séparateur -->
            <div id="traitHeader" class="traitHeaderProjet"></div>
        </div>

        






        <div id="pageContainer">

                <!-- <p class="projetTitle"><span class="carreTitre carreTitreProjet">▪</span> Mes Projets <span id="project1Button" class="switchProjectButton buttonProjectActif">1</span><span id="project2Button" class="switchProjectButton">2</span></p> -->
                <p class="projetTitle testProjetTitle"><span class="carreTitre carreTitreProjet">▪</span> Mes Projets </p>

                
                <!-- Ajouter effet glissade from gauche to droite (mais qui se genere depuis le debut du titre pas de l'écran :/ ) -->
                <div class="barreProjetSouligne testBarreProjetSouligne"></div>



                <div class="gridProjetHeaderContainer">

                    


                    <div class="header">

                        <!-- Paragraphe qui fadeIn phrase par phrase?  -->

                        <!-- Indentations &nbspc; ou margin-left ? -->
                        <p class="headerLine1"><span class="pChevrons">&#x3c;</span><span class="pTags">head</span><span class="pChevrons">&#x3e;</span></p>
                        
                        <p class="headerLine2 indented" style="line-height:60%;"><span class="pChevrons">&#x3c;</span><span class="pTags">title</span><span class="pAttributes"> id</span>=<span class="pValues">"title"</span><span class="pChevrons">&#x3e;</span><span class="pText pText1" style="font-size:3.6em !important;">BlackJack Jo'</span><span class="pChevrons">&#x3c;/</span><span class="pTags">title</span><span class="pChevrons">&#x3e;</span></p>
                        <p class="headerLine3 indented"><span class="pChevrons">&#x3c;</span><span class="pTags">link</span><span class="pAttributes"> rel</span>=<span class="pValues">"icon" </span><span class="pAttributes">href</span>=<span class="pValues">"Images/favicon.png"</span><span class="pChevrons">&#x3e;</span></p>
                        <p class="headerLine4 indented"><span class="pChevrons">&#x3c;</span><span class="pTags">meta</span><span class="pAttributes"> charset</span>=<span class="pValues">"UTF-8"</span><span class="pChevrons">&#x3e;</span></p>
                        <p class="headerLine5 indented" style="line-height:60%;"><span class="pChevrons">&#x3c;</span><span class="pTags">meta</span><span class="pAttributes"> name</span>=<span class="pValues">"description" </span><span class="pAttributes">content</span>=<span class="pValues">"</span><span class="pText pText2">Application de BlackJack en ligne</span><span class="pValues">"</span><span class="pChevrons">&#x3e;</span></p>
                        <p class="headerLine6 indented"><span class="pChevrons">&#x3c;</span><span class="pTags">meta</span><span class="pAttributes"> name</span>=<span class="pValues">"keywords" </span><span class="pAttributes">content</span>=<span class="pValues">"Blackjack, Jeu, Cartes"</span><span class="pChevrons">&#x3e;</span></p>
                        <p class="headerLine7 indented"><span class="pChevrons">&#x3c;</span><span class="pTags">script</span><span class="pAttributes"> src</span>=<span class="pValues">"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"</span>
                            <br><span class="pAttributes">type</span>=<span class="pValues">"text/javascript"</span><span class="pChevrons">&#x3e;</span><span class="pChevrons">&#x3c;/</span><span class="pTags">script</span><span class="pChevrons">&#x3e;</span></p>
                        <!-- Saut de ligne dans le paragraphe? -->
                        <p class="headerLine8 indented"><span class="pChevrons">&#x3c;</span><span class="pTags">script</span><span class="pAttributes"> src</span>=<span class="pValues">"text/javascript" </span><span class="pAttributes">src</span>=<span class="pValues">"scriptJouer.js"</span><span class="pChevrons">&#x3e;</span><span class="pChevrons">&#x3c;/</span><span class="pTags">script</span><span class="pChevrons">&#x3e;</span></p>
                        <p class="headerLine9 indented" style="line-height:60%;"><span class="pChevrons">&#x3c;</span><span class="pTags">meta</span><span class="pAttributes"> name</span>=<span class="pValues">"author" </span><span class="pAttributes">content</span>=<span class="pValues">"</span><span class="pText pText3">Basile Kuntz</span><span class="pValues">"</span><span class="pChevrons">&#x3e;</span></p>
                        <p class="headerLine10 indented"><span class="pChevrons">&#x3c;</span><span class="pTags">link</span><span class="pAttributes"> rel</span>=<span class="pValues">"stylesheet" </span><span class="pAttributes">href</span>=<span class="pValues">"css/style.css" </span><span class="pAttributes">id</span>=<span class="pValues">"stylesheet_1"</span><span class="pChevrons">&#x3e;</span></p>
                        
                        <p class="headerLine11" style="line-height: 1.9em;"><span class="pChevrons">&#x3c;/</span></span><span class="pTags">head</span><span class="pChevrons">&#x3e;</span></p>

                    </div>


                    <div class="iframe">
                        <div id="boutonMockup"></div>
                        <div id="boutonMockup2"></div>
                        <div id="bouton3Container"><div id="boutonMockup3"></div></div>
                        <div id="boutonMockup4"></div>
                        <div id="boutonMockup5"></div>

                        <!-- Wrapper pour effet de reflet superposé  -->
                        <!-- <div class="iframeWrapper">
                        </div> -->
                        <!-- <iframe src="https://www.blackjackjo.com" style="position:absolute; z-index:0;" class="iframeElem" id="iframeElement"></iframe> -->
                    
                        <iframe src="https://www.blackjackjo.com" class="iframeElem" id="iframeElement"></iframe>

                        
                        <!-- <form id="the-form" action="">
                            Dark Mode: <input id="my-message" type="text">
                            <input type="submit">
                        </form> -->
                        <p class="lienBJJ"><a target="_blank" href="https://www.blackjackjo.com">www.blackjackjo.com<img src="img/redirectionOrange.png" class="redirectionPng"></a></p>
                    </div>

                    <div class="description">
                        <p class="paragrapheDescriptionProjet"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BlackJackJo' est un mon premier projet de développement web. Il s'agit d'une application web permettant à l'utilisateur de jouer au BlackJack seul contre un croupier. Elle comporte un système de compte permettant de garder les gains, sauvegarder les préférences utilisateurs, accéder à l'historique des parties, se classer par rapport aux autres utilisateurs,... Il est aussi possible de jouer en mode "Invité" juste pour tester. Les utilisateurs connectés reçoivent de l'XP selon les résultats de la partie, le streakWin, et les mises en jeu, et gagne des niveaux et des crédits. Le streakWin augmente vos gains d'XP, il augmente de 1 lorsque vous gagnez et baisse de 2 lorsque vous perdez.   </p>
                    </div>

                    <!-- <div class="lienBJJcontainer">
                        <p class="lienBJJ"><a target="_blank" href="https://www.blackjackjo.com">www.blackjackjo.com<img src="img/redirectionOrange.png" class="redirectionPng"></a></p>
                    </div> -->

                </div>



                <!-- Tentative polygones stylés -->
                <!-- <div class="shape"></div> -->


                <!-- Disclaimer -->
                <div id="disclaimerContainerElem" class="disclaimerContainer">


                    <div>
                        <div style="display:inline-flex;">
                            <img src="img/attention.png" style="width:50px;height:50px; margin-right:15px; position:relative; top: 4px;"/>
                            <p class="highlightSpan" style="font-size:113%;">Attention</p>
                        </div>
                        <div id="disclaimerContenuWrapper">
                            <p style="margin-block-end: 0em;"><img class="imgDisclaimer" src="img/firefox.png"/>&nbsp;&nbsp;&nbsp;L'affichage du projet sur <span style="font-weight:bold;">Firefox</span> n'est actuellement pas supporté (Effet Zoom). <em id="alertDisclaimer1" style="font-size: 70%; cursor:pointer;">Voir plus</em></p>
                            <br>
                            <p style="margin-block-start: 0em;"><img class="imgDisclaimer" src="img/userBarred.png"/>&nbsp;&nbsp;&nbsp;Le système de connexion et d'inscription n'est pas disponible sur l'aperçu du site ci-dessus, merci d'utiliser le lien.  <em id="alertDisclaimer2" style="font-size: 70%; cursor:pointer;">Voir plus</em></p>
                        </div>
                    </div>

                </div>
                <!-- Fin Disclaimer -->



                <div class="traitSeparateurProjet"></div>


                <!-- Boutons toggle DocUtilisateur/DocTechnique -->
                <div id="documentationHeaderElem" class="documentationHeader">
                    <h2 class="documentationTitle"><span class="chevronOrange">&#x3c;</span> Documentation <span class="chevronOrange">/&#x3e;</span></h2>
                    <p class="documentationButtons"><span id="toggleUtilisateur" class="buttonSelected">Utilisateur</span> &nbsp;&nbsp; <span id="toggleTechnique" class="buttonNonSelected">Technique</span></p>
                </div>


                <!-- Contenu loadJS Documentation -->
                <div id="docuLoadContainer-wrapper">
                    <div id="docuLoadContainer" class="paddingBottom"> 
                    </div>
                </div>



            </div>
        

        </div>
        <footer>www.portfolio.basilek.ovh</footer>


    </body>

</html>