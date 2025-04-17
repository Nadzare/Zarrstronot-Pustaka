<div class="container mt-4">
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('uploads/' . $buku->cover) ?>" class="card-img" alt="<?= $buku->judul ?>">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title"><?= $buku->judul ?></h3>
                    <p class="card-text"><strong>Pengarang:</strong> <?= $buku->pengarang ?></p>
                    <p class="card-text"><strong>Kategori:</strong> <?= $buku->nama_kategori ?></p>
                    <p class="card-text"><strong>Sinopsis:</strong><br><?= $buku->sinopsis ?></p>
                    <a href="<?= site_url('buku') ?>" class="btn btn-secondary mt-3">← Kembali ke Daftar</a>
                </div>
            </div>
        </div>
    </div>
</div>
