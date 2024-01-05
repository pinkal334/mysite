<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
</head>

<body>

<?php include 'menu.php'; ?>

<div class="jumbotron">
  <h1>Bootstrap Tutorial</h1>
  <p>Bootstrap is the most popular HTML, CSS...</p>
</div>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">About Us</h2>
    </div>

    <div class="container-fluid">
    <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
        <img src="images/4.jpg" class="img-fluid aboutimg">
    </div>
    
    <div class="col-lg-6 col-md-6 col-12">
        <h2 class="display-4">I am Pinku</h2>
        <p class="py-5">I am a diligent student who is eager to find employment. I am
 fully prepared to utilize my skills and passion to help a company
 achieve its goals. I am proficient  in technology and have a
 positive attitude, willingness, and motivation to learn  new
 programs. </p>
        <a href="about.php" class="btn btn-success"> Detail </a>
    </div>    

    </div>
    </div>
</section>

<footer>
  <p class="p-3 bg-dark text-white text-center">@PinkuProduction</p>
</footer>

</body>
</html>