@extends('avinash.head')
@extends('avinash.footer')
@section('page-title', 'Education | Avinash Anand')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <section class="education" id="education" style="padding: 50px 0; background-color: white; text-align: center;">
        <h1 class="heading" style="color: #333;"><i class="fas fa-graduation-cap"></i> My <span>Education</span></h1>
        <p class="quote" style="color: #777; font-style: italic;">Education is not the learning of facts, but the training of the mind to think.</p>
        <div class="box-container" style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap; margin-top: 30px;">
            <div class="box" style="background-color: #fff; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); padding: 20px; margin: 20px; width: 300px;">
                <div class="image">
                    <a href="https://www.lpu.in/">
                        <img draggable="false" src="https://res.cloudinary.com/djwnzqmjq/image/upload/v1697970965/collage_zdkzkg.png" alt="" style="max-width: 100%;">
                    </a>
                </div>
                <div class="content" style="margin-top: -55px;">
                    <h3 style="color: #333;">Lovely Professional University (LPU)</h3>
                    <p>B-Tech (CSE) </p>
                    <h4 style="color: #555;">2020-2024 | Pursuing</h4>
                </div>
            </div>
            <div class="box" style="background-color: #fff; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); padding: 20px; margin: 20px; width: 300px;">
                <div class="image">
                    <a href="http://www.schoolfinds.com/high-school-sandha-2-bhalar-munger.html">
                        <img draggable="false" src="https://res.cloudinary.com/djwnzqmjq/image/upload/v1697970975/school_yzat4x.jpg" alt="" style="max-width: 100%;">
                    </a>
                </div>
                <div class="content" style="margin-top: -55px;">
                    <h3 style="color: #333;">High School, Sandha +2 Bhalar</h3>
                    <p>High School | BSEB</p>
                    <h4 style="color: #555;">2017-2019 | Completed</h4>
                </div>
            </div>
            <div class="box" style="background-color: #fff; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); padding: 20px; margin: 20px; width: 300px;">
                <div class="image">
                    <a href="https://www.svmmunger.org.in/">
                        <img draggable="false" src="https://res.cloudinary.com/djwnzqmjq/image/upload/v1697972166/10750259_737921342922614_2511056217738378509_o_beznln.jpg" alt="" style="max-width: 100%;">
                    </a>
                </div>
                <div class="content" style="margin-top: -55px;">
                    <h3 style="color: #333;">Saraswati Vidya Mandir, Munger</h3>
                    <p>Senior Secondary | CBSE</p>
                    <h4 style="color: #555;">2016-2017 | Completed</h4>
                </div>
            </div>
        </div>
    </section>
</body>

</html>