<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <style type="text/css">
        body {
            font-family: Arial, Helvetica, sans-serif;
            color: black;
        }
    </style>
</head>

<body>
    <div class="container">

        <center>
            <h1>PT. Kreatif Indonesia</h1>
            <h2>Laporan Kehadiran Pegawai</h2>
        </center>

        <?php
        if ((isset($_GET['bulan']) && $_GET['bulan'] != '') && (isset($_GET['tahun']) && $_GET['tahun'] != '')) {
            $bulan = $_GET['bulan'];
            $tahun = $_GET['tahun'];
            $bulantahun = $bulan . $tahun;
        } else {
            $bulan = date('m');
            $tahun = date('Y');
            $bulantahun = $bulan . $tahun;
        }
        ?>

        <table>
            <tr>
                <td>Bulan</td>
                <td>:</td>
                <td><?= $bulan; ?></td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>:</td>
                <td><?= $tahun; ?></td>
            </tr>
        </table>

        <div class="table-responsive">
            <table class="table table-bordered mt-2" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama Pegawai</th>
                        <th>Jabatan</th>
                        <th>Hadir</th>
                        <th>Sakit</th>
                        <th>Alpha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($lap_kehadiran as $l) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $l->nama_pegawai ?></td>
                            <td><?= $l->nik ?></td>
                            <td><?= $l->nama_jabatan ?></td>
                            <td><?= $l->hadir ?></td>
                            <td><?= $l->sakit ?></td>
                            <td><?= $l->alpha ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <table width="100%">
            <tr>
                <td></td>
                <td width="200px">
                    <p>Depok, <?= date("d M Y"); ?> <br> Finance</p>
                    <br>
                    <br>
                    <p>_________________</p>
                </td>
            </tr>
        </table>

    </div>

</body>

</html>

<script type="text/javascript">
    window.print();
</script>