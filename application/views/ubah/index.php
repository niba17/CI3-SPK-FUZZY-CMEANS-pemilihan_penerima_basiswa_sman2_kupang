<!-- Begin Page Content -->
<div class="container">
    <div class="pagetitle">
        <h1>Ubah Data Siswa</h1>
    </div>
    <hr class="sidebar-divider">
    <a href="<?= base_url('Admin/index_data_siswa'); ?>" class="btn btn-sm btn-primary mb-3"><i
            class="fa-solid fa-angles-left"></i> Kembali
    </a>
    <div class="card">
        <div class="card-body">

            <!-- Custom Styled Validation -->
            <form class="row g-3 mt-1 needs-validation"
                action="<?= base_url('Admin/index_ubah_data/' . $siswa->id_siswa) ?>" method="post">
                <input type="hidden" name="id" value="<?= $siswa->id_siswa; ?>">
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Nama</label>
                    <input type="text" class="form-control <?php if (form_error('name')) {
																echo 'is-invalid';
															} ?>" id="validationCustom01" name="name" value="<?= $siswa->nama; ?>">

                    <small class="text-danger"><?php echo form_error('name'); ?></small>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">NIS</label>
                    <input type="text" class="form-control <?php if (form_error('nis')) {
																echo 'is-invalid';
															} ?>" id="validationCustom02" name="nis" value="<?= $siswa->nis; ?>">

                    <small class="text-danger"><?php echo form_error('nis'); ?></small>
                </div>

                <div class="col-md-4">
                    <label for="jk" class="form-label">Jenis Kelamin</label>
                    <select class="form-select <?php if (form_error('jk')) {
													echo 'is-invalid';
												} ?>" id="jk" name="jk">
                        <?php $jk = ['Laki - Laki', 'Perempuan'];
						foreach ($jk as $rowJK) : ?>
                        <?php if ($rowJK == $siswa->jk) : ?>
                        <option value="<?= $rowJK ?>" selected><?= $rowJK; ?></option>
                        <?php endif; ?>
                        <?php if ($rowJK != $siswa->jk) : ?>
                        <option value="<?= $rowJK ?>"><?= $rowJK; ?></option>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </select>

                </div>

                <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">Kelas</label>
                    <select class="form-select <?php if (form_error('kelas')) {
													echo 'is-invalid';
												} ?>" id="validationCustom03" name="kelas">
                        <?php $kelas = ['10 A', '10 B', '10 C', '11 A', '11 B', '11 C', '12 A', '12 B', '12 C'];
						foreach ($kelas as $rowK) : ?>
                        <?php if ($rowK == $siswa->kelas) : ?>
                        <option value="<?= $rowK ?>" selected><?= $rowK; ?></option>
                        <?php endif; ?>
                        <?php if ($rowK != $siswa->kelas) : ?>
                        <option value="<?= $rowK ?>"><?= $rowK; ?></option>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </select>

                </div>
                <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">Tahun Angkatan</label>
                    <input type="number" class="form-control <?php if (form_error('tahunAngkatan')) {
																	echo 'is-invalid';
																} ?>" id="validationCustom04" name="tahunAngkatan" value="<?= $siswa->tahun_angkatan; ?>">
                    <small class="text-danger"><?php echo form_error('tahunAngkatan'); ?></small>

                </div>
                <div class="col-md-4">
                    <label for="validationCustom05" class="form-label">Beasiswa</label>
                    <input type="text" class="form-control <?php if (form_error('namaBeasiswa')) {
																echo 'is-invalid';
															} ?>" id="validationCustom05" name="namaBeasiswa" value="<?= $siswa->nama_beasiswa; ?>">
                    <small class="text-danger"><?php echo form_error('namaBeasiswa'); ?></small>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom06" class="form-label">Tahun Beasiswa</label>
                    <input type="number" class="form-control <?php if (form_error('tahunBeasiswa')) {
																	echo 'is-invalid';
																} ?>" id="validationCustom06" name="tahunBeasiswa" value="<?= $siswa->tahun_beasiswa; ?>">
                    <small class="text-danger"><?php echo form_error('tahunBeasiswa'); ?></small>

                </div>
                <div class="col-md-4">
                    <label for="validationCustom07" class="form-label">Tanggungan Orangtua</label>
                    <input type="number" class="form-control <?php if (form_error('tanggunganOrtu')) {
																	echo 'is-invalid';
																} ?>" id="validationCustom07" name="tanggunganOrtu" value="<?= $siswa->tanggungan_ortu; ?>">
                    <small class="text-danger"><?php echo form_error('tanggunganOrtu'); ?></small>

                </div>
                <div class="col-md-4">
                    <label for="validationCustom08" class="form-label">Penghasilan Orangtua</label>
                    <input type="text" class="form-control <?php if (form_error('penghasilanOrtu')) {
																echo 'is-invalid';
															} ?>" id="validationCustom08" name="penghasilanOrtu" value="<?= $siswa->penghasilan_ortu; ?>">
                    <small class="text-danger"><?php echo form_error('penghasilanOrtu'); ?></small>

                </div>
                <div class="col-md-4">
                    <label for="validationCustom09" class="form-label">Tagihan Air</label>
                    <input type="text" class="form-control <?php if (form_error('tagihanAir')) {
																echo 'is-invalid';
															} ?>" id="validationCustom09" name="tagihanAir" value="<?= $siswa->tagihan_air; ?>">
                    <small class="text-danger"><?php echo form_error('tagihanAir'); ?></small>

                </div>
                <div class="col-md-4">
                    <label for="validationCustom010" class="form-label">Tagihan Listrik</label>
                    <input type="text" class="form-control  <?php if (form_error('tagihanListrik')) {
																echo 'is-invalid';
															} ?>" id="validationCustom010" name="tagihanListrik" value="<?= $siswa->tagihan_listrik; ?>">
                    <small class="text-danger"><?php echo form_error('tagihanListrik'); ?></small>

                </div>
                <div class="col-md-4">
                    <label for="validationCustom011" class="form-label">Nilai Raport</label>
                    <input type="text" class="form-control  <?php if (form_error('nilaiRaport')) {
																echo 'is-invalid';
															} ?>" id="validationCustom011" name="nilaiRaport" value="<?= $siswa->nilai_raport; ?>">
                    <small class="text-danger"><?php echo form_error('nilaiRaport'); ?></small>

                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Simpan <i
                            class="fa-solid fa-angles-down"></i></button>
                </div>
            </form><!-- End Custom Styled Validation -->

        </div>
    </div>




    <!-- <form action="<?= base_url('Admin/index_ubah_data/' . $siswa->id_siswa) ?>" method="post">
        <div class="row font-weight-bold text-dark" style="font-size: 15px;">
            <div class="col-lg-6">
                <label for="name">Nama</label>
                <input type="text" class="form-control form-control-user mb-3" name="name" value="<?= $siswa->nama; ?>"
                    required>
                <label for="nis">NIS</label>
                <input type="number" class="form-control form-control-user mb-3" name="nis" value="<?= $siswa->nis; ?>"
                    required>
                <input type="hidden" name="id" value="<?= $siswa->id_siswa; ?>">
                <label for="kelas">Kelas</label>
                <select name="kelas" class="form-control mb-3 col-lg-4" required>
                    <?php $kelas = ['10 A', '10 B', '10 C', '11 A', '11 B', '11 C', '12 A', '12 B', '12 C'];
					foreach ($kelas as $rowK) : ?>
                    <?php if ($rowK == $siswa->kelas) : ?>
                    <option value="<?= $rowK ?>" selected><?= $rowK; ?></option>
                    <?php endif; ?>
                    <?php if ($rowK != $siswa->kelas) : ?>
                    <option value="<?= $rowK ?>"><?= $rowK; ?></option>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </select>
                <label for="tahunAngkatan">Tahun Angkatan</label>
                <input type="number" class="form-control form-control-user mb-3" name="tahunAngkatan"
                    value="<?= $siswa->tahun_angkatan; ?>" required>
                <label for="namaBeasiswa">Nama Beasiswa</label>
                <input type="text" class="form-control form-control-user mb-3" name="namaBeasiswa"
                    value="<?= $siswa->nama_beasiswa; ?>" required>
                <a href="<?= base_url('Admin/index_admin'); ?>" class="btn btn-sm btn-toscaGreen"><i
                        class="fa-solid fa-angles-left"></i> Kembali</a>
                <button type="submit" class="btn btn-sm btn-toscaGreen">Simpan <i
                        class="fa-solid fa-angles-down"></i></button>
            </div>
            <div class="col-lg-6">
      
          <label for="tahunBeasiswa">Tahun Beasiswa</label>
                <input type="number" class="form-control form-control-user mb-3" name="tahunBeasiswa"
                    value="<?= $siswa->tahun_beasiswa; ?>" required>
                <label for="tanggunganOrtu">Tanggungan Orangtua</label>
                <input type="text" class="form-control form-control-user mb-3" name="tanggunganOrtu"
                    value="<?= $siswa->tanggungan_ortu; ?>" required>
                <label for="penghasilanOrtu">Penghasilan Ortuangtua/bln</label>
                <input type="text" class="form-control form-control-user mb-3" name="penghasilanOrtu"
                    value="<?= $siswa->penghasilan_ortu; ?>" required>

                <label for="tagihanAir">Tagihan Air</label>
                <input type="text" class="form-control form-control-user mb-3" name="tagihanAir"
      
      
























        value="<?= $siswa->tagihan_air; ?>" required>
                <label for="tagihanListrik">Tagihan Listrik</label>
                <input type="text" class="form-control form-control-user mb-3" name="tagihanListrik"
                    value="<?= $siswa->tagihan_listrik; ?>" required>
                <label for="nilaiRaport">Nilai Raport</label>
                <input type="text" class="form-control form-control-user mb-3" name="nilaiRaport"
                    value="<?= $siswa->nilai_raport; ?>" required>
      
      
</div>








        </div>
    </form> -->
</div>