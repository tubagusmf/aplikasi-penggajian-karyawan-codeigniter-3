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

            <form action="<?= base_url('admin/dataPegawai/update_data_aksi') ?>" method="POST" enctype="multipart/form-data">
                <div class=" form-group">
                    <label>NIK</label>
                    <input type="hidden" name="id_pegawai" class="form-control" value="<?= $pegawai['id_pegawai']; ?>">
                    <input type="number" name="nik" class="form-control" value="<?= $pegawai['nik']; ?>">
                    <small class="form-text text-danger"><?= form_error('nik'); ?></small>
                </div>

                <div class=" form-group">
                    <label>Nama Pegawai</label>
                    <input type="text" name="nama_pegawai" class="form-control" value="<?= $pegawai['nama_pegawai']; ?>">
                    <small class="form-text text-danger"><?= form_error('nama_pegawai'); ?></small>
                </div>

                <div class=" form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="<?= $pegawai['username']; ?>">
                    <small class="form-text text-danger"><?= form_error('username'); ?></small>
                </div>

                <div class=" form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                    <small class="form-text text-danger"><?= form_error('password'); ?></small>
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="Laki-Laki" <?php echo ($pegawai['jenis_kelamin'] == 'Laki-Laki' ? 'selected' : ''); ?>>Laki-Laki</option>
                        <option value="Perempuan" <?php echo ($pegawai['jenis_kelamin'] == 'Perempuan' ? 'selected' : ''); ?>>Perempuan</option>
                    </select>
                    <small class="form-text text-danger"><?= form_error('jenis_kelamin'); ?></small>
                </div>

                <div class="form-group">
                    <label>Jabatan</label>
                    <select name="jabatan" class="form-control">
                        <?php foreach ($jabatan as $j) : ?>
                            <?php if ($j->nama_jabatan == $pegawai['jabatan']) : ?>
                                <option value="<?= $j->nama_jabatan ?>" selected><?= $j->nama_jabatan ?></option>
                            <?php else : ?>
                                <option value="<?= $j->nama_jabatan ?>"><?= $j->nama_jabatan ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                    <small class="form-text text-danger"><?= form_error('jabatan'); ?></small>
                </div>

                <div class="form-group">
                    <label>Tanggal Masuk</label>
                    <input type="date" name="tanggal_masuk" class="form-control" value="<?= $pegawai['tanggal_masuk']; ?>">
                    <small class="form-text text-danger"><?= form_error('tanggal_masuk'); ?></small>
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="Karyawan Tetap" <?php echo ($pegawai['status'] == 'Karyawan Tetap' ? 'selected' : ''); ?>>Karyawan Tetap</option>
                        <option value="Karyawan Tidak Tetap" <?php echo ($pegawai['status'] == 'Karyawan Tidak Tetap' ? 'selected' : ''); ?>>Karyawan Tidak Tetap</option>
                    </select>
                    <small class="form-text text-danger"><?= form_error('status'); ?></small>
                </div>

                <div class="form-group">
                    <label>Photo</label>
                    <input type="file" name="photo" class="form-control">
                </div>

                <div class="form-group">
                    <label>Role</label>
                    <select name="hak_akses" class="form-control">
                        <option value="1" <?php echo ($pegawai['hak_akses'] == '1' ? 'selected' : ''); ?>>Admin</option>
                        <option value="2" <?php echo ($pegawai['hak_akses'] == '2' ? 'selected' : ''); ?>>Pegawai</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Update</button>
            </form>

        </div>
    </div>

</div>

</div>