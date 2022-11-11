<!-- Begin Page Content -->
<div class="container">
    <div class="pagetitle">
        <h1>Tabel Perhitungan Pusat Cluster</h1>
    </div>
    <hr class="sidebar-divider">

    <a href="<?= base_url('Submit/tabel_literasi'); ?>" class="btn btn-sm btn-primary mb-2"><i
            class="fa-solid fa-angles-left"></i> Kembali</a>
    <a href="<?= base_url('Submit/fungsi_objektif/') . $key; ?>" class="btn btn-sm btn-primary mb-2">Fungsi Objektif <i
            class="fa-solid fa-angles-right"></i></a>

    <div class="card mt-3">
        <div class="card-body">
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="table-responsive" style="font-size: 12px;">
                        <table class="text-center table table-striped" id="" style="width:100%" cellspacing="0">
                            <thead class="align-middle">
                                <tr class="font-weight-bold table-primary">
                                    <th class="align-middle" style="width:10%" rowspan="2">Cluster 1</th>
                                    <th colspan="5">Data yang akan di cluster</th>
                                    <th rowspan="2">(µik)^w</th>
                                    <th rowspan="2">(µik)^w*x1</th>
                                    <th rowspan="2">(µik)^w*x2</th>
                                    <th rowspan="2">(µik)^w*x3</th>
                                    <th rowspan="2">(µik)^w*x4</th>
                                    <th rowspan="2">(µik)^w*x5</th>
                                </tr>
                                <tr class="font-weight-bold" style="background-color:#ECBAE7;">
                                    <th>X1</th>
                                    <th>X2</th>
                                    <th>X3</th>
                                    <th>X4</th>
                                    <th>X5</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
								for ($i = 0; $i < $baris; $i++) : ?>
                                <tr>
                                    <td><?= $literasi['53'][$key][$i]['data'];
												?></td>
                                    <td><?= $bobot['0'][$i] ?></td>
                                    <td><?= $bobot['1'][$i] ?></td>
                                    <td><?= $bobot['2'][$i] ?></td>
                                    <td><?= $bobot['3'][$i] ?></td>
                                    <td><?= $bobot['4'][$i] ?></td>
                                    <td><?= $literasi['0'][$i] ?></td>
                                    <td><?= $literasi['1'][$i] ?></td>
                                    <td><?= $literasi['2'][$i] ?></td>
                                    <td><?= $literasi['3'][$i] ?></td>
                                    <td><?= $literasi['4'][$i] ?></td>
                                    <td><?= $literasi['5'][$i] ?></td>
                                </tr>
                                <?php endfor; ?>
                                <tr>
                                    <td class="table-info font-weight-bold font-weight-bold" colspan="6">Jumlah</td>
                                    <td><?= $literasi['6'] ?></td>
                                    <td><?= $literasi['7'] ?></td>
                                    <td><?= $literasi['8'] ?></td>
                                    <td><?= $literasi['9'] ?></td>
                                    <td><?= $literasi['10'] ?></td>
                                    <td><?= $literasi['11'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg-12">
                    <div class="table-responsive" style="font-size: 12px;">
                        <table class="text-center table table-striped" id="" style="width:100%" cellspacing="0">
                            <thead class="align-middle">
                                <tr class="font-weight-bold table-primary">
                                    <th class=table-primary align-middle" style="width:10%" rowspan="2">Cluster 2</th>
                                    <th colspan="5">Data yang akan di cluster</th>
                                    <th rowspan="2">(µik)^w</th>
                                    <th rowspan="2">(µik)^w*x1</th>
                                    <th rowspan="2">(µik)^w*x2</th>
                                    <th rowspan="2">(µik)^w*x3</th>
                                    <th rowspan="2">(µik)^w*x4</th>
                                    <th rowspan="2">(µik)^w*x5</th>
                                </tr>
                                <tr class="font-weight-bold" style="background-color:#ECBAE7;">
                                    <th>X1</th>
                                    <th>X2</th>
                                    <th>X3</th>
                                    <th>X4</th>
                                    <th>X5</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
								for ($i = 0; $i < $baris; $i++) : ?>
                                <tr>
                                    <td><?= $literasi['54'][$key][$i]['data'];
												?></td>
                                    <td><?= $bobot['0'][$i] ?></td>
                                    <td><?= $bobot['1'][$i] ?></td>
                                    <td><?= $bobot['2'][$i] ?></td>
                                    <td><?= $bobot['3'][$i] ?></td>
                                    <td><?= $bobot['4'][$i] ?></td>
                                    <td><?= $literasi['17'][$i] ?></td>
                                    <td><?= $literasi['18'][$i] ?></td>
                                    <td><?= $literasi['19'][$i] ?></td>
                                    <td><?= $literasi['20'][$i] ?></td>
                                    <td><?= $literasi['21'][$i] ?></td>
                                    <td><?= $literasi['22'][$i] ?></td>
                                </tr>
                                <?php endfor; ?>
                                <tr>
                                    <td class="font-weight-bold style=" background-color:#ECBAE7;"" colspan="6">Jumlah
                                    </td>
                                    <td><?= $literasi['23'] ?></td>
                                    <td><?= $literasi['24'] ?></td>
                                    <td><?= $literasi['25'] ?></td>
                                    <td><?= $literasi['26'] ?></td>
                                    <td><?= $literasi['27'] ?></td>
                                    <td><?= $literasi['28'] ?></td>
                                </tr>
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
                                    <th class=table-primary" colspan="5">Hasil Pusat Cluster</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $literasi['12'] ?></td>
                                    <td><?= $literasi['13'] ?></td>
                                    <td><?= $literasi['14'] ?></td>
                                    <td><?= $literasi['15'] ?></td>
                                    <td><?= $literasi['16'] ?></td>
                                </tr>
                                <tr>
                                    <td><?= $literasi['29'] ?></td>
                                    <td><?= $literasi['30'] ?></td>
                                    <td><?= $literasi['31'] ?></td>
                                    <td><?= $literasi['32'] ?></td>
                                    <td><?= $literasi['33'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <!-- End of Main Content -->