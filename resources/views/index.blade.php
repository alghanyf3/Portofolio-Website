<!doctype html >
<html lang="en" id="home">
  <!-- Head -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alghany Fergiano</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon ">

    <!-- iconscout -->    
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- animate style -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- link css -->
    <link rel="stylesheet" href="/dist/css/style.css">
  </head>
  <!-- Head -->

  <!-- Body -->
  <body>
    
    <!-- navbar -->
    <div class="header m-3">
      <nav class="navbar navbar-expand-lg pt-4 animate__animated animate__fadeInDown animate__delay-3s">
        <div class="container">
          <a class="navbar-brand fw-bold" href="#">Ghanesia</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto text-center">
              <a class="nav-link" href="#home">Home</a>
              <a class="nav-link" href="#skills">Skills</a>
              <a class="nav-link" href="#about">About</a>
              <a class="nav-link" href="#project">Project</a>
              <a class="nav-link" href="#partnership">Partnership</a>
            </div>
            <button class="btn btn-success rounded-2 d-lg-flex d-block mx-lg-0 mx-auto"><a href="https://wa.me/0822124609852" target="_blank" class="text-decoration-none">Contact Me via WhatsApp</a></button>
          </div>
        </div>
      </nav>
      
      <!-- header -->
      <div class="container">
        <div class="row d-flex align-items-center row-cols-lg-2 row-cols-1">
          <div class="col pt-5 pt-lg-0 mb-lg-0 mb-5">
            <h1 class="fw-bold mb-4 animate__animated animate__fadeInUp animate__delay-1s">Hi! I Am <br>Alghany Fergiano</h1>
            <p class="lh-lg mb-4 animate__animated animate__fadeInUp animate__delay-1s">Saya adalah seorang Front - End Developer | UI UX Designer</p>
            <button class="btn btn-danger me-2 px-sm-4 py-sm-2 px-3 py-2 animate__animated animate__fadeInUp animate__delay-1s">Hire Me</button>
            <div class="d-flex align-items-center mt-4 animate__animated animate__fadeInUp animate__delay-1s">
              <i class="fa-solid fa-people-roof fs-1 me-3"></i>
              <p class="lh-lg m-0">Designer and Developer <br> Specialized Front - End Developer</p>
            </div>
          </div>
          <div class="col d-flex align-self-end position-relative animate__animated animate__fadeIn animate__delay-3s">
            <img src="/assets/img/hero.png" alt="" class="d-block mx-auto">
            <img src="/assets/img/hero-bg.png" alt="" class="position-absolute start-50 bottom-0 translate-middle-x">
            <img src="/assets/img/hero-awards.png" alt="" class="position-absolute">
            <img src="/assets/img/hero-projects.png" alt="" class="position-absolute">
          </div>
        </div>
      </div>
    </div>
    <!-- navbar -->
    
    <!-- skill -->
    @include('skill')
    <!-- skill -->

    <!-- About -->
    @include('about')
    <!-- About -->

    <!-- project -->
    @include('project')
    <!-- project -->

    <!-- partnership -->
    @include('partnership')
    <!-- partnership -->

    <!-- footer -->
    @include('footer')
    <!-- footer -->

    <!-- copyright -->
    @include('copyright')
    <!-- copyright -->


    <!-- loader -->
    @include('loader')
    <!-- loader -->

    <a href="#home" class="tombol-keatas" id="scrollUp">
        <i class="uil uil-location-arrow-alt moveUpBtn"></i>
    </a>
    
    <!-- script -->
    @include('script')
    <!-- script -->
    
  </body>
  <!-- Body -->
  
</html>