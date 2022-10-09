<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <!-- Awesome font -->
    <script src="https://kit.fontawesome.com/a66f2d93e3.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;900&family=Ubuntu&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="coloured-section">
        <div class="container-fluid form-box" style="padding:3% 15% 5%;">
            <nav class="navbar navbar-expand-lg navbar-dark" style="padding-bottom: 3%">
                <a class="navbar-brand" href="">ERP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarTogglerDemo01">

                    <ul class="navbar-nav ms-auto">
                        <li class="navbar-item">
                            <a class="nav-link" href="#footer">Contact</a>
                        </li>
                        <li class="navbar-item">
                            <a class="nav-link" href="#tt">TimeTable</a>
                        </li>
                        <li class="navbar-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
            <div class="row">
                <div class="col-md-6 left" style="margin-top: 5%; padding:5%;">
                    <h2>Enter as:</h2>
                    <button type="button" onclick="window.location.href='student.php';"
                        class="btn2">Student</button><br>
                    <button type="button" onclick="window.location.href='teacher.php';" class="btn2">Teacher</button>
                </div>
            </div>
    </section>

    <section class="white-section" style="padding-top:1%;" id="tt">
        <h1>Time Table</h1>
        <div id="testimonial-carousel" class="carousel slide" data-bs-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active container-fluid" style="padding-top:1%;">
          <h2>CSE-A </h2>
          <img class="timetable" src="images/Att.jpg" alt="CSE-A TimeTable">
        </div>
        <div class="carousel-item container-fluid" style="padding-top:1%;">
          <h2>CSE-B </h2>
          <img class="timetable" src="images/Btt.jpg" alt="CSE-B TimeTable">
        </div>
        <div class="carousel-item container-fluid" style="padding-top:1%;">
          <h2>CSE-C </h2>
          <img class="timetable" src="images/Ctt.jpg" alt="CSE-C TimeTable">
        </div>
      </div>
      <button class="carousel-control-prev carousel-btn" type="button" data-bs-target="#testimonial-carousel"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next carousel-btn" type="button" data-bs-target="#testimonial-carousel"
        data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
    </section>

    <section class="coloured-section" id="cta">
    <div class="container-fluid">
      <h1 class="big-heading">Use the best ERP app today.</h1>
      <button type="button" class="btn btn-lg btn-dark cta-btn"><i class="fa-brands fa-apple"></i> Download</button>
      <button type="button" class="btn btn-lg btn-light cta-btn"><i class="fa-brands fa-google-play"></i>
        Download</button>
    </div>
  </section>

  <footer class="white-section" id="footer">
    <div class="container-fluid">
      <a href="https://twitter.com/_pranay10_"><i class="footer-icon fa-brands fa-twitter"></i></a>
      <a href="https://www.linkedin.com/in/pranay-shah-2a1958213/"><i class="footer-icon fa-brands fa-linkedin"></i></a>
      <a href="https://www.instagram.com/_.pranay10._/"><i class="footer-icon fa-brands fa-instagram"></i></a>
      <a href="mailto:shahpranay2305@gmail.com"><i class="footer-icon fa-solid fa-envelope"></i></a>
      <p class="footer-par">© Copyright TinDog</p>
    </div>
  </footer>

</body>

</html>