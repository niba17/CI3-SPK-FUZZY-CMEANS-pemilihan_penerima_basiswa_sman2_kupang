<!-- Begin Page Content -->
<div class="container">
    <div class="pagetitle">
        <h1>Tabel Bobot</h1>
    </div>
    <hr class="sidebar-divider">

    <a href="<?= base_url('Admin/index_admin'); ?>" class="btn btn-sm btn-primary"><i
            class="fa-solid fa-angles-left"></i> Kembali</a>
    <a href="<?= base_url('Submit/hasil_pembobotan'); ?>" class="btn btn-sm btn-primary">Hasil Pembobotan <i
            class="fa-solid fa-angles-right"></i></a>

    <div class="card mt-3">
        <div class="card-body">
            <div class="row mt-3">
                <div class="col-lg-6 col-sm-12">
                    <div class="table-responsive" style="font-size: 12px;">
                        <table class="table table-striped text-center" id="" width="100%" cellspacing="0">
                            <thead>
                                <th class="table-primary" colspan="2">Tanggungan Orang Tua</td>
                            </thead>
                            <tbody>
                                <tr class="font-weight-bold" style="background-color:#f9c4f3;">
                                    <td>Jumlah Tanggungan</td>
                                    <td>Bobot</td>
                                </tr>
                                <tr>
                                    <td>1 Anak</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>2 Anak</td>
                                    <td>0.25</td>
                                </tr>
                                <tr>
                                    <td>3 Anak</td>
                                    <td>0.5</td>
                                </tr>
                                <tr>
                                    <td>4 Anak</td>
                                    <td>0.75</td>
                                </tr>
                                <tr>
                                    <td>>4 Anak</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <div class="table-responsive" style="font-size: 12px;">
                        <table class="text-center table table-striped" id="" width="100%" cellspacing="0">
                            <thead>
                                <th class="table-primary" colspan="2">Penghasilan Orangtua/bulan</th>
                            </thead>
                            <tbody>
                                <tr class="font-weight-bold" style="background-color:#f9c4f3;">
                                    <td>Jumlah Penghasilan</td>
                                    <td>Bobot</td>
                                </tr>
                                <tr>
                                    <td> >= 5.000.000</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>>= 3.000.000 dan < 5.000.000</td>
                                    <td>0.25</td>
                                </tr>
                                <tr>
                                    <td>>= 1.500.000 dan < 3.000.000</td>
                                    <td>0.5</td>
                                </tr>
                                <tr>
                                    <td>>= 1.000.000 dan < 1.500.000</td>
                                    <td>0.75</td>
                                </tr>
                                <tr>
                                    <td>
                                        < 1.000.000</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="table-responsive" style="font-size: 12px;">
                        <table class="text-center table table-striped" id="" width="100%" cellspacing="0">
                            <thead>
                                <th class="table-primary" colspan="2">Tagihan Air/bulan</th>
                            </thead>
                            <tbody>
                                <tr class="font-weight-bold" style="background-color:#f9c4f3;">
                                    <td>Jumlah Tagihan</td>
                                    <td>Bobot</td>
                                </tr>
                                <tr>
                                    <td>>= 300.000 </td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>>= 200.000 dan < 300.000 </td>
                                    <td>0.25</td>
                                </tr>
                                <tr>
                                    <td>>= 100.000 dan < 200.000 </td>
                                    <td>0.5</td>
                                </tr>
                                <tr>
                                    <td>>= 50.000 dan < 1.00.000</td>
                                    <td>0.75</td>
                                </tr>
                                <tr>
                                    <td>
                                        < 50.000 </td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <div class="table-responsive" style="font-size: 12px;">
                        <table class="text-center table table-striped" id="" width="100%" cellspacing="0">
                            <thead>
                                <th class="table-primary" colspan="2">Tagihan Listrik/bulan</th>
                            </thead>
                            <tbody>
                                <tr class="font-weight-bold" style="background-color:#f9c4f3;">
                                    <td>Jumlah Tagihan</td>
                                    <td>Bobot</td>
                                </tr>
                                <tr>
                                    <td>>= 300.000 </td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>>= 200.000 dan < 300.000 </td>
                                    <td>0.25</td>
                                </tr>
                                <tr>
                                    <td>>= 100.000 dan < 200.000 </td>
                                    <td>0.5</td>
                                </tr>
                                <tr>
                                    <td>>= 50.000 dan < 1.00.000</td>
                                    <td>0.75</td>
                                </tr>
                                <tr>
                                    <td>
                                        < 50.000 </td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive" style="font-size: 12px;">
                        <table class="text-center table table-striped" id="" width="100%" cellspacing="0">
                            <thead>
                                <th class="table-primary" colspan="2">Nilai Raport</th>
                            </thead>
                            <tbody>
                                <tr class="font-weight-bold" style="background-color:#f9c4f3;">
                                    <td>Nilai</td>
                                    <td>Bobot</td>
                                </tr>
                                <tr>
                                    <td>0-20</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>21-40 </td>
                                    <td>0.25</td>
                                </tr>
                                <tr>
                                    <td>41-60 </td>
                                    <td>0.5</td>
                                </tr>
                                <tr>
                                    <td>61-80</td>
                                    <td>0.75</td>
                                </tr>
                                <tr>
                                    <td>81-100</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>





        </div>
    </div>






</div>
<!-- End of Main Content -->