<!-- Begin Page Content -->
<div class="container">
    <div class="pagetitle">
        <h1>Tabel Daftar Iterasi</h1>
    </div>
    <hr class="sidebar-divider">

    <a href="<?= base_url('Submit/perhitungan_fcm/' . $error_terkecil . '/' . $max_iterasi); ?>"
        class="btn btn-sm btn-primary"><i class="fa-solid fa-angles-left"></i> kembali</a>
    <a href="<?= base_url('Submit/kesimpulan/' . $error_terkecil . '/' . $max_iterasi); ?>"
        class="btn btn-sm btn-primary">Kesimpulan <i class="fa-solid fa-angles-right"></i></a>

    <div class="card mt-3">
        <div class="card-body">
            <div class="row mt-3">
                <div class="col-lg-7 col-sm-12">
                    <div class="table-responsive" style="font-size: 12px;">
                        <table class="text-center table table-striped" id="dataTable" style="width:100%"
                            cellspacing="0">
                            <thead class="font-weight-bold table-primary">
                                <th style="width:10%">NO</th>
                                <th>Iterasi</th>
                            </thead>
                            <tbody>
                                <form action="<?= base_url('Submit/literasi') ?>" method="post">
                                    <?php
									$no = 1;
									for ($i = 0; $i < $literasi['50']; $i++) : ?>
                                    <tr>
                                        <td class="font-weight-bold"><?= $no++ ?></td>
                                        <td>
                                            <a
                                                href="<?= base_url('Submit/literasi/') . $error_terkecil . '/' . $max_iterasi . '/' . $i; ?>">Iterasi
                                                ke
                                                <?= $i + 1; ?>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endfor; ?>
                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12">
                    <div class="table-responsive" style="font-size: 12px;">
                        <table class="text-center table table-striped" id="" width="100%" cellspacing="0">
                            <tr>
                                <td class="font-weight-bold">C</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Max Iterasi</td>
                                <td><?= $max_iterasi ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">W</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Error Terkecil</td>
                                <td><?= $error_terkecil ?></td>
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