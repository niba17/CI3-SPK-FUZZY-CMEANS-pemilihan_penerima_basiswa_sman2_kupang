<!-- Begin Page Content -->
<div class="container">
    <div class="pagetitle">
        <h1>Ubah Data Akun</h1>
    </div>
    <hr class="sidebar-divider">
    <a href="<?= base_url('Admin/index_data_akun'); ?>" class="btn btn-sm btn-primary mb-3"><i
            class="fa-solid fa-angles-left"></i> Kembali
    </a>
    <div class="card">
        <div class="card-body">

            <!-- Custom Styled Validation -->
            <form class="row g-3 mt-1 needs-validation"
                action="<?= base_url('Admin/index_ubah_data_akun/' . $akun[0]->id) ?>" method="post">
                <input type="hidden" name="id" value="<?= $akun[0]->id; ?>">
                <div class="col-md-4">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control <?php if (form_error('name')) {
																echo 'is-invalid';
															} ?>" id="name" name="name" value="<?= $akun[0]->name; ?>">

                    <small class="text-danger"><?php echo form_error('name'); ?></small>
                </div>
                <div class="col-md-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control <?php if (form_error('password')) {
																	echo 'is-invalid';
																} ?>" id="password" name="password" placeholder="*****">

                    <small class="text-danger"><?php echo form_error('name'); ?></small>
                </div>
                <div class="col-md-4">
                    <label for="confirm_password" class="form-label">Konfirmasi Password</label>
                    <input type="password" class="form-control <?php if (form_error('confirm_password')) {
																	echo 'is-invalid';
																} ?>" id="confirm_password" name="confirm_password" placeholder="*****">

                    <small class="text-danger"><?php echo form_error('confirm_password'); ?></small>
                </div>

                <div class="col-12">
                    <button class="btn btn-primary btn-sm" type="submit">Simpan <i
                            class="fa-solid fa-angles-down"></i></button>
                </div>
            </form><!-- End Custom Styled Validation -->


















        </div>
    </div>
</div>