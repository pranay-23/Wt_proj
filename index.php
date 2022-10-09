<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login and Registration</title>

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
    <section class="coloured-section" id="login">
        <div class="container-fluid form-box" style="padding:3% 15% 7%;">
            <nav class="navbar navbar-expand-lg navbar-dark">
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
                            <a class="nav-link" href="#features">Features</a>
                        </li>
                        <li class="navbar-item">
                            <a class="nav-link" href="">Download</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="row">
                <div class="col-md-6 left">
                    <h2>Login</h2>
                    <form action="validation.php" method="post">
                        <label>Username</label><br>
                        <input type="text" name="user" size="30" required><br><br>
                        <label>Password</label><br>
                        <input type="password" name="pwd" size="30" required><br><br>
                        <button type="submit" class="btn1">Login</button>
                        <button type="reset" class="btn1">Reset</button>
                    </form>
                </div>

                <div class="col-md-6 right">
                    <h2>Register</h2>
                    <form action="registration.php" method="post">
                        <label>Username</label><br>
                        <input type="text" name="user" size="30" required><br><br>
                        <label>Password</label><br>
                        <input type="password" name="pwd" size="30" required><br><br>
                        <button type="submit" class="btn1">Register</button>
                        <button type="reset" class="btn1">Reset</button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <section class="white-section" id="features">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 colchal">
                    <i class="fa-solid fa-circle-check fa-4x chal"></i>
                    <h3 class="fea">Easy to use.</h3>
                    <p class="pfea">No need of an engineering degree to use it.</p>
                </div>
                <div class="col-lg-4 colchal">
                    <i class="fa-solid fa-bullseye fa-4x chal"></i>
                    <h3 class="fea">Elite Clientele</h3>
                    <p class="pfea">Top universities use our website.</p>
                </div>
                <div class="col-lg-4 colchal">
                    <i class="fa-solid fa-heart fa-4x chal"></i>
                    <h3 class="fea">Guaranteed to work.</h3>
                    <p class="pfea">Easily use it for your academic progress.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="coloured-section" id="testimonials">

    <div id="testimonial-carousel" class="carousel slide" data-bs-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active container-fluid">
          <h2 class="testimonial-text">I no longer have to sniff other dogs for love. I've found the hottest Corgi on
            TinDog. Woof.</h2>
          <img class="dog-img" src="images/elon.jpg" alt="dog-profile">
          <em>Elon Musk</em>
        </div>
        <div class="carousel-item container-fluid">
          <h2 class="testimonial-text">My dog used to be so lonely, but with TinDog's help, they've found the love of
            their life. I think.</h2>
          <img class="testimonial-image dog-img" src="images/bill.jpg" alt="lady-profile">
          <em>Bill Gates</em>
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

  <!-- Footer -->

  <footer class="white-section" id="footer">
    <div class="container-fluid">
      <a href="https://twitter.com/_pranay10_"><i class="footer-icon fa-brands fa-twitter"></i></a>
      <a href="https://www.linkedin.com/in/pranay-shah-2a1958213/"><i class="footer-icon fa-brands fa-linkedin"></i></a>
      <a href="https://www.instagram.com/_.pranay10._/"><i class="footer-icon fa-brands fa-instagram"></i></a>
      <a href="mailto:shahpranay2305@gmail.com"><i class="footer-icon fa-solid fa-envelope"></i></a>
      <p class="footer-par">© Copyright ERP</p>
    </div>
  </footer>

</body>

</html>