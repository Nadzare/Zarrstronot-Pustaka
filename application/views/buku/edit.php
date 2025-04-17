<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom Styles -->
<style>
    :root {
        --library-wood: #8B5A2B;
        --page-cream: #F5F0E6;
        --book-cover: #A67C52;
        --reading-light: rgb(244, 231, 207);
        --accent-green: #7A9F79;
        --leather-brown: #5E3C23;
    }

    body {
        background-color: var(--page-cream);
    }

    .card-custom {
        background-color: var(--reading-light);
        border: 1px solid var(--book-cover);
    }

    .card-header-custom {
        background-color: var(--library-wood);
        color: white;
    }

    .btn-save {
        background-color: var(--accent-green);
        color: white;
    }

    .btn-save:hover {
        background-color: #658563;
    }

    .btn-cancel {
        border-color: var(--leather-brown);
        color: var(--leather-brown);
    }

    .btn-cancel:hover {
        background-color: var(--leather-brown);
        color: white;
    }

    label {
        font-weight: 500;
        color: var(--library-wood);
    }
</style>

<!-- Form Edit Buku -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow rounded-4 card-custom">
                <div class="card-header rounded-top-4 card-header-custom">
                    <h4 class="mb-0">✏️ Edit Buku</h4>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group mb-3">
                            <label for="judul" class="form-label">Judul Buku</label>
                            <input type="text" name="judul" id="judul" class="form-control" value="<?= $buku->judul ?>" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="pengarang" class="form-label">Pengarang</label>
                            <input type="text" name="pengarang" id="pengarang" class="form-control" value="<?= $buku->pengarang ?>" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="kategori_id" class="form-label">Kategori</label>
                            <select name="kategori_id" id="kategori_id" class="form-control" required>
                                <option value="">-- Pilih Kategori --</option>
                                <?php foreach ($kategori as $k): ?>
                                    <option value="<?= $k->id ?>" <?= ($k->id == $buku->kategori_id) ? 'selected' : '' ?>>
                                        <?= $k->nama_kategori ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group mb-4">
                            <label for="sinopsis" class="form-label">Sinopsis</label>
                            <textarea name="sinopsis" id="sinopsis" class="form-control" rows="4" required><?= $buku->sinopsis ?></textarea>
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-save px-4">Simpan Perubahan</button>
                            <a href="<?= site_url('buku') ?>" class="btn btn-cancel px-4">↩️ Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
