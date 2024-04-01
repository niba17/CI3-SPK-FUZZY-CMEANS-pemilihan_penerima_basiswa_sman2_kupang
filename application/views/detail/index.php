<div class="container">
    <div class="pagetitle">
        <h1>Detail Data Siswa</h1>
    </div>
    <hr class="sidebar-divider">

    <a href="<?= base_url('Admin/index_data_siswa'); ?>" class="btn btn-sm btn-primary mb-2"><i
            class="fa-solid fa-angles-left"></i> Kembali</a>
    <div class="card mt-2">
        <div class="card-body">
            <div class="table-responsive g-3 mt-4">
                <table class="table table-striped text-center" id="" width="100%" cellspacing="0"
                    style="font-size: 12px;">
                    <thead class="table-primary" style="height: 50px; vertical-align: middle;">
                        <th>Nama</th>
                        <th>B Tanggungan Orang Tua</th>
                        <th>B Penghasilan Orangtua</th>
                        <th>B Tagihan Air/bulan</th>
                        <th>B Tagihan Listrik/bulan</th>
                        <th>B Nilai Raport Terakhir</th>
                    </thead>
                    <tbody style="vertical-align: middle;">
                        <td><?= $detail->nama; ?></td>
                        <td>
                            <?php if ($detail->tanggungan_ortu == 0) {
								echo '1';
							} else if ($detail->tanggungan_ortu == 0.25) {
								echo '2';
							} else if ($detail->tanggungan_ortu == 0.50) {
								echo '3';
							} else if ($detail->tanggungan_ortu == 0.75) {
								echo '4';
							} else if ($detail->tanggungan_ortu == 1) {
								echo '> 4';
							}
							?>
                        </td>
                        <td>
                            <?php if ($detail->penghasilan_ortu == 0) {
								echo '>= 5.000.000';
							} else if ($detail->penghasilan_ortu == 0.25) {
								echo '>= 200.000 & < 300.000';
							} else if ($detail->penghasilan_ortu == 0.50) {
								echo '>= 1.500.000 & < 3.000.000';
							} else if ($detail->penghasilan_ortu == 0.75) {
								echo '>= 1.000.000 & < 1.500.000';
							} else if ($detail->penghasilan_ortu == 1) {
								echo '< 1.000.000';
							} ?>
                        </td>
                        <td>
                            <?php if ($detail->tagihan_air == 0) {
								echo '>= 300.000';
							} else if ($detail->tagihan_air == 0.25) {
								echo '>= 200.000 & < 300.000';
							} else if ($detail->tagihan_air == 0.50) {
								echo '>= 100.000 & < 200.000';
							} else if ($detail->tagihan_air == 0.75) {
								echo '>= 50.000 & < 100.000';
							} else if ($detail->tagihan_air == 1) {
								echo '< 5.0000';
							} ?>
                        </td>
                        <td>
                            <?php if ($detail->tagihan_listrik == 0) {
								echo '>= 300.000';
							} else if ($detail->tagihan_listrik == 0.25) {
								echo '>= 200.000 & < 300.000';
							} else if ($detail->tagihan_listrik == 0.50) {
								echo '>= 100.000 & < 200.000';
							} else if ($detail->tagihan_listrik == 0.75) {
								echo '>= 50.000 & < 100.000';
							} else if ($detail->tagihan_listrik == 1) {
								echo '< 5.0000';
							} ?>
                        </td>
                        <td>
                            <?php if ($detail->nilai_raport == 0) {
								echo '<= 60';
							} else if ($detail->nilai_raport == 0.25) {
								echo '> 60 & <= 69.99';
							} else if ($detail->nilai_raport == 0.50) {
								echo '> 69.99 & <= 79.99';
							} else if ($detail->nilai_raport == 0.75) {
								echo '> 79.99 & <= 89.99';
							} else if ($detail->nilai_raport == 1) {
								echo '> 89.99 & <= 100';
							} ?>
                        </td>
                    </tbody>
                </table>
            </div>





        </div>
    </div>





























</div>
<!-- End of Main Content -->