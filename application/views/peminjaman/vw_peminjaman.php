<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="h3 mb-4 text-gray-800">
                <?= $judul; ?>
            </h1>
            <div class="row">
                <div class="col-md-6"><a href="<?= base_url() ?>Peminjaman/tambah" class="btn btn-info mb-2">Tambah
                        Peminjaman</a></div>
                <div class="col-md-12">
                    <?= $this->session->flashdata('message');?>
                    <table class="table">
                        <thead>
                            <tr>
                                <td>NIK</td>
                                <td>Nama huruf</td>
                                <td>Alamat</td>
                                <td>No telfon</td>
                                <td>Email</td>
                                <td>Besar Peminjaman</td>
                                <td>Durasi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($Peminjaman as $us): ?>
                                <tr>
                                    <td> <?= $i; ?></td>
                                    <td> <?= $us['NIK']; ?></td>
                                    <td> <?= $us['Nama huruf']; ?></td>
                                    <td> <?= $us['Alamat']; ?></td>
                                    <td> <?= $us['No telfon']; ?></td>
                                    <td> <?= $us['Email']; ?></td>
                                    <td> <?= $us['Besar Peminjaman']; ?></td>
                                    <td> <?= $us['Durasi']; ?></td>
                                    <td>
                                        <a href="<?= base_url('Peminjaman/hapus/') . $us['id'] ?>" class="badge bg-danger">Hapus</a>
                                        <a href="<?= base_url('Peminjaman/edit/') . $us['id'] ?>" class="badge bg-warning">Edit</a>
                                        <a href="<?= base_url('Peminjaman/detail/') . $us['id'] ?>"
                                            class="badge bg-info">Detail</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>