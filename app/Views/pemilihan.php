<?= $this->extend('/template/layout1') ?>
<?= $this->section('content') ?>


<!-- Header -->
<header id="header" class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="h1-large" style="color:#E03D3D;">Tentukan Pilihan Anda</h1>
                <br>
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success alert-dismissible" style="color: green" role="alert">

                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="text-container text-center mb-6">
                    <img src=" <?php echo base_url('nubis/images/paslon1.png') ?> " width="400px" alt="" class="img-fluid">
                    <br>
                    <br>
                    <form action="/Home/pilihan" method="POST">
                        <input type="hidden" name="kode" value="<?= session('kode') ?>">
                        <input type="hidden" name="pilihan" value="1">
                        <button foccuss type="submit" class="btn btn-success btn-lg" onclick="return confirm('Anda Yakin dengan pilihan PASLON 01?');">PILIH PASLON 01</button>
                        <br>
                        <br>
                        <br>&ensp;
                    </form>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->

            <div class="col-lg-4 mt-10">
                <div class="text-container text-center">
                    <img src="<?php echo base_url('nubis/images/paslon2.png') ?> " width="400px" alt="" class="img-fluid">
                    <br>
                    <br>
                    <form action="/Home/pilihan" method="POST">
                        <input type="hidden" name="kode" value="<?= session('kode') ?>">
                        <input type="hidden" name="pilihan" value="2">
                        <button type="submit" class="btn btn-success btn-lg" onclick="return confirm('Anda Yakin dengan pilihan PASLON 02?');">PILIH PASLON 02</button>
                    </form>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
          
          	<div class="col-lg-4 mt-10">
                <div class="text-container text-center">
                    <img src="<?php echo base_url('nubis/images/paslon3.png') ?>" width="400px" alt="" class="img-fluid">
                    <br>
                    <br>
                    <form action="/Home/pilihan" method="POST">
                        <input type="hidden" name="kode" value="<?= session('kode') ?>">
                        <input type="hidden" name="pilihan" value="3">
                        <button type="submit" class="btn btn-success btn-lg" onclick="return confirm('Anda Yakin dengan pilihan PASLON 03?');">PILIH PASLON 03</button>
                    </form>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            
             <!-- end of text-container -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of header -->
<!-- end of header -->
<?= $this->endSection() ?>