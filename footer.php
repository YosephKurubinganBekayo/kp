<!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5 border-start-0 border-end-0" style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08);">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="footer-item">
                    <a href="index.html" class="p-0">
                        <h2 class="text-white"> <img src="img/aset/noimage.png" alt="Logo" style="width:150px; height:150px;">
                            <?php echo $profile['titlewebsite'] ?></h2>
                    </a>
                    <?php echo $profile['description']; ?>
                    </p>

                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-6 align-items-center">
                <div class="footer-item">
                    <h4 class="text-white mb-4">Info Kontak</h4>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-map-marker-alt text-primary me-3"></i>
                        <p class="text-white mb-0 text-break">
                            <?php echo $profile['alamat'] ?>
                        </p>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-envelope text-primary me-3"></i>
                        <p class="text-white mb-0 text-break">
                            <?php echo $profile['email'] ?>
                        </p>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa fa-phone-alt text-primary me-3"></i>
                        <p class="text-white mb-0 text-break">
                            <?php echo $profile['telepon'] ?>
                        </p>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fab fa-firefox-browser text-primary me-3"></i>
                        <p class="text-white mb-0 text-break">Yoursite@ex.com</p>
                    </div>
                    <div class="d-flex">
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f text-white"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-twitter text-white"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-instagram text-white"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-0" href="#"><i class="fab fa-linkedin-in text-white"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-2">
                <div class="footer-item">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a href="index.php"><i class="fas fa-angle-right me-2"></i> Beranda</a>
                    <a href="index.php#about"><i class="fas fa-angle-right me-2"></i> Tentang Kami</a>
                    <a href="index.php#service"><i class="fas fa-angle-right me-2"></i> Layanan</a>
                    <a href="index.php#service_info"><i class="fas fa-angle-right me-2"></i> Informasi Pelayanan</a>
                    <a href="index.php#blog"><i class="fas fa-angle-right me-2"></i> Blog Dan Berita</a>
                    <a href="index.php#contact"><i class="fas fa-angle-right me-2"></i> Kontak</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->