<!-- Begin Page Content -->
<div class="container">
    <div class="pagetitle">
        <h1>Tabel Matrix U baru Iiterasi ke <?= $key + 1 ?></h1>
    </div>
    <hr class="sidebar-divider">

    <a href="<?= base_url('Submit/memperbaharui_n_u/') . $error_terkecil . '/' . $max_iterasi . '/' . $key; ?>"
        class="btn btn-sm btn-primary"><i class="fa-solid fa-angles-left"></i> Kembali</a>
    <a href="<?= base_url('Submit/tabel_literasi/' . $error_terkecil . '/' . $max_iterasi); ?>"
        class="btn btn-sm btn-primary">Kembali ke
        Tabel Iiterasi <i class="fa-solid fa-angles-right"></i></a>

    <div class="card mt-3">
        <div class="card-body">
            <div class="row mt-3">
                <div class="col-lg-5 col-sm-12">
                    <div class="table-responsive" style="font-size: 12px;">
                        <table class="text-center table table-striped" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr class="font-weight-bold table-primary">
                                    <th colspan="2">Matrix U baru</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < $baris; $i++) : ?>
                                <tr>
                                    <td><?= number_format($literasi['39'][$i] / $literasi['48'][$i], 5, '.', ''); ?>
                                    </td>
                                    <td><?= number_format($literasi['45'][$i] / $literasi['48'][$i], 5, '.', ''); ?>
                                    </td>
                                </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-7 col-sm-12">
                    <div class="table-responsive" style="font-size: 12px;">
                        <table class="text-center table table-striped" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="font-weight-bold table-primary">
                                    <th>NO</th>
                                    <th>f0</th>
                                    <th>error</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
								$literasi['51'][0] = 0;
								for ($i = 0; $i < $literasi['50']; $i++) : ?>
                                <tr>
                                    <td><?= $i + 1; ?></td>
                                    <td><?= number_format($literasi['52'][$i], 5, '.', ''); ?></td>
                                    <td><?= number_format($literasi['51'][$i], 5, '.', ''); ?></td>
                                </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>





        </div>


        <!-- End of Main Content -->