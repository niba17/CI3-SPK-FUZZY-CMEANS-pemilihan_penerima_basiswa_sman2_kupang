<!-- Begin Page Content -->
<div class="container">
  <h2 class="font-weight-bold text-ultraDark">Data Siswa</h2>
  <hr class="sidebar-divider">

  <div class="table-responsive" style="font-size: 12px;">
    <table class="table table-striped text-center" id="dataTable" width="100%" cellspacing="0">
      <thead class="table-primary text-white font-weight-bold">
        <th>No</th>
        <th>Nama</th>
        <th>NIS</th>
        <th>Kelas</th>
        <th>Tahun Angkatan</th>
        <th>Nama Beasiswa</th>
        <th>Tahun Beasiswa</th>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach ($siswa as $s) : ?>
          <tr>
            <td class="text-center m-0 font-weight-bold"><?= $no++; ?></td>
            <td class="text-center"><?= $s->nama; ?></td>
            <td class="text-center"><?= $s->nis; ?></td>
            <td class="text-center"><?= $s->kelas; ?></td>
            <td class="text-center"><?= $s->tahun_angkatan; ?></td>
            <td class="text-center"><?= $s->nama_beasiswa; ?></td>
            <td class="text-center"><?= $s->tahun_beasiswa; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
<!-- End of Main Content -->