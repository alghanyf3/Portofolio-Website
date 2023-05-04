<!doctype html >
<html lang="en" id="home">
  <!-- Head -->
  @include('templates.partials.head')
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
            <button class="btn btn-outline-danger rounded-2 d-lg-flex d-block mx-lg-0 mx-auto"><a href="https://wa.me/0822124609852" target="_blank" class="text-decoration-none">Contact Me</a></button>
          </div>
        </div>
      </nav>
      
      <!-- header -->
      <div class="container">
        <div class="row d-flex align-items-center row-cols-lg-2 row-cols-1">
          <div class="col pt-5 pt-lg-0 mb-lg-0 mb-5">
            <h1 class="fw-bold mb-4 animate__animated animate__fadeInUp animate__delay-1s">Hi! I Am <br>Alghany Fergiano</h1>
            <p class="lh-lg mb-4 animate__animated animate__fadeInUp animate__delay-1s">Saya adalah seorang Product Designer yang mendalami Front - End Developer | UI UX Design</p>
            <button class="btn btn-danger me-2 px-sm-4 py-sm-2 px-3 py-2 animate__animated animate__fadeInUp animate__delay-1s">Hire Me</button>
            <button class="btn btn-outline-danger px-sm-4 py-sm-2 px-3 py-2 animate__animated animate__fadeInUp animate__delay-1s"><a href="https://github.com/alghanyf3" target="_blank" class="text-decoration-none">Know More</a></button>
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

    <!-- footer -->
    @include('templates.partials.footer')
    <!-- footer -->

    <!-- copyright -->
    @include('templates.partials.copyright')
    <!-- copyright -->


    <!-- loader -->
    @include('templates.partials.loader')
    <!-- loader -->

    <!-- script -->
    @include('templates.partials.script')
    <!-- script -->
    
  </body>
  <!-- Body -->
  
</html>