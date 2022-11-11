<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between"> <a href="<?= base_url('Admin/index_admin') ?>"
            class="logo d-flex align-items-center">
            <!-- <img src="<?= base_url('assets/') ?>template/assets/img/logo.png"
                alt=""> -->
            <span class="d-none d-lg-block">SPK | C - MEANS</span>
        </a> <i class="bi bi-list toggle-sidebar-btn"></i></div>

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">


            <li class="nav-item dropdown pe-3"> <a class="nav-link nav-profile d-flex align-ite	ms-center pe-0" href="#"
                    data-bs-toggle="dropdown">
                    <!-- <img src="<?= base_url('assets/') ?>template/assets/img/profile-img.jpg"
                        alt="Profile" class="rounded-circle">  -->
                    <span class="d-none d-md-block dropdown-toggle ps-2 fs-5"><i
                            class="fa-solid fa-user-gear"></i></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6><?= $this->session->userdata('name') ?></h6> <span>Administrator</span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <!--<li> <a class="dropdown-item d-flex align-items-center" href="users-profile.html"> <i
                                class="bi bi-person"></i> <span>My Profile</span> </a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li> <a class="dropdown-item d-flex align-items-center" href="users-profile.html"> <i
                                class="bi bi-gear"></i> <span>Account Settings</span> </a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li> <a class="dropdown-item d-flex align-items-center" href="pages-faq.html"> <i
                                class="bi bi-question-circle"></i> <span>Need Help?</span> </a></li>
                    <li>-->
                    <!-- <hr class="dropdown-divider"> -->
            </li>
            <li> <a class="dropdown-item d-flex align-items-center" href="#" onclick="logout()"> <i
                        class="bi bi-box-arrow-right"></i> <span>Logout</span> </a></li>
        </ul>
        </li>
        </ul>
    </nav>
</header>

<!-- -- Content Wrapper --
<div id="content-wrapper" class="d-flex flex-column">
    <div id=content>
        -- Topbar --
        <nav class="navbar navbar-expand navbar-toscaGreen bg-toscaGreen topbar mb-4 static-top shadow">

            -- Sidebar Toggle (Topbar) --
            -- <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button> --

            -- Topbar Navbar --
            <ul class="navbar-nav ml-auto">
                <div class="topbar-divider d-none d-sm-block"></div>

                -- Nav Item - User Information --
                <?php if (!$this->session->userdata('name')) : ?>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?= base_url('Autentifikasi/index_login') ?>">
                        <i class="fas fa-sign-in-alt mr-2" style="font-size:25px;"></i>
                        <span style="font-size: 15px;"><b> Login Admin</b></span>
                    </a>
                </li>
                <?php endif; ?>
                <?php if ($this->session->userdata('name')) : ?>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#" onclick="logout()">
                        <i class="fas fa-sign-out-alt mr-2" style="font-size:25px;"></i>
                        <span style="font-size: 15px;"><b> Logout</b></span>
                    </a>
                </li>
                <?php endif; ?>

            </ul>
        </nav>


        <script>

        function logout() {

          
  Swal.fire({

                title: 'Yakin ingin Logout?',
                showDenyButton: true,
                // showCancelButton: true,
                confirmButtonText: 'Ya',
                denyButtonText: `Batal`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    window.location.replace(baseUrl + 'Autentifikasi/logout');
                    // Swal.f
ire('Berhasil!', '', 'success')
                }








                // else if (result.isDenied) {
                //   Swal.fir
e('Dibatalkan ', '', 'info')


                // }
            })
        }





        </s
cript> -->
<main id="main" class="main">