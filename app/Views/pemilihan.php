<?= $this->extend('/template/layout1') ?>
<?= $this->section('content') ?>

<style>
    .candidate-row {
        align-items: stretch;
    }

    .candidate-card {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .candidate-image {
        width: 100%;
        height: 300px;
        object-fit: contain;
    }

    .candidate-form {
        margin-top: auto;
    }

    .candidate-select-btn {
        width: 220px;
        max-width: 100%;
    }
</style>

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

        <div class="row candidate-row">
            <div class="col-lg-4">
                <div class="text-container text-center mb-6 candidate-card">
                    <img src=" <?php echo base_url('nubis/images/paslon_1_2026.png') ?> " alt="" class="img-fluid candidate-image">
                    <form action="/Home/pilihan" method="POST" class="candidate-form">
                        <input type="hidden" name="kode" value="<?= session('kode') ?>">
                        <input type="hidden" name="pilihan" value="1">
                        <button foccuss type="submit" class="btn btn-success btn-lg candidate-select-btn" onclick="return confirm('Anda Yakin dengan pilihan PASLON 01?');">PILIH PASLON 01</button>
                    </form>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->

            <div class="col-lg-4">
                <div class="text-container text-center candidate-card">
                    <img src="<?php echo base_url('nubis/images/paslon_2_2026.png') ?> " alt="" class="img-fluid candidate-image">
                    <form action="/Home/pilihan" method="POST" class="candidate-form">
                        <input type="hidden" name="kode" value="<?= session('kode') ?>">
                        <input type="hidden" name="pilihan" value="2">
                        <button type="submit" class="btn btn-success btn-lg candidate-select-btn" onclick="return confirm('Anda Yakin dengan pilihan PASLON 02?');">PILIH PASLON 02</button>
                    </form>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
          
            <div class="col-lg-4">
                <div class="text-container text-center candidate-card">
                    <img src="<?php echo base_url('nubis/images/paslon_3_2026.png') ?>" alt="" class="img-fluid candidate-image">
                    <form action="/Home/pilihan" method="POST" class="candidate-form">
                        <input type="hidden" name="kode" value="<?= session('kode') ?>">
                        <input type="hidden" name="pilihan" value="3">
                        <button type="submit" class="btn btn-success btn-lg candidate-select-btn" onclick="return confirm('Anda Yakin dengan pilihan PASLON 03?');">PILIH PASLON 03</button>
                    </form>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            
             <!-- end of text-container -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of header -->
<!-- end of header -->
<?= $this->endSection() ?>