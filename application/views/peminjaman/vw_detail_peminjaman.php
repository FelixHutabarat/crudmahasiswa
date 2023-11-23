<div id="layoutSidenav_content">
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?= $judul; ?>
    </h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Peminjaman
                    </div>
                <div class="card-body">
                    <h2 class="card-title"><?= $peminjaman['NIK'] ?></h2>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $peminjaman['Nama huruf'] ?></h6>
                    <div class="row">
                        <div class="col-md-4">?NIK</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $peminjaman['Alamat'] ?></div>
                        </div>
                    <div class="row">
                        <div class="col-md-4">No telfon</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"> <?= $peminjaman['No telfon'] ?></div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-4">Email</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $peminjaman['Email'] ?></div>
                        </div>
                    <div class="row">
                        <div class="col-md-4">Besar Pinjaman</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $peminjaman['Besar Peminjaman'] ?></div>
                        </div>
                    <div class="row">
                        <div class="col-md-4">Durasi</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $peminjaman['Durasi'] ?></div>
                        </div>
                   
                <div class="card-footer justify-content-center">
                    <a href="<?= base_url('Peminjaman') ?>" class="btn btn-danger">Tutup</a>
                    </div>
                </div>
            </div>
        </div>
</div>