<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="pagetitle">
        <h1>Tambah Data Siswa</h1>
    </div>
    <hr class="sidebar-divider">
    <a href="<?= base_url('Admin/index_data_siswa'); ?>" class="btn btn-sm btn-primary mb-3"><i
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
                    <label for="validationCustom02" class="form-label">NIS</label>
                    <input type="text" class="form-control <?php if (form_error('nis')) {
																echo 'is-invalid';
															} ?>" id="validationCustom02" name="nis" value="<?php echo set_value('nis'); ?>">

                    <small class="text-danger"><?php echo form_error('nis'); ?></small>
                </div>
                <div class="col-md-4">
                    <label for="jk" class="form-label">Jenis Kelamin</label>
                    <select class="form-select <?php if (form_error('jk')) {
													echo 'is-invalid';
												} ?>" id="jk" name="jk">
                        <option value="" selected="" disabled>Pilih Jenis Kelamin...</option>
                        <option value="Laki - Laki">Laki - Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>

                    <small class="text-danger"><?php echo form_error('kelas'); ?></small>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">Kelas</label>
                    <select class="form-select <?php if (form_error('kelas')) {
													echo 'is-invalid';
												} ?>" id="validationCustom03" name="kelas">
                        <option value="" selected="" disabled>Pilih Kelas...</option>
                        <option value="10 A">10 A</option>
                        <option value="10 B">10 B</option>
                        <option value="10 C">10 C</option>
                        <option value="11 A">11 A</option>
                        <option value="11 B">11 B</option>
                        <option value="11 C">11 C</option>
                        <option value="12 A">12 A</option>
                        <option value="12 B">12 B</option>
                        <option value="12 C">12 C</option>
                    </select>

                    <small class="text-danger"><?php echo form_error('kelas'); ?></small>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">Tahun Angkatan</label>
                    <input type="number" class="form-control <?php if (form_error('tahunAngkatan')) {
																	echo 'is-invalid';
																} ?>" id="validationCustom04" name="tahunAngkatan" value="<?php echo set_value('tahunAngkatan'); ?>">

                    <small class="text-danger"><?php echo form_error('tahunAngkatan'); ?></small>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom05" class="form-label">Beasiswa</label>
                    <input type="text" class="form-control <?php if (form_error('namaBeasiswa')) {
																echo 'is-invalid';
															} ?>" id="validationCustom05" name="namaBeasiswa" value="<?php echo set_value('namaBeasiswa'); ?>">

                    <small class="text-danger"><?php echo form_error('namaBeasiswa'); ?></small>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom06" class="form-label">Tahun Beasiswa</label>
                    <input type="number" class="form-control <?php if (form_error('tahunBeasiswa')) {
																	echo 'is-invalid';
																} ?>" id="validationCustom06" name="tahunBeasiswa" value="<?php echo set_value('tahunBeasiswa'); ?>">

                    <small class="text-danger"><?php echo form_error('tahunBeasiswa'); ?></small>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom07" class="form-label">Tanggungan Orangtua</label>
                    <input type="number" class="form-control <?php if (form_error('tanggunganOrtu')) {
																	echo 'is-invalid';
																} ?>" id="validationCustom07" name="tanggunganOrtu" value="<?php echo set_value('tanggunganOrtu'); ?>">

                    <small class="text-danger"><?php echo form_error('tanggunganOrtu'); ?></small>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom08" class="form-label">Penghasilan Orangtua</label>
                    <input type="text" class="form-control <?php if (form_error('penghasilanOrtu')) {
																echo 'is-invalid';
															} ?>" id="validationCustom08" name="penghasilanOrtu"
                        value="<?php echo set_value('penghasilanOrtu'); ?>">

                    <small class="text-danger"><?php echo form_error('penghasilanOrtu'); ?></small>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom09" class="form-label">Tagihan Air</label>
                    <input type="text" class="form-control <?php if (form_error('tagihanAir')) {
																echo 'is-invalid';
															} ?>" id="validationCustom09" name="tagihanAir" value="<?php echo set_value('tagihanAir'); ?>">

                    <small class="text-danger"><?php echo form_error('tagihanAir'); ?></small>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom010" class="form-label">Tagihan Listrik</label>
                    <input type="text" class="form-control <?php if (form_error('tagihanListrik')) {
																echo 'is-invalid';
															} ?>" id="validationCustom010" name="tagihanListrik" value="<?php echo set_value('tagihanListrik'); ?>">

                    <small class="text-danger"><?php echo form_error('tagihanListrik'); ?></small>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom011" class="form-label">Nilai Raport</label>
                    <input type="text" class="form-control <?php if (form_error('nilaiRaport')) {
																echo 'is-invalid';
															} ?>" id="validationCustom011" name="nilaiRaport" value="<?php echo set_value('nilaiRaport'); ?>">

                    <small class="text-danger"><?php echo form_error('nilaiRaport'); ?></small>
                </div>
                <div class="col-12">
                    <button id="submit" class="btn btn-primary" type="submit">Simpan <i
                            class="fa-solid fa-angles-down"></i></button>
                </div>
            </form><!-- End Custom Styled Validation -->

        </div>
    </div>

    <!-- <form action="<?= base_url('Admin/input_data'); ?>" method="post">
        <div class="row font-weight-bold text-dark" style="font-size: 15px;">
            <div class="col-lg-6">
                <label for="name">Nama</label>
                <input type="text" class="form-control form-control-user mb-3" name="name" placeholder="Masukkan Nama"
                    required>
                <label for="nis">NIS</label>
                <input type="number" class="form-control form-control-user mb-3" name="nis" placeholder="Masukkan NIS"
                    required>
                <label for="inputState">Kelas</label>
                <select name="kelas" class="form-control col-lg-4 mb-3" required>
                    <option value="" selected>Pilih Kelas</option>
                    <option value="10 A">10 A</option>
                    <option value="10 B">10 B</option>
                    <option value="10 C">10 C</option>
                    <option value="11 A">11 A</option>
                    <option value="11 B">11 B</option>
                    <option value="11 C">11 C</option>
                    <option value="12 A">12 A</option>
                    <option value="12 B">12 B</option>
                    <option value="12 C">12 C</option>
                </select>
                <label for="tahunAngkatan">Tahun Angkatan</label>
                <input type="number" class="form-control form-control-user mb-3" name="tahunAngkatan"
                    placeholder="Masukkan Tahun Angkatan" required>
                <label for="namaBeasiswa">Nama Beasiswa</label>
                <input type="text" class="form-control form-control-user mb-3" name="namaBeasiswa"
                    placeholder="Masukkan Nama Beasiswa" required>
                <a href="<?= base_url('Admin/index_admin'); ?>" class="btn btn-sm btn-toscaGreen"><i
                        class="fa-solid fa-angles-left"></i> Kembali</a>
                <button type="submit" class="btn btn-sm btn-toscaGreen">Simpan <i
                        class="fa-solid fa-angles-down"></i></button>
            </div>
            <div class="col-lg-6">
                <label for="tahunBeasiswa">Tahun Beasiswa</label>
                <input type="text" class="form-control form-control-user mb-3" name="tahunBeasiswa"
                    placeholder="Masukkan Tahun Beasiswa" required>
                <label for="tanggunganOrtu">Tanggungan Orangtua</label>
                <input type="text" class="form-control form-control-user mb-3" name="tanggunganOrtu"
                    placeholder="Masukkan Tanggungan Orangtua/bln" required>
                <label for="penghasilanOrtu">Penghasilan Orangtua/bln</label>
                <input type="text" class="form-control form-control-user mb-3" name="penghasilanOrtu"
                    placeholder="Masukkan Penghasilan Orangtua/bln" required>
      
          <label for="tagihanAir">Tagihan Air</label>
                <input type="text" class="form-control form-control-user mb-3" name="tagihanAir"
                    placeholder="Masukkan Tagihan Air/bln" required>
                <label for="tagihanListrik">Tagihan Listrik</label>
                <input type="text" class="form-control form-control-user mb-3" name="tagihanListrik"
                    placeholder="Masukkan Tagihan Listrik/bln" required>
                <label for="nilaiRaport">Nilai Raport</label>
                <input type="text" class="form-control form-control-user mb-3" name="nilaiRaport"
                    placeholder="Masukkan Nilai Raport" required>
      
      
</div>
        </div>
    </
form> 
-->































































</div>