<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4" style="padding-bottom: 50px;">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">DataTables Example
                <a class="btn btn-sm btn-success float-right" href="<?= base_url('admin/dataJabatan/tambah_data'); ?>"><i class="fas fa-plus"></i></a>
            </h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?= $this->session->flashdata('pesan'); ?>
                <table class="table table-bordered mt-2" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Jabatan</th>
                            <th>Gaji Pokok</th>
                            <th>Tj. Transport</th>
                            <th>Uang Makan</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($jabatan as $j) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $j->nama_jabatan ?></td>
                                <td>Rp. <?= number_format($j->gaji_pokok, 0, ',', '.') ?></td>
                                <td>Rp. <?= number_format($j->tj_transport, 0, ',', '.') ?></td>
                                <td>Rp. <?= number_format($j->uang_makan, 0, ',', '.') ?></td>
                                <td>Rp. <?= number_format($j->gaji_pokok + $j->tj_transport + $j->uang_makan, 0, ',', '.') ?></td>
                                <td>
                                    <center>
                                        <a class="btn btn-sm btn-primary" href="<?= base_url('admin/dataJabatan/update_data/' . $j->id_jabatan); ?>"><i class="fas fa-edit"></i></a>
                                        <a onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger" href="<?= base_url('admin/dataJabatan/delete_data/' . $j->id_jabatan); ?>"><i class="fas fa-trash"></i></a>
                                    </center>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</div>