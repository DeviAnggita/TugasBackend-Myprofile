<?= $this->extend('HeaderLayout/template'); ?>
<?= $this->section('konten'); ?>



<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1>Selamat Datang di Website DEVI </h1>
                <h2>Mata Kuliah Backend | V3420028 | TI B</h2>
                <div><a href="#tentang" class="btn-get-started scrollto">Mulai Menjelajah !</a></div>
            </div>
            <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
                <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="tentang" class="about">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
                    <img src="assets/img/about.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                    <h3>Tentang Saya</h3>
                    <p class="fst-italic">
                        Berikut informasi tentang saya
                    </p>
                    <ul>
                        <?php foreach ($diri as $item => $value) { ?>
                            <li><i class="bi bi-check-circle"></i> <?= $item . " : " . $value; ?></li>
                        <?php } ?>
                    </ul>

                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">

            <div class="row counters" style="padding-left: 400px;">

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="<?= $angkatan; ?>" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Angkatan</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="<?= $nim; ?>" data-purecounter-duration="1" class="purecounter"></span>
                    <p>NIM</p>
                </div>



            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="hobi" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Hobi</h2>
                <p>Berikut merupakan hobi dan kegemaran saya</p>
            </div>

            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-blue">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                            </svg>
                            <i class="bx bx-dumbbell"></i>
                        </div>
                        <h4><a href="">Olah Raga</a></h4>
                        <p>Untuk menjaga badan agar tetap sehat dengan menekuni bela diri tradisional yang berasal dari Indonesia yaitu <?= $olahraga; ?></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-orange ">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                            </svg>
                            <i class="bx bx-book-reader"></i>
                        </div>
                        <h4><a href="">Membaca</a></h4>
                        <p>Membaca buku untuk menambah ilmu kususnya ilmu coding seperti:</p>
                        <br>
                        <p>
                        <ul>
                            <?php foreach ($buku as $book) { ?>
                                <li><?= $book; ?></li>
                            <?php } ?>
                        </ul>
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-pink">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                            </svg>
                            <i class="bx bxs-joystick"></i>
                        </div>
                        <h4><a href="">Bermain Game</a></h4>
                        <p>Untuk menghilangkan setres dan tekanan dari tugas sehari - hari</p>
                    </div>
                </div>



            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="harapan" class="features">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Harapan</h2>
                <p>Harapan kedepan</p>
            </div>

            <div class="row" style="padding-left: 100px;">
                <div class="col-lg-3 order-2 order-lg-1 d-flex flex-column align-items-lg-center">
                    <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-brain"></i>
                        <h4>Implementasi</h4>

                        <p><?= $harapan[0]; ?></p>
                    </div>
                    <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-money"></i>
                        <h4>Pekerjaan</h4>

                        <p><?= $harapan[1]; ?></p>
                    </div>
                    <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-code-block"></i>
                        <h4>Magang</h4>
                        <p><?= $harapan[2]; ?></p>
                    </div>
                    <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="400">
                        <i class="bx bx-donate-heart"></i>
                        <h4>Orang Tua</h4>
                        <p><?= $harapan[3]; ?></p>
                    </div>
                </div>
                <div class="image col-lg-8 order-1 order-lg-4 " data-aos="zoom-in" data-aos-delay="100" style="padding-left: 300px;">
                    <img src="assets/img/features.svg" alt="" class="img-fluid">
                </div>
            </div>

        </div>
    </section><!-- End Features Section -->


    <?= $this->include('Footer/footer'); ?>





</main><!-- End #main -->



<?= $this->endSection(); ?>