<?= $this->extend('/template/layout1') ?>
<?= $this->section('content') ?>

<!-- Header -->
<header id="header" class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-5">
                <div class="text-container">

                    <?php if (session()->getFlashdata('gagal')) : ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">

                            <?= session()->getFlashdata('gagal'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success alert-dismissible" style="color: #E03D3D;" role="alert">

                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>


                    <h1 class="h1-large" style="color:#1A1A1A;"> <?php
                                                                    $day = date('d', strtotime('2022-11-01'));
                                                                    $month = date('m', strtotime('2022-11-01'));
                                                                    $year = date('Y', strtotime('2022-11-01'));
                                                                    $jam = date('h', strtotime('00:00'));
                                                                    $time = date('h', strtotime(time()));
                                                                    $days  = (int)((mktime(0, 0, 0, $month, $day, $year) - time()) / 86400);
                                                                    $jams  = $jam - $time;

                                                                    if ($days < 0 && $jams <= 0) {
                                                                        echo "Waktu Pemilihan Telah Berakhir";
                                                                    } else {
                                                                        echo "Masukan Kode Pemilihan Anda";
                                                                    }
                                                                    ?></h1>
                    <form action="/Home/cek_kode" method="POST">
                        <div class="form-group-row">
                            <input type="<?php
                                            $day = date('d', strtotime('2022-11-01'));
                                            $month = date('m', strtotime('2022-11-01'));
                                            $year = date('Y', strtotime('2022-11-01'));
                                            $jam = date('h', strtotime('00:00'));
                                            $time = date('h', strtotime(time()));
                                            $days  = (int)((mktime(0, 0, 0, $month, $day, $year) - time()) / 86400);
                                            $jams  = $jam - $time;

                                            if ($days < 0 && $jams <= 0) {
                                                echo 'hidden';
                                            } else {
                                                echo 'text';
                                            }
                                            ?>" name="kode" class="form-control"> </input>
                        </div>
                        <br>
                        <div class="form-row">
                            <button <?php
                                    $day = date('d', strtotime('2022-11-01'));
                                    $month = date('m', strtotime('2022-11-01'));
                                    $year = date('Y', strtotime('2022-11-01'));
                                    $jam = date('h', strtotime('00:00'));
                                    $time = date('h', strtotime(time()));
                                    $days  = (int)((mktime(0, 0, 0, $month, $day, $year) - time()) / 86400);
                                    $jams  = $jam - $time;

                                    if ($days < 0 && $jams <= 0) {
                                        echo "disabled";
                                    } else {
                                        echo "";
                                    }
                                    ?> type="submit" class="btn btn-primary">Cek Kode</button>
                        </div>
                    </form>
                    <br>
                    <br>

                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-12 col-xl-7">
                <div class="image-container">
                    <img class="img-fluid" style="image-size:100%" src="<?php echo base_url('nubis/images/home8.png') ?>" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of header -->
<!-- end of header -->
<?= $this->endSection() ?>