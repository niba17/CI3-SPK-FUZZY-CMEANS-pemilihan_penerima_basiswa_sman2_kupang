<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="pagetitle">
        <h1>Data Kelas</h1>
    </div>
    <hr class="sidebar-divider">

    <div class="row">
        <div class="col-xxl-4 col-md-4 col-sm-12">
            <div class="card info-card">
                <a href="<?= base_url('Admin/index_data_tingkat') ?>" class="card-body">
                    <h3 class="card-title fs-4 fw-bold">Tingkat</h3>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-chart-column fs-1" style="color:#4154F2;"></i>
                        </div>
                        <div class="ps-3">
                            <h4 id="total">
                                <?= count($tingkat) ?>
                            </h4>
                        </div>
                    </div>
                </a>
            </div>

        </div>

        <div class="col-xxl-4 col-md-4 col-sm-12">
            <div class="card info-card">
                <a href="<?= base_url('Admin/index_data_jurusan') ?>" class="card-body">
                    <h3 class="card-title fs-4 fw-bold">Jurusan</h3>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-record-vinyl fs-1" style="color:#4154F2;"></i>
                        </div>
                        <div class="ps-3">
                            <h4 id="total"><?= count($jurusan) ?></h4>
                        </div>
                    </div>
                </a>
            </div>

        </div>
        <div class="col-xxl-4 col-md-4 col-sm-12">
            <div class="card info-card">
                <a href="<?= base_url('Admin/index_data_nama_kelas') ?>" class="card-body">
                    <h3 class="card-title fs-4 fw-bold">Nama</h3>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-signature fs-1" style="color:#4154F2;"></i>
                        </div>
                        <div class="ps-3">
                            <h4 id="total"><?= count($nama_kelas) ?></h4>
                        </div>
                    </div>
                </a>
            </div>

        </div>

    </div>



    <div class="card">
        <div class="card-body">
            <a href="<?= base_url('Admin/index_input_kelas') ?>" class="btn btn-sm btn-primary mb-3 mt-4">Tambah
                Data <i class="fa-solid fa-plus"></i>
            </a>
            <div class="table-responsive g-3">
                <table class="table table-striped text-center" id="dataTable" width="100%" cellspacing="0"
                    style="font-size: 12px;">
                    <thead class="table-primary" style="height: 50px; vertical-align: middle;">
                        <th>No</th>
                        <th>Tingkat</th>
                        <th>Jurusan</th>
                        <th>Nama</th>
                        <!-- <th>NIS</th>
                        <th>Kelas</th>
                        <th>Tahun Angkatan</th>
                        <th>Nama Beasiswa</th>
                        <th>Tahun Beasiswa</th>-->
                        <th>Aksi</th>
                    </thead>
                    <tbody style="vertical-align: middle;">
                        <?php $i = 0;
						foreach ($kelas_fix as $k) : ?>
                        <tr>
                            <td class="fw-bold"><?= ++$i; ?></td>
                            <td><?= $k['tingkat'] ?></td>
                            <td><?= $k['jurusan'] ?></td>
                            <td><?= $k['nama_kelas'] ?></td>
                            <td>
                                <a href="<?= base_url('Admin/index_ubah_data_kelas/' . $k['id']) ?>"
                                    class="btn btn-sm btn-primary"><i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a onclick="hapus_data_kelas(<?= $k['id'] ?>)" class="btn btn-sm btn-primary"><i
                                        class="fa-solid fa-trash-can"></i>
                                </a>
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