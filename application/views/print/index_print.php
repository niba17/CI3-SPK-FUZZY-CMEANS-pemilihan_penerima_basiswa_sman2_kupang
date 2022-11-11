<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HASIL SELEKSI PENERIMA BEASISWA PIP</title>
</head>

<body>
    <center>
        <h2>HASIL SELEKSI PENERIMA BEASISWA PIP<br>TAHUN <?= $tahun ?><br>SMA NEGERI 2 KOTA KUPANG</h2>
    </center>
    <hr class="sidebar-divider">
    <table>
        <tbody>
            <tr>
                <td>
                    <h5 style="width: 80px;">Tanggal </h5>
                </td>
                <td>
                    <h5>: <?= $tanggal ?></h5>
                </td>
            </tr>
            <tr>
                <td>
                    <h5 style="width: 80px;">Waktu </h5>
                </td>
                <td>
                    <h5>: <?= $waktu ?></h5>
                </td>
            </tr>
            <tr>
                <td>
                    <h5 style="width: 80px;">Perihal </h5>
                </td>
                <td>
                    <h5>: Laporan Hasil Seleksi Penerima Beasiswa PIP</h5>
                </td>
            </tr>
        </tbody>
    </table>
    <!-- <h5>Waktu : <?= $waktu ?></h5> -->
    <hr>
    <div class="row mt-2">
        <div class="col-lg-12">
            <div class="table-responsive" style="font-size: 12px;">
                <table class="text-center table table-striped" id="" width="100%" cellspacing="0">
                    <thead>
                        <tr class="font-weight-bold table-primary text-dark">
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIS</th>
                            <th>Jenis Kelamin</th>
                            <th>Kelas</th>
                            <th>k1</th>
                            <th>k2</th>
                            <th>c1</th>
                            <th>c2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						$no = 1;
						for ($i = 0; $i < count($siswa); $i++) : ?>
                        <tr>
                            <td class="font-weight-bold text-center"><?= $no++ ?></td>
                            <td class="text-center"><?= $siswa[$i]['nama'] ?></td>
                            <td class="text-center"><?= $siswa[$i]['nis'] ?></td>
                            <td class="text-center"><?= $siswa[$i]['jk'] ?></td>
                            <td class="text-center"><?= $siswa[$i]['kelas'] ?></td>
                            <td class="text-center"><?= $literasi['39'][$i] / $literasi['48'][$i]; ?></td>
                            <td class="text-center"><?= $literasi['45'][$i] / $literasi['48'][$i]; ?></td>
                            <td class="text-center"><?php if ($literasi['39'][$i] / $literasi['48'][$i] > $literasi['45'][$i] / $literasi['48'][$i]) {
																					echo "<i class='fa-solid fa-check'></i>";
																				} ?></td>
                            <td class="text-center"><?php if ($literasi['39'][$i] / $literasi['48'][$i] < $literasi['45'][$i] / $literasi['48'][$i]) {
																					echo "<i class='fa-solid fa-check'></i>";
																				} ?></td>
                        </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
    window.print();
    </script>
</body>

</html>
