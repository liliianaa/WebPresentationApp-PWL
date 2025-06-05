<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="container py-4">
    <div class="card shadow-sm border-0">
        <div class="card-body">
            <!-- Judul halaman diperbarui agar clean dan konsisten -->
            <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
                <div>
                    <h1 class="h4 fw-semibold text-dark mb-0">📚 Daftar Tutorial</h1><br>
                    <p class="text-muted small">Kelola tutorial presentasi Anda dengan mudah.</p>
                </div>
                <a href="/tutorial/create" class="btn btn-primary shadow-sm">
                    <i class="bi bi-plus-circle"></i> Tambah Tutorial
                </a>
            </div>

            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('success') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <div class="table-responsive">
                <table class="table table-bordered table-hover rounded shadow-sm" id="tutorialTable">
                    <thead class="table-primary text-center align-middle">
                        <tr>
                            <th style="width: 15%;">Judul</th>
                            <th style="width: 15%;">Kode Matkul</th>
                            <th style="width: 20%;">URL Presentation</th>
                            <th style="width: 20%;">URL Finished</th>
                            <th style="width: 15%;">Email</th>
                            <th style="width: 15%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tutorials as $t): ?>
                            <tr>
                                <td><?= esc($t['judul']) ?></td>
                                <td><?= esc($t['kode_matkul']) ?></td>
                                <td>
                                    <a href="<?= base_url('/presentation/' . $t['url_presentation']) ?>" target="_blank">
                                        <?= esc($t['url_presentation']) ?>
                                    </a>
                                </td>
                                <td>
                                    <a href="<?= base_url('/finished/' . $t['url_finished']) ?>" target="_blank">
                                        <?= esc($t['url_finished']) ?>
                                    </a>
                                </td>
                                <td><?= esc($t['creator_email']) ?></td>
                                <td class="text-center">
                                    <a href="/tutorial/<?= $t['id'] ?>/detail"
                                        class="btn btn-sm btn-outline-warning">Detail</a>
                                    <a href="/tutorial/delete/<?= $t['id'] ?>" onclick="return confirm('Yakin mau hapus?')"
                                        class="btn btn-sm btn-outline-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<?= $this->endSection() ?>