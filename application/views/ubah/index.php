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
                    <small class="text-danger"><?php echo form_error('jk'); ?></small>
                </div>

                <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">Kelas</label>
                    <select class="form-select <?php if (form_error('kelas_id')) {
													echo 'is-invalid';
												} ?>" id="validationCustom03" name="kelas_id">
                        <?php
						foreach ($kelas_fix as $rowK) : ?>
                        <?php if ($siswa->kelas_id != null) : ?>
                        <option value="<?= $rowK['id'] ?>" <?php if ($siswa->kelas_id == $rowK['id']) {
																		echo 'selected';
																	} ?>><?= $rowK['tingkat'] ?>
                            <?= $rowK['jurusan'] ?> <?= $rowK['nama_kelas'] ?></option>
                        <?php endif; ?>
                        <?php if ($siswa->kelas_id == null) : ?>
                        <option value="<?= $rowK['id'] ?>"><?= $rowK['tingkat'] ?>
                            <?= $rowK['jurusan'] ?> <?= $rowK['nama_kelas'] ?></option>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                    <small class="text-danger"><?php echo form_error('kelas_id'); ?></small>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">Tahun Angkatan</label>
                    <input type="number" class="form-control <?php if (form_error('tahunAngkatan')) {
																	echo 'is-invalid';
																} ?>" id="validationCustom04" name="tahunAngkatan" value="<?= $siswa_id->tahun_angkatan; ?>">
                    <small class="text-danger"><?php echo form_error('tahunAngkatan'); ?></small>

                </div>
                <!-- <div class="col-md-4">
                    <label for="validationCustom05" class="form-label">Beasiswa</label>
                    <input type="text" class="form-control <?php if (form_error('namaBeasiswa')) {
																echo 'is-invalid';
															} ?>" id="validationCustom05" name="namaBeasiswa" value="<?= $siswa_id->nama_beasiswa; ?>">
                    <small class="text-danger"><?php echo form_error('namaBeasiswa'); ?></small>
                </div> -->
                <div class="col-md-4">
                    <label for="validationCustom06" class="form-label">Tahun Beasiswa</label>
                    <input type="number" class="form-control <?php if (form_error('tahunBeasiswa')) {
																	echo 'is-invalid';
																} ?>" id="validationCustom06" name="tahunBeasiswa" value="<?= $siswa_id->tahun_beasiswa; ?>">
                    <small class="text-danger"><?php echo form_error('tahunBeasiswa'); ?></small>

                </div>
                <div class="col-md-4">
                    <label for="tanggunganOrtu" class="form-label">Tanggungan Ortu</label>
                    <select class="form-select <?php if (form_error('tanggunganOrtu')) {
													echo 'is-invalid';
												} ?>" id="tanggunganOrtu" name="tanggunganOrtu">
                        <?php $tanggunganOrtu = [
							['value' => 0, 'crisp' => 1],
							['value' => 0.25, 'crisp' => 2],
							['value' => 0.50, 'crisp' => 3],
							['value' => 0.75, 'crisp' => 4],
							['value' => 1, 'crisp' => '> 4']
						];
						foreach ($tanggunganOrtu as $rowTU) : ?>
                        <?php if ($rowTU['value'] == $siswa->tanggungan_ortu) : ?>
                        <option value="<?= $rowTU['value'] ?>" selected><?= $rowTU['crisp']; ?></option>
                        <?php endif; ?>
                        <?php if ($rowTU['value'] != $siswa->tanggungan_ortu) : ?>
                        <option value="<?= $rowTU['value'] ?>"><?= $rowTU['crisp']; ?></option>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                    <small class="text-danger"><?php echo form_error('tanggunganOrtu'); ?></small>
                </div>
                <div class="col-md-4">
                    <label for="penghasilanOrtu" class="form-label">Penghasilan Ortu</label>
                    <select class="form-select <?php if (form_error('penghasilanOrtu')) {
													echo 'is-invalid';
												} ?>" id="penghasilanOrtu" name="penghasilanOrtu">
                        <?php $penghasilanOrtu = [
							['value' => 0, 'crisp' => '>= 5.000.000'],
							['value' => 0.25, 'crisp' => '>= 3.000.000 & < 5.000.000'],
							['value' => 0.50, 'crisp' => '>= 1.500.000 & < 3.000.000'],
							['value' => 0.75, 'crisp' => '>= 1.000.000 & < 1.500.000'],
							['value' => 1, 'crisp' => '< 1.000.000']
						];
						foreach ($penghasilanOrtu as $rowPO) : ?>
                        <?php if ($rowPO['value'] == $siswa->penghasilan_ortu) : ?>
                        <option value="<?= $rowPO['value'] ?>" selected><?= $rowPO['crisp']; ?></option>
                        <?php endif; ?>
                        <?php if ($rowPO['value'] != $siswa->penghasilan_ortu) : ?>
                        <option value="<?= $rowPO['value'] ?>"><?= $rowPO['crisp']; ?></option>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                    <small class="text-danger"><?php echo form_error('penghasilanOrtu'); ?></small>
                </div>
                <div class="col-md-4">
                    <label for="tagihanAir" class="form-label">Tagihan Air</label>
                    <select class="form-select <?php if (form_error('tagihanAir')) {
													echo 'is-invalid';
												} ?>" id="tagihanAir" name="tagihanAir">
                        <?php $tagihanAir = [
							['value' => 0, 'crisp' => '>= 300.000'],
							['value' => 0.25, 'crisp' => '>= 200.000 & < 300.000'],
							['value' => 0.50, 'crisp' => '>= 100.000 & < 200.000'],
							['value' => 0.75, 'crisp' => '>= 50.000 & < 100.000'],
							['value' => 1, 'crisp' => '< 50.000']
						];
						foreach ($tagihanAir as $rowTA) : ?>
                        <?php if ($rowTA['value'] == $siswa->tagihan_air) : ?>
                        <option value="<?= $rowTA['value'] ?>" selected><?= $rowTA['crisp']; ?></option>
                        <?php endif; ?>
                        <?php if ($rowTA['value'] != $siswa->tagihan_air) : ?>
                        <option value="<?= $rowTA['value'] ?>"><?= $rowTA['crisp']; ?></option>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                    <small class="text-danger"><?php echo form_error('tagihanAir'); ?></small>
                </div>
                <div class="col-md-4">
                    <label for="tagihanListrik" class="form-label">Tagihan Listrik</label>
                    <select class="form-select <?php if (form_error('tagihanListrik')) {
													echo 'is-invalid';
												} ?>" id="tagihanListrik" name="tagihanListrik">
                        <?php $tagihanListrik = [
							['value' => 0, 'crisp' => '>= 300.000'],
							['value' => 0.25, 'crisp' => '>= 200.000 & < 300.000'],
							['value' => 0.50, 'crisp' => '>= 100.000 & < 200.000'],
							['value' => 0.75, 'crisp' => '>= 50.000 & < 100.000'],
							['value' => 1, 'crisp' => '< 50.000']
						];
						foreach ($tagihanListrik as $rowTL) : ?>
                        <?php if ($rowTL['value'] == $siswa->tagihan_listrik) : ?>
                        <option value="<?= $rowTL['value'] ?>" selected><?= $rowTL['crisp']; ?></option>
                        <?php endif; ?>
                        <?php if ($rowTL['value'] != $siswa->tagihan_listrik) : ?>
                        <option value="<?= $rowTL['value'] ?>"><?= $rowTL['crisp']; ?></option>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                    <small class="text-danger"><?php echo form_error('tagihanListrik'); ?></small>
                </div>
                <div class="col-md-4">
                    <label for="nilaiRaport" class="form-label">Nilai Raport Terakhir</label>
                    <select class="form-select <?php if (form_error('nilaiRaport')) {
													echo 'is-invalid';
												} ?>" id="nilaiRaport" name="nilaiRaport">
                        <?php $nilaiRaport = [
							['value' => 0, 'crisp' => '<= 60'],
							['value' => 0.25, 'crisp' => '> 60 & <= 69.99'],
							['value' => 0.50, 'crisp' => '> 69.99 & <= 79.99'],
							['value' => 0.75, 'crisp' => '> 79.99 & <= 89.99'],
							['value' => 1, 'crisp' => '> 89.99 & <= 100']
						];

						foreach ($nilaiRaport as $rowNR) : ?>
                        <?php if ($rowNR['value'] == $siswa->nilai_raport) : ?>
                        <option value="<?= $rowNR['value'] ?>" selected><?= $rowNR['crisp']; ?></option>
                        <?php endif; ?>
                        <?php if ($rowNR['value'] != $siswa->nilai_raport) : ?>
                        <option value="<?= $rowNR['value'] ?>"><?= $rowNR['crisp']; ?></option>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
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