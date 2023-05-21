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
                <a class="btn btn-sm btn-success float-right" href="<?= base_url('admin/dataPegawai/tambah_data'); ?>"><i class="fas fa-plus"></i></a>
            </h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?= $this->session->flashdata('pesan'); ?>
                <table class="table table-bordered mt-2" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama Pegawai</th>
                            <th>Jenis Kelamin</th>
                            <th>Jabatan</th>
                            <th>Tanggal Masuk</th>
                            <th>Status</th>
                            <th>Photo</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($pegawai as $p) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $p->nik ?></td>
                                <td><?= $p->nama_pegawai ?></td>
                                <td><?= $p->jenis_kelamin ?></td>
                                <td><?= $p->jabatan ?></td>
                                <td><?= $p->tanggal_masuk ?></td>
                                <td><?= $p->status ?></td>
                                <td><img style="width: 100px; height: 100px;" src="<?= base_url('assets/photo/' . $p->photo); ?>"> </td>

                                <?php if ($p->hak_akses == '1') { ?>
                                    <td>Admin</td>
                                <?php } else { ?>
                                    <td>Pegawai</td>
                                <?php } ?>

                                <td>
                                    <center>
                                        <a class="btn btn-sm btn-primary" href="<?= base_url('admin/dataPegawai/update_data/' . $p->id_pegawai); ?>"><i class="fas fa-edit"></i></a>
                                        <a onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger" href="<?= base_url('admin/dataPegawai/delete_data/' . $p->id_pegawai); ?>"><i class="fas fa-trash"></i></a>
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