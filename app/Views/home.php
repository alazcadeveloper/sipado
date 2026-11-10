<?= $this->extend('/template/layout1') ?>
<?= $this->section('content') ?>
<!-- Header -->
<header id="header" class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ">
                <div class="text-container">
                     <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success alert-dismissible" style="color: green" role="alert">

                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>
                    <h1 class="h1-large" style="color:#1A1A1A"> <b> Sistem Pemilihan Daring / Online (SiPaDO) </b></h1>
                    <h2 class="h2-large" style="color:#1A1A1A"> <b>  Pemilihan Ketua OSIS SMP Islam Al-Azhar Cairo Banda Aceh </b></h2>
                    


                    <br>
                    <br>
                    <a class="btn-solid-lg" style="background-color: #E1E85A;"  href="/Home/kode_pemilih">
                        Ayo Kita Pilih
                    </a>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6 ">
                <div class="image-container">
                    <img class="img-fluid" style="image-size:100%" src="<?php echo base_url('nubis/images/home8.png') ?>" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of header -->
<!-- end of header -->
<?= $this->endSection() ?>