<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="pagetitle">
        <h1>Home</h1>
    </div>
    <hr class="sidebar-divider">

    <!-- <a href="<?= base_url('Admin/index_input'); ?>" class="btn btn-sm btn-primary">Tambah Data <i
            class="fa-solid fa-user-plus"></i></a> -->
    <a href="#" class="btn btn-sm btn-primary" onclick="fcm()">Perhitungan CMEANS <i class="fa-solid fa-gear"></i></a>

    <div class="row mt-3">
        <div class="col-lg-4">
            <div class="card info-card">
                <a href="<?= base_url('Admin/index_data_siswa') ?>" class="card-body">
                    <h3 class="card-title fs-4 fw-bold">Siswa</h3>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-restroom fs-1" style="color:#4154F2;"></i>
                        </div>
                        <div class="ps-3">
                            <h4 id="total"><?= count($siswa) ?></h4>
                            <!-- <span class="text-success small pt-1 fw-bold">12%</span> -->
                            <!-- <span class="text-muted small pt-2 ps-1">increase</span> -->
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card info-card">
                <a href="<?= base_url('Admin/index_data_akun') ?>" class="card-body">
                    <h3 class="card-title fs-4 fw-bold">Akun</h3>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-user-shield fs-1" style="color:#4154F2;"></i>
                        </div>
                        <div class="ps-3">
                            <h4><?= count($admin) ?></h4>
                            <!-- <span class="text-success small pt-1 fw-bold">12%</span> -->
                            <!-- <span class="text-muted small pt-2 ps-1">increase</span> -->
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card info-card">
                <a href="<?= base_url('Admin/index_data_kelas') ?>" class="card-body">
                    <h3 class="card-title fs-4 fw-bold">Kelas</h3>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-school fs-1" style="color:#4154F2;"></i>
                        </div>
                        <div class="ps-3">
                            <h4><?= count($kelas) ?></h4>
                            <!-- <span class="text-success small pt-1 fw-bold">12%</span> -->
                            <!-- <span class="text-muted small pt-2 ps-1">increase</span> -->
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>













</div>
<!-- End of Main Content -->
