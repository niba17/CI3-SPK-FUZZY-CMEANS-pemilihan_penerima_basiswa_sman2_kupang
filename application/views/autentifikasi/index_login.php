<body class="container login-bg bg-toscaGreen">

    <!-- Outer Row -->
    <!-- <div class="vh-100 row justify-content-center align-items-center" style="font-size: 15px;">
        <div class="col-xl-6 col-lg-6 col-md-6">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h5 class="card-title text-center fw-bold">Login</h5>
                    <hr class="my-1">
                    <form class="user" method="post" action="<?= base_url('Autentifikasi/index_login'); ?>">
                        <div class="row mb-3">
                            <label for="name" class="col-form-label">Username</label>
                            <div class="col-12">
                                <input type="text" class="form-control" id="name" name="name"
                                    value="<?php echo set_value('name'); ?>">
                                <small class="text-danger"><?php echo form_error('name'); ?></small>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-form-label">Password</label>
                            <div class="col-12">
                                <input type="password" class="form-control" id="password" name="password">
                                <small class="text-danger"><?php echo form_error('password'); ?></small>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-sm">Login <i
                                        class="fa-solid fa-right-to-bracket"></i></button>
                                <hr>
                            </div>
                        </div>
                        <a href="<?= base_url('Autentifikasi/landing') ?>" class="btn btn-primary btn-sm"><i
                                class="fa-solid fa-angles-left"></i> Kembali</a>
                        <button type="button" class="btn btn-primary btn-sm" onclick="l_password()">Lupa
                            Password <i class="fa-regular fa-circle-question"></i></button>

                    </form>

                </div>
            </div>

        </div>
    </div> -->





    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">


                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login Admin</h5>
                                    </div>

                                    <form class="row g-3" method="post">

                                        <div class="col-12">
                                            <label for="name" class="form-label">Username</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="name" name="name">
                                                <br>
                                            </div>
                                            <small class="text-danger"><?php echo form_error('name'); ?></small>
                                        </div>

                                        <div class="col-12">
                                            <label for="password" class="form-label">Password</label>
                                            <div class="input-group">
                                                <input type="password" class="form-control" id="password"
                                                    name="password">
                                            </div>
                                            <small class="text-danger"><?php echo form_error('password'); ?></small>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                        <div class="col-12">
                                            <a href="#" onclick="l_password()">Lupa password?</a>
                                            <br>
                                            <a href="<?= base_url('Autentifikasi/landing') ?>">Kembali</a>
                                            </p>
                                        </div>
                                    </form>

                                </div>
                            </div>



                        </div>
                    </div>
                </div>










            </section>









        </div>

















        </m ain><!-- End #main -->
</body>