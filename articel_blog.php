<?php
require 'call_fungtion.php';
?>
<!DOCTYPE html>
<html lang="en">

<?php include "head.php" ?>

<?php
// Ambil data filter jika ada
$tahun_filter = isset($_GET['tahun']) ? $_GET['tahun'] : '';
$bulan_filter = isset($_GET['bulan']) ? $_GET['bulan'] : '';
$departemen_filter = isset($_GET['departemen']) ? $_GET['departemen'] : '';

// Filter data dari database berdasarkan filter yang diterima
$query = "SELECT * FROM kegiatan WHERE 1=1";

if (!empty($tahun_filter)) {
    $query .= " AND YEAR(tanggal) = '$tahun_filter'";
}
if (!empty($bulan_filter)) {
    $query .= " AND MONTH(tanggal) = '$bulan_filter'";
}
if (!empty($departemen_filter)) {
    $query .= " AND departemen = '$departemen_filter'";
}
$result = mysqli_query($koneksi, $query);
$blogs = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

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
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Blog & Artkel Kami</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active text-primary">Blog & Artikel</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->
    </div>
    <!-- Navbar & Hero End -->
    <!-- Services Start -->

    <div class="container-fluid blog py-5">
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
            
            <div class="text-end mb-4">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#filterModal">Filter Data</button>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.2s">
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
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100">
                                <img src="img/<?php echo htmlspecialchars($blog['gambar']); ?>"
                                    class="card-img-top"
                                    alt="<?php echo htmlspecialchars($blog['judul']); ?>"
                                    style="height: 250px; object-fit: cover; object-position: center;" />

                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?= htmlspecialchars($judul); ?>
                                    </h5>
                                    <p class="card-text">
                                        <?php echo htmlspecialchars($deskripsi); ?>
                                    </p>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img src="img/testimonial-1.jpg"
                                            class="rounded-circle me-2"
                                            style="width: 40px; height: 40px;"
                                            alt="" />
                                        <div>
                                            <h6 class="mb-0"><?php echo htmlspecialchars($blog['penulis']); ?></h6>
                                            <small class="text-muted"><?php echo htmlspecialchars($blog['tanggal']); ?></small>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-secondary btn-sm">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                <?php }
                } else {
                    echo "<p class='text-center'>Tidak ada layanan</p>";
                } ?>
            </div>

        </div>
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


    <!-- Modal Filter -->
    <div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="GET" action="">
                    <div class="modal-header">
                        <h5 class="modal-title" id="filterModalLabel">Filter Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="tahun" class="form-label">Tahun</label>
                            <input type="number" name="tahun" id="tahun" class="form-control" placeholder="Masukkan Tahun" value="<?= htmlspecialchars($tahun_filter); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="bulan" class="form-label">Bulan</label>
                            <select name="bulan" id="bulan" class="form-select">
                                <option value="">Semua Bulan</option>
                                <?php
                                for ($i = 1; $i <= 12; $i++) {
                                    $bulan = str_pad($i, 2, '0', STR_PAD_LEFT);
                                    $selected = ($bulan_filter == $bulan) ? 'selected' : '';
                                    echo "<option value='$bulan' $selected>" . date('F', mktime(0, 0, 0, $i, 10)) . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning">Terapkan Filter</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>




</html>