<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kos Idaman</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/assets/img/favicon.png" rel="icon">
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ '/plugins/fontawesome-free/css/all.min.css' }} ">

    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">

    <!-- Select2 -->
    <link rel="stylesheet" href="/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <link rel="stylesheet" href="/dist/css/adminlte.min.css">

    <style>
        #header {
            box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
        }

        .transform-on-hover:hover {
            transform: translateY(-10px) scale(1.02);
            transition: 0.4s ease;
        }


        .card {
            transition: 0.4s ease;
        }

    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <div class="logo mr-auto">
                <h1 class="text-light"><a href="/">KOS Idaman<span>.</span></a></h1>
            </div>

            @if (empty(Request::segment(1)))

                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="active"><a href="/">Beranda</a></li>
                        <li><a href="#rekomendasi">Rekomendasi</a></li>
                        <li><a href="#services">Layanan</a></li>
                        <li><a href="#contact">Kontak</a></li>

                        <li class="get-started"><a href="#about">Mulai</a></li>
                    </ul>
                </nav>
            @endif

        </div>
    </header><!-- End Header -->
    <div style="margin-top: 75px;"></div>
    @yield('content')


    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">

            <div class="container" data-aos="fade-up">

                <div class="row  justify-content-center">
                    <div class="col-lg-6">
                        <h3>Kos Idaman</h3>
                        <p>Cek Sosial media sosial kami untuk info lebih lanjut</p>
                    </div>
                </div>

                <div class="social-links">
                    <a target="_blank" href="https://wa.me/+6285895402090" class="twitter"><i
                            class="bx bxl-whatsapp"></i></a>
                    <a target="_blank" href="https://www.facebook.com/tobi.nggales" class="facebook"><i
                            class="bx bxl-facebook"></i></a>
                    <a target="_blank" href="https://www.instagram.com/tobiaditia/" class="instagram"><i
                            class="bx bxl-instagram"></i></a>
                    <a target="_blank" href="mailto:tobiaditia549@gmail.com" class="google-plus"><i
                            class="bx bxl-google"></i></a>
                </div>

            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Bocor</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bocor-bootstrap-template-nice-animation/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>
    <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="/assets/vendor/venobox/venobox.min.js"></script>
    <script src="/assets/vendor/aos/aos.js"></script>
    <!-- Select2 -->
    <script src="/plugins/select2/js/select2.full.min.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets/js/main.js"></script>
    <script src="/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/dist/js/demo.js"></script>

    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

        });

        var val_kabkota_code;
        var val_kecamatan_code;
        $('#selectKabkota').change(function() {
            val_kabkota_code = $(this).val();
            $('#selectKelurahan').empty();
            if (val_kabkota_code) {
                $.ajax({
                    url: "{{ url('/public/get-kecamatan') }}/" + val_kabkota_code,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('#selectKecamatan').empty();
                        $('#selectKecamatan').append('<option value="' + data
                            .parent_code + '">Pilih Semua</option>');
                        $.each(data.data, function(key, value) {
                            $('#selectKecamatan').append('<option value="' + value
                                .kecamatan_code + '">' +
                                value.kecamatan_name + '</option>');
                        });
                        $("#selectKecamatan").trigger('change');

                    }
                });
            } else {
                $('#selectKecamatan').empty();
            }
        });

        $('#selectKecamatan').change(function() {
            val_kecamatan_code = $(this).val();

            if (val_kecamatan_code.length > 2) {
                console.log('sini');
                $('#selectKelurahan').empty();
                $('#selectKelurahan').append('<option value="' + val_kecamatan_code + '">Pilih Semua</option>');
            } else if (val_kecamatan_code) {
                console.log('sini2');

                $.ajax({
                    url: "{{ url('/public/get-kelurahan') }}/" + val_kabkota_code + "/" +
                        val_kecamatan_code,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('#selectKelurahan').empty();
                        $('#selectKelurahan').append('<option value="' + data
                            .parent_code + '">Pilih Semua</option>');
                        $.each(data.data, function(key, value) {
                            $('#selectKelurahan').append('<option value="' + value
                                .area_code + '">' +
                                value.kelurahan_name + '</option>');
                        });
                        $("#selectKelurahan").trigger('change');

                    }
                });
            } else {
                $('#selectKecamatan').empty();
            }
            console.log($('#selectKelurahan').val());
        });

    </script>

</body>

</html>
