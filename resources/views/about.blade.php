@extends('avinash.head')
@extends('avinash.footer')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <title>About | Avinash Anand </title> -->
    @section('page-title', 'About | Avinash Anand')
</head>
<body>
    <?php
      $imageUrl = asset('assests/favicon.png');
    ?>
<section class="about" id="about" style="text-align: center; padding: 50px; background-color: white;">
    <h2 class="heading" style="color: #333;"><i class="fas fa-user-alt"></i> About <span>Me</span></h2>
    
    <div class="row" style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap; margin-top: 20px;">

    <div class="image" style="flex: 1; padding: 10px;">
        <img draggable="false" class="tilt" src="{{ $imageUrl }}" alt="" style="max-width: 50%; height: auto;">
    </div>
    <div class="content" style="flex: 1; padding: 10px; text-align: left;">
        <h3 style="color: #333;">I'm Avinash</h3>
        <span class="tag" style="color: #ff9900;">Passionate Web Developer| Coding Enthusiast</span>
        <p>
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
            <a href="" class="btn" style="background-color: #333; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px;">
                <span>Resume</span>
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>

    </div>
    </div>
</section>
<!-- 
name : {{$name}} <br>
code : {{$code}} -->
</body>
</html>
