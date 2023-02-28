<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Je t'aime Fort</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <style>
        #letterJpath {
            opacity: 0.8;
            transform:scale(1); 
            fill: none; 
            stroke: #ef2d70; 
            stroke-width: 5; 
            stroke-linecap: round; 
            stroke-linejoin:  miter; 
            stroke-miterlimit: 5;
            transition: stroke 0.4s;
        }
        .letterJ {
            height: 250px;
            position: relative;
            margin: 50px;
            width: 65px;
            margin: 0 auto;
            transition: all 0.4s;
        }

        #letterE1path {
            opacity: 0.8;
            transform:scale(1); 
            fill: none; 
            stroke: #ef2d70; 
            stroke-width: 4; 
            stroke-linecap: round; 
            stroke-linejoin:  miter; 
            stroke-miterlimit: 4;
            transition: stroke 0.4s;
        }
        .letterE1 {
            height: 250px;
            position: relative;
            margin: 50px;
            width: 50px;
            margin-left: 10px;
            left: 10px;
            margin: 0 auto;
            transform: scale(0.9) rotate(337deg);
            bottom: 37px;
            transition: all 0.4s;
        }

        #letterTpath {
            opacity: 0.8;
            transform:scale(1); 
            fill: none; 
            stroke: #ef2d70; 
            stroke-width: 4; 
            stroke-linecap: round; 
            stroke-linejoin:  miter; 
            stroke-miterlimit: 4;
            transition: stroke 0.4s;
        }
        .letterT {
            height: 250px;
            position: relative;
            margin: 50px;
            width: 50px;
            margin: 0 auto;
            transition: all 0.4s;
        }

        #apostrophePath {
            opacity: 0.8;
            transform:scale(1); 
            fill: none; 
            stroke: #ef2d70; 
            stroke-width: 4; 
            stroke-linecap: round; 
            stroke-linejoin:  miter; 
            stroke-miterlimit: 4;
            transition: stroke 0.4s;
        }
        .apostrophe {
            height: 250px;
            position: relative;
            margin: 50px;
            width: 30px;
            margin: 0 auto;
            transition: all 0.4s;
        }

        #lettersAimPath {
            opacity: 0.8;
            transform:scale(1); 
            fill: none; 
            stroke: #ef2d70; 
            stroke-width: 4; 
            stroke-linecap: round; 
            stroke-linejoin:  miter; 
            stroke-miterlimit: 4;
            transition: stroke 0.4s;
        }
        .lettersAim {
            height: 250px;
            position: relative;
            margin: 50px;
            width: 105px;
            margin: 0 auto;
            transition: all 0.4s;

            transform: scale(0.7) rotate(355deg);
            bottom: 35px;
            right: 35px;
        }

        #letterE2path {
            opacity: 0.8;
            transform:scale(1); 
            fill: none; 
            stroke: #ef2d70; 
            stroke-width: 4; 
            stroke-linecap: round; 
            stroke-linejoin:  miter; 
            stroke-miterlimit: 4;
            transition: stroke 0.4s;
        }
        .letterE2 {
            /* height: 250px;
            position: relative;
            margin: 50px;
            width: 50px;
            margin: 0 auto;
            transition: all 0.4s; */

            height: 250px;
            position: relative;
            margin: 50px;
            width: 50px;
            margin-left: 10px;
            right: 47px;
            margin: 0 auto;
            transform: scale(0.9) rotate(337deg);
            bottom: 37px;
            transition: all 0.4s;
        }

        /* Traits absolute */
        #letterTlinePath {
            opacity: 0.8;
            transform:scale(1); 
            fill: none; 
            stroke: #ef2d70; 
            stroke-width: 4; 
            stroke-linecap: round; 
            stroke-linejoin:  miter; 
            stroke-miterlimit: 4;
            transition: stroke 0.4s;
        }
        .letterTline {
            height: 250px;
            position: absolute;
            margin: 50px;
            width: 69px;
            margin: 0 auto;
            transition: all 0.4s;

            transform: translateX(-30px);
        }

        #letterFlinePath {
            opacity: 0.9;
            transform:scale(1); 
            fill: none; 
            stroke: #2de3ef; 
            stroke-width: 5; 
            stroke-linecap: round; 
            stroke-linejoin:  miter; 
            stroke-miterlimit: 4;
            transition: stroke 0.4s;
        }
        .letterFline {
            height: 250px;
            position: absolute;
            transform: scale(0.6) translate(-83px, -38px);
            margin: 50px;
            width: 69px;
            margin: 0 auto;
            transition: all 0.4s;
        }

        #letterFline2Path {
            opacity: 0.9;
            transform:scale(1); 
            fill: none; 
            stroke: #2de3ef; 
            stroke-width: 5; 
            stroke-linecap: round; 
            stroke-linejoin:  miter; 
            stroke-miterlimit: 4;
            transition: stroke 0.4s;
        }
        .letterFline2 {
            height: 250px;
            position: absolute;
            transform: scale(1.5) translate(-18px, 22px);
            margin: 50px;
            width: 69px;
            margin: 0 auto;
            transition: all 0.4s;
        }

        #letterT2linePath {
            opacity: 0.9;
            transform:scale(1); 
            fill: none; 
            stroke: #2de3ef; 
            stroke-width: 5; 
            stroke-linecap: round; 
            stroke-linejoin:  miter; 
            stroke-miterlimit: 4;
            transition: stroke 0.4s;
        }
        .letterT2line {
            height: 250px;
            position: absolute;
            transform: scale(1) translate(54px, -1px);
            margin: 50px;
            width: 69px;
            margin: 0 auto;
            transition: all 0.4s;
        }

        
        #heartPath {
            opacity: 0.9;
            transform:scale(1); 
            fill: none; 
            stroke: #2de3ef; 
            stroke-width: 2; 
            stroke-linecap: round; 
            stroke-linejoin:  miter; 
            stroke-miterlimit: 4;
            transition: stroke 0.4s;
        }
        .heart {
            height: 250px;
            position: absolute;
            transform: scale(1.2) translate(115px, -8px) rotate(14deg);
            margin: 50px;
            width: 138px;
            margin: 0 auto;
            transition: all 0.4s;
        }

        .heartBackground {
            position: absolute;
            opacity: 0;
            width: 325px;
            height: 325px;
            transform: translate(155px, -142px);

            background: rgb(239,45,112);
            background: -moz-radial-gradient(circle, rgba(239,45,112,0.9458158263305322) 0%, rgba(0,9,29,0) 36%);
            background: -webkit-radial-gradient(circle, rgba(239,45,112,0.9458158263305322) 0%, rgba(0,9,29,0) 36%);
            background: radial-gradient(circle, rgba(239,45,112,0.9458158263305322) 0%, rgba(0,9,29,0) 36%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#ef2d70",endColorstr="#00091d",GradientType=1);

            transition: all 0.7s;
        }

        #heartLetterIpath {
            opacity: 0.9;
            transform:scale(1); 
            fill: none; 
            stroke: #2de3ef; 
            stroke-width: 3; 
            stroke-linecap: round; 
            stroke-linejoin:  miter; 
            stroke-miterlimit: 4;
            transition: stroke 0.4s;
        }
        .heartLetterI {
            height: 250px;
            position: absolute;
            transform: scale(0.2) translate(244px, -416px) rotate(17deg);
            margin: 50px;
            width: 138px;
            margin: 0 auto;
            transition: all 0.4s;
        }
        /* Fin Traits absolute */


        #letterFpath {
            opacity: 0.9;
            transform:scale(1); 
            fill: none; 
            stroke: #2de3ef; 
            stroke-width: 5; 
            stroke-linecap: round; 
            stroke-linejoin:  miter; 
            stroke-miterlimit: 4;
            transition: stroke 0.4s;
        }
        .letterF {
            height: 250px;
            position: relative;
            margin: 50px;
            width: 50px;
            /* margin-left: 10px; */
            /* left: 10px; */
            margin: 0 auto;
            /* transform: scale(0.9) rotate(337deg); */
            /* bottom: 37px; */
            transition: all 0.4s;
        }


        #letterOpath {
            opacity: 0.9;
            transform:scale(1); 
            fill: none; 
            stroke: #2de3ef; 
            stroke-width: 5; 
            stroke-linecap: round; 
            stroke-linejoin:  miter; 
            stroke-miterlimit: 4;
            transition: stroke 0.4s;
        }
        .letterO {
            height: 250px;
            position: relative;
            margin: 50px;
            width: 82px;
            /* margin-left: 10px; */
            /* left: 10px; */
            margin: 0 auto;
            transform: scale(0.9) rotate(351deg);
            bottom: 23px;            
            transition: all 0.4s;
        }

        body {
            width:100%; 
            height:100%; 
            background-color: #00091d;

            transition: all 0.8s
        }
        body:hover {
            cursor: pointer;

            background-color: #001f3f;
        }

        body #heartPath {
            transition: all 0.5s
        }
        body:hover #heartPath {
            stroke: #ef2d70;
            stroke-width: 12;
            /* transform: scale(1.4) translate(32px, 118px) rotate(7deg); */

        }

        body:hover .heartBackground {

            opacity: 0.8;

        }

        body:hover #heartLetterIpath {

            opacity: 1;
            stroke-width: 15;

        }





    </style>

</head>





    <body id="body">

            <div id="svgContainerDiv" style="filter:brightness(1) drop-shadow(6px 8px 1px black); position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); display:inline-flex; justify-content:center;">
                <!-- TEST -->
                <svg class="letterJ">
                        <path 
                            id="letterJpath"
                            d="M 34 27 Q 37 29 34 31 C 26 34 20 20 33 16 C 42 13 45 16 59 11 C 57 49 46 90 26 90 C 7 90 11 58 22 58 C 26 58 27 62 24 63"
                        />
                </svg>

                <svg class="letterE1">
                        <path 
                            id="letterE1path"
                            d="M 4 81 C 37 85 23 61 10 73 C 5 78 5 85 11 88 C 18 91 24 85 22 85"
                        />
                </svg>

                <span style="width:20px;"></span>

                <svg class="letterT">
                        <path 
                            id="letterTpath"
                            d="M 24 7 C 26 20 13 39 11 60 C 10 68 11 83 22 85 C 28 86 35 77 29 65"
                        />
                </svg>

                <svg class="apostrophe">
                        <path 
                            id="apostrophePath"
                            d="M 5 17 C 8 15 9 11 6 13 C 5 14 6 14 6 14"
                        />
                </svg>

                <svg class="lettersAim">
                        <path 
                            id="lettersAimPath"
                            d="M 33 67 C 21 67 12 75 16 84 C 20 92 27 85 36 68 S 41 77 46 99 C 49 109 55 97 58 66 C 59 61 61 63 61 71 Q 61 91 66 85 C 69 82 73 58 75 67 C 76 71 75 74 75 77 C 75 72 76 64 79 63 C 82 62 81 72 82 77 C 80 61 85 57 88 58 C 90 59 92 63 90 69 C 86 85 81 92 86 99 C 92 106 101 98 93 92"
                        />
                </svg>

                <svg class="letterE2">
                        <path 
                            id="letterE2path"
                            d="M 4 81 C 37 85 23 61 10 73 C 5 78 5 85 11 88 C 18 91 24 85 22 85"
                        />
                </svg>

                <svg class="letterTline">
                        <path 
                            id="letterTlinePath"
                            d="M 5 32 C 2 30 5 26 9 28 C 16 30 23 30 36 28 C 53 25 66 17 61 7 C 58 2 52 6 54 11 C 56 15 61 12 59 9"
                        />
                </svg>

                <svg class="heartLetterI">
                        <path
                            id="heartLetterIpath"
                            d="M 63 107 C 47 87 34 74 22 63 C -1 44 5 16 23 10 C 57 0 63 37 64 39 C 65 37 69 0 100 9 C 121 15 125 44 106 61 C 90 75 75 90 63 107"
                        />
                </svg>


            </div>



            

            <!-- <br> -->

            <div style="filter:brightness(1) drop-shadow(6px 8px 1px black); position:absolute; top:69%; left:50%; transform:translate(-50%, -55%); display:inline-flex; justify-content:center;">
            
                <!-- Traits absolue: -->
                <svg class="letterFline">
                        <path 
                            id="letterFlinePath"
                            d="M 5 32 C 2 30 5 26 9 28 C 16 30 23 30 36 28 C 53 25 66 17 61 7 C 58 2 52 6 54 11 C 56 15 61 12 59 9"
                        />
                </svg>

                <svg class="letterFline2">
                        <path 
                            id="letterFline2Path"
                            d="M 5 32 C 2 30 5 26 9 28 C 16 30 23 30 36 28 C 53 25 66 17 61 7 C 58 2 52 6 54 11 C 56 15 61 12 59 9"
                        />
                </svg>

                <svg class="letterT2line">
                        <path 
                            id="letterT2linePath"
                            d="M 4 23 C 14 26 21 18 40 18 C 43 18 43 14 40 14 C 37 14 37 17 39 17"
                        />
                </svg>

                <svg class="heart">
                        <path
                            id="heartPath"
                            d="M 63 107 C 47 87 34 74 22 63 C -1 44 5 16 23 10 C 57 0 63 37 64 39 C 65 37 69 0 100 9 C 121 15 125 44 106 61 C 90 75 75 90 63 107"
                        />
                </svg>

                <div class="heartBackground"></div>
                

                <!-- Lettres relative -->
                <svg class="letterF">
                        <path 
                            id="letterFpath"
                            d="M 24 7 C 26 20 13 39 11 60 C 10 68 11 83 22 85 C 28 86 35 77 29 65"
                        />
                </svg>

                <svg class="letterO">
                        <path 
                            id="letterOpath"
                            d="M 23 84 C 26 77 18 68 10 74 C 4 80 7 86 11 88 C 18 91 25 85 21 84 C 16 85 25.3333 87 27 87 C 31 87 32 86 33 81 Q 33.5 77.5 34 74 Q 39 73 46 70 C 42 81 43 81 43 84 C 44 86 45 87 47 87 C 50 87 51 86 53 84 C 59 78 69 48 72 25 C 63 80 67 91 75 88 C 80 86 78 79 73 82 C 70 84 72 88 75 87"
                        />
                </svg>


            </div>
    </body>



    <script>
        var path = document.querySelector('.letterJ path');
        var length = path.getTotalLength();
        path.style.transition = path.style.WebkitTransition = 'none';
        path.style.strokeDasharray = length + ' ' + length;
        path.style.strokeDashoffset = length;
        path.getBoundingClientRect();
        path.style.transition = path.style.WebkitTransition =
        'stroke-dashoffset 2s ease, stroke 0.4s linear, stroke-width 0.4s linear';
        path.style.strokeDashoffset = '0';

        var path2 = document.querySelector('.letterE1 path');
        var length2 = path2.getTotalLength();
        path2.style.transition = path2.style.WebkitTransition = 'none';
        path2.style.strokeDasharray = length2 + ' ' + length2;
        path2.style.strokeDashoffset = length2;
        path2.getBoundingClientRect();
        path2.style.transition = path2.style.WebkitTransition =
        'stroke-dashoffset 1.5s 0.7s ease, stroke 0.4s linear, stroke-width 0.4s linear';
        path2.style.strokeDashoffset = '0';

        var path3 = document.querySelector('.letterT path');
        var length3 = path3.getTotalLength();
        path3.style.transition = path3.style.WebkitTransition = 'none';
        path3.style.strokeDasharray = length3 + ' ' + length3;
        path3.style.strokeDashoffset = length3;
        path3.getBoundingClientRect();
        path3.style.transition = path3.style.WebkitTransition =
        'stroke-dashoffset 1.5s 1.5s ease, stroke 0.4s linear, stroke-width 0.4s linear';
        path3.style.strokeDashoffset = '0';

        var path4 = document.querySelector('.apostrophe path');
        var length4 = path4.getTotalLength();
        path4.style.transition = path4.style.WebkitTransition = 'none';
        path4.style.strokeDasharray = length4 + ' ' + length4;
        path4.style.strokeDashoffset = length4;
        path4.getBoundingClientRect();
        path4.style.transition = path4.style.WebkitTransition =
        'stroke-dashoffset 1.5s 2.2s ease, stroke 0.4s linear, stroke-width 0.4s linear';
        path4.style.strokeDashoffset = '0';

        var path5 = document.querySelector('.lettersAim path');
        var length5 = path5.getTotalLength();
        path5.style.transition = path5.style.WebkitTransition = 'none';
        path5.style.strokeDasharray = length5 + ' ' + length5;
        path5.style.strokeDashoffset = length5;
        path5.getBoundingClientRect();
        path5.style.transition = path5.style.WebkitTransition =
        'stroke-dashoffset 3.5s 2.3s ease, stroke 0.4s linear, stroke-width 0.4s linear';
        path5.style.strokeDashoffset = '0';

        var path6 = document.querySelector('.letterE2 path');
        var length6 = path6.getTotalLength();
        path6.style.transition = path6.style.WebkitTransition = 'none';
        path6.style.strokeDasharray = length6 + ' ' + length6;
        path6.style.strokeDashoffset = length6;
        path6.getBoundingClientRect();
        path6.style.transition = path6.style.WebkitTransition =
        'stroke-dashoffset 1.3s 4.3s ease, stroke 0.4s linear, stroke-width 0.4s linear';
        path6.style.strokeDashoffset = '0';


        var path7 = document.querySelector('.letterTline path');
        var length7 = path7.getTotalLength();
        path7.style.transition = path7.style.WebkitTransition = 'none';
        path7.style.strokeDasharray = length7 + ' ' + length7;
        path7.style.strokeDashoffset = length7;
        path7.getBoundingClientRect();
        path7.style.transition = path7.style.WebkitTransition =
        'stroke-dashoffset 1.5s 5.2s ease, stroke 0.4s linear, stroke-width 0.4s linear';
        path7.style.strokeDashoffset = '0';

        var path8 = document.querySelector('.letterFline path');
        var length8 = path8.getTotalLength();
        path8.style.transition = path8.style.WebkitTransition = 'none';
        path8.style.strokeDasharray = length8 + ' ' + length8;
        path8.style.strokeDashoffset = length8;
        path8.getBoundingClientRect();
        path8.style.transition = path8.style.WebkitTransition =
        'stroke-dashoffset 1.5s 5.2s ease, stroke 0.4s linear, stroke-width 0.4s linear';
        path8.style.strokeDashoffset = '0';

        var path9 = document.querySelector('.letterFline2 path');
        var length9 = path9.getTotalLength();
        path9.style.transition = path9.style.WebkitTransition = 'none';
        path9.style.strokeDasharray = length9 + ' ' + length9;
        path9.style.strokeDashoffset = length9;
        path9.getBoundingClientRect();
        path9.style.transition = path9.style.WebkitTransition =
        'stroke-dashoffset 1.5s 5.2s ease, stroke 0.4s linear, stroke-width 0.4s linear';
        path9.style.strokeDashoffset = '0';

        var path10 = document.querySelector('.letterF path');
        var length10 = path10.getTotalLength();
        path10.style.transition = path10.style.WebkitTransition = 'none';
        path10.style.strokeDasharray = length10 + ' ' + length10;
        path10.style.strokeDashoffset = length10;
        path10.getBoundingClientRect();
        path10.style.transition = path10.style.WebkitTransition =
        'stroke-dashoffset 1.5s 6s ease, stroke 0.4s linear, stroke-width 0.4s linear';
        path10.style.strokeDashoffset = '0';

        var path11 = document.querySelector('.letterO path');
        var length11 = path11.getTotalLength();
        path11.style.transition = path11.style.WebkitTransition = 'none';
        path11.style.strokeDasharray = length11 + ' ' + length11;
        path11.style.strokeDashoffset = length11;
        path11.getBoundingClientRect();
        path11.style.transition = path11.style.WebkitTransition =
        'stroke-dashoffset 3s 6.5s ease, stroke 0.4s linear, stroke-width 0.4s linear';
        path11.style.strokeDashoffset = '0';

        var path12 = document.querySelector('.letterT2line path');
        var length12 = path12.getTotalLength();
        path12.style.transition = path12.style.WebkitTransition = 'none';
        path12.style.strokeDasharray = length12 + ' ' + length12;
        path12.style.strokeDashoffset = length12;
        path12.getBoundingClientRect();
        path12.style.transition = path12.style.WebkitTransition =
        'stroke-dashoffset 1.2s 7.8s ease, stroke 0.4s linear, stroke-width 0.4s linear';
        path12.style.strokeDashoffset = '0';

        var path13 = document.querySelector('.heart path');
        var length13 = path13.getTotalLength();
        path13.style.transition = path13.style.WebkitTransition = 'none';
        path13.style.strokeDasharray = length13 + ' ' + length13;
        path13.style.strokeDashoffset = length13;
        path13.getBoundingClientRect();
        path13.style.transition = path13.style.WebkitTransition =
        'stroke-dashoffset 2s 8.5s ease, stroke 0.4s linear, stroke-width 0.4s linear';
        path13.style.strokeDashoffset = '0';

        var path14 = document.querySelector('.heartLetterI path');
        var length14 = path14.getTotalLength();
        path14.style.transition = path14.style.WebkitTransition = 'none';
        path14.style.strokeDasharray = length14 + ' ' + length14;
        path14.style.strokeDashoffset = length14;
        path14.getBoundingClientRect();
        path14.style.transition = path14.style.WebkitTransition =
        'stroke-dashoffset 1s 10.2s ease, stroke 0.4s linear, stroke-width 0.4s linear';
        path14.style.strokeDashoffset = '0';


        document.getElementById("body").addEventListener("click", function() {
            console.log("click");
        })

    </script>

</html>