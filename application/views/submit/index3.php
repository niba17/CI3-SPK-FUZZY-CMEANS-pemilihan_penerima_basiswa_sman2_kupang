<!-- Begin Page Content -->
<div class="container">
    <div class="pagetitle">
        <h1>Tabel Matrix Awal</h1>
    </div>
    <hr class="sidebar-divider">


    <form action="<?= base_url('Submit/tabel_literasi'); ?>" method="post">
        <a href="<?= base_url('Submit/hasil_pembobotan'); ?>" class="btn btn-sm btn-primary"><i
                class="fa-solid fa-angles-left"></i> Kembali</a>
        <button type="submit" class="btn btn-sm btn-primary">Berikut <i class="fa-solid fa-angles-right"></i></button>
        <div class="row mt-3">
            <label for="error_terkecil" class="col-sm-2 col-form-label fw-bold">Error terkecil : </label>
            <div class="col-sm-4">
                <input type="number" class="form-control" name="error_terkecil" min="0" max="0.1" step="any"
                    oninput="check(this)" value="<?= $error_terkecil ?: '' ?>" required>
            </div>
            <label for="max_iterasi" class="col-sm-2 col-form-label fw-bold">Max Iterasi : </label>
            <div class="col-sm-4">
                <input type="number" class="form-control" name="max_iterasi" min="1" value="<?= $max_iterasi ?: '' ?>"
                    required>
            </div>
        </div>
    </form>

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
<script>
function check(input) {
    if (input.value == 0) {
        input.setCustomValidity('The number must greater than zero.');
    } else {
        // input is fine -- reset the error message
        input.setCustomValidity('');
    }
}
</script>
















<!-- End of Main Content -->