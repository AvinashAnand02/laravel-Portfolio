<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Portfolio | Avinash Anand </title> -->
    <title>@yield('page-title')</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #658CBB;
            color: white;
            padding: 10px 0;
            font-size: 20px;
        }

        .nav-list {
            list-style: none;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            padding: 0;
        }

        .nav-list li {
            margin: 0 20px;
        }

        .nav-list li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            font-family: cursive;
            transition: color 0.3s ease;
        }

        .nav-list li a:hover {
            color: #ff9900;
        }
        
        /* Add some space below the header */
        .content {
            padding-top: 60px;
        }

        .navbar a {
  color: white;
  font-weight: bold;
  text-decoration: none;
  padding: 10px;
  background-color: #658CBB;
  border-radius: 5px;
}

    </style>
</head>
<body>
    <header class="navbar">
        <nav>
            <ul class="nav-list">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/skill">Skills</a></li>
                <li><a href="/education">Education</a></li>
                <li><a href="/work">Work</a></li>
                <li><a href="/experience">Experience</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/login">Login</a></li>
            </ul>
        </nav>
    </header>

    <div class="content">
        <!-- Your content goes here -->
    </div>

</body>
</html>
