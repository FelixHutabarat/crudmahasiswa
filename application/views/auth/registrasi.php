<div class="container">
    <div class="cad o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">BUAT AKUN</h1>
                        </div>
                        <form class="user" method="POST" action="<?= base_url('Auth/registrasi'); ?>">
                        <div class="form-floating mb-3">
                            <input class="form-control" value="<?=set_value('nama');?>" name="nama" id="inputFirstName" type="text"
                                placeholder="Enter your first name" />
                            <label for="inputFirstName">Nama</label>
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" value="<?=set_value('email');?>" name="email" id="inputEmail" type="email" placeholder="name@example.com" />
                            <label for="inputEmail">Alamat Email</label>
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="row mb-3">
							<div class="col-md-6">
								<div class="form-floating mb-3 mb-md-0">
									<input class="form-control" name="password1" value="<?= set_value('password1') ?>"
										id="inputFirstName" type="password" placeholder="Enter your password" />
                                        <label for="inputFirstName">Password</label>
                                        <?= form_error('password1', '<small class = "text-danger pl-3">', '</small>'); ?>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-floating mb-3 mb-md-0">
									<input class="form-control" name="password2" value="<?= set_value('password2') ?>"
										id="inputFirstName" type="password" placeholder="Enter your password" />
                                        <label for="inputFirstName">Ulangi Password</label>
                                        <?= form_error('password2', '<small class = "text-danger pl-3">', '</small>'); ?>
								</div>
							</div>
						</div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid"><button type="submit" class="btn btn-primary btn-block">Buat Akun</button></div>
                        </div>
                    </form>
                        <hr>
                        <div class="text-center">
                            <a style="text-decoration:none" class="small" href="<?= base_url('auth'); ?>">Sudah Punya
                                Akun? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>