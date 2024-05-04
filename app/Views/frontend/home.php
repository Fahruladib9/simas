<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Darut Taqwa</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url(); ?>assets/img/logo_dt.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>frontend/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>frontend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>frontend/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>frontend/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url(); ?>frontend/assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-fill"></i><a href="#">fahruladib9@gmail.com</a>
                <i class="bi bi-phone-fill phone-icon"></i> +62 8228 2076 702
            </div>
            <div class="social-links d-none d-md-block">
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="<?= base_url(); ?>">DarutTaqwa</a></h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Galeri</a></li>
                    <li><a class="nav-link scrollto" href="#team">Kepengurusan</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Lokasi</a></li>
                    <li><a class="nav-link scrollto" href="#jadwal-sholat">Jadwal Sholat</a></li>
                    <!-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2023/04/05/1-3632735543.jpeg)">
                    <div class=" carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">اَلسَّلَامُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَا تُهُ</h2>
                            <p class="animate__animated animate__fadeInUp">Selamat Datang Di Website Masjid DarutTaqwa</p>
                            <p class="animate__animated animate__fadeInUp">Masjid DarutTaqwa merupakan salah satu masjid yang berada di Desa Sumber Jaya, Kec. Sumber Marga Telang, Kab. Banyuasin yang berlokasi pada jembatan 2 Desa Sumber Jaya</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Tentang</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(https://cdn-cms.pgimgs.com/areainsider/2023/03/1-tasik-masjid.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Sistem Informasi Masjid Darut Taqwa</h2>
                            <p class="animate__animated animate__fadeInUp">Sistem informasi masjid ini merupakan sebuah website untuk menampilkan kondisi keuangan masjid Darut Taqwa secara berkala seperti saldo kas masjid, pemasukan, maupun pengeluaran, kegiatan masjid, kepengurusan, serta informasi seputar masjid daruttaqwa</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Tentang</a>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services section-bg">
            <div class="container">

                <div class="row no-gutters">
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-currency-dollar"></i></div>
                            <h4 class="title"><a href="#">Saldo Kas Masjid</a></h4>
                            <p class="description"><b>Rp. <?= number_format($kasMasjid, 2, ",", "."); ?></b></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-box-arrow-in-up"></i></div>
                            <h4 class="title"><a href="#">Pemasukan Kas Masjid</a></h4>
                            <p class="description"><b>Rp. <?= number_format($pemasukan, 2, ",", "."); ?></b></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-cart"></i></div>
                            <h4 class="title"><a href="#">Pengeluaran Kas Masjid</a></h4>
                            <p class="description"><b>Rp. <?= number_format($pengeluaran, 2, ",", "."); ?></b></p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>Tentang</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2">
                        <img src="<?= base_url(); ?>assets/img/logo_dt.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>Masjid Darut Taqwa</h3>
                        <p>
                            Masjid Darut Taqwa merupakan salah satu masjid yang berada di Jembatan 2, Desa Sumber Jaya, Kecamatan Sumber Marga Telang, Kabupaten Banyuasin.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title">
                    <h2>Galeri</h2>
                </div>

                <div class="row portfolio-container">

                    <?php foreach ($galeri as $key => $value) : ?>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="<?= base_url() . "assets/img/galeri/" . $value->gambar; ?>" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4><?= $value->judul; ?></h4>
                                    <div class="portfolio-links">
                                        <a href="<?= base_url() . "assets/img/galeri/" . $value->gambar; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= $value->keterangan; ?>"><i class="bi bi-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Kepengurusan</h2>
                </div>

                <div class="row">

                    <?php foreach ($kepengurusan as $key => $value) : ?>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="member">
                                <img src="<?= base_url() . "assets/img/kepengurusan/" . $value->gambar; ?>" alt="<?= $value->gambar; ?>">
                                <h4><?= $value->nama; ?></h4>
                                <span><?= $value->jabatan; ?></span>
                                <p>
                                    <?= $value->pesan; ?>
                                </p>
                                <div class="social">
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Lokasi</h2>
                </div>

                <div class="row">

                    <div class="col-lg d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Desa Sumber Jaya, Jembatan 2</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>fahruladib9@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+62 8228 2076 702</p>
                            </div>

                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d996.514407117436!2d104.88495845270921!3d-2.4878779139368916!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b513dc90f7765%3A0x18671ed2cab59ab1!2sMasjid%20daruttaqwa!5e0!3m2!1sid!2sid!4v1692854196057!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                        </div>
                    </div>

                </div>
        </section><!-- End Contact Section -->


        <section id="jadwal-sholat">
            <div class="container">
                <div class="section-title">
                    <h2>Jadwal Sholat</h2>
                </div>

                <div id='inputeknoJdwl' class='container-wrapp'>
                    <div class='header-jdwlsholat'>
                        <div class='icon'><svg class="timeIcn" viewBox="0 0 512 512">
                                <path d="M256 64C150 64 64 150 64 256s86 192 192 192 192-86 192-192S362 64 256 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M256 128v144h96" />
                            </svg></div>
                        <div class='h-jdwl'>
                            <div class='loc'><?= $jadwal_sholat->lokasi; ?>, <?= $jadwal_sholat->daerah; ?></div>
                            <div class='date'><?= $jadwal_sholat->jadwal->tanggal; ?></div>
                        </div>
                    </div>
                    <div class='content-jdwlsholat'>
                        <div class='jdwlsholat'>
                            <span class='name'>Imsak</span>
                            <span class='time imsak'><?= $jadwal_sholat->jadwal->imsak; ?></span>
                        </div>
                        <div class='jdwlsholat'>
                            <span class='name'>Subuh</span>
                            <span class='time subuh'><?= $jadwal_sholat->jadwal->subuh; ?></span>
                        </div>
                        <div class='jdwlsholat'>
                            <span class='name'>Duha</span>
                            <span class='time dhuha'><?= $jadwal_sholat->jadwal->dhuha; ?></span>
                        </div>
                        <div class='jdwlsholat'>
                            <span class='name'>Dzuhur</span>
                            <span class='time dzuhur'><?= $jadwal_sholat->jadwal->dzuhur; ?></span>
                        </div>
                        <div class='jdwlsholat'>
                            <span class='name'>Ashar</span>
                            <span class='time ashar'><?= $jadwal_sholat->jadwal->ashar; ?></span>
                        </div>
                        <div class='jdwlsholat'>
                            <span class='name'>Maghrib</span>
                            <span class='time maghrib'><?= $jadwal_sholat->jadwal->maghrib; ?></span>
                        </div>
                        <div class='jdwlsholat'>
                            <span class='name'>Isya</span>
                            <span class='time isya'><?= $jadwal_sholat->jadwal->isya; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Sistem Informasi Masjid Daruttaqwa</h3>
            <p>Wassalamualaikum Warohmatullahi Wabarakatuh</p>
            <div class="social-links">
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>Sistem Informasi Masjid Daruttaqwa</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://web.facebook.com/fahrul.adib/" target="_blank" rel="noopener noreferrer">SudenDev</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url(); ?>frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>frontend/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url(); ?>frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url(); ?>frontend/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url(); ?>frontend/assets/js/main.js"></script>


</body>

</html>