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
            <form action="<?= base_url('admin/potonganGaji/tambah_data_aksi') ?>" method="POST">

                <div class="form-group">
                    <label>Jenis Potongan</label>
                    <input type="text" name="potongan" class="form-control">
                    <small class="form-text text-danger"><?= form_error('potongan'); ?></small>
                </div>

                <div class="form-group">
                    <label>Jumlah Potongan</label>
                    <input type="number" name="jml_potongan" class="form-control" value="0">
                    <small class="form-text text-danger"><?= form_error('jml_potongan'); ?></small>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>

            </form>
        </div>
    </div>

</div>

</div>