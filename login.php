<?php
require 'call_fungtion.php';
?>

<!DOCTYPE html>
<html lang="id">

<?php include "head.php" ?>

<body>
  <!-- Spinner Start -->

  <!-- Spinner End -->

  <!-- Topbar Start -->
  <?php include "topbar.php" ?>
  <!-- <div class="container-fluid topbar bg-light px-5 d-none d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-flex flex-wrap">
                    <a href="#" class="text-muted small me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                    <a href="tel:+01234567890" class="text-muted small me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+01234567890</a>
                    <a href="mailto:example@gmail.com" class="text-muted small me-0"><i class="fas fa-envelope text-primary me-2"></i>Example@gmail.com</a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a href="#"><small class="me-3 text-dark"><i class="fa fa-user text-primary me-2"></i>Register</small></a>
                    <a href="#"><small class="me-3 text-dark"><i class="fa fa-sign-in-alt text-primary me-2"></i>Login</small></a>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown"><small><i class="fa fa-home text-primary me-2"></i> My Dashboard</small></a>
                        <div class="dropdown-menu rounded">
                            <a href="#" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i> Inbox</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-bell me-2"></i> Notifications</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-cog me-2"></i> Account Settings</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
  <!-- Topbar End -->

  <!-- Navbar & Hero Start -->
  <div class="container-fluid position-relative p-0">
    <?php include "navbar.php" ?>

    <!-- Header Start -->
    <style>
      .bg-breadcrumb {
        position: relative;
        overflow: hidden;
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
          url(img/<?php echo $profile['gambar']; ?>);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        padding: 140px 0 60px 0;
        transition: 0.5s;
      }
    </style>
    <div class="container-fluid bg-breadcrumb">
      <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Login</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
          <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
          <li class="breadcrumb-item active text-primary">login</li>
        </ol>
      </div>
    </div>
    <!-- Header End -->
    <!-- Login Form -->

  </div>

  <div id="about" class="container-fluid about py-5 ">


    <div class="container pb-5 ">
      <div class="row g-5  pb-5 border-bottom">
        <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.2s">
          <div class="position-relative overflow-hidden">
            <h1 class="display-4 fw-bold">Dinas Kearsipan dan Perpustakaan</h1>
            <p class="lead">Sistem Manajemen Arsip dan Perpustakaan. Masuk untuk melanjutkan.</p>
            <img src="img/aset/login.png ?>" class="img-fluid" style="width: 100%; height: 345px; object-fit: cover; " alt="" />
          </div>
        </div>
        <div class="col-lg-5 mb-5 mb-lg-0 position-relative">
          <div class="card bg-glass h-100">
            <div class="card-body px-4 py-5 px-md-5">
              <form>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row pb-3">
                  <h2>Masukan Username dan Password untuk Login</h2>
                </div>

                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Email address</label>
                  <input type="email" id="form3Example3" class="form-control" />
                </div>

                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="form3Example4">Password</label>
                  <input type="password" id="form3Example4" class="form-control" />
                </div>



                <!-- Submit button -->

                <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-secondary btn-block my-5">
                  Login
                </button>
                <style>
                  .card {
                    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
                    border: 1px solid #ddd;
                  }

                  form {
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                  }
                </style>


            </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
  </div>
  <!-- Team End -->

  <!-- Footer Start -->
  <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5 border-start-0 border-end-0" style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08);">
      <div class="row g-5">
        <div class="col-md-6 col-lg-6 col-xl-4">
          <div class="footer-item">
            <a href="index.html" class="p-0">
              <h4 class="text-white"><i class="fas fa-search-dollar me-3"></i>Stocker</h4>
              <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <p class="mb-4">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing...</p>
            <div class="d-flex">
              <a href="#" class="bg-primary d-flex rounded align-items-center py-2 px-3 me-2">
                <i class="fas fa-apple-alt text-white"></i>
                <div class="ms-3">
                  <small class="text-white">Download on the</small>
                  <h6 class="text-white">App Store</h6>
                </div>
              </a>
              <a href="#" class="bg-dark d-flex rounded align-items-center py-2 px-3 ms-2">
                <i class="fas fa-play text-primary"></i>
                <div class="ms-3">
                  <small class="text-white">Get it on</small>
                  <h6 class="text-white">Google Play</h6>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-2">
          <div class="footer-item">
            <h4 class="text-white mb-4">Quick Links</h4>
            <a href="#"><i class="fas fa-angle-right me-2"></i> About Us</a>
            <a href="#"><i class="fas fa-angle-right me-2"></i> Feature</a>
            <a href="#"><i class="fas fa-angle-right me-2"></i> Attractions</a>
            <a href="#"><i class="fas fa-angle-right me-2"></i> Tickets</a>
            <a href="#"><i class="fas fa-angle-right me-2"></i> Blog</a>
            <a href="#"><i class="fas fa-angle-right me-2"></i> Contact us</a>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
          <div class="footer-item">
            <h4 class="text-white mb-4">Support</h4>
            <a href="#"><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
            <a href="#"><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
            <a href="#"><i class="fas fa-angle-right me-2"></i> Disclaimer</a>
            <a href="#"><i class="fas fa-angle-right me-2"></i> Support</a>
            <a href="#"><i class="fas fa-angle-right me-2"></i> FAQ</a>
            <a href="#"><i class="fas fa-angle-right me-2"></i> Help</a>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
          <div class="footer-item">
            <h4 class="text-white mb-4">Contact Info</h4>
            <div class="d-flex align-items-center">
              <i class="fas fa-map-marker-alt text-primary me-3"></i>
              <p class="text-white mb-0">123 Street New York.USA</p>
            </div>
            <div class="d-flex align-items-center">
              <i class="fas fa-envelope text-primary me-3"></i>
              <p class="text-white mb-0">info@example.com</p>
            </div>
            <div class="d-flex align-items-center">
              <i class="fa fa-phone-alt text-primary me-3"></i>
              <p class="text-white mb-0">(+012) 3456 7890</p>
            </div>
            <div class="d-flex align-items-center mb-4">
              <i class="fab fa-firefox-browser text-primary me-3"></i>
              <p class="text-white mb-0">Yoursite@ex.com</p>
            </div>
            <div class="d-flex">
              <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f text-white"></i></a>
              <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-twitter text-white"></i></a>
              <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-instagram text-white"></i></a>
              <a class="btn btn-primary btn-sm-square rounded-circle me-0" href="#"><i class="fab fa-linkedin-in text-white"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer End -->

  <!-- Copyright Start -->
  <div class="container-fluid copyright py-4">
    <div class="container">
      <div class="row g-4 align-items-center">
        <div class="col-md-6 text-center text-md-start mb-md-0">
          <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
        </div>
        <div class="col-md-6 text-center text-md-end text-body">
          <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
          <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
          <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
          Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom text-white" href="https://themewagon.com">ThemeWagon</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Copyright End -->


  <!-- Back to Top -->
  <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>



  <!-- JavaScript Libraries -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>


  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>