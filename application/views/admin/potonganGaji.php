<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <?= $this->session->flashdata('pesan'); ?>

    <a class="btn btn-sm btn-success mb-2" href="<?= base_url('admin/potonganGaji/tambah_data'); ?>"><i class="fas fa-plus"></i> Tambah Data</a>

    <div class="table-responsive">
        <table class="table table-bordered mt-2" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Potongan</th>
                    <th>Jumlah Potongan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($pot_gaji as $p) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $p->potongan; ?></td>
                        <td>Rp. <?= number_format($p->jml_potongan, 0, ',', '.') ?></td>
                        <td>
                            <center>
                                <a class="btn btn-sm btn-primary" href="<?= base_url('admin/potonganGaji/update_data/' . $p->id); ?>"><i class="fas fa-edit"></i></a>
                                <a onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger" href="<?= base_url('admin/potonganGaji/delete_data/' . $p->id); ?>"><i class="fas fa-trash"></i></a>
                            </center>
                        </td>
                    </tr>
            </tbody>
        <?php endforeach; ?>
        </table>
    </div>

</div>

</div>