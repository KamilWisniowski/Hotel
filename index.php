<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"></head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="css/common.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <style>
    .availability-form{
      margin-top:-50px;
      z-index: 2;
      position: relative;
    }
    @media screen and (max-width: 575px) {
      .availability-form{
      margin-top:0px;
      padding: 0 35px;
      }
    }
  </style>
<body class="bg-light">
  <?php require('inc/header.php'); ?>
  <!-- carousel -->
  <div class="container-fluid px-lg-0 mt-0">
    <!-- Swiper -->
    <div class="swiper swiper-container" style="max-height:60vh">
    <div class="swiper-wrapper">
      <div class="swiper-slide ">
        <img src="images/carousel/1.jpg" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/2.jpg" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/3.jpg" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/4.jpg" class="w-100 d-block"/>
      </div>
    </div>
    </div>
  </div>
  
  <!-- check availability form -->
  <div class="container availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">Sprawdź dostępne pokoje</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3">
              <label class="form-label" style="font-weight:500;">Zameldowanie</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3">
              <label class="form-label" style="font-weight:500;">Wymeldowanie</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-2">
              <label class="form-label" style="font-weight:500;">Dorośli</label>
              <select class="form-select shadow-none">
                <option selected></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </div>
            <div class="col-lg-2">
              <label class="form-label" style="font-weight:500;">Dzieci</label>
              <select class="form-select shadow-none">
                <option selected></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </div>
            <div class="col-lg-1">
              <button type="submit" class="btn text-white shadow-none custom-bg">Wyszukaj</button>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Our Rooms -->
  <h2 class="mt-5 pt-5 mb-4 text-center fw-bold h-font">Nasze pokoje</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow-none" style="max-width: 350px; margin:auto;">
          <img src="images/rooms/1.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Standard</h5>
            <h6 class="mb-1">100zł / noc</h6>
            <div class="features  mt-2">
              <h6 class="mb-2">Cechy</h6>
              <div class="row">
                <div class="col-6">
                  <i class="bi bi-person"></i> 2 osoby
                </div>
                <div class="col-6">
                  <i class="bi bi-wifi"></i> Wi-Fi
                </div>
                <div class="col-6">
                  <i class="bi bi-people-fill"></i> Dwójki
                </div>
                <div class="col-6">
                  <i class="bi bi-clock-fill"></i> 24 godziny
                </div>
              </div>
            </div>
            <div class="facilities  mt-4">
              <h6 class="mb-1">Udogodnienia</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Prywatna łazienka
              </span>
            </div>
            <div class="rating mb-4 mt-4">
              <h6 class="mb-1">Ocena</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>

            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Zarezerwuj</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Więcej szczegółów</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow-none" style="max-width: 350px; margin:auto;">
          <img src="images/rooms/1.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Standard</h5>
            <h6 class="mb-1">100zł / noc</h6>
            <div class="features  mt-2">
              <h6 class="mb-2">Cechy</h6>
              <div class="row">
                <div class="col-6">
                  <i class="bi bi-person"></i> 2 osoby
                </div>
                <div class="col-6">
                  <i class="bi bi-wifi"></i> Wi-Fi
                </div>
                <div class="col-6">
                  <i class="bi bi-people-fill"></i> Dwójki
                </div>
                <div class="col-6">
                  <i class="bi bi-clock-fill"></i> 24 godziny
                </div>
              </div>
            </div>
            <div class="facilities  mt-4">
              <h6 class="mb-1">Udogodnienia</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Prywatna łazienka
              </span>
            </div>
            <div class="rating mb-4 mt-4">
              <h6 class="mb-1">Ocena</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>

            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Zarezerwuj</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Więcej szczegółów</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow-none" style="max-width: 350px; margin:auto;">
          <img src="images/rooms/1.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Standard</h5>
            <h6 class="mb-1">100zł / noc</h6>
            <div class="features  mt-2">
              <h6 class="mb-2">Cechy</h6>
              <div class="row">
                <div class="col-6">
                  <i class="bi bi-person"></i> 2 osoby
                </div>
                <div class="col-6">
                  <i class="bi bi-wifi"></i> Wi-Fi
                </div>
                <div class="col-6">
                  <i class="bi bi-people-fill"></i> Dwójki
                </div>
                <div class="col-6">
                  <i class="bi bi-clock-fill"></i> 24 godziny
                </div>
              </div>
            </div>
            <div class="facilities  mt-4">
              <h6 class="mb-1">Udogodnienia</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Prywatna łazienka
              </span>
            </div>
            <div class="rating mb-4 mt-4">
              <h6 class="mb-1">Ocena</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>

            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Zarezerwuj</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Więcej szczegółów</a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-gl-12 text-center mt-5 my-3">
        <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Zobacz więcej</a>
      </div>
    </div>
  </div>

  <!-- Our facilities -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">O nas</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12 my-3">
        <div class="card border-0 shadow-none">
          <div class="card-body">
            <i class="bi bi-house-fill text-primary h1"></i>
            <h5 class="mt-3">Miejsce</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel ligula non neque gravida consectetur.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 my-3">
        <div class="card border-0 shadow-none">
          <div class="card-body">
            <i class="bi bi-wifi text-primary h1"></i>
            <h5 class="mt-3">Sieć WiFi</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel ligula non neque gravida consectetur.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Reviews -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Opinie</h2>
  <div class="container">
    
  </div>

  <!-- Reach us -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Skontaktuj się z nami</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 bg-white rounded">
        <iframe class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2602.2035040863016!2d19.91881139192385!3d49.29148799638073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4715ed5e7dd91c87%3A0xc826ba7806b1cec4!2sCzajki%202A%2C%2034-511%20Ko%C5%9Bcielisko!5e0!3m2!1spl!2spl!4v1722523708971!5m2!1spl!2spl" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Zadzwoń do nas</h5>
          <a href="tel:+48733780040" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone"></i> 733780040
          </a>
          <br>
          <a href="mailto:info@example.com" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-envelope"></i> info@example.com
          </a>
        </div>
        <div class="bg-white p-4 rounded mb-4">
          <h5>Odwiedz nasze social</h5>
          <a href="tel:+48733780040" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-twitter"></i> Twitter
          </a>
          <br>
          <a href="mailto:info@example.com" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-facebook"></i> Facebook
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="text-center text-lg-start bg-body-tertiary text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Company name
            </h6>
            <p>
              Here you can use rows and columns to organize your footer content. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">Angular</a>
            </p>
            <p>
              <a href="#!" class="text-reset">React</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Vue</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laravel</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              info@example.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- Initialize Swiper -->
  <script>
  var swiper = new Swiper(".swiper-container", {
    spaceBetween: 30,
    effect: "fade",
    loop:true,
    autoplay:{
      delay:3500,
      disableonInteraction: false,
    }
    });
  </script>
  </body>
</html>