<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="pagetitle">
        <h1>Data Jurusan</h1>
    </div>
    <hr class="sidebar-divider">
    <a href="<?=base_url('Admin/index_data_kelas');?>" class="btn btn-sm btn-primary mb-3"><i
            class="fa-solid fa-angles-left"></i> Kembali
    </a>
    <a href="<?=base_url('Admin/index_input_jurusan');?>" class="btn btn-sm btn-primary mb-3">Tambah Data <i
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
                        <th style="width:100px;">Aksi</th>
                    </thead>
                    <tbody style="vertical-align: middle;">
                        <?php $no = 1;
foreach ($jurusan as $t): ?>
                        <tr>
                            <td class="font-weight-bold"><?=$no++;?></td>
                            <td><?=$t->nama;?></td>
                            <td>
                                <a href="<?=base_url('Admin/index_ubah_data_jurusan/') . $t->id;?>"
                                    class="btn btn-sm btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="#" class="btn btn-sm btn-primary"
                                    onclick="hapus_kelas('<?=$t->id?>','<?=$t->nama?>','jurusan')"><i
                                        class="fa-solid fa-trash-can"></i></a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>



                </table>







            </div>
        </div>
    </div>

</div>
<!-- End of Main Content -->