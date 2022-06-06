<!DOCTYPE html>
<html lang="en">
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>M Muslih Amirudin - JWD 2020</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo-white.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="images/icon/19.jpg" alt="M Muslih Amirudin" />
                    </div>
                    <h4 class="name">M Muslih Amirudin</h4>
                    <a href="#">Junior Web Developer</a>
                </div>
               <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                            </a>
                        </li>
                        <li class="active has-sub" >
                            <a href="segitiga_form.php">
                                <i class="fas fa-eject"></i>Segitiga
                            </a>
                        </li>
                        <li>
                            <a href="persegi_form.php">
                                <i class="fas fa-square"></i>Persegi
                            </a>
                        </li>
                        <li>
                            <a href="lingkaran_form.php">
                                <i class="fas fa-circle"></i>Lingkaran
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            
             <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header">Yuk! Mari Hitung Luas Segitiga!</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Menghitung Luas Bangun Datar Segitiga</h3>
                                        </div>
                                        <hr>
                                        <form role="form" action="" method="post">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Masukkan Nilai Alas Segitiga</label>
                                                <input name="alas_segitiga" type="number" required="required" class="form-control">
                                            </div>
                                            <div class="form-group ">
                                                <label for="cc-name" class="control-label mb-1">Masukkan Nilai Tinggi Segitiga</label>
                                                <input name="tinggi_segitiga" type="number" required="required" class="form-control">
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" name="simpan" class="btn btn-lg btn-info btn-block">
                                                    <span id="payment-button-amount">Hitung</span>
                                                </button>
                                                <input type="button" value="Hitung Ulang" class="btn btn-lg btn-danger btn-block" onclick="window.location.href='segitiga_form.php'" /><hr>
                                            </div>
                                        </form>

                                        <?php 
                                        if (isset($_POST['simpan'])){ //melakukan pengecekan klik tombol simpan atau tidak
                                            include('koneksi_basisdata.php'); //memanggil file koneksi_basisdata.php untuk menghubungkan basis data
                                            $alas_segitiga = $_POST['alas_segitiga']; // menyimpan masukan nilai alas segitiga ke dalam variabel
                                            $tinggi_segitiga = $_POST['tinggi_segitiga']; //menyimpan masukan nilai tinggi segitiga ke dalam variabel

                                            $tanggal = date('Y-m-d'); //menyimpan tanggal saat ini pada variabel tanggal
                                            $jam = date('h:i:s'); // menyimpan waktu (timestamp) pada variabel jam
                                        

                                        //fungsi untuk menghitung luas segitiga
                                        function luas_segi3($alas_segitiga, $tinggi_segitiga) { //nama function serat menangkap nilai pada kedua variabel yaitu pada nilai alas dan tinggi
                                            $luas = 0.5 * ($alas_segitiga * $tinggi_segitiga);//rumus luas segitiga yaitu alas dikali tinggi
                                            return $luas; //mengembalikan nilai perhitungan luas
                                        }

                                        //menyimpan perhitungan luas segitiga pada file TXT
                                        $file = fopen("file/segitiga_luas.txt","w");

fwrite($file, //proses penulisan pada file txt
'=============================================================================
                HASIL PERHITUNGAN LUAS SEGITIGA ANDA
=============================================================================
Tanggal Perhitungan     : '. $tanggal.' 
Jam Perhitungan         : '. $jam. ' 
Nilai Alas Segitiga     : '. $alas_segitiga. ' 
Nilai Tinggi Segitiga   : '. $tinggi_segitiga. '
Rumus Luas Segitiga     : 0.5 x Alas Segitiga x Tinggi Segitiga
                          0.5 x '.$alas_segitiga.' x '. $tinggi_segitiga. '
Luas Segitiga           : '. luas_segi3($alas_segitiga, $tinggi_segitiga));
fclose($file);

                                        $querypilihsegitiga = mysqli_query($koneksi, "SELECT * FROM bangun_ruang WHERE bangun_ruang='segitiga'") or die(mysql_error()); //query menampilkan bangun_ruang: segitiga
                                        $data = mysqli_fetch_array($querypilihsegitiga); //variable data berisikan mysqli array
                                        $segi3 = $data['jumlah']; //mengambil data jumlah 
                                        $qty = $segi3 + 1; //data jumlah+1 pada qty

                                        mysqli_query($koneksi, "UPDATE bangun_ruang SET jumlah='$qty' WHERE bangun_ruang='segitiga'") or die(mysql_error()); //query upate qty
                                        
                                        ?>

                                        
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header">Hasil Perhitungan</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2" name="luas"><?php echo luas_segi3($alas_segitiga, $tinggi_segitiga)?></h3> <!-- Hasil Perhitungan Luas Segitiga-->
                                        </div>
                                        <hr>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
