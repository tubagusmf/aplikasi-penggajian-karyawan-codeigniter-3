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

            <form action="<?= base_url('admin/dataPegawai/tambah_data_aksi') ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>NIK</label>
                    <input type="number" name="nik" class="form-control">
                    <small class="form-text text-danger"><?= form_error('nik'); ?></small>
                </div>

                <div class="form-group">
                    <label>Nama Pegawai</label>
                    <input type="text" name="nama_pegawai" class="form-control">
                    <small class="form-text text-danger"><?= form_error('nama_pegawai'); ?></small>
                </div>

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">
                    <small class="form-text text-danger"><?= form_error('username'); ?></small>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                    <small class="form-text text-danger"><?= form_error('password'); ?></small>
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="">--Pilih Jenis Kelamin--</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    <small class="form-text text-danger"><?= form_error('jenis_kelamin'); ?></small>
                </div>

                <div class="form-group">
                    <label>Jabatan</label>
                    <select name="jabatan" class="form-control">
                        <option value="">--Pilih Jabatan--</option>
                        <?php foreach ($jabatan as $j) : ?>
                            <option value="<?= $j->nama_jabatan ?>"><?= $j->nama_jabatan ?></option>
                        <?php endforeach; ?>
                    </select>
                    <small class="form-text text-danger"><?= form_error('jabatan'); ?></small>
                </div>

                <div class="form-group">
                    <label>Tanggal Masuk</label>
                    <input type="date" name="tanggal_masuk" class="form-control">
                    <small class="form-text text-danger"><?= form_error('tanggal_masuk'); ?></small>
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="">--Pilih Status Karyawan--</option>
                        <option value="Karyawan Tetap">Karyawan Tetap</option>
                        <option value="Karyawan Tidak Tetap">Karyawan Tidak Tetap</option>
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
                        <option value="">--Pilih Role--</option>
                        <option value="1">Admin</option>
                        <option value="2">Pegawai</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>

</div>

</div>