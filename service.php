<?php
require 'call_fungtion.php';
?>
<!DOCTYPE html>
<html lang="en">

<?php include "head.php" ?>

<body>

  <?php include "topbar.php" ?>
  <!-- Topbar End -->

  <!-- Navbar & Hero Start -->
  <div class="container-fluid position-relative p-0">
    <?php include "navbar.php" ?>

    <style>
      .bg-breadcrumb {
        position: relative;
        overflow: hidden;
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
          url(img/service-1.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        padding: 140px 0 60px 0;
        transition: 0.5s;
      }
    </style>
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
      <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active text-primary">Layanan</li>
        </ol>
      </div>
    </div>
    <!-- Header End -->
  </div>
  <!-- Navbar & Hero End -->
  <!-- Services Start -->

  <div id="about" class="container-fluid about py-5 ">

    <?php
    if (!empty($services)) {
      foreach ($services as $service) {
        $nama_layanan = $service['nama_layanan'];
        $deskripsi = $service['deskripsi']; ?>
        <div class="container py-5 " id="layanan-<?php echo $service['id'] ?>">
          <div class="row g-5 align-items-center py-5 border-bottom">
            <!-- <div class="col-xl-9 wow fadeInLeft" data-wow-delay="0.2s"> -->
            <div>
              <h4><?php echo  $nama_layanan ?></h4>
              <?php echo $deskripsi; ?>

            </div>
            <!-- </div> -->
          </div>
          <!-- <div class="row py-2">
            <div class="col-xl-4 wow fadeInRight" data-wow-delay="0.2s">
              <div class="position-relative overflow-hidden" >
                <img src="img/<?php echo $service['gambar']; ?>" class="img-fluid" style="width: 100%; height: 300px; object-fit: cover; " alt="" />
              </div>
            </div>
          </div> -->
        </div>

    <?php
      }
    } else {
      echo "<p>Tidak ada layanan</p>";
    } ?>
  </div>
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