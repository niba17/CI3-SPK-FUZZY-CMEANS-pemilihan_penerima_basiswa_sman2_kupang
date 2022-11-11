<!-- Begin Page Content -->
<div class="container">
    <div class="pagetitle">
        <h1>Tabel Hasil Perhitungan CMEANS</h1>
    </div>
    <hr class="sidebar-divider">

    <a href="<?= base_url('Submit/tabel_literasi'); ?>" class="btn btn-sm btn-primary"><i
            class="fa-solid fa-angles-left"></i> Kembali</a>
    <a class="btn btn-sm btn-primary" href="<?= base_url('Admin/index_print') ?>"><i class="fa-solid fa-print"></i>
        Print</a>
    <a href="<?= base_url('Admin/index_admin'); ?>" class="btn btn-sm btn-primary">Kembali ke Halaman Admin <i
            class="fa-solid fa-right-from-bracket"></i></a>

    <div class="card mt-3">
        <div class="card-body">
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="table-responsive" style="font-size: 12px;">
                        <table class="text-center table table-striped" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="font-weight-bold table-primary">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>k1</th>
                                    <th>k2</th>
                                    <th>c1</th>
                                    <th>c2</th>
                                    <!-- <th>Hasil</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
								$no = 1;
								for ($i = 0; $i < $baris; $i++) : ?>
                                <tr>
                                    <td class="font-weight-bold"><?= $no++ ?></td>
                                    <td><?= $siswa[$i]['nama'] ?></td>
                                    <td><?= $literasi['39'][$i] / $literasi['48'][$i]; ?></td>
                                    <td><?= $literasi['45'][$i] / $literasi['48'][$i]; ?></td>
                                    <td class="font-weight-bold"><?php if ($literasi['39'][$i] / $literasi['48'][$i] > $literasi['45'][$i] / $literasi['48'][$i]) {
																			echo "<i class='fa-solid fa-check'></i>";
																		} ?></td>
                                    <td class="font-weight-bold"><?php if ($literasi['39'][$i] / $literasi['48'][$i] < $literasi['45'][$i] / $literasi['48'][$i]) {
																			echo "<i class='fa-solid fa-check'></i>";
																		} ?></td>
                                    <!-- <td></td>
                            <td><?php if ($literasi['39'][$i] / $literasi['48'][$i] > $literasi['45'][$i] / $literasi['48'][$i]) {
										echo "1";
									} else {
										echo "2";
									} ?></td> -->
                                </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
















<!-- End of Main Content -->->