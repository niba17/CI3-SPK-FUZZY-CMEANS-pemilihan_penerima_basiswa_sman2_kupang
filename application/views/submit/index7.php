<!-- Begin Page Content -->
<div class="container">
    <div class="pagetitle">
        <h1>Memperbaharui Nilai Matrix U</h1>
    </div>
    <hr class="sidebar-divider">

    <a href="<?= base_url('Submit/fungsi_objektif/') . $key; ?>" class="btn btn-sm btn-primary"><i
            class="fa-solid fa-angles-left"></i> Kembali</a>
    <a href="<?= base_url('Submit/matrix_u_baru/') . $key; ?>" class="btn btn-sm btn-primary">Matrix U Baru <i
            class="fa-solid fa-angles-right"></i></a>

    <div class="card mt-3">
        <div class="card-body">
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="table-responsive" style="font-size: 12px;">
                        <table class="text-center table table-striped" id="" style="width:100%" cellspacing="0">
                            <thead class="font-weight-bold">
                                <th class="table-primary" colspan="4">Memperbaharui Nilai U</th>
                            </thead>
                            <tbody>
                                <tr class="fw-bold" style="background-color:#ECBAE7;">
                                    <td><img class="mb-1" src="<?= base_url('assets/img/zigma.png') ?>" alt=""
                                            style="width:15px;"> C1</td>
                                    <td><img class="mb-1" src="<?= base_url('assets/img/zigma.png') ?>" alt=""
                                            style="width:15px;"> C2</td>
                                    <td>U1</td>
                                    <td>U2</td>
                                </tr>
                                <?php for ($i = 0; $i < $baris; $i++) : ?>
                                <tr>
                                    <td><?= $literasi['39'][$i]; ?></td>
                                    <td><?= $literasi['45'][$i]; ?></td>
                                    <td><?= $literasi['39'][$i] / ($literasi['39'][$i] + $literasi['45'][$i]) ?></td>
                                    <td><?= $literasi['45'][$i] / ($literasi['39'][$i] + $literasi['45'][$i]) ?></td>
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