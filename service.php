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
          url(img/<?php echo $profile['gambar'] ?>);
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
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Layanan Kami</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
          <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
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
  <?php include "footer.php" ?>
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