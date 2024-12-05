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

        <!-- Header Start -->
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
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Kontak Kami</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                    <li class="breadcrumb-item active text-primary">Kontak</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->
    </div>
    <!-- Navbar & Hero End -->

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
            <div class="row wow fadeInUp pt-5" data-wow-delay="0.2s ">
                <?php echo $profile['gmap']
                ?>
            </div>
        </div>
    </div>
    <!-- Contact End -->

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