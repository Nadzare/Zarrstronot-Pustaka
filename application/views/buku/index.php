<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --library-wood: #8B5A2B;
            --page-cream: #F5F0E6;
            --book-cover: #A67C52;
            --reading-light:rgb(244, 231, 207);
            --accent-green: #7A9F79;
            --leather-brown: #5E3C23;
        }
        
        body {
            background-color: var(--page-cream);
            color: var(--leather-brown);
            font-family: 'Georgia', serif;
        }
        
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            border: none;
            background-color: var(--reading-light);
            border-radius: 8px;
            overflow: hidden;
            border-left: 8px solid var(--book-cover);
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(94, 60, 35, 0.15);
        }
        
        .card-img-top {
            height: 280px;
            object-fit: cover;
            border-bottom: 3px solid var(--library-wood);
        }
        
        .card-body {
            display: flex;
            flex-direction: column;
            padding: 1.25rem;
        }
        
        .card-title {
            font-family: 'Times New Roman', serif;
            font-weight: bold;
            color: var(--leather-brown);
        }
        
        .sinopsis {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            color: var(--leather-brown);
            font-size: 0.95rem;
            line-height: 1.5;
        }
        
        .search-box {
            background-color: white;
            padding: 25px;
            border-radius: 8px;
            margin-bottom: 30px;
            box-shadow: 0 4px 12px rgba(139, 90, 43, 0.1);
            border: 1px solid var(--reading-light);
        }
        
        .author-text {
            color: var(--library-wood);
            font-style: italic;
            font-size: 0.9rem;
        }
        
        .category-badge {
            background-color: var(--accent-green);
            color: white;
            font-weight: 500;
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 0.8rem;
        }
        
        .btn-primary {
            background-color: var(--library-wood);
            border-color: var(--library-wood);
            font-weight: 500;
        }
        
        .btn-primary:hover {
            background-color: #7a4b24;
            border-color: #7a4b24;
        }
        
        .btn-success {
            background-color: var(--accent-green);
            border-color: var(--accent-green);
            color: white;
            font-weight: 500;
        }
        
        .btn-success:hover {
            background-color: #6a8f69;
            border-color: #6a8f69;
        }
        
        .btn-outline-info {
            color: var(--library-wood);
            border-color: var(--library-wood);
            font-weight: 500;
        }
        
        .btn-outline-info:hover {
            background-color: var(--library-wood);
            color: white;
        }
        
        .page-title {
            color: var(--leather-brown);
            font-family: 'Times New Roman', serif;
            font-weight: bold;
            position: relative;
            padding-left: 20px;
        }
        
        .page-title:before {
            content: "";
            position: absolute;
            left: 0;
            top: 5px;
            bottom: 5px;
            width: 5px;
            background-color: var(--book-cover);
            border-radius: 3px;
        }
        
        .empty-state-icon {
            color: var(--book-cover);
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            opacity: 0.7;
        }
        
        .pagination .page-item.active .page-link {
            background-color: var(--library-wood);
            border-color: var(--library-wood);
        }
        
        .pagination .page-link {
            color: var(--library-wood);
            font-weight: 500;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--accent-green);
            box-shadow: 0 0 0 0.25rem rgba(122, 159, 121, 0.25);
        }
        
        .input-group-text {
            background-color: var(--library-wood);
            color: white;
        }
        
        .action-buttons .btn-edit {
            background-color: var(--reading-light);
            color: var(--library-wood);
            border: 1px solid var(--book-cover);
        }
        
        .action-buttons .btn-delete {
            background-color: var(--reading-light);
            color: #9E2B25;
            border: 1px solid #9E2B25;
        }
        
        .library-header {
            background-color: var(--library-wood);
            color: white;
            padding: 15px 0;
            margin-bottom: 30px;
            border-radius: 0 0 8px 8px;
        }
    </style>
</head>
<body>
    <!-- <div class="library-header">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="m-0 fs-3"><i class="fas fa-book-open me-2"></i>Perpustakaan Digital</h1>
                <div class="text-end">
                    <small class="d-block">Koleksi Buku Terbaik</small>
                    <small class="d-block"><?= date('d F Y') ?></small>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container py-3">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="page-title m-0">Daftar Buku</h2>
            <a href="<?= site_url('buku/tambah') ?>" class="btn btn-success">
                <i class="fas fa-plus me-2"></i>Tambah Buku
            </a>
        </div>

        <div class="search-box">
            <form method="get" class="row g-3 align-items-end">
                <div class="col-md-6">
                    <label for="keyword" class="form-label fw-semibold" style="color: var(--library-wood);">Cari Buku</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-search"></i>
                        </span>
                        <input type="text" id="keyword" name="keyword" class="form-control" placeholder="Judul, pengarang, atau kata kunci..." value="<?= isset($_GET['keyword']) ? $_GET['keyword'] : '' ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="kategori" class="form-label fw-semibold" style="color: var(--library-wood);">Kategori</label>
                    <select name="kategori" id="kategori" class="form-select">
                        <option value="">-- Semua Kategori --</option>
                        <?php foreach ($kategori as $k): ?>
                            <option value="<?= $k->id ?>" <?= (isset($_GET['kategori']) && $_GET['kategori'] == $k->id) ? 'selected' : '' ?>>
                                <?= $k->nama_kategori ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-2 d-grid">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-filter me-2"></i>Filter
                    </button>
                </div>
            </form>
        </div>

        <?php if (empty($buku)): ?>
            <div class="alert alert-light text-center py-5" style="background-color: var(--reading-light); border-radius: 8px;">
                <i class="fas fa-book-open empty-state-icon"></i>
                <h4 style="color: var(--library-wood);">Tidak ada buku ditemukan</h4>
                <p class="mb-0" style="color: var(--leather-brown);">Silakan tambahkan buku baru atau coba dengan kata kunci lain</p>
                <a href="<?= site_url('buku/tambah') ?>" class="btn btn-success mt-3" style="width: fit-content; margin: 0 auto;">
                    <i class="fas fa-plus me-2"></i>Tambah Buku Pertama
                </a>
            </div>
        <?php else: ?>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
                <?php foreach ($buku as $b): ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="<?= base_url('uploads/' . $b->cover) ?>" class="card-img-top" alt="Cover buku <?= $b->judul ?>">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <h5 class="card-title mb-0"><?= $b->judul ?></h5>
                                <span class="category-badge"><?= $b->nama_kategori ?></span>
                            </div>
                            <p class="card-text author-text mb-3">
                                <i class="fas fa-user-pen me-1"></i><?= $b->pengarang ?>
                            </p>
                            <p class="card-text sinopsis mb-4"><?= $b->sinopsis ?></p>
                            <div class="d-flex justify-content-between mt-auto action-buttons">
                                <a href="<?= site_url('buku/detail/' . $b->id) ?>" class="btn btn-outline-info">
                                    <i class="fas fa-eye me-1"></i>Detail
                                </a>
                                <div class="btn-group">
                                    <a href="<?= site_url('buku/edit/' . $b->id) ?>" class="btn btn-edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="<?= site_url('buku/hapus/' . $b->id) ?>" class="btn btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            
            <div class="mt-4">
<?= $pagination ?>
</div>
            <!-- Pagination -->
            <!-- <nav class="mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav> -->
        <?php endif; ?>
    </div>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>