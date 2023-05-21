<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <?= $this->session->flashdata('pesan'); ?>

    <!-- Basic Card Example -->
    <div class="card shadow mb-4" style="width: 70%;">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pegawai</h6>
        </div>
        <?php foreach ($pegawai as $p) : ?>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <img src="<?= base_url('assets/photo/' . $p->photo); ?>" style="width: 250px;" alt="">
                    </div>
                    <div class="col-md-7">
                        <table class="table">
                            <tr>
                                <td>Nama Pegawai</td>
                                <td> : </td>
                                <td><?= $p->nama_pegawai; ?></td>
                            </tr>
                            <tr>
                                <td>Jabatan</td>
                                <td> : </td>
                                <td><?= $p->jabatan; ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Masuk</td>
                                <td> : </td>
                                <td><?= $p->tanggal_masuk; ?></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td> : </td>
                                <td><?= $p->status; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
        <?php endforeach; ?>
    </div>

</div>

</div>