<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="pagetitle">
        <h1>Ubah Data Kelas</h1>
    </div>
    <hr class="sidebar-divider">
    <a href="<?= base_url('Admin/index_data_kelas'); ?>" class="btn btn-sm btn-primary mb-3"><i
            class="fa-solid fa-angles-left"></i> Kembali
    </a>
    <div class="card">
        <div class="card-body">

            <!-- Custom Styled Validation -->
            <form class="row g-3 mt-1 needs-validation"
                action="<?= base_url('Admin/index_ubah_data_kelas/' . $kelas->id); ?>" method="post">
                <!-- <form class="row g-3 mt-1 needs-validation" novalidate=""> -->
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Tingkat</label>
                    <select class="form-select <?php if (form_error('tingkat_id')) {
													echo 'is-invalid';
												} ?>" id="validationCustom01" name="tingkat_id">
                        <option value="" selected disabled>Pilih Tingkatan...</option>
                        <?php foreach ($tingkat as $t) : ?>

                        <option value="<?= $t->id ?>" <?php if ($kelas->tingkat_id == $t->id) {
																echo 'selected';
															} ?>><?= $t->nama ?></option>
                        <?php endforeach; ?>
                    </select>

                    <small class="text-danger"><?php echo form_error('tingkat_id'); ?></small>
                </div>

                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Jurusan</label>
                    <select class="form-select <?php if (form_error('jurusan_id')) {
													echo 'is-invalid';
												} ?>" id="validationCustom02" name="jurusan_id">
                        <option value="" selected disabled>Pilih Jurusan...</option>
                        <?php foreach ($jurusan as $j) : ?>
                        <option value="<?= $j->id ?>" <?php if ($kelas->jurusan_id == $j->id) {
																echo 'selected';
															} ?>><?= $j->nama ?></option>
                        <?php endforeach; ?>
                    </select>

                    <small class="text-danger"><?php echo form_error('jurusan_id'); ?></small>
                </div>

                <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">Nama</label>
                    <select class="form-select <?php if (form_error('nama_kelas_id')) {
													echo 'is-invalid';
												} ?>" id="validationCustom03" name="nama_kelas_id">
                        <option value="" selected disabled>Pilih Nama...</option>
                        <?php foreach ($nama_kelas as $nk) : ?>
                        <option value="<?= $nk->id ?>" <?php if ($kelas->nama_kelas_id == $nk->id) {
																echo 'selected';
															} ?>><?= $nk->nama ?></option>
                        <?php endforeach; ?>
                    </select>

                    <small class="text-danger"><?php echo form_error('nama_kelas_id'); ?></small>
                </div>

                <div class="col-12">
                    <button id="submit" class="btn btn-primary btn-sm" type="submit">Simpan <i
                            class="fa-solid fa-angles-down"></i></button>
                </div>
            </form><!-- End Custom Styled Validation -->


        </div>






    </div>

</div>