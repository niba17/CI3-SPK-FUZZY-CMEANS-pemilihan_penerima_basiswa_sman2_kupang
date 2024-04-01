<!-- Begin Page Content -->
<div class="container">
    <div class="pagetitle">
        <h1>Tabel Perhitungan Pusat Cluster</h1>
    </div>
    <hr class="sidebar-divider">

    <a href="<?= base_url('Submit/tabel_literasi/' . $error_terkecil . '/' . $max_iterasi); ?>"
        class="btn btn-sm btn-primary mb-2"><i class="fa-solid fa-angles-left"></i> Kembali</a>
    <a href="<?= base_url('Submit/fungsi_objektif/') . $error_terkecil . '/' . $max_iterasi . '/' . $key; ?>"
        class="btn btn-sm btn-primary mb-2">Fungsi Objektif <i class="fa-solid fa-angles-right"></i></a>

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
                                    <td><?= number_format($literasi['0'][$i], 5, '.', ''); ?></td>
                                    <td><?= number_format($literasi['1'][$i], 5, '.', ''); ?></td>
                                    <td><?= number_format($literasi['2'][$i], 5, '.', ''); ?></td>
                                    <td><?= number_format($literasi['3'][$i], 5, '.', ''); ?></td>
                                    <td><?= number_format($literasi['4'][$i], 5, '.', ''); ?></td>
                                    <td><?= number_format($literasi['5'][$i], 5, '.', ''); ?></td>
                                </tr>
                                <?php endfor; ?>
                                <tr>
                                    <td class="table-info font-weight-bold font-weight-bold" colspan="6">Jumlah</td>
                                    <td><?= number_format($literasi['6'], 5, '.', ''); ?></td>
                                    <td><?= number_format($literasi['7'], 5, '.', ''); ?></td>
                                    <td><?= number_format($literasi['8'], 5, '.', ''); ?></td>
                                    <td><?= number_format($literasi['9'], 5, '.', ''); ?></td>
                                    <td><?= number_format($literasi['10'], 5, '.', ''); ?></td>
                                    <td><?= number_format($literasi['11'], 5, '.', ''); ?></td>
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
                                    <td><?= number_format($literasi['17'][$i], 5, '.', '');
											?></td>
                                    <td><?= number_format($literasi['18'][$i], 5, '.', '');
											?></td>
                                    <td><?= number_format($literasi['19'][$i], 5, '.', '');
											?></td>
                                    <td><?= number_format($literasi['20'][$i], 5, '.', '');
											?></td>
                                    <td><?= number_format($literasi['21'][$i], 5, '.', '');
											?></td>
                                    <td><?= number_format($literasi['22'][$i], 5, '.', '');
											?></td>
                                </tr>
                                <?php endfor; ?>
                                <tr>
                                    <td class="font-weight-bold style=" background-color:#ECBAE7;"" colspan="6">Jumlah
                                    </td>
                                    <td><?= number_format($literasi['23'], 5, '.', '');
										?></td>
                                    <td><?= number_format($literasi['24'], 5, '.', '');
										?></td>
                                    <td><?= number_format($literasi['25'], 5, '.', '');
										?></td>
                                    <td><?= number_format($literasi['26'], 5, '.', '');
										?></td>
                                    <td><?= number_format($literasi['27'], 5, '.', '');
										?></td>
                                    <td><?= number_format($literasi['28'], 5, '.', '');
										?></td>
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
                                    <td><?= number_format($literasi['12'], 5, '.', '');
										?></td>
                                    <td><?= number_format($literasi['13'], 5, '.', '');
										?></td>
                                    <td><?= number_format($literasi['14'], 5, '.', '');
										?></td>
                                    <td><?= number_format($literasi['15'], 5, '.', '');
										?></td>
                                    <td><?= number_format($literasi['16'], 5, '.', '');
										?></td>
                                </tr>
                                <tr>
                                    <td><?= number_format($literasi['29'], 5, '.', '');
										?></td>
                                    <td><?= number_format($literasi['30'], 5, '.', '');
										?></td>
                                    <td><?= number_format($literasi['31'], 5, '.', '');
										?></td>
                                    <td><?= number_format($literasi['32'], 5, '.', '');
										?></td>
                                    <td><?= number_format($literasi['33'], 5, '.', '');
										?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>







    </div>
    <!-- End of Main Content -->