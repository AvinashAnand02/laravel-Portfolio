@extends('avinash.head')
@extends('avinash.footer')
@section('page-title', 'Skills | Avinash Anand')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            height: 100vh;
            align-items: center;
            justify-content: center;
        }

        .home {
            display: flex;

            justify-content: center;
            align-items: center;
        }

        .container {
            position: relative;
            max-width: 500px;
            width: 100%;
            background: #fff;
            margin: 20px 15px;
            padding: 10px 20px;
            border-radius: 7px;
            box-shadow: #4070f4 0px 0px 15px 0px;
            margin-top: 90px;
        }

        .container .skill-box {
            width: 100%;
            margin: 25px 0;
        }

        .skill-box .title {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: #333;
        }

        .skill-box .skill-bar {
            height: 8px;
            width: 100%;
            border-radius: 6px;
            margin-top: 6px;
            background: rgba(0, 0, 0, 0.1);
        }

        .skill-bar .skill-per {
            position: relative;
            display: block;
            height: 100%;
            width: 90%;
            border-radius: 6px;
            background: #4070f4;
            animation: progress 0.4s ease-in-out forwards;
            opacity: 0;
        }

        .skill-per.html {
            width: 90%;
            animation-delay: 0.1s;
        }

        .skill-per.css {
            width: 70%;
            animation-delay: 0.2s;
        }

        .skill-per.javascript {
            width: 50%;
            animation-delay: 0.3s;
        }

        .skill-per.nodejs {
            width: 30%;
            animation-delay: 0.4s;
        }

        .skill-per.react {
            width: 60%;
            animation-delay: 0.5s;
        }

        .skill-per.laravel {
            width: 50%;
            animation-delay: 0.6s;
        }

        @keyframes progress {
            0% {
                width: 0;
                opacity: 1;
            }

            100% {
                opacity: 1;
            }
        }

        .skill-per .tooltip {
            position: absolute;
            right: -14px;
            top: -28px;
            font-size: 9px;
            font-weight: 500;
            color: #fff;
            padding: 2px 6px;
            border-radius: 3px;
            background: #4070f4;
            z-index: 1;
        }

        .tooltip::before {
            content: '';
            position: absolute;
            left: 50%;
            bottom: -2px;
            height: 10px;
            width: 10px;
            z-index: -1;
            background-color: #4070f4;
            transform: translateX(-50%) rotate(45deg);
        }
    </style>
</head>

<body>
    <div class="home">


        <div class="container">
            <h2 class="heading" style="color: #333;"><i class="fas fa-laptop-code"></i> Skills & <span style="font-weight: bold;">Abilities</span></h2>
            <div class="skill-box">
                <span class="title"><i class="fab fa-html5" style="font-size: 24px; color: #e34c26;"></i> HTML</span>
                <div class="skill-bar">
                    <span class="skill-per html">
                        <span class="tooltip">90%</span>
                    </span>
                </div>
            </div>
            <div class="skill-box">
                <span class="title"><i class="fab fa-css3" style="font-size: 24px; color: #264de4;"></i> CSS</span>
                <div class="skill-bar">
                    <span class="skill-per css">
                        <span class="tooltip">70%</span>
                    </span>
                </div>
            </div>
            <div class="skill-box">
                <span class="title"><i class="fab fa-js" style="font-size: 24px; color:  #f0db4f;"></i> JavaScript</span>
                <div class="skill-bar">
                    <span class="skill-per javascript">
                        <span class="tooltip">50%</span>
                    </span>
                </div>
            </div>
            <div class="skill-box">
                <span class="title"><i class="fab fa-node-js" style="font-size: 24px; color: #215732;"></i> NodeJS</span>
                <div class="skill-bar">
                    <span class="skill-per nodejs">
                        <span class="tooltip">30%</span>
                    </span>
                </div>
            </div>

            <div class="skill-box">
                <span class="title"><i class="fab fa-react" style="font-size: 24px; color: #306998;"></i> React</span>
                <div class="skill-bar">
                    <span class="skill-per react">
                        <span class="tooltip">60%</span>
                    </span>
                </div>
            </div>

            <div class="skill-box">
                <span class="title"><i class="fab fa-laravel" style="font-size: 24px; color: #fb503b;"></i> Laravel</span>
                <div class="skill-bar">
                    <span class="skill-per react">
                        <span class="tooltip">50%</span>
                    </span>
                </div>
            </div>

        </div>
    </div>
</body>

</html>