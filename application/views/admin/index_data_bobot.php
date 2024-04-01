<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="pagetitle">
        <h1>Data Akun</h1>
    </div>
    <hr class="sidebar-divider">

    <a href="<?= base_url('Admin/index_input_akun') ?>" class="btn btn-sm btn-primary mb-3">Tambah
        Data <i class="fa-solid fa-plus"></i>
    </a>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive g-3 mt-4">
                <table class="table table-striped text-center" id="dataTable" width="100%" cellspacing="0"
                    style="font-size: 12px;">
                    <thead class="table-primary" style="height: 50px; vertical-align: middle;">
                        <th>No</th>
                        <th>Nama</th>
                        <!-- <th>NIS</th>
                        <th>Kelas</th>
                        <th>Tahun Angkatan</th>
                        <th>Nama Beasiswa</th>
                        <th>Tahun Beasiswa</th>-->
                        <th>Aksi</th>
                    </thead>
                    <tbody style="vertical-align: middle;">

                        <?php $no = 1; ?>
                        <?php foreach ($akun as $key => $value) : ?>
                        <tr>
                            <td class="font-weight-bold"><?= $no++; ?></td>
                            <td><?= $value->name ?></td>
                            <td>
                                <a href="<?= base_url('Admin/index_ubah_data_akun/') . $value->id ?>" class="btn btn-sm btn-primary <?php if ($this->session->userdata('id') != $value->id) {
																																			echo 'disabled';
																																		} ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                <!-- <a onclick="akun()" href="#" class="btn btn-sm btn-primary"><i
                                        class="fa-solid fa-info px-1"></i></a> -->
                                <a onclick="hapus_akun('<?= $value->id ?>','<?= $value->name ?>')" href="#" class="btn btn-sm btn-primary <?php if (count($akun) < 2) {
																																					echo 'disabled';
																																				} ?>"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>





<!-- End of Main Content -->