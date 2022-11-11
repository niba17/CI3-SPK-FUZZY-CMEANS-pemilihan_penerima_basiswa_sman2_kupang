<!-- Begin Page Content -->
<div class="container">
    <div class="pagetitle">
        <h1>Tabel Matrix Awal</h1>
    </div>
    <hr class="sidebar-divider">

    <a href="<?= base_url('Submit/hasil_pembobotan'); ?>" class="btn btn-sm btn-primary"><i
            class="fa-solid fa-angles-left"></i> Kembali</a>
    <a href="<?= base_url('Submit/tabel_literasi'); ?>" class="btn btn-sm btn-primary">Berikut <i
            class="fa-solid fa-angles-right"></i></a>

    <div class="card mt-3">
        <div class="card-body">
            <div class="row mt-3">
                <div class="col-lg-6 col-sm-12">
                    <div class="table-responsive" style="font-size: 12px;">
                        <table class="text-center table table-striped" id="" width="100%" cellspacing="0">
                            <thead>
                                <td class="table-primary fw-bold" colspan="6">Matrix X</td>
                            </thead>
                            <tbody class="text-center">
                                <?php for ($i = 0; $i < $baris; $i++) : ?>
                                <tr>
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
                <!-- <?php print_r($random); ?> -->
                <div class="col-lg-6 col-sm-12">
                    <div class="table-responsive" style="font-size: 12px;">
                        <table class="text-center table table-striped" id="" width="100%" cellspacing="0">
                            <thead>
                                <td class="table-primary fw-bold" colspan="6">Matrix U</td>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < $baris; $i++) : ?>
                                <tr>
                                    <td class="text-center"><?= $random['random'][$i]['data']; ?></td>
                                    <td class="text-center"><?= $random['random2'][$i]['data']; ?></td>
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
<!-- End of Main Content -->