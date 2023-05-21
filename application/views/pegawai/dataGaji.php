<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered mt-2" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Bulan / Tahun</th>
                    <th>Gaji Pokok</th>
                    <th>Tj. Transportasi</th>
                    <th>Uang Makan</th>
                    <th>Potongan Gaji</th>
                    <th>Total Gaji</th>
                    <th>Cetak Slip</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($potongan as $p) : ?>
                    <?php $potongan = $p->jml_potongan; ?>
                <?php endforeach; ?>

                <?php foreach ($gaji as $g) : ?>
                    <?php $pot_gaji = $g->alpha * $potongan ?>
                    <tr>
                        <td><?= $g->bulan; ?></td>
                        <td>Rp. <?= number_format($g->gaji_pokok, 0, ',', '.') ?></td>
                        <td>Rp. <?= number_format($g->tj_transport, 0, ',', '.') ?></td>
                        <td>Rp. <?= number_format($g->uang_makan, 0, ',', '.') ?></td>
                        <td>Rp. <?= number_format($pot_gaji, 0, ',', '.') ?></td>
                        <td>Rp. <?= number_format($g->gaji_pokok + $g->tj_transport + $g->uang_makan - $pot_gaji, 0, ',', '.') ?></td>
                        <td>
                            <center>
                                <a class="btn btn-sm btn-primary" href="<?= base_url('pegawai/dataGaji/cetak_slip/' . $g->id_kehadiran); ?>"><i class="fas fa-print"></i></a>
                            </center>
                        </td>

                    <?php endforeach; ?>
                    </tr>
            </tbody>
        </table>
    </div>

</div>

</div>