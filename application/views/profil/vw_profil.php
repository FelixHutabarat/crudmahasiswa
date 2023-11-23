<div class="container-flui">
    <h1 class="h3 mt-3 ms-4 mb-4 text-gray-800">
        <?= $judul ?>
    </h1>
    <div class="card mb-3 ms-5" style="max-width:540px">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?=base_url('assets/img/profile/') . $user['gambar'] ?>" alt="" class="card-img">
            </div>
            <div class="col-md-8 ">
                <div class="card-body">
                    <h5 class="card-title"><?= $user['nama'];?></h5>
                    <p class="card-text"><?= $user['email']?></p>
                    <p class="card-text"><small class="text-muted">Anggota Sejak <?= $user['date_created']?></small></p>
                </div>
            </div>
        </div>
    </div>
</div>