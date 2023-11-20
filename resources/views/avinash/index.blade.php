@extends('avinash.head')
@section('page-title', 'Portfolio | Avinash Anand')

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap");
@import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400&display=swap');

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <?php
  $imageUrl = asset('assests/favicon.png');
  ?>
  <link rel="icon" href="{{ $imageUrl }}" type="image/png">
  <title>@yield('page-title', 'Portfolio | Avinash Anand')</title>
</head>

<body style="overflow-x: hidden; overflow-y: hidden;">

  <!-- hero section Starts -->
  <section class="home" id="home" style="position: relative; overflow: hidden; background-color: #f0f0f0; padding: 45px 0 90px; text-align: center; z-index: 0;">

    <div id="particles-js" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>

    <div class="content" style="position: relative; z-index: 35;">
      <h3 style="font-size: 40px;">Hi There,<br /> I'm Avinash <span style="font-weight: bold;">Anand</span></h3>
      <p><span style="font-weight: bold; font-size: 20px;">Full Stack Developer</span></p>
      <a href="/about" class="btn" style="background-color: #306998; color: #fff; padding: 10px 20px; border-radius: 5px; text-decoration: none; display: inline-block; margin-top: 20px;"><span style="font-weight: bold;">About Me</span>
        <i class="fas fa-arrow-circle-down"></i>
      </a>
      <div class="socials" style="margin-top: 40px;">
        <ul class="social-icons" style="list-style: none; padding: 0; display: flex; justify-content: center; align-items: center;">
          <li style="margin: 0 10px;">
            <a class="linkedin" href="{{ route('linkedin') }}" target="_blank" style="text-decoration: none; color: #0077B5;">
              <i class="fab fa-linkedin" style="font-size: 34px;"></i>
            </a>
          </li>
          <li style="margin: 0 10px;">
            <a class="github" href="{{ route('github') }}" target="_blank" style="text-decoration: none; color: #333;">
              <i class="fab fa-github" style="font-size: 34px;"></i>
            </a>
          </li>
          <li style="margin: 0 10px;">
            <a class="YouTube" href="{{ route('youtube') }}" target="_blank" style="text-decoration: none; color: #FF0000;">
              <i class="fab fa-youtube" style="font-size: 34px;"></i>
            </a>
          </li>
          <li style="margin: 0 10px;">
            <a class="twitter" href="{{ route('twitter') }}" target="_blank" style="text-decoration: none; color: #1DA1F2;">
              <i class="fab fa-twitter" style="font-size: 24px;"></i>
            </a>
          </li>
          <li style="margin: 0 10px;">
            <a class="Discord" href="{{ route('discord') }}" target="_blank" style="text-decoration: none; color: #7289DA;">
              <i class="fab fa-discord" style="font-size: 34px;"></i>
            </a>
          </li>
          <li style="margin: 0 10px;">
            <a class="instagram" href="{{ route('instagram') }}" target="_blank" style="text-decoration: none; color: #E4405F;">
              <i class="fab fa-instagram" style="font-size: 34px;"></i>
            </a>
          </li>
        </ul>

      </div>
    </div>

    <div class="image" style="position: relative; z-index: 1;">
      <img draggable="false" class="tilt" src="" alt="" style="max-width: 100%; border-radius: 10px;">
    </div>
  </section>

  <!-- hero section ends -->

  <!-- about section starts -->
  <!-- <section class="about" id="about" style="padding: 50px 0 90px; background-color: white; text-align: center;">
    <h2 class="heading" style="color: #333;"><i class="fas fa-user-alt"></i> About <span style="font-weight: bold;">Me</span></h2>

    <div class="row" style="display: flex; align-items: center; justify-content: center; flex-wrap: wrap; margin-top: 30px;">

      <div class="image" style="flex: 1; padding: 20px;">
        <?php
        $imageUrl = asset('assests/profile.jpg');
        ?>
        <img draggable="false" class="tilt" src="{{ $imageUrl }}" alt="" style="max-width: 50%; border-radius: 10px;">
      </div>
      <div class="content" style="flex: 1; padding: 20px; text-align: left;">
        <h3>I'm Avinash</h3>
        <span class="tag" style="font-weight: bold;">Passionate Web Developer | Coding Enthusiast</span>
        <p style="margin-top: 10px;">
          I'm pursuing B-Tech from Lovely Professional University. I'm a passionate learner who's always willing to learn and work across technologies and domains. Technical Head At Spark The Soul Community Of Event & Gaming.
        </p>

        <div class="box-container" style="display: flex; justify-content: space-between; margin-top: 20px;">
          <div class="box" style="flex: 1; padding: 10px;">
            <p><span style="font-weight: bold;">Age:</span> 20</p>
            <p><span style="font-weight: bold;">College:</span> Lovely Professional University</p>
          </div>
          <div class="box" style="flex: 1; padding: 10px;">
            <p><span style="font-weight: bold;">Email:</span> avinashmgr53@gmail.com</p>
            <p><span style="font-weight: bold;">Place:</span> Munger, India-811202</p>
          </div>
        </div>

        <div class="resumebtn" style="margin-top: 20px;">
          <?php
          $imageUrl = asset('assests/Avinash 12018041 cv.pdf');
          ?>
          <a href="{{ $imageUrl }}" class="btn" style="background-color: #306998; color: #fff; padding: 10px 20px; border-radius: 5px; text-decoration: none;"><span style="font-weight: bold;">Resume</span>
            <i class="fas fa-chevron-right"></i>
          </a>
        </div>

      </div>
    </div>
  </section> -->

  <!-- about section ends -->

  <!-- skills section starts -->
  <!-- <section class="skills" id="skills" style="   background-color: white; ">
    <div class="skill" style="display:flex;justify-content:center;">

      <h2 class="heading" style="color: #333;"><i class="fas fa-laptop-code"></i> Skills & <span style="font-weight: bold;">Abilities</span></h2>
    </div>

    <div class="container">
      <div class="row" id="skillsContainer" style="margin-top: 30px; display:flex; justify-content:space-evenly;">
        <div class="col" style="margin: 0 15px;">
          <?php
          $skillValue = 90;
          ?>
          <div class="progress-bar" style="display: flex; justify-content: center; align-items: center; width: 100px; height: 100px; margin: 0 auto; border-radius: 50%; background: radial-gradient(closest-side, white 79%, transparent 80% 100%), conic-gradient(#306998 <?php echo $skillValue; ?>%, #e3d3d3 0);">
            <div class="fill" style="position: absolute; width: 100%; height: 100%; border-radius: 50%; clip: rect(0px, 50px, 100px, 0px); transform: rotate(<?php echo $skillValue * 3.6; ?>deg);"></div>
            <div class="value" style="position: absolute; font-weight: bold;"><?php echo $skillValue; ?>%</div>
          </div>
          <div class="info" style="margin-top: 10px;">
            <i class="fab fa-html5" style="font-size: 24px; color: #e34c26;"></i>
            <span style="font-weight: bold;">HTML</span>
          </div>
        </div>

        <div class="col" style="margin: 0 15px;">
          <?php
          $skillValue = 70;
          ?>
          <div class="progress-bar" style="display: flex; justify-content: center; align-items: center; width: 100px; height: 100px; margin: 0 auto; border-radius: 50%; background: radial-gradient(closest-side, white 79%, transparent 80% 100%), conic-gradient(#306998 <?php echo $skillValue; ?>%, #e3d3d3 0);">
            <div class="fill" style="position: absolute; width: 100%; height: 100%; border-radius: 50%; clip: rect(0px, 50px, 100px, 0px); transform: rotate(<?php echo $skillValue * 3.6; ?>deg);"></div>
            <div class="value" style="position: absolute; font-weight: bold;"><?php echo $skillValue; ?>%</div>
          </div>
          <div class="info" style="margin-top: 10px;">
            <i class="fab fa-css3" style="font-size: 24px; color: #264de4;"></i>
            <span style="font-weight: bold;">CSS</span>
          </div>
        </div>

        <div class="col" style="margin: 0 15px;">
          <?php
          $skillValue = 50;
          ?>
          <div class="progress-bar" style="display: flex; justify-content: center; align-items: center; width: 100px; height: 100px; margin: 0 auto; border-radius: 50%; background: radial-gradient(closest-side, white 79%, transparent 80% 100%), conic-gradient(#306998 <?php echo $skillValue; ?>%, #e3d3d3 0);">
            <div class="fill" style="position: absolute; width: 100%; height: 100%; border-radius: 50%; clip: rect(0px, 50px, 100px, 0px); transform: rotate(<?php echo $skillValue * 3.6; ?>deg);"></div>
            <div class="value" style="position: absolute; font-weight: bold;"><?php echo $skillValue; ?>%</div>
          </div>
          <div class="info" style="margin-top: 10px;">
            <i class="fab fa-js" style="font-size: 24px; color:  #f0db4f;"></i>
            <span style="font-weight: bold;">Javascript</span>
          </div>
        </div>

        <div class="col" style="margin: 0 15px;">
          <?php
          $skillValue = 30;
          ?>
          <div class="progress-bar" style="display: flex; justify-content: center; align-items: center; width: 100px; height: 100px; margin: 0 auto; border-radius: 50%; background: radial-gradient(closest-side, white 79%, transparent 80% 100%), conic-gradient(#306998 <?php echo $skillValue; ?>%, #e3d3d3 0);">
            <div class="fill" style="position: absolute; width: 100%; height: 100%; border-radius: 50%; clip: rect(0px, 50px, 100px, 0px); transform: rotate(<?php echo $skillValue * 3.6; ?>deg);"></div>
            <div class="value" style="position: absolute; font-weight: bold;"><?php echo $skillValue; ?>%</div>
          </div>
          <div class="info" style="margin-top: 10px;">
            <i class="fab fa-node-js" style="font-size: 24px; color: #215732;"></i>
            <span style="font-weight: bold;">Node.js</span>
          </div>
        </div>

        <div class="col" style="margin: 0 15px;">
          <?php
          $skillValue = 60;
          ?>
          <div class="progress-bar" style="display: flex; justify-content: center; align-items: center; width: 100px; height: 100px; margin: 0 auto; border-radius: 50%; background: radial-gradient(closest-side, white 79%, transparent 80% 100%), conic-gradient(#306998 <?php echo $skillValue; ?>%, #e3d3d3 0);">
            <div class="fill" style="position: absolute; width: 100%; height: 100%; border-radius: 50%; clip: rect(0px, 50px, 100px, 0px); transform: rotate(<?php echo $skillValue * 3.6; ?>deg);"></div>
            <div class="value" style="position: absolute; font-weight: bold;"><?php echo $skillValue; ?>%</div>
          </div>
          <div class="info" style="margin-top: 10px;">
            <i class="fab fa-react" style="font-size: 24px; color: #306998;"></i>
            <span style="font-weight: bold;">React</span>
          </div>
        </div>

        <div class="col" style="margin: 0 15px;">
          <?php
          $skillValue = 50;
          ?>
          <div class="progress-bar" style="display: flex; justify-content: center; align-items: center; width: 100px; height: 100px; margin: 0 auto; border-radius: 50%; background: radial-gradient(closest-side, white 79%, transparent 80% 100%), conic-gradient(#306998 <?php echo $skillValue; ?>%, #e3d3d3 0);">
            <div class="fill" style="position: absolute; width: 100%; height: 100%; border-radius: 50%; clip: rect(0px, 50px, 100px, 0px); transform: rotate(<?php echo $skillValue * 3.6; ?>deg);"></div>
            <div class="value" style="position: absolute; font-weight: bold;"><?php echo $skillValue; ?>%</div>
          </div>
          <div class="info" style="margin-top: 10px;">
            <i class="fab fa-laravel" style="font-size: 24px; color: #fb503b;"></i>
            <span style="font-weight: bold;">Laravel</span>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- skills section ends -->

  <!-- education section starts
  <section class="education" id="education" style="padding: 50px 0; background-color: white; text-align: center;">
    <h1 class="heading" style="color: #333;"><i class="fas fa-graduation-cap"></i> My <span>Education</span></h1>
    <p class="quote" style="color: #777; font-style: italic;">Education is not the learning of facts, but the training of the mind to think.</p>
    <div class="box-container" style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap; margin-top: 30px;">
        <div class="box" style="background-color: #fff; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); padding: 20px; margin: 20px; width: 300px;">
            <div class="image">
                <a href="https://www.lpu.in/">
                    <img draggable="false" src="./assests/images/educat/collage.jpg" alt="" style="max-width: 100%;">
                </a>
            </div>
            <div class="content" style="margin-top: 15px;">
                <h3 style="color: #333;">Bachelor of Engineering in Computer Science</h3>
                <p>Lovely Professional University (LPU)</p>
                <h4 style="color: #555;">2020-2024 | Pursuing</h4>
            </div>
        </div>
        <div class="box" style="background-color: #fff; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); padding: 20px; margin: 20px; width: 300px;">
            <div class="image">
                <a href="http://www.schoolfinds.com/high-school-sandha-2-bhalar-munger.html">
                    <img draggable="false" src="./assests/images/educat/school.jpg" alt="" style="max-width: 100%;">
                </a>
            </div>
            <div class="content" style="margin-top: 15px;">
                <h3 style="color: #333;">High School, Sandha +2 Bhalar | Science</h3>
                <p>High School | BSEB</p>
                <h4 style="color: #555;">2017-2019 | Completed</h4>
            </div>
        </div>
    </div>
</section> -->

  <!-- education section ends -->


  <!-- work project section starts -->
  <!-- <section class="work" id="work" style=" margin-top: 5rem;">
  <h1 class="heading" style="color: #333; text-align: center;"><i class="fas fa-laptop-code"></i> Project <span> Made </span></h1>

    <div class="box-container" style="display: flex; flex-wrap: wrap; gap: 1.5rem; margin: 2rem;">
        <div class="box tilt" style="flex: 1 1 30rem; border-radius: 0.5rem; box-shadow: 0 0.5rem 1rem rgba(225, 219, 219, 0.895); position: relative; overflow: hidden; height: 20rem; background: #fff;">
            <img draggable="false" src="https://res.cloudinary.com/djwnzqmjq/image/upload/v1674508785/Screenshot_67_zpbgrr.png" alt="" style="height: 100%; width: 100%; object-fit: cover;">
            <div class="content" style="height: 100%; width: 100%; position: absolute; top: 85%; left: 0; background: fade-blue; display: flex; flex-direction: column;">
                <div class="tag" style="display: flex; flex-direction: row; justify-content: space-between; align-items: center; height: 4.5rem; width: 100%; padding-left: 1rem; background: #;">
                    <h3 style="font-size: 2rem; color: #fff;">Portfolio Website</h3>
                </div>
                <div class="desc" style="margin: 2rem; display: flex; flex-direction: column; justify-content: center;">
                    <p style="font-size: 1.5rem;">Presnol Portfolio website, When I started learning HTML, then I tried to make this. It's all about me.</p>
                    <div class="btns" style="display: flex; justify-content: space-between; width: 100%; margin-top: 2rem;">
                        <a href="https://AvinashAnand02.github.io/Portfolio/" class="btn" target="_blank" style="line-height: 0; display: inline; padding: 1.5rem 2.5rem; border-radius: 0.5rem; font-size: 1.5rem; color: #306998; background: rgb(12, 12, 12); margin-right: 2rem;">View</a>
                        <a href="https://github.com/AvinashAnand02/Portfolio" class="btn" target="_blank" style="line-height: 0; display: inline; padding: 1.5rem 2.5rem; border-radius: 0.5rem; font-size: 1.5rem; color: #306998; background: rgb(12, 12, 12); margin-right: 2rem;">Code</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="box tilt" style="flex: 1 1 30rem; border-radius: 0.5rem; box-shadow: 0 0.5rem 1rem rgba(225, 219, 219, 0.895); position: relative; overflow: hidden; height: 20rem; background: #fff;">
            <img draggable="false" src="https://res.cloudinary.com/djwnzqmjq/image/upload/v1674508784/Screenshot_69_khbhry.png" alt="" style="height: 100%; width: 100%; object-fit: cover;">
            <div class="content" style="height: 100%; width: 100%; position: absolute; top: 85%; left: 0; background: rgba(255, 255, 255, 0.9); display: flex; flex-direction: column;">
                <div class="tag" style="display: flex; flex-direction: row; justify-content: space-between; align-items: center; height: 4.5rem; width: 100%; padding-left: 1rem; background: #;">
                    <h3 style="font-size: 2rem; color: #fff;">Sudoku Puzzle</h3>
                </div>
                <div class="desc" style="margin: 2rem; display: flex; flex-direction: column; justify-content: center;">
                    <p style="font-size: 1.5rem;">We all know that some of the people like to solve sudoku so i try to make the sudoku puzzle where you will solve puzzle whenever you want.</p>
                    <div class="btns" style="display: flex; justify-content: space-between; width: 100%; margin-top: 2rem;">
                        <a href="https://AvinashAnand02.github.io/Sudoku/" class="btn" target="_blank" style="line-height: 0; display: inline; padding: 1.5rem 2.5rem; border-radius: 0.5rem; font-size: 1.5rem; color: #fff; background: rgb(12, 12, 12); margin-right: 2rem;">View</a>
                        <a href="https://github.com/AvinashAnand02/Sudoku" class="btn" target="_blank" style="line-height: 0; display: inline; padding: 1.5rem 2.5rem; border-radius: 0.5rem; font-size: 1.5rem; color: #fff; background: rgb(12, 12, 12); margin-right: 2rem;">Code</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="box tilt" style="flex: 1 1 30rem; border-radius: 0.5rem; box-shadow: 0 0.5rem 1rem rgba(225, 219, 219, 0.895); position: relative; overflow: hidden; height: 20rem; background: #fff;">
            <img draggable="false" src="https://res.cloudinary.com/djwnzqmjq/image/upload/v1674508784/Screenshot_71_aufizw.png" alt="" style="height: 100%; width: 100%; object-fit: cover;">
            <div class="content" style="height: 100%; width: 100%; position: absolute; top: 85%; left: 0; background: rgba(255, 255, 255, 0.9); display: flex; flex-direction: column;">
                <div class="tag" style="display: flex; flex-direction: row; justify-content: space-between; align-items: center; height: 4.5rem; width: 100%; padding-left: 1rem; background: #;">
                    <h3 style="font-size: 2rem; color: #fff;">Tic Tac Toe Game</h3>
                </div>
                <div class="desc" style="margin: 2rem; display: flex; flex-direction: column; justify-content: center;">
                    <p style="font-size: 1.5rem;">We all know that some of the people like to play tic tac toe game so i try to make the tic tac toe game where you will play whenever you want.</p>
                    <div class="btns" style="display: flex; justify-content: space-between; width: 100%; margin-top: 2rem;">
                        <a href="https://AvinashAnand02.github.io/Tic-Tac-Toe/" class="btn" target="_blank" style="line-height: 0; display: inline; padding: 1.5rem 2.5rem; border-radius: 0.5rem; font-size: 1.5rem; color: #fff; background: rgb(12, 12, 12); margin-right: 2rem;">View</a>
                        <a href="https://github.com/AvinashAnand02/Tic-Tac-Toe" class="btn" target="_blank" style="line-height: 0; display: inline; padding: 1.5rem 2.5rem; border-radius: 0.5rem; font-size: 1.5rem; color: #fff; background: rgb(12, 12, 12); margin-right: 2rem;">Code</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="box tilt" style="flex: 1 1 30rem; border-radius: 0.5rem; box-shadow: 0 0.5rem 1rem rgba(225, 219, 219, 0.895); position: relative; overflow: hidden; height: 20rem; background: #fff;">
            <img draggable="false" src="https://res.cloudinary.com/djwnzqmjq/image/upload/v1674508784/Screenshot_73_xvrohr.png" alt="" style="height: 100%; width: 100%; object-fit: cover;">
            <div class="content" style="height: 100%; width: 100%; position: absolute; top: 85%; left: 0; background: rgba(255, 255, 255, 0.9); display: flex; flex-direction: column;">
                <div class="tag" style="display: flex; flex-direction: row; justify-content: space-between; align-items: center; height: 4.5rem; width: 100%; padding-left: 1rem; background: #fff;">
                    <h3 style="font-size: 2rem; color: #fff;">ChatBot</h3>
                </div>
                <div class="desc" style="margin: 2rem; display: flex; flex-direction: column; justify-content: center;">
                    <p style="font-size: 1.5rem;">This is a very simple "chatbot" using nothing but JavaScript, HTML, & CSS.</p>
                    <div class="btns" style="display: flex; justify-content: space-between; width: 100%; margin-top: 2rem;">
                        <a href="https://AvinashAnand02.github.io/ChatBot/" class="btn" target="_blank" style="line-height: 0; display: inline; padding: 1.5rem 2.5rem; border-radius: 0.5rem; font-size: 1.5rem; color: #; background: rgb(12, 12, 12); margin-right: 2rem;">View</a>
                        <a href="https://github.com/AvinashAnand02/ChatBot" class="btn" target="_blank" style="line-height: 0; display: inline; padding: 1.5rem 2.5rem; border-radius: 0.5rem; font-size: 1.5rem; color: #fff; background: rgb(12, 12, 12); margin-right: 2rem;">Code</a>
                    </div>
                </div>
            </div>
        </div>

    </div> -->


  <!-- <div class="viewall">
        <a href="/projects/" class="btn"><span>View All</span>
          <i class="fas fa-arrow-right"></i>
        </a>
      </div> -->

  <!-- </section> -->
  <!-- work project section ends -->

  <!-- experience section starts -->
  <!-- <section class="experience" id="experience">

    <h1 class="heading" style="color: #333; text-align: center;"><i class="fas fa-briefcase"></i> My <span>Experience</span></h1>

    <div class="timeline" style="display: flex; align-items: center; margin: 90px;">
        <div class="container left" style="background-color: #f0f0f0; border: 2px solid #ccc; border-radius: 5px; padding: 20px; height: 300px; width: 300px; margin: 20px;">
            <div class="content">
                <div class="tag" style="font-size: 20px;">
                    <h2>SayF</h2>
                </div>
                <div class="desc" style="margin-top: 10px;">
                    <h3>Growth Intern | Internship</h3>
                    <p>Jan 2022 - March 2022</p>
                    <p>Worked on Growth of the company In this regression task, we worked on the growth of the company and the changes required for growth.</p>
                </div>
            </div>
        </div>

        <div class="container right" style="background-color: #f0f0f0; border: 2px solid #ccc; border-radius: 5px; padding: 20px; height: 300px; width: 300px; margin: 20px;">
            <div class="content">
                <div class="tag" style="font-size: 20px;">
                    <h2>Spark The Soul</h2>
                </div>
                <div class="desc" style="margin-top: 10px;">
                    <h3>Technical Head</h3>
                    <p>March 2021 - Present</p>
                    <p>In this, I have organized a lot of events for the organization, and people loved it and participated in those events.</p>
                </div>
            </div>
        </div>

        <div class="container left" style="background-color: #f0f0f0; border: 2px solid #ccc; border-radius: 5px; padding: 20px; height: 300px; width: 300px; margin: 20px;">
            <div class="content">
                <div class="tag" style="font-size: 20px;">
                    <h2>Google Cloud</h2>
                </div>
                <div class="desc" style="margin-top: 10px;">
                    <h3>Google Cloud Facilitator Program</h3>
                    <p>April 2022 - July 2022</p>
                    <p>During the program, I have completed 100+ Google Qwiklabs to complete the Milestone and received swags from Google.</p>
                </div>
            </div>
        </div>
    </div>

  </section> -->
  <!-- experience section ends -->

  <!-- contact section starts -->
  <!-- <section class="contact" id="contact">

  <h1 class="heading" style="color: #333; text-align: center;"><i class="fas fa-headset"></i> Get In <span>Touch</span></h1>

  <div class="container" style="display: flex; justify-content: center; align-items: center; min-height: 80vh;">
  <div class="content" style="background-color: #fff; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); padding: 30px; border-radius: 10px; max-width: 600px; display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center;">
    <div class="image-box" style="text-align: center; flex: 1; margin-right: 20px;">
      <img draggable="false" src="https://res.cloudinary.com/djwnzqmjq/image/upload/v1697873323/contact1_g6dvbr.png" alt="" style="max-width: 100%; height: auto;">
    </div>
    <form id="contact-form" style="flex: 1;">
      <div class="form-group">
        <div class="field" style="display: flex; align-items: center; margin-bottom: 20px;">
          <input type="text" name="name" placeholder="Name" required style="flex: 1; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
          <i class='fas fa-user' style="color: #777; margin-left: 10px;"></i>
        </div>
        <div class="field" style="display: flex; align-items: center; margin-bottom: 20px;">
          <input type="email" name="email" placeholder="Email" required style="flex: 1; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
          <i class='fas fa-envelope' style="color: #777; margin-left: 10px;"></i>
        </div>
        <div class="field" style="display: flex; align-items: center; margin-bottom: 20px;">
          <input type="text" name="phone" placeholder="Phone" style="flex: 1; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
          <i class='fas fa-phone-alt' style="color: #777; margin-left: 10px;"></i>
        </div>
        <div class="message" style="margin-bottom: 20px;">
          <textarea placeholder="Message" name="message" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;"></textarea>
          <i class="fas fa-comment-dots" style="color: #777; margin-left: 10px;"></i>
        </div>
      </div>
      <div class="button-area" style="text-align: center;">
        <button type="submit" style="background-color: #007bff; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
          Submit <i class="fa fa-paper-plane"></i>
        </button>
      </div>
    </form>
  </div>
</div> -->


  <!-- contact section ends -->
</body>

</html>