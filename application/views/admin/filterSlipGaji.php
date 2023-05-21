<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <!-- Basic Card Example -->
    <div class="card shadow mx-auto" style="width: 60%;">
        <div class="card-header py-3 bg-primary">
            <h6 class="m-0 font-weight-bold text-white text-center">Filter Slip Gaji</h6>
        </div>

        <form action="<?= base_url('admin/SlipGaji/cetak_slip_gaji'); ?>" method="POST">
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Bulan</label>
                    <div class="col-sm-7">
                        <select class="form-control" name="bulan">
                            <option value="">--Pilih Bulan--</option>
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Tahun</label>
                    <div class="col-sm-7">
                        <select class="form-control" name="tahun">
                            <option value="">--Pilih Tahun--</option>
                            <?php $tahun = date('Y');
                            for ($i = 2020; $i < $tahun + 5; $i++) { ?>
                                <option value="<?= $i; ?>"><?= $i; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Nama Pegawai</label>
                    <div class="col-sm-7">
                        <select class="form-control" name="nama_pegawai">
                            <option value="">--Pilih Pegawai--</option>
                            <?php foreach ($pegawai as $p) : ?>
                                <option value="<?= $p->nama_pegawai ?>"><?= $p->nama_pegawai ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <button style="width: 100%;" type="submit" class="btn btn-primary"><i class="fas fa-print"></i> Cetak Slip Gaji</button>
            </div>
        </form>
    </div>

</div>

</div>