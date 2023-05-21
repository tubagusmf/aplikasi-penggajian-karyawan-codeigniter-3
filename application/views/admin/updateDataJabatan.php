<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <!-- Basic Card Example -->
    <div class="card shadow mb-4" style="width: 60%;">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Basic Card Example</h6>
        </div>
        <div class="card-body">

            <form action="<?= base_url('admin/dataJabatan/update_data_aksi') ?>" method="POST">
                <input type="hidden" name="id_jabatan" class="form-control" value="<?= $jabatan['id_jabatan']; ?>">
                <div class=" form-group">
                    <label>Nama Jabatan</label>
                    <input type="text" name="nama_jabatan" class="form-control" value="<?= $jabatan['nama_jabatan']; ?>">
                    <!-- <?= form_error('nama_jabatan', '<div class="text-small text-danger"></div>'); ?> -->
                    <small class="form-text text-danger"><?= form_error('nama_jabatan'); ?></small>
                </div>

                <div class="form-group">
                    <label>Gaji Pokok</label>
                    <input type="number" name="gaji_pokok" class="form-control" value="<?= $jabatan['gaji_pokok']; ?>">
                    <!-- <?= form_error('gaji_pokok', '<div class="text-small text-danger"></div>'); ?> -->
                    <small class=" form-text text-danger"><?= form_error('gaji_pokok'); ?></small>
                </div>

                <div class="form-group">
                    <label>Tunjangan Transport</label>
                    <input type="number" name="tj_transport" class="form-control" value="<?= $jabatan['tj_transport']; ?>">
                    <!-- <?= form_error('tj_transport', '<div class="text-small text-danger"></div>'); ?> -->
                    <small class=" form-text text-danger"><?= form_error('tj_transport'); ?></small>
                </div>

                <div class="form-group">
                    <label>Uang Makan</label>
                    <input type="number" name="uang_makan" class="form-control" value="<?= $jabatan['uang_makan']; ?>">
                    <!-- <?= form_error('uang_makan', '<div class="text-small text-danger"></div>'); ?> -->
                    <small class=" form-text text-danger"><?= form_error('uang_makan'); ?></small>
                </div>

                <button type="submit" class="btn btn-success">Update</button>
            </form>

        </div>
    </div>

</div>

</div>