<?php
require 'call_fungtion.php'
?>
<!DOCTYPE html>
<html lang="en">

<?php include "head.php" ?>

<body>
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-warning" style="width: 3rem; height: 3rem" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->

  <!-- Topbar Start -->
  <div class="container-fluid topbar bg-light px-5 d-none d-lg-block">
    <div class="row gx-0 align-items-center">
      <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
        <div class="d-flex flex-wrap">
          <a href="#" class="text-muted small me-4"><i class="fas fa-map-marker-alt text-warning me-2"></i>Find A
            Location</a>
          <a href="tel:+01234567890" class="text-muted small me-4"><i class="fas fa-phone-alt text-warning me-2"></i>+01234567890</a>
          <a href="mailto:example@gmail.com" class="text-muted small me-0"><i class="fas fa-envelope text-warning me-2"></i>Example@gmail.com</a>
        </div>
      </div>
      <div class="col-lg-4 text-center text-lg-end">
        <div class="d-inline-flex align-items-center" style="height: 45px">
          <!-- <a href="#"><small class="me-3 text-dark"><i class="fa fa-user text-warning me-2"></i>Register</small></a>
          <a href="#"><small class="me-3 text-dark"><i class="fa fa-sign-in-alt text-warning me-2"></i>Login</small></a> -->
          <div class="dropdown">
            <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown"><small><i class="fa fa-home text-warning me-2"></i>home
                Dashboard</small></a>
            <div class="dropdown-menu rounded">
              <a href="#" class="dropdown-item"><i class="fas fa-home me-2"></i>Beranda</a>
              <a href="#about" class="dropdown-item"><i class="fas fa-info-circle me-2"></i>Tentang Kami</a>
              <a href="#service" class="dropdown-item"><i class="fas fa-concierge-bell me-2"></i>Layanan</a>
              <a href="#contact" class="dropdown-item"><i class="fas fa-phone-alt me-2"></i>Kontak</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Topbar End -->
  <!-- Navbar & Hero Start -->
  <div class="container-fluid position-relative p-0">
    <?php include "navbar.php" ?>

    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">
      <div class="header-carousel-item">
        <img src="img/gedung.jpg" class="img-fluid w-100" alt="Image" />
        <div class="carousel-caption">
          <div class="container">
            <div class="row gy-0 gx-5">
              <!-- <div class="col-lg-0 col-xl-5"></div> -->
              <div class="col-xl-7 animated fadeInLeft">
                <div class="text-sm-center text-md-start">
                  <h4 class="text-warning text-uppercase fw-bold mb-4">
                    Selamat Datang Di <?php echo $profile['titlewebsite']; ?>
                  </h4>
                  <h2 class="display-5 text-uppercase text-white mb-4">
                    <?php echo $profile['titleparagraf']; ?>
                  </h2>
                  <p class="mb-5 fs-5">
                    <?php echo $profile['description']; ?>
                  </p>
                  <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                    <a class="btn btn-light rounded-start rounded-top py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i>Tonton Video</a>
                    <a class="btn btn-secondary rounded-end rounded-bottom py-3 px-4 px-md-5 ms-2" href="#">Selengkapnya</a>
                  </div>
                  <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                    <div class="d-flex justify-content-start ms-2">
                      <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                      <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                      <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                      <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-carousel-item">
        <img src="img/perpus.jpg" class="img-fluid w-100" alt="Image" />
        <div class="carousel-caption">
          <div class="container">
            <div class="row gy-0 gx-5">
              <!-- <div class="col-lg-0 col-xl-5"></div> -->
              <div class="col-xl-7 animated fadeInLeft">
                <div class="text-sm-center text-md-start">
                  <h4 class="text-warning text-uppercase fw-bold mb-4">
                    Selamat Datang Di <?php echo $profile['titlewebsite']; ?>
                  </h4>
                  <h2 class="display-5 text-uppercase text-white mb-4">
                    <?php echo $profile['titleparagraf']; ?>
                  </h2>
                  <p class="mb-5 fs-5">
                    <?php echo $profile['description']; ?>
                  </p>
                  <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                    <a class="btn btn-light rounded-start rounded-top py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i>Tonton Video</a>
                    <a class="btn btn-warning rounded-end rounded-bottom py-3 px-4 px-md-5 ms-2" href="about">Selengkapnya</a>
                  </div>
                  <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                    <h2 class="text-white me-2">Follow Us:</h2>
                    <div class="d-flex justify-content-start ms-2">
                      <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                      <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                      <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                      <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="header-carousel-item">
        <img src="img/carousel-2.jpg" class="img-fluid w-100" alt="Image" />
        <div class="carousel-caption">
          <div class="container">
            <div class="row g-5">
              <div class="col-12 animated fadeInUp">
                <div class="text-center">
                  <h4 class="text-warning text-uppercase fw-bold mb-4">
                    Welcome To Stocker
                  </h4>
                  <h1 class="display-4 text-uppercase text-white mb-4">
                    Invest your money with higher return
                  </h1>
                  <p class="mb-5 fs-5">
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy...
                  </p>
                  <div class="d-flex justify-content-center flex-shrink-0 mb-4">
                    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a>
                    <a class="btn btn-warning rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a>
                  </div>
                  <div class="d-flex align-items-center justify-content-center">
                    <h2 class="text-white me-2">Follow Us:</h2>
                    <div class="d-flex justify-content-end ms-2">
                      <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                      <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                      <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                      <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </div>
    <!-- Carousel End -->
  </div>
  <!-- Navbar & Hero End -->

  <!-- Abvout Start -->
  <div id="about" class="container-fluid about py-5 ">
    <div class="container py-5">
      <div class="row g-5 align-items-center">
        <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
          <div>
            <h4 class="text-warning">Tentang Kami</h4>
            <?php
            $sql_gambar = $koneksi->query("SELECT * FROM tbl_aboutus LIMIT 1");
            $data_gambar = $sql_gambar->fetch_assoc();
            ?>
            <?php
            $sql = $koneksi->query("SELECT * FROM tbl_aboutus LIMIT 1");
            while ($data = $sql->fetch_assoc()) {
            ?>
              <?php echo strlen($data['detail_aboutus']) > 900 ? substr($data['detail_aboutus'], 0, 900) . "..." : $data['detail_aboutus']; ?>

            <?php }
            ?>
            <div class="row g-4">
              <div class="col-sm-6">
                <a href="about.php?id=<?php echo urlencode($data_gambar['id_aboutus']); ?>" class="btn btn-secondary rounded-end rounded-top py-2 px-5 flex-shrink-0">Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
          <div class="rounded position-relative overflow-hidden">
            <img src="img/<?php echo $data_gambar['pict_aboutus']; ?>" class="img-fluid" style="width: 100%; height: 400px; object-fit: cover; " alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

  <!-- Services Start -->
  <div class="container-fluid service py-5" id="service">
    <div class="container py-5">
      <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
        <h4 class="text-warning">Layanan Kami</h4>
        <h1 class="display-5 mb-4">Kami menyediakan layanan terbaik untuk anda</h1>
        <?php
        $query_bidang = $koneksi->query("SELECT * FROM layanan");
        $bidang_data = [];
        while ($row = $query_bidang->fetch_assoc()) {
          $bidang_data[] = $row; // Simpan data bidang ke array
          $bidang_data_nama[] = $row['nama_layanan'];
        }
        // Membentuk kalimat layanan dari nama bidang
        if (count($bidang_data_nama) > 1) {
          $layanan_list = implode(', ', array_slice($bidang_data_nama, 0, -1)) . ' dan ' . end($bidang_data_nama);
        } else {
          $layanan_list = $bidang_data_nama[0] ?? '';
        } ?>
        <p class="mb-0">
          <?php echo $profile['titlewebsite']; ?> menyediakan layanan "<?php echo $layanan_list; ?>" yang terkelola dengan baik untuk mendukung kebutuhan informasi dan literasi Anda.

        </p>
      </div>
      <div class="row g-4">
        <?php
        if (!empty($services)) {
          foreach ($services as $service) {
            $nama_layanan = $service['nama_layanan'];
            $deskripsi = $service['deskripsi'];
            $max_length = 180;

            // Hitung total panjang karakter
            $total_length = strlen($nama_layanan) + strlen($deskripsi);

            // Potong deskripsi jika total panjang melebihi batas
            if ($total_length > $max_length) {
              $deskripsi = substr($deskripsi, 0, $max_length - strlen($nama_layanan)) . '...';
            }
        ?>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
              <div class="service-item">
                <div class="service-img">
                  <img src="img/<?php echo htmlspecialchars($service['gambar']); ?>" class="img-fluid rounded-top w-100" alt="<?php echo htmlspecialchars($service['nama_layanan']); ?>" style="height: 250px; object-fit: cover; object-position: center; width: 100%; " />
                </div>
                <div class="rounded-bottom p-4" style="height: 180px; overflow: hidden;">
                  <a href="#" class="h4 text-warning d-inline-block mb-4">
                    <?php echo  $nama_layanan ?>
                  </a>
                  <!-- <p class="mb-4"> -->
                  <?php echo  $deskripsi ?>
                  <!-- </p> -->
                </div>
                <div class="p-4">
                  <a class="btn btn-secondary rounded-start rounded-top py-2 px-4" href="service.php#layanan-<?php echo htmlspecialchars($service['id']) ?>">Baca selengkapnya</a>
                </div>
              </div>
            </div>
        <?php
          }
        } else {
          echo "<p>Tidak ada layanan</p>";
        }
        ?>
      </div>
    </div>
  </div>
  <!-- Services End -->

  <!-- Features Start -->
  <!-- <div class="container-fluid feature pb-5">
    <div class="container pb-5">
      <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
        <h4 class="text-warning">Our Features</h4>
        <h1 class="display-5 mb-4">
          Connecting businesses, ideas, and people for greater impact.
        </h1>
        <p class="mb-0">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur
          adipisci facilis cupiditate recusandae aperiam temporibus corporis
          itaque quis facere, numquam, ad culpa deserunt sint dolorem autem
          obcaecati, ipsam mollitia hic.
        </p>
      </div>
      <div class="row g-4">
        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
          <div class="feature-item p-4">
            <div class="feature-icon p-4 mb-4">
              <i class="fas fa-chart-line fa-4x text-warning"></i>
            </div>
            <h4>Global Management</h4>
            <p class="mb-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic
              laborum odit pariatur...
            </p>
            <a class="btn btn-warning rounded-pill py-2 px-4" href="#">Learn More</a>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
          <div class="feature-item p-4">
            <div class="feature-icon p-4 mb-4">
              <i class="fas fa-university fa-4x text-warning"></i>
            </div>
            <h4>Corporate Banking</h4>
            <p class="mb-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic
              laborum odit pariatur...
            </p>
            <a class="btn btn-warning rounded-pill py-2 px-4" href="#">Learn More</a>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
          <div class="feature-item p-4">
            <div class="feature-icon p-4 mb-4">
              <i class="fas fa-file-alt fa-4x text-warning"></i>
            </div>
            <h4>Asset Management</h4>
            <p class="mb-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic
              laborum odit pariatur...
            </p>
            <a class="btn btn-warning rounded-pill py-2 px-4" href="#">Learn More</a>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
          <div class="feature-item p-4">
            <div class="feature-icon p-4 mb-4">
              <i class="fas fa-hand-holding-usd fa-4x text-warning"></i>
            </div>
            <h4>Investment Bank</h4>
            <p class="mb-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic
              laborum odit pariatur...
            </p>
            <a class="btn btn-warning rounded-pill py-2 px-4" href="#">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- Features End -->

  <!-- Offer Start -->
  <div class="container-fluid offer-section py-5" id="service_info">
    <div class="container py-5">
      <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
        <h4 class="text-warning">Inormasi layanan</h4>
        <h1 class="display-5 mb-4">Informasii tentang jadwal layanan Kami</h1>
        <p class="mb-0">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur
          adipisci facilis cupiditate recusandae aperiam temporibus corporis
          itaque quis facere, numquam, ad culpa deserunt sint dolorem autem
          obcaecati, ipsam mollitia hic.
        </p>
      </div>
      <div class="row g-5 align-items-center" data-wow-delay="0.2s">
        <div class="col-xl-12 mb-5  wow fadeInLeft">
          <div class="nav nav-pills bg-light rounded-end rounded-top p-2 d-flex justify-content-evenly">
            <?php
            $query_bidang = $koneksi->query("SELECT i.*, d.nama_departemen FROM informasi_pelayanan i JOIN departemen d ON i.id_departemen = d.id");
            $bidang_data = [];
            while ($row = $query_bidang->fetch_assoc()) {
              $bidang_data[] = $row;
            }

            $i = 0;
            foreach ($bidang_data as $row) {
              $isActive = ($i === 0) ? 'active' : ''; // Set tab pertama sebagai aktif
            ?>
              <a class="accordion-link rounded-end rounded-top <?php echo $isActive; ?>" data-bs-toggle="pill" href="#collapse-<?php echo $row['id']; ?>" style="padding: 10px 20px;">
                <h5 class="mb-0 text-light">
                  <?php echo $row['nama_departemen']; ?>
                </h5>
              </a>
            <?php
              $i++;
            }
            ?>
          </div>
        </div>
      </div>

      <div class="col-xl-12 wow fadeInRight" data-wow-delay="0.4s">
        <div class="tab-content ">
          <?php
          $i = 0;
          foreach ($bidang_data as $row) {
            $isActive = ($i === 0) ? 'show active' : '';
          ?>
            <div id="collapse-<?php echo $row['id']; ?>" class="tab-pane fade <?php echo $isActive; ?> p-0">
              <div class="row g-4">
                <div class="col-md-6">
                  <img src="img/<?php echo $row['gambar'] ?>" class="img-fluid w-100 rounded-start rounded-bottom" style="width: 100%; height: 400px; object-fit: cover; " alt="" />
                </div>
                <div class="col-md-6">
                  <h1 class="display-5 mb-4">
                    <?php echo $row['nama_departemen']; ?>
                  </h1>
                  <p><i class="fas fa-building"></i><span>Lantai : </span><?= htmlspecialchars($row['lantai']); ?></p>

                  <p><span>Jam Operasional : </span></p>
                  <ul style="list-style-type: none; padding-left: 0;">
                    <?php
                    $jamOperasional = explode("\n", $row['jam_operasional']);
                    foreach ($jamOperasional as $jam) :
                      if (trim($jam)) :
                    ?>
                        <li class=""><i class="far fa-clock"></i> <?= htmlspecialchars($jam); ?></li>
                    <?php
                      endif;
                    endforeach;
                    ?>
                  </ul>
                  <p><span>Jam Tambahan : </span></p>
                  <ul style="list-style-type: none; padding-left: 0;">
                    <li><i class="far fa-clock"> </i><?= !empty($row['jam_tambahan']) ? htmlspecialchars($row['jam_tambahan']) : '<em>Tidak ada data</em>'; ?></li>
                  </ul>
                  <p>Tutup : <?php echo $row['tutup'] ?></p>
                  <!-- <p class="mb-4">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Corporis amet sequi molestiae tenetur eum mollitia,
                      blanditiis, magnam illo magni error dolore unde
                      perspiciatis tempore et totam corrupti dignissimos aut
                      praesentium?
                    </p> -->
                  <a class="btn btn-secondary rounded-end rounded-bottom py-2 px-4" href="#">Baca Selengkapnya</a>
                </div>
              </div>
            </div>
          <?php
            $i++;
          }
          ?>
        </div>
      </div>
      <!-- </div> -->
    </div>
  </div>
  <!-- Offer End -->

  <!-- Blog Start -->
  <div class="container-fluid blog pb-5">
    <div class="container pb-5">
      <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
        <h4 class="text-warning">Blog & Berita</h4>
        <h1 class="display-5 mb-4">Articles For Pro Traders</h1>
        <p class="mb-0">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur
          adipisci facilis cupiditate recusandae aperiam temporibus corporis
          itaque quis facere, numquam, ad culpa deserunt sint dolorem autem
          obcaecati, ipsam mollitia hic.
        </p>
      </div>
      <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay="0.2s">
        <?php if (!empty($blogs)) {
          foreach ($blogs as $blog) {
            $judul = $blog['judul'];
            $deskripsi = $blog['deskripsi'];
            $max_length = 130;
            // Hitung total panjang judul dan deskripsi
            $total_length = strlen($judul) + strlen($deskripsi);
            // Potong deskripsi jika total panjang melebihi batas
            if ($total_length > $max_length) {
              $deskripsi = substr($deskripsi, 0, $max_length - strlen($judul)) . '...';
            }
        ?>
            <div class="blog-item p-4">
              <div class="blog-img mb-4">
                <img src="img/<?php echo htmlspecialchars($blog['gambar']); ?>" class="img-fluid rounded-top w-100" alt="<?php echo htmlspecialchars($service['nama_layanan']); ?>" style="height: 250px; object-fit: cover; object-position: center; width: 100%;" />

              </div>
              <div class="mb-4" style="height: 180px; overflow: hidden;">
                <a href="#" class="h4 d-inline-block mb-3">
                  <?= htmlspecialchars($judul); ?>
                </a>
                <?php echo ($deskripsi); ?>
              </div>
              <div class="d-flex align-items-center">
                <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle" style="width: 60px; height: 60px" alt="" />
                <div class="ms-3">
                  <h5><?php echo htmlspecialchars($blog['penulis']); ?></h5>
                  <p class="mb-0"><?php echo htmlspecialchars($blog['tanggal']); ?></p>
                </div>
              </div>
              <div class="text-end mt-4">
                <a href="articel_blog_detail.php?id=<?php echo $blog['id']; ?>" class="btn btn-secondary rounded-start rounded-bottom">Selengkapnya</a>
              </div>
            </div>
        <?php }
        } else {
          echo "<p>Tidak ada Blog dan berita</p>";
        } ?>
      </div>
      <div class="text-end mt-4">
        <a href="articel_blog.php" class="btn btn-secondary rounded-start rounded-top">Semua Berita</a>
      </div>
    </div>
  </div>
  <!-- Blog End -->

  <!-- FAQs Start -->
  <!-- <div class="container-fluid faq-section pb-5">
    <div class="container pb-5 overflow-hidden">
      <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
        <h4 class="text-warning">FAQs</h4>
        <h1 class="display-5 mb-4">Frequently Asked Questions</h1>
        <p class="mb-0">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur
          adipisci facilis cupiditate recusandae aperiam temporibus corporis
          itaque quis facere, numquam, ad culpa deserunt sint dolorem autem
          obcaecati, ipsam mollitia hic.
        </p>
      </div>
      <div class="row g-5 align-items-center">
        <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
          <div class="accordion accordion-flush bg-light rounded p-5" id="accordionFlushSection">
            <div class="accordion-item rounded-top">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed rounded-top" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  What Does This Tool Do?
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushSection">
                <div class="accordion-body">
                  Placeholder content for this accordion, which is intended to
                  demonstrate the <code>.accordion-flush</code> class. This is
                  the first item's accordion body.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  What Are The Disadvantages Of Online Trading?
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushSection">
                <div class="accordion-body">
                  Placeholder content for this accordion, which is intended to
                  demonstrate the <code>.accordion-flush</code> class. This is
                  the second item's accordion body. Let's imagine this being
                  filled with some actual content.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  Is Online Trading Safe?
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushSection">
                <div class="accordion-body">
                  Placeholder content for this accordion, which is intended to
                  demonstrate the <code>.accordion-flush</code> class. This is
                  the second item's accordion body. Let's imagine this being
                  filled with some actual content.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                  What Is Online Trading, And How Dose It Work?
                </button>
              </h2>
              <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushSection">
                <div class="accordion-body">
                  Placeholder content for this accordion, which is intended to
                  demonstrate the <code>.accordion-flush</code> class. This is
                  the second item's accordion body. Let's imagine this being
                  filled with some actual content.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                  Which App Is Best For Online Trading?
                </button>
              </h2>
              <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushSection">
                <div class="accordion-body">
                  Placeholder content for this accordion, which is intended to
                  demonstrate the <code>.accordion-flush</code> class. This is
                  the second item's accordion body. Let's imagine this being
                  filled with some actual content.
                </div>
              </div>
            </div>
            <div class="accordion-item rounded-bottom">
              <h2 class="accordion-header" id="flush-headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                  How To Create A Trading Account?
                </button>
              </h2>
              <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushSection">
                <div class="accordion-body">
                  Placeholder content for this accordion, which is intended to
                  demonstrate the <code>.accordion-flush</code> class. This is
                  the third item's accordion body. Nothing more exciting
                  happening here in terms of content, but just filling up the
                  space to make it look, at least at first glance, a bit more
                  representative of how this would look in a real-world
                  application.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
          <div class="bg-warning rounded">
            <img src="img/about-2.png" class="img-fluid w-100" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- FAQs End -->

  <!-- Team Start -->
  <!-- <div class="container-fluid team pb-5">
    <div class="container pb-5">
      <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
        <h4 class="text-warning">Our Team</h4>
        <h1 class="display-5 mb-4">Meet Our Advisers</h1>
        <p class="mb-0">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur
          adipisci facilis cupiditate recusandae aperiam temporibus corporis
          itaque quis facere, numquam, ad culpa deserunt sint dolorem autem
          obcaecati, ipsam mollitia hic.
        </p>
      </div>
      <div class="row g-4">
        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
          <div class="team-item">
            <div class="team-img">
              <img src="img/team-1.jpg" class="img-fluid" alt="" />
            </div>
            <div class="team-title">
              <h4 class="mb-0">David James</h4>
              <p class="mb-0">Profession</p>
            </div>
            <div class="team-icon">
              <a class="btn btn-warning btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-warning btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
              <a class="btn btn-warning btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
              <a class="btn btn-warning btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
          <div class="team-item">
            <div class="team-img">
              <img src="img/team-2.jpg" class="img-fluid" alt="" />
            </div>
            <div class="team-title">
              <h4 class="mb-0">David James</h4>
              <p class="mb-0">Profession</p>
            </div>
            <div class="team-icon">
              <a class="btn btn-warning btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-warning btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
              <a class="btn btn-warning btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
              <a class="btn btn-warning btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
          <div class="team-item">
            <div class="team-img">
              <img src="img/team-3.jpg" class="img-fluid" alt="" />
            </div>
            <div class="team-title">
              <h4 class="mb-0">David James</h4>
              <p class="mb-0">Profession</p>
            </div>
            <div class="team-icon">
              <a class="btn btn-warning btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-warning btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
              <a class="btn btn-warning btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
              <a class="btn btn-warning btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
          <div class="team-item">
            <div class="team-img">
              <img src="img/team-4.jpg" class="img-fluid" alt="" />
            </div>
            <div class="team-title">
              <h4 class="mb-0">David James</h4>
              <p class="mb-0">Profession</p>
            </div>
            <div class="team-icon">
              <a class="btn btn-warning btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-warning btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
              <a class="btn btn-warning btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
              <a class="btn btn-warning btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- Team End -->

  <!-- Testimonial Start -->
  <!-- <div class="container-fluid testimonial pb-5">
    <div class="container pb-5">
      <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
        <h4 class="text-warning">Testimonial</h4>
        <h1 class="display-5 mb-4">Our Clients Riviews</h1>
        <p class="mb-0">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur
          adipisci facilis cupiditate recusandae aperiam temporibus corporis
          itaque quis facere, numquam, ad culpa deserunt sint dolorem autem
          obcaecati, ipsam mollitia hic.
        </p>
      </div>
      <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
        <div class="testimonial-item">
          <div class="testimonial-quote-left">
            <i class="fas fa-quote-left fa-2x"></i>
          </div>
          <div class="testimonial-img">
            <img src="img/testimonial-1.jpg" class="img-fluid" alt="Image" />
          </div>
          <div class="testimonial-text">
            <p class="mb-0">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
              blanditiis excepturi quisquam temporibus voluptatum
              reprehenderit culpa, quasi corrupti laborum accusamus.
            </p>
          </div>
          <div class="testimonial-title">
            <div>
              <h4 class="mb-0">Person Name</h4>
              <p class="mb-0">Profession</p>
            </div>
            <div class="d-flex text-warning">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
          <div class="testimonial-quote-right">
            <i class="fas fa-quote-right fa-2x"></i>
          </div>
        </div>
        <div class="testimonial-item">
          <div class="testimonial-quote-left">
            <i class="fas fa-quote-left fa-2x"></i>
          </div>
          <div class="testimonial-img">
            <img src="img/testimonial-2.jpg" class="img-fluid" alt="Image" />
          </div>
          <div class="testimonial-text">
            <p class="mb-0">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
              blanditiis excepturi quisquam temporibus voluptatum
              reprehenderit culpa, quasi corrupti laborum accusamus.
            </p>
          </div>
          <div class="testimonial-title">
            <div>
              <h4 class="mb-0">Person Name</h4>
              <p class="mb-0">Profession</p>
            </div>
            <div class="d-flex text-warning">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
          <div class="testimonial-quote-right">
            <i class="fas fa-quote-right fa-2x"></i>
          </div>
        </div>
        <div class="testimonial-item">
          <div class="testimonial-quote-left">
            <i class="fas fa-quote-left fa-2x"></i>
          </div>
          <div class="testimonial-img">
            <img src="img/testimonial-3.jpg" class="img-fluid" alt="Image" />
          </div>
          <div class="testimonial-text">
            <p class="mb-0">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
              blanditiis excepturi quisquam temporibus voluptatum
              reprehenderit culpa, quasi corrupti laborum accusamus.
            </p>
          </div>
          <div class="testimonial-title">
            <div>
              <h4 class="mb-0">Person Name</h4>
              <p class="mb-0">Profession</p>
            </div>
            <div class="d-flex text-warning">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
          <div class="testimonial-quote-right">
            <i class="fas fa-quote-right fa-2x"></i>
          </div>
        </div>
        <div class="testimonial-item">
          <div class="testimonial-quote-left">
            <i class="fas fa-quote-left fa-2x"></i>
          </div>
          <div class="testimonial-img">
            <img src="img/testimonial-2.jpg" class="img-fluid" alt="Image" />
          </div>
          <div class="testimonial-text">
            <p class="mb-0">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
              blanditiis excepturi quisquam temporibus voluptatum
              reprehenderit culpa, quasi corrupti laborum accusamus.
            </p>
          </div>
          <div class="testimonial-title">
            <div>
              <h4 class="mb-0">Person Name</h4>
              <p class="mb-0">Profession</p>
            </div>
            <div class="d-flex text-warning">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
          <div class="testimonial-quote-right">
            <i class="fas fa-quote-right fa-2x"></i>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- Testimonial End -->
  <!-- Contact Start -->
  <div class="container-fluid contact py-5 " id="contact">
    <div class="container py-5">
      <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
        <h4 class="text-warning">Kontak</h4>
        <h1 class="display-5 mb-4">HUBUNGI KAMI</h1>
        <p class="mb-0">
          Jika anda membutuhkan informasi atau bantuan lebih lebih lanjut, jangan ragu untuk menghubungi kami. 
          Kami siap membantu dengan sepenuh hati. 
        </p>
      </div>
      <div class="row kontak_item">
        <div class="col-md-6">
          <div class="bg-light rounded p-5 mb-5 h-100 wow fadeInLeft" data-wow-delay="0.2s">
            <h4 class="text-warning mb-4">Tekan untuk menghubungi</h4>
            <div class="row g-4">
              <!-- <div class="col-md-6"> -->
              <div class="contact-add-item">
                <div class="contact-icon text-warning mb-4">
                  <i class="fas fa-map-marker-alt fa-2x"></i>
                </div>
                <div>
                  <h4>Alamat</h4>
                  <p class="mb-0"> <a class="text-dark" href="https://www.google.com/maps?q=Jl.+R.+W.+Monginsidi+No.3,+Pasir+Panjang,+Kec.+Kota+Lama,+Kota+Kupang,+Nusa+Tenggara+Tim." target="_blank">Jl. R. W. Monginsidi No.3, Pasir Panjang, Kec. Kota Lama, Kota Kupang, Nusa Tenggara Tim.
                    </a> </p>
                </div>
              </div>
              <!-- </div> -->
              <!-- <div class="col-md-6"> -->
              <div class="contact-add-item">
                <div class="contact-icon text-warning mb-4">
                  <i class="fas fa-envelope fa-2x"></i>
                </div>
                <div>
                  <h4>Email</h4>
                  <p class="mb-0">
                    <a class="text-dark" href="mailto:<?php echo $profile['email'] ?>"><?php echo $profile['email'] ?></a>
                  </p>
                </div>
              </div>
              <!-- </div> -->
              <!-- <div class="col-md-6"> -->
              <div class="contact-add-item">
                <div class="contact-icon text-warning mb-4">
                  <i class="fa fa-phone-alt fa-2x"></i>
                </div>
                <div>
                  <h4>Telepon</h4>
                  <p class="mb-0">
                    <a class="text-dark" href="mailto:<?php echo $profile['telepon'] ?>"><?php echo $profile['telepon'] ?></a>
                  </p>
                  <!-- <p class="mb-0"><?php echo $profile['telepon'] ?></p> -->
                </div>
              </div>
              <!-- </div> -->
              <div class="col-md-6">
                <div class="contact-add-item">
                  <div class="contact-icon text-warning mb-4">
                    <i class="fab fa-whatsapp fa-2x"></i>
                  </div>
                  <div>
                    <h4>WhatsApp</h4>
                    <p class="mb-0">
                      <a class="text-dark" href="https://wa.me/<?php echo $profile['telepon'] ?>" target="_blank">
                        <?php echo $profile['telepon'] ?>
                      </a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="bg-light p-5 rounded h-100 wow fadeInRight" data-wow-delay="0.2s">
            <h4 class="text-warning">Kirim pesan ke kami</h4>
            <p class="mb-4">Butuh Bantuan..? Silahkan Hubungi kami untuk informasi lebih lanjut</p>
            <form>
              <div class="row g-4">
                <div class="col-lg-12 ">
                  <div class="form-floating">
                    <input type="text" class="form-control border-0" id="name" placeholder="Nama">
                    <label for="name">Nama</label>
                  </div>
                </div>
                <div class="col-lg-12 ">
                  <div class="form-floating">
                    <input type="email" class="form-control border-0" id="email" placeholder="Email">
                    <label for="email">Email</label>
                  </div>
                </div>
                <div class="col-lg-12 ">
                  <div class="form-floating">
                    <input type="no_hp" class="form-control border-0" id="no_hp" placeholder="No Hp">
                    <label for="no_hp">No Hp</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input type="text" class="form-control border-0" id="subject" placeholder="Subject">
                    <label for="subject">Subject</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                    <label for="message">Pesan</label>
                  </div>

                </div>
                <div class="col-12">
                  <button class="btn btn-secondary w-100 py-3">Kirim Pesan</button>
                </div>
              </div>
            </form>
          </div>
        </div>

      </div>





      <!-- <div class="row g-5">
        <div class="col-xl-6">
          <div class="wow fadeInUp" data-wow-delay="0.2s">
            <div class="bg-light rounded p-5 mb-5">
              <h4 class="text-warning mb-4">Get in Touch</h4>
              <div class="row g-4">
                <div class="col-md-6">
                  <div class="contact-add-item">
                    <div class="contact-icon text-warning mb-4">
                      <i class="fas fa-map-marker-alt fa-2x"></i>
                    </div>
                    <div>
                      <h4>Address</h4>
                      <p class="mb-0"> <a href="https://www.google.com/maps?q=Jl.+R.+W.+Monginsidi+No.3,+Pasir+Panjang,+Kec.+Kota+Lama,+Kota+Kupang,+Nusa+Tenggara+Tim." target="_blank">Jl. R. W. Monginsidi No.3, Pasir Panjang, Kec. Kota Lama, Kota Kupang, Nusa Tenggara Tim.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="contact-add-item">
                    <div class="contact-icon text-warning mb-4">
                      <i class="fas fa-envelope fa-2x"></i>
                    </div>
                    <div>
                      <h4>Mail Us</h4>
                      <p class="mb-0">info@example.com</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="contact-add-item">
                    <div class="contact-icon text-warning mb-4">
                      <i class="fa fa-phone-alt fa-2x"></i>
                    </div>
                    <div>
                      <h4>Telephone</h4>
                      <p class="mb-0">(+012) 3456 7890</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="contact-add-item">
                    <div class="contact-icon text-warning mb-4">
                      <i class="fab fa-whatsapp fa-2x"></i>
                    </div>
                    <div>
                      <h4>WhatsApp</h4>
                      <a class="" href="https://wa.me/6281237788789" target="_blank">
                        <p class="mb-0">+621237788789
                      </a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="bg-light p-5 rounded h-100 wow fadeInUp" data-wow-delay="0.2s">
              <h4 class="text-warning">Send Your Message</h4>
              <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a class="text-warning fw-bold" href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
              <form>
                <div class="row g-4">
                  <div class="col-lg-12 col-xl-6">
                    <div class="form-floating">
                      <input type="text" class="form-control border-0" id="name" placeholder="Your Name">
                      <label for="name">Your Name</label>
                    </div>
                  </div>
                  <div class="col-lg-12 col-xl-6">
                    <div class="form-floating">
                      <input type="email" class="form-control border-0" id="email" placeholder="Your Email">
                      <label for="email">Your Email</label>
                    </div>
                  </div>
                  <div class="col-lg-12 col-xl-6">
                    <div class="form-floating">
                      <input type="phone" class="form-control border-0" id="phone" placeholder="Phone">
                      <label for="phone">Your Phone</label>
                    </div>
                  </div>
                  <div class="col-lg-12 col-xl-6">
                    <div class="form-floating">
                      <input type="text" class="form-control border-0" id="project" placeholder="Project">
                      <label for="project">Your Project</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <input type="text" class="form-control border-0" id="subject" placeholder="Subject">
                      <label for="subject">Subject</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                      <label for="message">Message</label>
                    </div>

                  </div>
                  <div class="col-12">
                    <button class="btn btn-secondary w-100 py-3">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
          <div class="rounded h-100">
            <iframe class="rounded h-100 w-100" style="height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3927.342696545936!2d123.60418207479559!3d-10.152773889960576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c569de836b48afd%3A0x14faa4d8e96d8525!2sDinas%20Kearsipan%20Dan%20Perpustakaan%20Kota%20Kupang!5e0!3m2!1sid!2sid!4v1732518029038!5m2!1sid!2sid" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div> -->
      <div class="row wow fadeInUp pt-5" data-wow-delay="0.2s ">
        <?php echo $profile['gmap']
        ?>
      </div>
    </div>
  </div>
  <!-- Contact End -->
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
          <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Your Site
              Name</a>, All right reserved.</span>
        </div>
        <div class="col-md-6 text-center text-md-end text-body">
          <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
          <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
          <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
          Designed By
          <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a>
          Distributed By
          <a class="border-bottom text-white" href="https://themewagon.com">ThemeWagon</a>
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