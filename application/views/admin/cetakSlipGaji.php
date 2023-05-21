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
            <h2>Slip Gaji Pegawai</h2>
            <hr style="width: 50%; border-width: 5px; color: black;">
        </center>

        <?php
        if ((isset($_POST['bulan']) && $_POST['bulan'] != '') && (isset($_POST['tahun']) && $_POST['tahun'] != '')) {
            $bulan = $_POST['bulan'];
            $tahun = $_POST['tahun'];
            $bulantahun = $bulan . $tahun;
        } else {
            $bulan = date('m');
            $tahun = date('Y');
            $bulantahun = $bulan . $tahun;
        }
        ?>

        <?php foreach ($potongan as $p) {
            $potongan = $p->jml_potongan;
        } ?>

        <?php foreach ($print_slip as $ps) : ?>

            <?php $potongan_gaji = $ps->alpha * $potongan; ?>

            <table>
                <tr>
                    <td>Nama Pegawai</td>
                    <td>:</td>
                    <td> <?= $ps->nama_pegawai; ?></td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td> <?= $ps->nik; ?></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td> <?= $ps->nama_jabatan; ?></td>
                </tr>
                <tr>
                    <td>Bulan</td>
                    <td>:</td>
                    <td> <?= $bulan; ?></td>
                </tr>
                <tr>
                    <td>Tahun</td>
                    <td>:</td>
                    <td> <?= $tahun; ?></td>
                </tr>
            </table>

            <div class="table-responsive">
                <table class="table table-bordered mt-3" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center" width="5%">No</th>
                            <th class="text-center">Keterangan</th>
                            <th class="text-center">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Gaji Pokok</td>
                            <td>Rp. <?= number_format($ps->gaji_pokok, 0, ',', '.') ?></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Tunjangan Transportasi</td>
                            <td>Rp. <?= number_format($ps->tj_transport, 0, ',', '.') ?></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Uang Makan</td>
                            <td>Rp. <?= number_format($ps->uang_makan, 0, ',', '.') ?></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Potongan Gaji</td>
                            <td>Rp. <?= number_format($potongan_gaji, 0, ',', '.') ?></td>
                        </tr>
                        <tr>
                            <th colspan="2" style="text-align: right;">Total Gaji</th>
                            <th>Rp.<?= number_format($ps->gaji_pokok + $ps->tj_transport + $ps->uang_makan - $potongan_gaji, 0, ',', '.'); ?></th>
                        </tr>
                    </tbody>
                </table>
            </div>

            <table width="100%">
                <tr>
                    <td></td>
                    <td>
                        <br>
                        <p>Pegawai</p>
                        <br>
                        <br>
                        <br>
                        <p>_________________</p>
                        <p class="font-weight-bold"><?= $ps->nama_pegawai; ?></p>
                    </td>

                    <td width="200px">
                        <p>Depok, <?= date("d M Y"); ?> <br> Finance</p>
                        <br>
                        <br>
                        <p>_________________</p>
                    </td>
                </tr>
            </table>


        <?php endforeach; ?>



    </div>

</body>

</html>

<script type="text/javascript">
    window.print();
</script>