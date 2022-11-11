<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link <?php if ($sidebar != 'home') {
									echo 'collapsed';
								} else {
									echo '';
								} ?>" href="<?= base_url('Admin/index_admin') ?>">
                <i class="bi bi-grid"></i>
                <span>Home</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if ($sidebar == 'index_data_siswa' || $sidebar == 'index_data_kelas' || $sidebar == 'index_data_akun') {
									echo '';
								} else {
									echo 'collapsed';
								} ?>" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#" aria-expanded="false"> <i
                    class="bi bi-menu-button-wide"></i>
                <span>Data</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse <?php if ($sidebar == 'index_data_siswa' || $sidebar == 'index_data_kelas' || $sidebar == 'index_data_akun') {
																	echo 'show';
																} else {
																	echo '';
																} ?>" data-bs-parent="#sidebar-nav">
                <li>
                    <a class="<?php if ($sidebar == 'index_data_akun') {
									echo 'active';
								} ?>" href="<?= base_url('Admin/index_data_akun') ?>">
                        <i class="bi bi-circle"></i>
                        <span>Akun</span>
                    </a>
                </li>
                <li>
                    <a class="<?php if ($sidebar == 'index_data_kelas') {
									echo 'active';
								} ?>" href="<?= base_url('Admin/index_data_kelas') ?>">
                        <i class="bi bi-circle"></i>
                        <span>Kelas</span>
                    </a>
                </li>
                <li>
                    <a class="<?php if ($sidebar == 'index_data_siswa') {
									echo 'active';
								} ?>" href="<?= base_url('Admin/index_data_siswa') ?>">
                        <i class="bi bi-circle"></i>
                        <span>Siswa</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>


















</aside>