<div class="container-fluid px-4">
    <h1 class="h3 mb-4 text-gray-800">
        <?= $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header justify-content-center">
                    <h5> Form Edit Data Prodi</h5>
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $prodi['id']; ?>">
                        <div class="form-group mb-2 ">
                            <label for="nama">Nama Prodi</label>
                            <input type="text" name="nama" id="nama" value="<?= $prodi['nama']; ?>" class="form-control" placeholder="Nama Prodi">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mb-2 ">
                            <label for="ruangan">Ruangan</label>
                            <input type="text" name="ruangan" id="ruangan" value="<?= $prodi['ruangan']; ?>" class="form-control" placeholder="Ruangan">
                            <?= form_error('ruangan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mb-2 ">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" name="jurusan" id="jurusan" value="<?= $prodi['jurusan']; ?>" class="form-control" placeholder="Jurusan">
                            <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mb-2 ">
                            <label for="akreditasi">Akreditasi</label>
                            <input type="text" name="akreditasi" id="akreditasi" value="<?= $prodi['akreditasi']; ?>" class="form-control" placeholder="Akreditasi">
                            <?= form_error('akreditasi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mb-2 ">
                            <label for="nama_kaprodi">Nama Kaprodi</label>
                            <input type="text" name="nama_kaprodi" id="nama_kaprodi" value="<?= $prodi['nama_kaprodi']; ?>" class="form-control" placeholder="Nama Kaprodi">
                            <?= form_error('nama_kaprodi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mb-2 ">
                            <label for="tahun_berdiri">Tahun Berdiri</label>
                            <input type="text" name="tahun_berdiri" id="tahun_berdiri" value="<?= $prodi['tahun_berdiri']; ?>" class="form-control" placeholder="Tahun Berdiri">
                            <?= form_error('tahun_berdiri', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mb-2 ">
                            <label for="output_lulusan">Output Lulusan</label>
                            <input type="text" name="output_lulusan" id="output_lulusan" value="<?= $prodi['output_lulusan']; ?>" class="form-control" placeholder="Output Lulusan">
                            <?= form_error('output_lulusan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mb-2 ">
                            <img src="<?= base_url('assets/img/prodi/') . $prodi['gambar'] ?>" style="width: 100px;" class="img-tumbnail" alt="">
                            <div class="custom-file">
                                <input type="file" name="gambar" id="gambar" class="custom-file-input form-control" placeholder="Gambar">
                                <label for="output_lulusan">Choose File</label>
                                <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <a href="<?= base_url('Prodi') ?>" class="btn mt-2 btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn mt-2 btn-primary float-right">Ubah Prodi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>