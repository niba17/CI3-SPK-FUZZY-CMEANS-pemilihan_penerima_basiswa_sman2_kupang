<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="pagetitle">
        <h1>Ubah Data Nama Kelas</h1>
    </div>
    <hr class="sidebar-divider">
    <a href="<?=base_url('Admin/index_data_nama_kelas');?>" class="btn btn-sm btn-primary mb-3"><i
            class="fa-solid fa-angles-left"></i> Kembali
    </a>
    <div class="card">
        <div class="card-body">

            <!-- Custom Styled Validation -->
            <form class="row g-3 mt-1 needs-validation"
                action="<?=base_url('Admin/index_ubah_data_nama_kelas/' . $nama_kelas->id)?>" method="post">
                <input type="hidden" name="id" value="<?=$nama_kelas->id;?>">
                <div class="col-md-4">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control <?php if (form_error('nama')) {echo 'is-invalid';}?>" id="nama" name="nama" value="<?=$nama_kelas->nama;?>">

                    <small class="text-danger"><?php echo form_error('nama'); ?></small>
                </div>

                <div class="col-12">
                    <button class="btn btn-primary btn-sm" type="submit">Simpan <i
                            class="fa-solid fa-angles-down"></i></button>
                </div>
            </form><!-- End Custom Styled Validation -->

        </div>
    </div>
</div>