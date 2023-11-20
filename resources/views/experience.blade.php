@extends('avinash.head')
@extends('avinash.footer')

@section('page-title', 'Experience | Avinash Anand')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1 class="heading" style="color: #333; text-align: center; margin-top: 80px;"><i class="fas fa-briefcase"></i> My <span>Experience</span></h1>
    <div style="display: flex;">
    <div class="card">
    <h2 style="color: #333; text-align: center;">SayF</h2>
    <h3 style="color: #777; text-align: center; font-size: 14px;">Growth Intern | Internship</h3>
    <h3 style="color: #777; text-align: center; font-size: 10px;">(Jan 2022 - March 2022)</h3>
    <p style="color: #000; text-align: center;">Worked on Growth of the company In this regression task, we worked on the growth of the company and the changes required for growth.</p>
  </div>
  <div class="card">
    <h2 style="color: #333; text-align: center;">STS</h2>
    <h3 style="color: #777; text-align: center; font-size: 14px;">Spark The Soul | Organization</h3>
    <h3 style="color: #777; text-align: center; font-size: 10px;">(March 2021 - Present)</h3>
    <p style="color: #000; text-align: center;">Worked as Event head and organize on of the event Tresure Hunt after that i got promoted as Technical Head ad made a responsive website.</p>
  </div>
    </div>

  <style>
    .card {
      width: 300px;
      height: 250px;
      margin: 10px;
      margin-bottom: 20px;
      padding: 10px;
      border: 1px solid black;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      transition: all 0.5s ease-in-out;
    }

    .card:hover {
      transform: scale(1.1);
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
    }
  </style>
</body>
</html>
