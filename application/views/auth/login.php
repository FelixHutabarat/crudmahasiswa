<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="cad o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">HALAMAN LOGIN</h1>
                                </div>
                                <?= $this->session->flashdata('message'); ?>
                                <form method="post" action="<?= base_url('auth') ?>">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" value="<?= set_value('email'); ?>" name="email" id="inputEmail" type="email" placeholder="name@example.com" />
                                        <label for="inputEmail">Email address</label>
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" value="<?= set_value('nama'); ?>" name="password" id="inputPassword" type="password" placeholder="Password" />
                                        <label for="inputPassword">Password</label>
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                        <button style="width: 100%;" class="btn btn-primary" type="submit">Login</button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a style="text-decoration:none" href="<?= base_url('auth/registrasi'); ?>" class="small">Buat Akun</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>