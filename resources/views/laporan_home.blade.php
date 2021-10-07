<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Laporan | ImadePOM</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="/laporan/css/bootstrap.css" rel="stylesheet">
    <link href="/laporan/css/fontawesome-all.css" rel="stylesheet">
    <link href="/laporan/css/swiper.css" rel="stylesheet">
	<link href="/laporan/css/magnific-popup.css" rel="stylesheet">
	<link href="/laporan/css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->

</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-text page-scroll" href="/laporan-home">ImadePOM</a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#laporandata">Laporan Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="login">Login</a>
                </li>
            </ul>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1><span class="turquoise">Laporan</span> ImadePOM</h1>
                            <h6>Visi</h6>
                            <p class="p-large">Obat dan Makanan aman, bermutu, dan berdaya saing untuk mewujudkan Indonesia maju yang berdaulat, mandiri, dan berkepribadian berlandaskan gotong royong.</p>
                            <a class="btn-solid-lg page-scroll" href="#laporandata">LIHAT</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="images/header-teamwork.svg" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Laporan Data -->
    <div id="laporandata" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Laporan Jumlah Data ImadePOM</h2>
                    <p class="p-heading p-large">Jumlah Data yang sudah masuk dan di imput oleh para pegawai di Loka POM Kabupaten Buleleng</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card" class="col-lg-6">
                        <div>
                            <h1 class="text-center">{{ $jumlahpemeriksaan }}</h1>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Data Pemeriksaan</h4>
                            <p>Jumlah Data Pemeriksaan yang sudah dicatat dalam sistem ini.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div>
                            <h1 class="text-center">{{ $jumlahpengujian }}</h1>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Data Pengujian</h4>
                            <p>Jumlah Data Pengujian yang sudah dicatat dalam sistem ini.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div>
                            <h1 class="text-center">{{ $jumlahpenindakan }}</h1>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Data Penindakan</h4>
                            <p>Jumlah Data Penindakan yang sudah dicatat dalam sistem ini</p>
                        </div>
                    </div>
                    <!-- end of card -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->


    <!-- Details 1 -->
    <div class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Data Pemeriksaan Terakhir</h2>
                        <p>5 Data Pemeriksaan terkahir yang di imput oleh pegawai di Loka POM Kabupaten Buleleng</p>
                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-1">LIHAT DATA</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-1-office-worker.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 1 -->

    
    <!-- Details 2 -->
    <div class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-2-office-team-work.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Data Pengujian Terkahir</h2>
                        <p>5 Data Pengujian terakhir yang di imput oleh pegawai di Loka POM Kabupaten Buleleng</p>
                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-2">LIHAT DATA</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 2 -->

<!-- Details 3 -->
<div class="slider-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="image-container">
                    <img class="img-fluid" src="images/testimonials-2-men-talking.svg" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6">
                <div class="text-container">
                    <h2>Data Penindakan Terkahir</h2>
                    <p>5 Data Penindakan terakhir yang di imput oleh pegawai di Loka POM Kabupaten Buleleng</p>
                    <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-3">LIHAT DATA</a>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-3 -->
<!-- end of details 3 -->

    <!-- Details Lightboxes -->
    <!-- Details Lightbox 1 -->
	<div id="details-lightbox-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col">
                    <h3>5 Data Pemeriksaan Terkahir</h3>
                    <hr>
                    <table class="table table-bordered">
                        <tr>
                            <th class="text-center">Nama Sarana</th>
                            <th class="text-center">Status Laporan</th>
                            <th class="text-center">Evaluasi Capa</th>
                        </tr>
                        @foreach ($pemeriksaans as $pemeriksaan)
                        <tr>
                            <td >{{ $pemeriksaan->nama_sarana }}</td>
                            <td>{{ $pemeriksaan->status_laporan }}</td>
                            <td>{{ $pemeriksaan->evaluasi_capa1 }}</td>
                        </tr>
                        @endforeach
                    </table>
                    <a class="btn-outline-reg mfp-close as-button" class="text-right">BACK</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 1 -->

    <!-- Details Lightbox 2 -->
	<div id="details-lightbox-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col">
                    <h3>5 Data Pengujian Terkahir</h3>
                    <hr>
                    <table class="table table-bordered">
                        <tr>
                            <th class="text-center">Nama Petugas</th>
                            <th class="text-center">Jenis Sarana</th>
                            <th class="text-center">Status Pengujian</th>
                        </tr>
                        @foreach ($pengujians as $pengujian)
                        <tr>
                            <td>{{ $pengujian->nama_petugas }}</td>
                            <td>{{ $pengujian->jenis_sarana }}</td>
                            <td>{{ $pengujian->status }}</td>
                        </tr>
                        @endforeach
                    </table>
                    <a class="btn-outline-reg mfp-close as-button">BACK</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 2 -->

    <!-- Details Lightbox 3 -->
	<div id="details-lightbox-3" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col">
                    <h3>5 Data Penindakan Terkahir</h3>
                    <hr>
                    <table class="table table-bordered">
                        <tr>
                            <th class="text-center">Nama Sarana</th>
                            <th class="text-center">Pemilik / Pimpinan</th>
                            <th class="text-center">Status Penindakan</th>
                        </tr>
                        @foreach ($penindakans as $penindakan)
                        <tr>
                            <td>{{ $penindakan->nama_sarana }}</td>
                            <td>{{ $penindakan->pemilik}}</td>
                            <td>{{ $penindakan->status}}</td>
                        </tr>
                        @endforeach
                    </table>
                    <a class="btn-outline-reg mfp-close as-button">BACK</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 3 -->
    <!-- end of details lightboxes -->


    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contact Information</h2>
                    <ul class="list-unstyled li-space-lg">
                        <li class="address">Jika ada Pertanyaan ataupun Saran bisa menghubungi Kontak ini</li>
                        <li><i class="fas fa-map-marker-alt"></i>Jl. Gn. Agung No.8, Banjar Tegal, Kec. Buleleng, Kabupaten Buleleng, Bali 81117</li>
                        <li><i class="fas fa-phone"></i><a class="turquoise">(0362) 3306355</a></li>
                        <li><i class="fas fa-envelope"></i><a class="turquoise">lokapombuleleng@gmail.com</a></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.7545282556316!2d115.08964061400424!3d-8.126455883590507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd19b6177077c7d%3A0x866a581dec239326!2sKantor%20LOKA%20POM%20BULELENG!5e0!3m2!1sid!2sau!4v1632849833705!5m2!1sid!2sau" allowfullscreen></iframe>
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col">
                        <h4>About ImadePOM</h4>
                        <p>Informasi Master Data dan Evaluasi Pengawas Obat dan Makanan</p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Important Links</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Website Badan POM <a class="turquoise" href="https://www.pom.go.id/">pom.go.id</a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>Social Media</h4>
                        <span class="fa-stack">
                            <a href="https://www.facebook.com/lokapomdibuleleng">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.instagram.com/lokapombuleleng/">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.youtube.com/channel/UCvRqXzjgA9bK4mtQAsNkOAg">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-youtube fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2021 Loka POM di Kabupaten Buleleng - All rights reserved</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    	
    <!-- Scripts -->
    <script src="/laporan/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="/laporan/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="/laporan/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="/laporan/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="/laporan/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="/laporan/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="/laporan/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="/laporan/js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>