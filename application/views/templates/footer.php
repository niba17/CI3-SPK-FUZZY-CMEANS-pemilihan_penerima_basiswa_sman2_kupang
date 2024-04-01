</main>
<!-- <footer id="footer" class="footer">
    <div class="copyright"> © Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved</div>
    <div class="credits"> Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a></div>
</footer>  -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<script>
<?php if ($this->session->flashdata('log_fail')) : ?>
Swal.fire({
    icon: 'error',
    title: 'Gagal Login!',
    text: 'Username atau Password tidak sesuai!',
});
<?php endif; ?>

<?php if ($this->session->flashdata('log_succ')) : ?>
Swal.fire({
    icon: 'success',
    title: 'Selamat datang ' + '<?= $this->session->userdata('name') ?>' + '!',
    timer: 1500
});
<?php endif; ?>

function l_password() {
    Swal.fire({

        icon: 'warning',
        title: '<h1><b>Lupa Password?</b></h1><br><div class="alert alert-warning"><h3><b>Hubungi pihak developer untuk pemulihan password!</b></h3><h4>Whatsapp : +6212345678912<br>Email : example@gmail.com</h4></div>'

    });
}

$('.info-card').on('mouseenter', function() {
    $(this).css('background-color', '#b3cdf2').children('a').children('div').children('div').children('i')
        .addClass(
            'text-dark')
    $(this).children('a').children('div').children('div').children('h4')
        .addClass(
            'text-dark')
})

$('.info-card').on('mouseleave', function() {
    $(this).css('background-color', '').children('a').children('div').children('div').children('i')
        .removeClass(
            'text-dark')
    $(this).children('a').children('div').children('div').children('h4')
        .addClass(
            'text-dark')
})

<?php if ($this->session->flashdata('success_message')) : ?>
Swal.fire({
    title: 'Berhasil!',
    text: 'Data siswa An. ' + '<?= urldecode($nama) ?>' + ', Berhasil Ditambahkan!',
    icon: 'success',
    confirmButtonText: 'Okay'
})
<?php endif; ?>

<?php if ($this->session->flashdata('class_add_err_message')) : ?>
Swal.fire({
    title: 'Gagal!',
    text: 'Data Kelas sudah ada!',
    icon: 'error',
    // confirmButtonText: 'Okay'
    showConfirmButton: false,
    timer: 1500
})
<?php endif; ?>

<?php if ($this->session->flashdata('error_message')) : ?>
Swal.fire({
    title: 'Gagal!',
    text: 'Data siswa An. ' + '<?= urldecode($nama) ?>' + ', Gagal Ditambahkan!',
    icon: 'error',
    // confirmButtonText: 'Okay'
    showConfirmButton: false,
    timer: 1500
})
<?php endif; ?>

<?php if ($this->session->flashdata('class_success_message')) : ?>
Swal.fire({
    title: 'Berhasil!',
    text: 'Data ' + '<?= $tabel ?>' + ' : ' + '<?= urldecode($nama) ?>' + ', Berhasil Ditambahkan!',
    icon: 'success',
    confirmButtonText: 'Okay'
})
<?php endif; ?>

<?php if ($this->session->flashdata('class_error_message')) : ?>
Swal.fire({
    title: 'Gagal!',
    text: 'Data ' + '<?= $tabel ?>' + ' : ' + '<?= urldecode($nama) ?>' + ', Gagal Ditambahkan!',
    icon: 'error',
    // confirmButtonText: 'Okay'
    showConfirmButton: false,
    timer: 1500
})
<?php endif; ?>

<?php if ($this->session->flashdata('error_up_message')) : ?>
Swal.fire({
    title: 'Gagal!',
    text: 'Data siswa An. ' + '<?= urldecode($nama) ?>' + ', Gagal Diubah!',
    icon: 'error',
    showConfirmButton: false,
    timer: 1500
})
<?php endif; ?>

<?php if ($this->session->flashdata('success_up_message')) : ?>
Swal.fire({
    title: 'Berhasil!',
    text: 'Data siswa An. ' + '<?= urldecode($nama) ?>' + ', Berhasil Diubah!',
    icon: 'success',
    confirmButtonText: 'Okay'
})
<?php endif; ?>

<?php if ($this->session->flashdata('acc_error_up_message')) : ?>
Swal.fire({
    title: 'Gagal!',
    text: 'Data Akun An. ' + '<?= urldecode($nama) ?>' + ', Gagal Diubah!',
    icon: 'error',
    showConfirmButton: false,
    timer: 1500
})
<?php endif; ?>

<?php if ($this->session->flashdata('acc_success_up_message')) : ?>
Swal.fire({
    title: 'Berhasil!',
    text: 'Data Akun An. ' + '<?= urldecode($nama) ?>' + ', Berhasil Diubah!',
    icon: 'success',
    confirmButtonText: 'Okay'
})
<?php endif; ?>

<?php if ($this->session->flashdata('class_error_up_message')) : ?>
Swal.fire({
    title: 'Gagal!',
    text: 'Data ' + $tingkat + ' : ' + '<?= urldecode($nama) ?>' + ', Gagal Diubah!',
    icon: 'error',
    showConfirmButton: false,
    timer: 1500
})
<?php endif; ?>

<?php if ($this->session->flashdata('class_success_up_message')) : ?>
Swal.fire({
    title: 'Berhasil!',
    text: 'Data ' + '<?= $tabel ?>' + ' : ' + '<?= urldecode($nama) ?>' + ', Berhasil Diubah!',
    icon: 'success',
    confirmButtonText: 'Okay'
})
<?php endif; ?>

function akun() {

    Swal.fire({
        title: 'info!',
        text: 'Website sedang dalam pengembangan developer',
        icon: 'info',
        showConfirmButton: false
    })
}

function logout() {

    Swal.fire({
        icon: 'warning',
        title: 'Logout?',
        showDenyButton: true,
        confirmButtonText: 'Ya',
        denyButtonText: `Batal`,
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.replace(baseUrl + 'Autentifikasi/logout');
        }
    })
}

<?php if ($this->session->flashdata('delete_message')) : ?>
Swal.fire({
    title: 'Berhasil!',
    text: 'Data siswa An. ' + '<?= $nama ?>' + ', Berhasil Dihapus!',
    icon: 'success',
    showConfirmButton: false,
    timer: 2000
})
<?php endif; ?>

<?php if ($this->session->flashdata('acc_delete_message')) : ?>
Swal.fire({
    title: 'Berhasil!',
    text: 'Data Akun An. ' + '<?= $nama ?>' + ', Berhasil Dihapus!',
    icon: 'success',
    showConfirmButton: false,
    timer: 2000
})
<?php endif; ?>

<?php if ($this->session->flashdata('class_delete_message')) : ?>
Swal.fire({
    title: 'Berhasil!',
    text: 'Data ' + '<?= $tabel ?>' + ' : ' + '<?= $nama ?>' + ', Berhasil Dihapus!',
    icon: 'success',
    showConfirmButton: false,
    timer: 2000
})
<?php endif; ?>

function fcm() {
    Swal.fire({
        icon: 'info',
        title: 'Mulai perhitungan CMEANS?',
        showDenyButton: true,
        confirmButtonText: 'Ya',
        denyButtonText: `Batal`,
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.replace(baseUrl + 'Submit');
        }
    })
}

function hapus(id, nama) {
    Swal.fire({
        title: 'Yakin ingin menghapus?',
        showDenyButton: true,
        confirmButtonText: 'Ya',
        denyButtonText: `Batal`,
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.replace(baseUrl + 'Admin/hapus/' + id + '/' + nama);
        }
    });
}

function hapus_kelas(id, nama, tabel) {
    Swal.fire({
        title: 'Yakin ingin menghapus?',
        showDenyButton: true,
        confirmButtonText: 'Ya',
        denyButtonText: `Batal`,
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.replace(baseUrl + 'Admin/hapus_kelas/' + id + '/' + nama + '/' + tabel);
        }
    });
}

function hapus_data_kelas(id) {
    Swal.fire({
        title: 'Yakin ingin menghapus?',
        showDenyButton: true,
        confirmButtonText: 'Ya',
        denyButtonText: `Batal`,
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.replace(baseUrl + 'Admin/hapus_data_kelas/' + id);
        }
    });
}

function hapus_akun(id, nama) {
    Swal.fire({
        title: 'Yakin ingin menghapus?',
        showDenyButton: true,
        confirmButtonText: 'Ya',
        denyButtonText: `Batal`,
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.replace(baseUrl + 'Admin/hapus_akun/' + id + '/' + nama);
        }
    });
}

if (window.self == window.top) {
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-P7JSYB1CSP');
}
</script>

<!-- End of Page Wrapper -->
<br>
<br>
</div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<!-- <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- <script src="<?= base_url('assets/'); ?>vendor/chart.js/Chart.min.js"></script> -->
<!-- <script src="<?= base_url('assets/'); ?>js/demo/chart-area-demo.js"></script>
<script src="<?= base_url('assets/'); ?>js/demo/chart-pie-demo.js"></script> -->

<!-- Page level custom scripts -->
<script src="<?= base_url('assets/'); ?>js/demo/datatables-demo.js"></script>

<script src="<?= base_url('assets/') ?>template/assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="<?= base_url('assets/') ?>template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/') ?>template/assets/vendor/chart.js/chart.min.js"></script>
<script src="<?= base_url('assets/') ?>template/assets/vendor/echarts/echarts.min.js"></script>
<script src="<?= base_url('assets/') ?>template/assets/vendor/quill/quill.min.js"></script>
<script src="<?= base_url('assets/') ?>template/assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="<?= base_url('assets/') ?>template/assets/vendor/tinymce/tinymce.min.js"></script>
<script src="<?= base_url('assets/') ?>template/assets/vendor/php-email-form/validate.js"></script>
<script src="<?= base_url('assets/') ?>template/assets/js/main.js"></script>
<script async="" src="https://www.googletagmanager.com/gtag/js?id=G-P7JSYB1CSP"></script>

<svg id="SvgjsSvg1151" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
    style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
    <defs id="SvgjsDefs1152"></defs>
    <polyline id="SvgjsPolyline1153" points="0,0"></polyline>
    <path id="SvgjsPath1154"
        d="M-1 270.2L-1 270.2C-1 270.2 128.2247596153846 270.2 128.2247596153846 270.2C128.2247596153846 270.2 213.7079326923077 270.2 213.7079326923077 270.2C213.7079326923077 270.2 299.1911057692308 270.2 299.1911057692308 270.2C299.1911057692308 270.2 384.67427884615387 270.2 384.67427884615387 270.2C384.67427884615387 270.2 470.15745192307696 270.2 470.15745192307696 270.2C470.15745192307696 270.2 555.640625 270.2 555.640625 270.2C555.640625 270.2 555.640625 270.2 555.640625 270.2 ">
    </path>































</svg>
</body>

</html>