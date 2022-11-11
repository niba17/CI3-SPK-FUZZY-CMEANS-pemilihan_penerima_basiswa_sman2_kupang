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
                        <th>Tanggungan Orang Tua</th>
                        <th>Penghasilan Orangtua</th>
                        <th>Tagihan Air/bulan</th>
                        <th>Tagihan Listrik/bulan</th>
                        <th>Nilai Raport</th>
                    </thead>
                    <tbody style="vertical-align: middle;">
                        <td><?= $detail->nama; ?></td>
                        <td><?= $detail->tanggungan_ortu . ' Orang' ?></td>
                        <td><?= 'Rp. ' . number_format($detail->penghasilan_ortu) . ',-'  ?></td>
                        <td><?= 'Rp. ' . number_format($detail->tagihan_air) . ',-' ?></td>
                        <td><?= 'Rp. ' . number_format($detail->tagihan_listrik) . ',-' ?></td>
                        <td><?= $detail->nilai_raport ?></td>
                    </tbody>
                </table>
            </div>





        </div>
    </div>









</div>
<!-- End of Main Content -->