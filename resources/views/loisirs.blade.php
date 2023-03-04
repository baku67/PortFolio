<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PortFolio - Loisirs</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <!-- <link rel="shortcut icon" href="{{ asset('img/photo.jpg') }}"> -->
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
        <script type="text/javascript" src="{{ URL::asset('js/galerie.js') }}"></script>


        <!-- JQUERY -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
    </head>









    <body class="bodyLoisir">

        <!-- MODALS GALERIE -->
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-image" id="modalImage">
            <div id="caption"></div>


            <!-- WIP alignement -->
            <!-- <div>
                <div id="arrowPrevious" style="font-size: 5em; color: white; z-index: 0; width: 50px;">
                    <
                </div> 
                <img class="modal-image" id="modalImage">
                <div id="arrowNext" style="font-size: 5em; color: white; z-index: 0; width: 50px;">
                    >
                </div>
            </div>  -->
            <!-- Fin WIP -->

            <div id="arrowPrevious">
                <
            </div>  
            <div id="arrowNext">
                >
            </div> 
        </div>
        <!-- Fin modal -->






        <!-- Header  -->
        <div class="testHeader">
                
            <h1 class="testH1"><a href="/">Portfolio <span style="color:#E7E8F2; position:relative; top:6px;">&#9642;</span></a></h1>

            <!-- Menu -->
            <div id="NavBarContainer">
                <p id="menuLigneCv" style="color:#E7E8F2;">
                    <a id="accueilMenu" class="menuButton" href="/">Accueil</a> 
                    &nbsp; 
                    <a id="cvMenu" class="menuButton" href="/cv">Mon CV</a> 
                    &nbsp; 
                    <a id="projetsMenu" class="menuButton" href="/projets">Projets</a> 
                    &nbsp; 
                    <!-- <a id="veilleMenu" class="menuButton" href="/veille">Veille</a> 
                    &nbsp; -->
                    <a id="contactMenu" class="menuButton selected" href="/loisirs">Loisirs</a>
                </p>
            </div>

            <!-- Trait séparateur -->
            <!-- <div id="traitHeader"></div> -->
        </div>


        <!-- Contenu (load JS) -->
        <div id="pageContainer">

            <h3 class="galerieTitle"> Loisirs <span class="carreTitre carreTitreVeille">▪</span></h3>
            <div class="barreGalerieSouligne"></div>

            <h4 id="photographieTitle">
                <span id="photoTitlePart1">Ph<img src="img/letterO_red2.png" class="letterO"/>t<img src="img/letterO_red2.png" class="letterO"/></span><span id="photoTitlePart2">graph<span id="letterIandPoint">i<div id="scubaDiver"></div><div id="scubaDiverFlash"></div><span id="flashPoint" class="flashPointAnim">.</span><span id="flashPoint2" class="flashPoint2Anim"></span><span id="photoBar"></span><span id="flashRectangle"></span></span>e</span></h4>
            <!-- Wave generateur: https://css-generators.com/wavy-shapes/ -->
            <div class="wave"></div>

            <p id="messageGalerie" style="display:block"> Cliquez sur une image pour voir la version <span style="color:rgb(239 59 45 / 80%); font-weight:bold;">HD<span> </p>


            <div class="galerieDiv">
                <!-- Spinner pendant le charegement des images -->
                <!-- <img src="img/spinner.png" id="spinnerImg" alt="chargement en cours"> -->
                <!-- https://loading.io/css/ -->
                <p id="messageLoadingLong"> Le chargement peut être un peu long...</p>

                <div id="spinnerDiv" class="lds-ring"><div></div><div></div><div></div><div></div></div>
                
                <div id="aquarium">
                    <!-- Test anim poisson -->
                    <div id="motion-demo"></div>
                    <div id="motion-demo2"></div>
                    <div id="motion-demo3a"></div> 
                    <div id="motion-demo3b"></div> 
                    <div id="motion-demo3c"></div> 
                    <div id="motion-demo_whaleShark"></div> 
                    <div id="motion-demo_tortoise"></div> 
                    <div id="motion-demo_shark1"></div> 

                    <!-- <div id="motion-demo_whale2Pc"></div>  -->

                    <div id="motion-demo_whalePc"></div> 

                    <!-- <div id="scubaDiver"></div>  -->

                    <div id="coral1"></div> 
                    <div id="coral2"></div>

                    <div id="coral3"></div> 

                    <div id="coral4"></div> 

                    <!-- <div id="motion-demo_rapid"></div>  -->
                </div>

                <!-- Bulles -->
                <!-- <div id="motion-demoBubble1" ></div> -->


                <!-- <h3 style="font-size:170%; text-align:center; text-decoration:underline; text-underline-position:under; text-decoration-color:#ef3b2d;">Galerie: </h3> -->
                <!-- <br> -->

                <div class="galerieAccueil">

                    <article class="location-listing images" alt="1" def="Poti poasson" style="margin:auto; position:relative; cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo1 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/1_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="2" style="margin:auto; position:relative; cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo2 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/2_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="3" style="margin:auto; position:relative; cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo3 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/3_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="4" style="margin:auto; position:relative; cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo4 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/4_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="5" style="margin:auto; position:relative; cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo5 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/5_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="11" style="margin:auto; position:relative; cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo11 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/11_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="7" style="margin:auto; position:relative; cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo7 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/7_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="8" style="margin:auto; position:relative; cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo8 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/8_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="9" style="margin:auto; position:relative; cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo9 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/9_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="10" style="margin:auto; position:relative; cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo10 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/10_preview.jpg"/>
                        </div>
                    </article>




















                    <article class="location-listing images" alt="6" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo6 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/6_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="12" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo12 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/12_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="13" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo13 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/13_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="14" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo14 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/14_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="15" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo15 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/15_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="16" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo16 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/16_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="17" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo17 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/17_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="18" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo18 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/18_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="19" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo19 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/19_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="20" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo20 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/20_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="21" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo21 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/21_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="22" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo22 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/22_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="23" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo23 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/23_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="24" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo24 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/24_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="25" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo25 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/25_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="26" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo26 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/26_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="27" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo27 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/27_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="28" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo28 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/28_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="29" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo29 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/29_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="30" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo30 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/30_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="31" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo31 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/31_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="32" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo32 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/32_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="33" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo33 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/33_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="34" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo34 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/34_preview.jpg"/>
                        </div>
                    </article>
                    <article class="location-listing images" alt="35" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo35 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/35_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="36" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo36 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/36_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="37" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo37 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/37_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="38" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo38 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/38_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="39" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo39 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/39_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="40" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo40 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/40_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="41" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo41 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/41_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="42" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo42 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/42_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="43" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo43 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/43_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="44" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo44 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/44_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="45" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo45 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/45_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="46" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo46 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/46_preview.jpg"/>
                        </div>
                    </article>
                    
                    <article class="location-listing images" alt="47" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo47 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/47_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="48" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo48 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/48_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="49" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo49 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/49_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="50" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo50 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/50_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="51" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo51 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/51_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="52" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo52 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/52_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="53" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo53 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/53_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="54" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo54 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/54_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="55" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo55 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/55_preview.jpg"/>
                        </div>
                    </article>

                    <article class="location-listing images" alt="56" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo56 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/56_preview.jpg"/>
                        </div>
                    </article>

                    
                    <article class="location-listing images" alt="57" style="margin:auto; position:relative;  cursor:pointer;">
                        <p class="loupesGalerie">Zoom</p>
                        <div class="photosGallerie photo57 location-image" style="display:block;">
                                <img class="imgGalleries" src="img/galerie/57_preview.jpg"/>
                        </div>
                    </article>

                    

                    

                </div>

            </div>

            <!--  Observeur pour pop l'anim quand scroll dessus -->
            <!-- <iframe id="iframe" src="{{url('/iframe')}}" frameborder="0">Votre navigateur n'est pas compatible</iframe> -->

        </div>

        <footer class="footerLoisir">www.portfolio.basilek.ovh</footer>


    </body>

</html>