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
        <script src="{{ asset('js/script.js') }}"></script>

        <!-- JQUERY -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
    </head>



    <body>

        <!-- Header  -->
        <div>
                
            <h1 style="color:#ef3b2d; line-height:0; margin: 25px 0px 25px 4%;">Portfolio <span style="color:#E7E8F2; position:relative; top:6px;">&#9642;</span></h1>

            <!-- Menu -->
            <div id="NavBarContainer" style="position:absolute; top:0%; right:0%; margin-right:2%;">
                <p id="menuLigne" style="color:#E7E8F2;">
                    <a id="accueilMenu" class="menuButton" href="/">Accueil</a> 
                    &nbsp; 
                    <a id="cvMenu" class="menuButton" href="/cv">C.V.</a> 
                    &nbsp; 
                    <a id="projetsMenu" class="menuButton" href="/projets">Projets</a> 
                    &nbsp; 
                    <a id="veilleMenu" class="menuButton selected" href="/veille">Veille</a> 
                    &nbsp;
                    <a id="contactMenu" class="menuButton" href="/contact">Loisirs</a>
                </p>
            </div>

            <!-- Trait séparateur -->
            <!-- <div id="traitHeader"></div> -->
        </div>

        


        <div id="pageContainer">


            <p class="veilleTitle"> Veille technologique <span class="carreTitre carreTitreVeille">▪</span> </p>
            <!-- Ajouter effet glissade from gauche to droite (mais qui se genere depuis le debut du titre pas de l'écran :/ ) -->
            <div class="barreVeilleSouligne"></div>


            <div class="sectionsGridContainer">

                <div class="sectionSites">
                    <h3 class="sectionSitesTitle">Outils en ligne</h3>
                    <!-- <input type="text"> -->
                    <ul class="respPasIndent">
                        <!-- Ligne 1: Input de recherche -->
                        <li class="veilleLignes" style="margin-bottom:5px; padding:0px 0px 0px 30px; !important; border:1px solid rgba(239, 59, 45, 0.8); background-color:rgba(239, 59, 45, 0.05);"><p class="veilleLignesDesc" style="margin-block-start:0.5em;margin-block-end:0.5em;"><input style="color:white;" type="text"></p><a class="veilleLignesLiens" href="">Rechercher</a></li>
                        <!-- Bouton d'ajout "Nom - adresse - truc.com (ou regex?), réduire le bouton 1/4 ligne recherche (sur le coté droit) -->
                        <li class="veilleLigneAjout"><button style="background-color:rgba(255,255,255,0); color:#ef3b2d; font-weight:bold;"><span style="font-size: 2.8em;">+</span> <span style="color:#e2e8f0; margin:auto 0; font-size:1.6em; position:relative; bottom:6px;">&nbsp;Ajouter un outil&nbsp;</span> <span style="font-size: 2.8em;">+</span></button></li>

                        <li class="veilleLignes"><p class="veilleLignesDesc">Grid Generator</p><a class="veilleLignesLiens" href="https://grid.layoutit.com" target="blank">grid.layoutit.com</a></li>
                        <li class="veilleLignes"><p class="veilleLignesDesc">Favicon Letter Generator</p><a class="veilleLignesLiens" href="https://favicon.io/favicon-generator/" target="blank">favicon.io</a></li>
                        <li class="veilleLignes"><p class="veilleLignesDesc">CSS gradient Generator</p><a class="veilleLignesLiens" href="https://cssgradient.io" target="blank">cssgradient.io</a></li>
                        <li class="veilleLignes"><p class="veilleLignesDesc">PNG transparency</p><a class="veilleLignesLiens" href="https://onlinepngtools.com/create-transparent-png" target="blank">onlinepngtools.com</a></li>
                        <li class="veilleLignes"><p class="veilleLignesDesc">Color replacement</p><a class="veilleLignesLiens" href="https://www4.lunapic.com/editor/?action=replace-color" target="blank">lunapic.com</a></li>
                        <li class="veilleLignes"><p class="veilleLignesDesc">Pixlr (photoshop Free)</p><a class="veilleLignesLiens" href="https://pixlr.com/fr/" target="blank">pixlr.com</a></li>
                        <li class="veilleLignes"><p class="veilleLignesDesc">PNG compressor</p><a class="veilleLignesLiens" href="https://compresspng.com" target="blank">compresspng.com</a></li>
                        <li class="veilleLignes"><p class="veilleLignesDesc">Edition/Création Gifs</p><a class="veilleLignesLiens" href="https://ezgif.com/maker" target="blank">ezgif.com</a></li>
                        <li class="veilleLignes"><p class="veilleLignesDesc">CSS polygone draw</p><a class="veilleLignesLiens" href="https://bennettfeely.com/clippy/" target="blank">bennettfeely.com</a></li>
                        <li class="veilleLignes"><p class="veilleLignesDesc">Responsive test</p><a class="veilleLignesLiens" href="https://responsivetesttool.com" target="blank">responsivetesttool.com</a></li>
                        <li class="veilleLignes"><p class="veilleLignesDesc">Mockups maker</p><a class="veilleLignesLiens" href="https://mockuphone.com/device" target="blank">mockuphone.com</a></li>                            
                        <li class="veilleLignes"><p class="veilleLignesDesc">PNG bank (2/jour)</p><a class="veilleLignesLiens" href="https://pngtree.com" target="blank">pngtree.com</a></li>  
                        <li class="veilleLignes"><p class="veilleLignesDesc">Resize multiple img</p><a class="veilleLignesLiens" href="https://www.iloveimg.com/resize-image" target="blank">iloveimg.com</a></li>                            
                        <li class="veilleLignes"><p class="veilleLignesDesc">Compress multiple img</p><a class="veilleLignesLiens" href="https://www.iloveimg.com/compress-image" target="blank">iloveimg.com</a></li>                            
                        <li class="veilleLignes"><p class="veilleLignesDesc">Multiple JPG to PNG</p><a class="veilleLignesLiens" href="https://jpg2png.com" target="blank">jpg2png.com</a></li>  
                        <li class="veilleLignes"><p class="veilleLignesDesc">Compress multiple img phase 2</p><a class="veilleLignesLiens" href="https://tinyjpg.com " target="blank">tinyjpg.com</a></li>                            

                                                 
                    </ul>
                </div>


                <div class="sectionTips">
                    <h3 class="sectionTipsTitle">Tips</h3>
                    <ul class="respPasIndent">
                    <li class="veilleLignes" style="margin-bottom:5px; padding:0px 0px 0px 30px; !important; border:1px solid rgba(239, 59, 45, 0.8); background-color:rgba(239, 59, 45, 0.05);"><p class="veilleLignesDesc" style="margin-block-start:0.5em;margin-block-end:0.5em;"><input style="color:white;" type="text"></p><a class="veilleLignesLiens" href="">Rechercher</a></li>
                        <!-- Bouton d'ajout "Nom - adresse - truc.com (ou regex?), réduire le bouton 1/4 ligne recherche (sur le coté droit) -->
                        <li class="veilleLigneAjout"><button style="background-color:rgba(255,255,255,0); color:#ef3b2d; font-weight:bold;"><span style="font-size: 2.8em;">+</span> <span style="color:#e2e8f0; margin:auto 0; font-size:1.6em; position:relative; bottom:6px;">&nbsp;Ajouter un tip&nbsp;</span> <span style="font-size: 2.8em;">+</span></button></li>

                        <li class="veilleLignes"><p class="veilleLignesDesc">Trigger CSS anim on scroll</p><a class="veilleLignesLiens" href="https://coolcssanimation.com/how-to-trigger-a-css-animation-on-scroll/" target="blank">Go</a></li>
                        <li class="veilleLignes"><p class="veilleLignesDesc">Select element inside &#x3c;iframe&#x3e;</p><a class="veilleLignesLiens" href="https://www.codegrepper.com/code-examples/javascript/Get+element+inside+iframe+jQuery" target="blank">Go</a></li>
                        <li class="veilleLignes"><p class="veilleLignesDesc">Select element inside &#x3c;iframe&#x3e; 2</p><a class="veilleLignesLiens" href="https://stackoverflow.com/questions/25098021/securityerror-blocked-a-frame-with-origin-from-accessing-a-cross-origin-frame" target="blank">Go</a></li>
                        <li class="veilleLignes"><p class="veilleLignesDesc">Select element inside &#x3c;iframe&#x3e; 3</p><a class="veilleLignesLiens" href="https://stackoverflow.com/questions/9393532/cross-domain-iframe-issue/9393545#9393545" target="blank">Go</a></li>
                        <li class="veilleLignes"><p class="veilleLignesDesc">News API !</p><a class="veilleLignesLiens" href="https://newsapi.org/docs/get-started#search" target="blank">Go</a></li>
                        <li class="veilleLignes"><p class="veilleLignesDesc">JavaScript closures</p><a class="veilleLignesLiens" href="https://www.w3schools.com/js/js_function_closures.asp" target="blank">Go</a></li>
                        <li class="veilleLignes"><p class="veilleLignesDesc">Javascript global var</p><a class="veilleLignesLiens" href="https://stackoverflow.com/questions/26328654/is-it-possible-to-change-js-variable-value-from-browser-console" target="blank">Go</a></li>
                        <li class="veilleLignes"><p class="veilleLignesDesc">Tuto APIs</p><a class="veilleLignesLiens" href="https://blog.hubspot.com/website/api-calls" target="blank">Go</a></li>
                        <li class="veilleLignes"><p class="veilleLignesDesc">Laravel API tuto</p><a class="veilleLignesLiens" href="https://laravel.com/docs/7.x/http-client" target="blank">Go</a></li>
                        <li class="veilleLignes"><p class="veilleLignesDesc">API (voir intégration à la moitié)</p><a class="veilleLignesLiens" href="https://snipcart.com/blog/integrating-apis-introduction" target="blank">Go</a></li>
                        <li class="veilleLignes"><p class="veilleLignesDesc">CSS on iframe</p><a class="veilleLignesLiens" href="https://stackoverflow.com/questions/583753/using-css-to-affect-div-style-inside-iframe" target="blank">Go</a></li>
                        <li class="veilleLignes"><p class="veilleLignesDesc">iframe postMessage() cross-domain</p><a class="veilleLignesLiens" href="https://stackoverflow.com/questions/41060958/edit-the-css-of-a-cross-domain-iframe-that-is-inside-an-internal-iframe" target="blank">Go</a></li>
                        <li class="veilleLignes"><p class="veilleLignesDesc">iframe postMessage() cross-domain (simplifié + doc)</p><a class="veilleLignesLiens" href="https://stackoverflow.com/questions/27269406/change-style-of-an-element-inside-iframe-cross-domain-i-own-the-second-domain" target="blank">Go</a></li>
                        <li class="veilleLignes"><p class="veilleLignesDesc">img:hover Blur effect +</p><a class="veilleLignesLiens" href="https://webdesign.tutsplus.com/tutorials/create-a-css-grid-image-gallery-with-blur-effect-and-interaction-media-queries--cms-32287" target="blank">Go</a></li>
                        <li class="veilleLignes"><p class="veilleLignesDesc">Mosaic Images CSS</p><a class="veilleLignesLiens" href="https://stackoverflow.com/questions/22221333/mosaic-of-images-html-css" target="blank">Go</a></li>
                        <li class="veilleLignes"><p class="veilleLignesDesc">CSS/JS effet loupe</p><a class="veilleLignesLiens" href="https://codepen.io/mstaniuk/pen/MjywrE" target="blank">Go</a></li>
                        <li class="veilleLignes"><p class="veilleLignesDesc">Img hover blur + text</p><a class="veilleLignesLiens" href="https://webdesign.tutsplus.com/tutorials/create-a-css-grid-image-gallery-with-blur-effect-and-interaction-media-queries--cms-32287" target="blank">Go</a></li>


                            
                            
                            
                            
                        

                    
                    </ul>
                </div>

                <div class="Autres">
                    <h3 class="sectionAutresTitle">Autres</h3>
                    <ul class="respPasIndent">
                        <li class="veilleLignes"></li>
                        <li class="veilleLignes"></li>
                        <li class="veilleLignes"></li>
                        <li class="veilleLignes"></li>
                        <li class="veilleLignes"></li>
                        <li class="veilleLignes"></li>
                        <li class="veilleLignes"></li>
                    </ul>
                </div>

            </div>


        </div>