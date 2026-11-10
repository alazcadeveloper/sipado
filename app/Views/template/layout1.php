<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">
    <link rel="shortcut icon" <?php echo base_url('nubis/images/favicon.png') ?> type="image/x-icon">
    <!-- Webpage Title -->
    <title>SiPaDO 2023/2024</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href=" <?php echo base_url('nubis/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('nubis/css/fontawesome-all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('nubis/css/swiper.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('nubis/css/styles.css') ?>" rel="stylesheet" type="text/css">

    <!-- Favicon  -->
    <link rel="icon" href="<?php echo base_url('images/favicon.png') ?>">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbarExample">

    <!-- Navigation -->
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
        <div class="container">
            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="/"><img width="120px" src="<?php echo base_url('nubis/images/logo3.png') ?>" alt="alternative"></a>

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <a class="navbar-brand logo-text" style="color:#E03D3D;" href=" #">SiPaDO</a>
            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/Home/Status">Quick Count</a>
                    </li>
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link " aria-current="page" href="/Home/status">Quick Count</a>-->
                    <!--</li>-->

                   
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

<br>
<br>
<br>&ensp;
    <?= $this->renderSection('content') ?>


    <!-- Copyright -->
    <div class="copyright bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p style="text-align:left" class="p-small statement">Copyright ©Al-Azhar Cairo 2021</p>
                </div> <!-- end of col -->

                <div class="col-lg-6">
                    <p class="p-small statement"> <a href="http://alazharcairobna.sch.id/" target="_blank">Sekolah Islam Al-Azhar Cairo Banda Aceh</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->
    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="<?php echo base_url('nubis/images/up-arrow.png') ?> " alt="alternative">
    </button>
    <!-- end of back to top button -->

    <!-- Scripts -->
    <script src="<?php echo base_url('nubis/js/bootstrap.min.js') ?>" type="text/javascript"></script> <!-- Bootstrap framework -->
    <script src="<?php echo base_url('nubis/js/swiper.min.js') ?>" type="text/javascript"></script> <!-- Swiper for image and text sliders -->
    <script src="<?php echo base_url('nubis/js/scripts.js') ?>" type="text/javascript"></script> <!-- Custom scripts -->
    <script src="<?php echo base_url('plugins/jquery/jquery.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('plugins/chart.js/Chart.min.js') ?>" type="text/javascript"></script>
    <script>
        //-------------
        //- DONUT CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
        var donutData = {
            labels: [
                'PASLON 01',
                'PASLON 02',
              	'PASLON 03',
                'Belum Memilih',
               

            ],
            datasets: [{
                data: [<?php $db = db_connect();
                        $tb_hasil1 = $db->query('select count(id_pemilihan) as calon1 from pemilihan where pilihan=1');
                        $hasil1 = $tb_hasil1->getRow();
                        echo $hasil1->calon1;
                        ?>, <?php $db = db_connect();
                            $tb_hasil1 = $db->query('select count(id_pemilihan) as calon1 from pemilihan where pilihan=2');
                            $hasil1 = $tb_hasil1->getRow();
                            echo $hasil1->calon1;
                            ?>, <?php $db = db_connect();
                              $tb_hasil1 = $db->query('select count(id_pemilihan) as calon1 from pemilihan where pilihan=3');
                              $hasil1 = $tb_hasil1->getRow();
                              echo $hasil1->calon1;
                              ?>, <?php $db = db_connect();
                                  $tb_hasil1 = $db->query('select count(id_kode) as calon1 from pemilih where status=0');
                                  $hasil1 = $tb_hasil1->getRow();
                                  echo $hasil1->calon1;
                                  ?>,  ],
                backgroundColor: ['red', '#00c0ef','#F29654', 'gray'],
            }]
        }
        var donutOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        new Chart(donutChartCanvas, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions
        })

        $(function() {
            //-------------
            //- PIE CHART -
            //-------------
            // Get context with jQuery - using jQuery's .get() method.
            var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
            var pieData = donutData;
            var pieOptions = {
                maintainAspectRatio: false,
                responsive: true,
            }
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            new Chart(pieChartCanvas, {
                type: 'pie',
                data: pieData,
                options: pieOptions
            })
        })
    </script>
</body>

</html>