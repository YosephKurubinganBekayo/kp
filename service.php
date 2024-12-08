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
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
          url(img/profil/<?php echo $profile['gambar'] ?>);
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
  <div id="info_about" class="container-fluid about py-5 ">
    <div class="text-center mx-auto py-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
      <h4 class="text-warning">Informasi Pelayanan</h4>
      <h1 class="display-5 mb-4">Informasi .........</h1>
      <p class="mb-0">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur
        adipisci facilis cupiditate recusandae aperiam temporibus corporis
        itaque quis facere, numquam, ad culpa deserunt sint dolorem autem
        obcaecati, ipsam mollitia hic........
      </p>
    </div>
    <div class="container">
      <div class="table-responsive wow fadeInUp" data-wow-delay="0.2s"">
        <table id=" example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Departemen</th>
            <th>Alamat </th>
            <th>Lantai </th>
            <th>Jam Operasional</th>
            <th>Jam Tambahan</th>
            <th>Informasi Tutup</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $no = 1;
          $sql = $koneksi->query("SELECT i.*, d.nama_departemen FROM informasi_pelayanan i JOIN departemen d ON i.id_departemen = d.id");
          while ($data = $sql->fetch_assoc()) {
          ?>
            <tr>
              <td>
                <?php echo $no++; ?>
              </td>
              <td>
                <?php echo $data['nama_departemen']; ?>
              </td>

              <td>
                <?php echo $data['alamat']; ?>
              </td>
              <td>
                <?php echo $data['lantai']; ?>
              </td>
              <td>
                <?php echo $data['jam_operasional']; ?>
              </td>
              <td>
                <?php echo $data['jam_tambahan']; ?>
              </td>
              <td>
                <?php echo $data['tutup']; ?>
              </td>

            </tr>
          <?php
          }
          ?>
        </tbody>

        </table>

      </div>
    </div>
  </div>
  <div id="about" class="container-fluid about pt-5 ">
    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
      <h4 class="text-warning">Layanan Kami</h4>
      <h1 class="display-5 mb-4">Articles For Pro Traders....?</h1>
      <p class="mb-0">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur
        adipisci facilis cupiditate recusandae aperiam temporibus corporis
        itaque quis facere, numquam, ad culpa deserunt sint dolorem autem
        obcaecati, ipsam mollitia hic...?
      </p>
    </div>
    <div class="container-fluid about py-5 ">
      <?php

      if (!empty($departemens)) {
        foreach ($departemens as $departemen) {
          // Panggil fungsi untuk mendapatkan layanan berdasarkan departemen
          // $departemens = $mysqli->get_show_departemens();
          $services_departement = $mysqli->get_show_services_departement($departemen['id']);
      ?>
          <div class="container">
            <?php
            if (!empty($services_departement)) { ?>
              <h3 style="margin-bottom:-75px;"><?php echo $departemen['nama_departemen']; ?></h3>
              <ol>

                <?php
                foreach ($services_departement as $service) {
                  // echo "<li>" . $service['nama_layanan'] . "</li>";
                  $nama_layanan = $service['nama_layanan'];
                  $deskripsi = $service['deskripsi'];
                ?>
                  <li id="layanan-<?php echo $service['id'] ?>" class="pt-5">
                    <div class="container border-bottom pt-5">
                      <div class="row g-5 align-items-center  ">
                        <!-- <div class="col-xl-9 wow fadeInLeft" data-wow-delay="0.2s"> -->
                        <div>
                          <h4><?php echo  $nama_layanan ?></h4>
                          <?php echo $deskripsi; ?>

                        </div>
                        <!-- </div> -->
                      </div>
                      <div class="row py-2">
                        <div class="col-xl-4 wow fadeInRight" data-wow-delay="0.2s">
                          <div class="position-relative overflow-hidden rounded">
                            <img src="img/<?php echo $service['gambar']; ?>" class="img-fluid" style="width: 100%; height: 300px; object-fit: cover; " alt="" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
              <?php }
              } ?>
              </ol>
          </div>
      <?php
        }
      }
      ?>
    </div>
  </div>
  <!-- Footer Start -->
  <?php include "footer.php" ?>
  <!-- Footer End -->




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