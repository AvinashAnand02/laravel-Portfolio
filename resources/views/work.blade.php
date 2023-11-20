@extends('avinash.head')
@extends('avinash.footer')
@section('page-title', 'Work | Avinash Anand')

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
        #projects {
            padding: 20px;
        }

        .project-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .project {
            width: 350px;
            margin: 10px;
            box-shadow: navy 0 0 10px 0;
        }

        .project img {
            width: 100%;
            height: auto;
        }

        .project h3 {
            font-size: 20px;
            margin-top: 10px;
            padding: 0 10px;
        }

        .project p {
            margin-top: 10px;
            padding: 0 10px;
        }

        .project:hover {
            transform: scale(1.1) rotate(3deg);
            box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease-in-out;
        }

        .project:hover .project-image {
            opacity: 0.8;
            transition: opacity 0.3s ease-in-out;
        }

        .project:hover h3 {
            color: black;
            transition: color 0.3s ease-in-out;
        }

        h1 {
            font-size: 30px;
            font-weight: 700;
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 20px;
            margin-top: 60px;
        }

        .project-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
            margin-bottom: 10px;
            padding: 10px 10px;
        }

        .code-button,
        .view-button {
            width: 70px;
            height: 30px;
            border-radius: 2%;
            background-color: #fff;
            box-shadow: 0 0 5px blue;
            cursor: pointer;
        }

        .code-button:hover,
        .view-button:hover {
            background-color: #eee;
        }
    </style>
</head>

<body>
    <section id="projects">
        <h1 class="heading" style="color: #333; text-align: center;"><i class="fas fa-laptop-code"></i> Project <span> Made </span></h1>
        <div class="project-container">
            <div class="project">
                <img src="https://res.cloudinary.com/djwnzqmjq/image/upload/v1674508785/Screenshot_67_zpbgrr.png" alt="Project 1">
                <h3>Portfolio Website</h3>
                <p>Presnol Portfolio website, When I started learning HTML, then I tried to make this. It's all about me.</p>
                <div class="project-buttons">
                    <button class="code-button" type="button" href="{{ route('code1') }}">Code</button>
                    <button class="view-button" type="button" href="https://example.com/portfolio-website">View</button>
                </div>
            </div>

            <div class="project">
                <img src="https://res.cloudinary.com/djwnzqmjq/image/upload/v1674508784/Screenshot_69_khbhry.png" alt="Project 2">
                <h3>Sudoku Puzzle</h3>
                <p>We all know that some of the people like to solve sudoku so i try to make the sudoku puzzle where you will solve puzzle whenever you want.</p>
                <div class="project-buttons">
                    <button class="code-button" type="button" href="{{ route('code1') }}">Code</button>
                    <button class="view-button" type="button" href="https://example.com/portfolio-website">View</button>
                </div>
            </div>
            <div class="project">
                <img src="https://res.cloudinary.com/djwnzqmjq/image/upload/v1674508784/Screenshot_71_aufizw.png" alt="Project 3">
                <h3>Tic Tac Toe Game</h3>
                <p>Tic-tac-toe is a classic game that can be enjoyed by people of all ages. It is a simple game to learn, but it can be surprisingly challenging to master.</p>
                <div class="project-buttons">
                    <button class="code-button" type="button" href="{{ route('code1') }}">Code</button>
                    <button class="view-button" type="button" href="https://example.com/portfolio-website">View</button>
                </div>
            </div>
            <div class="project">
                <img src="https://res.cloudinary.com/djwnzqmjq/image/upload/v1674508784/Screenshot_73_xvrohr.png" alt="Project 4">
                <h3>ChatBot</h3>
                <p>This is a very simple "chatbot" using nothing but JavaScript, HTML, & CSS.</p>
                <div class="project-buttons">
                    <button class="code-button" type="button" href="{{ route('code1') }}">Code</button>
                    <button class="view-button" type="button" href="https://example.com/portfolio-website">View</button>
                </div>
            </div>
            <div class="project">
                <img src="https://res.cloudinary.com/djwnzqmjq/image/upload/v1687695463/Screenshot_28_ikxbu6.png" alt="Project 5">
                <h3>Teleport News</h3>
                <p>this project uses the GraphQL Mediastack API to fetch and process news data. The GraphQL Mediastack API is a RESTful API that provides access to a variety of news data.</p>
                <div class="project-buttons">
                    <button class="code-button" type="button" href="{{ route('code1') }}">Code</button>
                    <button class="view-button" type="button" href="https://example.com/portfolio-website">View</button>
                </div>
            </div>
            <div class="project">
                <img src="https://res.cloudinary.com/djwnzqmjq/image/upload/v1687695438/Screenshot_27_gqc5cv.png" alt="Project 5">
                <h3>Spark The Soul</h3>
                <p>This project i have made for LPU organization where students comes to know about Spark The Soul (STS) organization.</p>
                <div class="project-buttons">
                    <button class="code-button" type="button" href="{{ route('code1') }}">Code</button>
                    <button class="view-button" type="button" href="https://example.com/portfolio-website">View</button>
                </div>
            </div>
            <div class="project">
                <img src="https://res.cloudinary.com/djwnzqmjq/image/upload/v1687683575/Screenshot_26_k9vgpc.png" alt="Project 5">
                <h3>Groco</h3>
                <p>This is a grocery website where anyone can buy grocery product there are many feature like add to cart option, user login interface, search option and track id is also their</p>
                <div class="project-buttons">
                    <button class="code-button" type="button" href="{{ route('code1') }}">Code</button>
                    <button class="view-button" type="button" href="https://example.com/portfolio-website">View</button>
                </div>
            </div>
            
        </div>
    </section>
</body>

</html>