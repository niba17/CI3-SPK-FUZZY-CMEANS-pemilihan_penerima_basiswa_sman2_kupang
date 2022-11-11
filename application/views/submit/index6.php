<!-- Begin Page Content -->
<div class="container">
    <div class="pagetitle">
        <h1>Tabel Fungsi Objektif</h1>
    </div>
    <hr class="sidebar-divider">

    <a href="<?= base_url('Submit/literasi/') . $key; ?>" class="btn btn-sm btn-primary"><i
            class="fa-solid fa-angles-left"></i> Kembali</a>
    <a href="<?= base_url('Submit/memperbaharui_n_u/') . $key; ?>" class="btn btn-sm btn-primary">Memperbaharui Nilai U
        <i class="fa-solid fa-angles-right"></i></a>

    <div class="card mt-3">
        <div class="card-body">
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="table-responsive" style="font-size: 12px;">
                        <table class="text-center table table-striped" id="" style="width:100%" cellspacing="0">
                            <thead>
                                <tr class="font-weight-bold table-primary">
                                    <th colspan="7">Fungsi Objektif</th>
                                </tr>
                                <tr class="font-weight-bold" style="background-color:#ECBAE7;">
                                    <th colspan="5">Cluster 1</th>
                                    <th class="align-middle" rowspan="2"><img class="mb-1"
                                            src="<?= base_url('assets/img/zigma.png') ?>" alt="" style="width:15px;">
                                        C1</th>
                                    <th class="align-middle" rowspan="2"><img class="mb-1"
                                            src="<?= base_url('assets/img/zigma.png') ?>" alt="" style="width:15px;"> C1
                                        x (uik)^w</th>
                                </tr>
                                <tr class="font-weight-bold">
                                    <th>(xi1-vi1)^2</th>
                                    <th>(xi2-vi2)^2</th>
                                    <th>(xi3-vi3)^2</th>
                                    <th>(xi3-vi4)^2</th>
                                    <th>(xi3-vi5)^2</th>
                                    <!-- <th>Total</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < $baris; $i++) : ?>
                                <tr>
                                    <td><?= $literasi['34'][$i]; ?></td>
                                    <td><?= $literasi['35'][$i]; ?></td>
                                    <td><?= $literasi['36'][$i]; ?></td>
                                    <td><?= $literasi['37'][$i]; ?></td>
                                    <td><?= $literasi['38'][$i]; ?></td>
                                    <td><?= $literasi['39'][$i]; ?></td>
                                    <td><?= $literasi['0'][$i] * $literasi['39'][$i] ?></td>
                                </tr>
                                <?php endfor; ?>
                                <tr class="font-weight-bold" style="background-color:#ECBAE7;">
                                    <th colspan="5">Cluster 2</th>
                                    <th class="align-middle" rowspan="2"><img class="mb-1"
                                            src="<?= base_url('assets/img/zigma.png') ?>" alt="" style="width:15px;"> C1
                                    </th>
                                    <th class="align-middle" rowspan="2"><img class="mb-1"
                                            src="<?= base_url('assets/img/zigma.png') ?>" alt="" style="width:15px;"> C1
                                        x (uik)^w</th>
                                </tr>
                                <tr class="font-weight-bold">
                                    <td>(xi1-vi1)^2</td>
                                    <td>(xi2-vi2)^2</td>
                                    <td>(xi3-vi3)^2</td>
                                    <td>(xi3-vi4)^2</td>
                                    <td>(xi3-vi5)^2</td>
                                    <!-- <td>Total</td> -->
                                </tr>
                                <?php for ($i = 0; $i < $baris; $i++) : ?>
                                <tr>
                                    <td><?= $literasi['40'][$i]; ?></td>
                                    <td><?= $literasi['41'][$i]; ?></td>
                                    <td><?= $literasi['42'][$i]; ?></td>
                                    <td><?= $literasi['43'][$i]; ?></td>
                                    <td><?= $literasi['44'][$i]; ?></td>
                                    <td><?= $literasi['45'][$i]; ?></td>
                                    <td><?= $literasi['17'][$i] * $literasi['45'][$i]; ?></td>
                                </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg-12">
                    <div class="table-responsive" style="font-size: 12px;">
                        <table class="text-center table table-striped" id="" style="width:100%" cellspacing="0">
                            <thead>
                                <tr class="font-weight-bold table-primary">
                                    <th colspan="3">Hasil Perhitungan Fungsi Objektif</th>
                                </tr>
                                <tr class=style="background-color:#ECBAE7;" font-weight-bold">
                                    <th class="align-middle" rowspan="2">Sigma C1 x (uik)^w</th>
                                    <th class="align-middle" rowspan="2">Sigma C2 x (uik)^w</th>
                                    <th>P1</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $jumlah = 0;
								for ($i = 0; $i < $baris; $i++) : ?>
                                <tr>
                                    <td><?= $literasi['0'][$i] * $literasi['39'][$i] ?></td>
                                    <td><?= $literasi['17'][$i] * $literasi['45'][$i]; ?></td>
                                    <td><?= ($literasi['0'][$i] * $literasi['39'][$i]) + ($literasi['17'][$i] * $literasi['45'][$i]) ?>
                                    </td>
                                </tr>

                                <?php $jumlah = $jumlah + (($literasi['0'][$i] * $literasi['39'][$i]) + ($literasi['17'][$i] * $literasi['45'][$i]));
								endfor; ?>
                                <tr>
                                    <td class="font-weight-bold table-primary" colspan="2">Jumlah</td>
                                    <td><?= $jumlah ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="col px-md-5">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>









<!-- End of Main Content -->