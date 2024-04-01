<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="pagetitle">
        <h1>Data Siswa</h1>
    </div>
    <hr class="sidebar-divider">

    <a href="<?= base_url('Admin/index_input'); ?>" class="btn btn-sm btn-primary mb-3">Tambah Data <i
            class="fa-solid fa-plus"></i>
    </a>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive g-3 mt-4">
                <table class="table table-striped text-center" id="dataTable" width="100%" cellspacing="0"
                    style="font-size: 12px;">
                    <thead class="table-primary" style="height: 50px; vertical-align: middle;">
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIS</th>
                        <th>Jenis Kelamin</th>
                        <th>Kelas</th>
                        <th>Tahun Angkatan</th>
                        <!-- <th>Nama Beasiswa</th> -->
                        <th>Tahun Beasiswa</th>
                        <th style="width:100px;">Aksi</th>
                    </thead>
                    <tbody style="vertical-align: middle;">
                        <?php $no = 1;
						foreach ($siswa as $s) : ?>
                        <tr>
                            <td class="font-weight-bold"><?= $no++; ?></td>
                            <td><?= $s->nama; ?></td>
                            <td><?= $s->nis; ?></td>
                            <td><?= $s->jk; ?></td>
                            <td>
                                <?php if (isset($s->kelas)) : ?>
                                <?= $s->kelas['tingkat'] ?> <?= $s->kelas['jurusan'] ?>
                                <?= $s->kelas['nama_kelas'] ?>
                                <?php endif; ?>
                                <?php if (!isset($s->kelas)) : ?>
                                <span class="text-danger">Kelas belum dipilih</span>
                                <?php endif; ?>
                            </td>
                            <td><?= $s->tahun_angkatan; ?></td>
                            <!-- <td><?= $s->nama_beasiswa; ?></td> -->
                            <td><?= $s->tahun_beasiswa; ?></td>
                            <td>
                                <a href="<?= base_url('Admin/index_ubah_data/') . $s->id_siswa; ?>"
                                    class="btn btn-sm btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="<?= base_url('Admin/index_detail_data/') . $s->id_siswa; ?>"
                                    class="btn btn-sm btn-primary"><i class="fa-solid fa-info px-1"></i></a>
                                <a href="#" class="btn btn-sm btn-primary"
                                    onclick="hapus('<?= $s->id_siswa ?>','<?= $s->nama ?>')"><i
                                        class="fa-solid fa-trash-can"></i></a>
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