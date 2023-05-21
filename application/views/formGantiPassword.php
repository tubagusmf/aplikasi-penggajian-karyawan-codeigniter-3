<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <!-- Basic Card Example -->
    <div class="card shadow mb-4" style="width: 60%;">
        <div class="card-body">
            <?= $this->session->flashdata('pesan'); ?>
            <form action="<?= base_url('gantiPassword/ganti_password_aksi'); ?>" method="POST">
                <div class="form-group">
                    <label>Password Baru</label>
                    <input type="password" name="passBaru" class="form-control">
                    <small class="form-text text-danger"><?= form_error('passBaru'); ?></small>
                </div>
                <div class="form-group">
                    <label>Ulangi Password Baru</label>
                    <input type="password" name="ulangPass" class="form-control">
                    <small class="form-text text-danger"><?= form_error('ulangPass'); ?></small>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

</div>

</div>