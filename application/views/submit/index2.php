<!-- Begin Page Content -->
<div class="container">
    <div class="pagetitle">
        <h1>Tabel Hasil Pembobotan</h1>
    </div>
    <hr class="sidebar-divider">

    <a href="<?= base_url('Submit/index'); ?>" class="btn btn-sm btn-primary"><i class="fa-solid fa-angles-left"></i>
        Kembali</a>
    <a href="<?= base_url('Submit/perhitungan_fcm'); ?>" class="btn btn-sm btn-primary">Perhitungan FCM <i
            class="fa-solid fa-angles-right"></i></a>

    <div class="card mt-3">
        <div class="card-body">
            <div class="row mt-3">
                <div class="col-lg-6 col-sm-12">
                    <div class="table-responsive" style="font-size: 12px;">
                        <table class="text-center table table-striped" id="" width="100%" cellspacing="0">
                            <thead class="font-weight-bold table-primary">
                                <th>No</th>
                                <th>X 1</th>
                                <th>X 2</th>
                                <th>X 3</th>
                                <th>X 4</th>
                                <th>X 5</th>
                            </thead>
                            <tbody class="text-center">
                                <?php $no = 1;
								for ($i = 0; $i < $baris; $i++) : ?>
                                <tr>
                                    <td class="text-center font-weight-bold"><?= $no++; ?></td>
                                    <td><?= $bobot['0'][$i]; ?></td>
                                    <td><?= $bobot['1'][$i]; ?></td>
                                    <td><?= $bobot['2'][$i]; ?></td>
                                    <td><?= $bobot['3'][$i]; ?></td>
                                    <td><?= $bobot['4'][$i]; ?></td>
                                </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <div class="table-responsive" style="font-size: 12px;">
                        <table class="text-center table table-striped" id="" width="100%" cellspacing="0">
                            <tr>
                                <td class="font-weight-bold">C</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Max Literasi</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">W</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Error Terkecil</td>
                                <td>0.01</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">P0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">t</td>
                                <td>1</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>




<!-- End of Main Content -->