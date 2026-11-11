<?= $this->extend('/template/layout1') ?>
<?= $this->section('content') ?>


<!-- Header -->
<header id="header" class="header">
    <div class="container">
        <div class="card" style="background-color:#FFF7F7;">
            <div class="row mt-5">
                <div class="col-lg-12">
                    <h2 class="h1-large" style="color:black;" align="center">Quick Count Pemilihan Ketua OSIS</h2>
                    <h2 class="h2" style="color:black;" align="center">SMP Islam Al-Azhar Cairo Banda Aceh</h2>
                    <h2 class="h2" style="color:black;" align="center">-----------------------------------</h2>
                    <br>
                    <hr>
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success alert-dismissible" style="color: green" role="alert">

                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <br>


            <div class="row mb-5 ">
                <div class="col-lg-4 ">
                    <div class="text-container text-center mb-6">
                        <h2> PASLON 01 </h2>
                        <img src=" <?php echo base_url('nubis/images/paslon_1_2026.png') ?> " class="img-fluid" alt="">
                        <br>
                        <br>
                        <h1 class="h1-large" style="color:black;"> 
                          <?php $db = db_connect();
                             $tb_hasil1 = $db->query("select count(id_pemilihan) as calon1 from pemilihan where pilihan=1");
                             $hasil1 = $tb_hasil1->getRow();
                             echo "$hasil1->calon1";
                          ?>
                      	</h1>
                        <hr>

                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4 mt-10">
                    <div class="text-container text-center mb-6">
                        <h2> PASLON 02 </h2>
                        <img src=" <?php echo base_url('nubis/images/paslon_2_2026.png') ?> " class="img-fluid" alt="">
                        <br>
                        <br>
                        <h1 class="h1-large" style="color:black;"> 
                          <?php $db = db_connect();
                             $tb_hasil1 = $db->query("select count(id_pemilihan) as calon1 from pemilihan where pilihan=2");
                             $hasil1 = $tb_hasil1->getRow();
                             echo "$hasil1->calon1";
                          ?>
                      	</h1>
                        <hr>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
              	<div class="col-lg-4 mt-10">
                    <div class="text-container text-center mb-6">
                        <h2> PASLON 03 </h2>
                        <img src=" <?php echo base_url('nubis/images/paslon_3_2026.png') ?> " class="img-fluid" alt="">
                        <br>
                        <br>
                        <h1 class="h1-large" style="color:black;"> 
                          <?php $db = db_connect();
                             $tb_hasil1 = $db->query("select count(id_pemilihan) as calon1 from pemilihan where pilihan=3");
                             $hasil1 = $tb_hasil1->getRow();
                             echo "$hasil1->calon1";
                          ?>
                      	</h1>
                        <hr>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                 
                </div>
                <div class="row">
                <div class="col-lg-6">
                    <div class="text-container text-center">
                        <h2>Belum Memilih</h2>

                        <img src=" <?php echo base_url('nubis/images/golput.png') ?> " width="200px" alt="">
                        <br>
                        <br>
                        <h1 class="h1-large" style="color:black"> <?php $db = db_connect();
                                                                    $tb_hasil2 = $db->query("select count(id_kode) as calon1 from pemilih where status=0");
                                                                    $hasil2 = $tb_hasil2->getRow();
                                                                    echo "$hasil2->calon1";
                                                                    ?></h1>
                        <hr>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 mt-10">
                    <div class="text-container text-center">
                        <h2> Total Pemilih</h2>
                        <img src=" <?php echo base_url('nubis/images/total.png') ?> " width="200px" alt="">
                        <br>
                        <br>
                        <h1 class="h1-large" style="color:blue;"> <?php $db = db_connect();
                                                                    $tb_hasil1 = $db->query("select count(id_kode) as calon1 from pemilih");
                                                                    $hasil1 = $tb_hasil1->getRow();
                                                                    echo "$hasil1->calon1";
                                                                    ?></h1>
                        <hr>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row mb-6 ml-6 mt-6 ">
                <div class="col-lg-6">
                    <!-- PIE CHART -->
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">Diagram Perolehan Suara </h3>

                        </div>
                        <div class="card-body ">
                            <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-lg-6">
                    <!-- DONUT CHART -->
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title"> &ensp;</h3>


                        </div>
                        <div class="card-body">
                            <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <br>
                <br>
            </div>
        </div>
    </div> <!-- end of container -->
</header> <!-- end of header -->

<!-- end of header -->
<?= $this->endSection() ?>