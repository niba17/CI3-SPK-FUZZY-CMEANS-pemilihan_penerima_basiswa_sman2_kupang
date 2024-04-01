<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="pagetitle">
        <h1>Tambah Data Akun</h1>
    </div>
    <hr class="sidebar-divider">
    <a href="<?= base_url('Admin/index_data_akun'); ?>" class="btn btn-sm btn-primary mb-3"><i
            class="fa-solid fa-angles-left"></i> Kembali
    </a>
    <div class="card">
        <div class="card-body">

            <!-- Custom Styled Validation -->
            <form class="row g-3 mt-1 needs-validation" action="" method="post">
                <!-- <form class="row g-3 mt-1 needs-validation" novalidate=""> -->
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Nama</label>
                    <input type="text" class="form-control <?php if (form_error('name')) {
																echo 'is-invalid';
															} ?>" id="validationCustom01" name="name" value="<?php echo set_value('name'); ?>">
                    <small class="text-danger"><?php echo form_error('name'); ?></small>
                </div>

                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Password</label>
                    <input type="password" class="form-control <?php if (form_error('password')) {
																	echo 'is-invalid';
																} ?>" id="validationCustom02" name="password">
                    <small class="text-danger"><?php echo form_error('password'); ?></small>
                </div>

                <div class="col-md-4">
                    <label for="confirm_password" class="form-label">Konfirmasi Password</label>
                    <input type="password" class="form-control <?php if (form_error('confirm_password')) {
																	echo 'is-invalid';
																} ?>" id="confirm_password" name="confirm_password">
                    <small class="text-danger"><?php echo form_error('confirm_password'); ?></small>
                </div>

                <div class="col-12">
                    <button id="submit" class="btn btn-primary btn-sm" type="submit">Simpan <i
                            class="fa-solid fa-angles-down"></i></button>
                </div>
            </form><!-- End Custom Styled Validation -->

        </div>
    </div>



</div>