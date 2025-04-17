<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Perpustakaan Digital' ?></title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
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
            color: var(--leather-brown);
            font-family: 'Georgia', serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        .library-header {
            background-color: var(--library-wood);
            color: white;
            padding: 15px 0;
            box-shadow: 0 4px 12px rgba(139, 90, 43, 0.2);
        }
        
        .library-header h1 {
            font-family: 'Times New Roman', serif;
            font-weight: bold;
        }
        
        .library-header small {
            opacity: 0.9;
        }
        
        .main-content {
            flex: 1;
            padding-bottom: 60px;
        }
        
        /* Notification Bell */
        .notification-bell {
            position: relative;
            margin-left: 20px;
            color: white;
            cursor: pointer;
        }
        
        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: #e74c3c;
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <header class="library-header">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <h1 class="m-0 fs-3"><i class="fas fa-book-open me-2"></i>Zarrstronot Pustaka</h1>
                    <div class="notification-bell ms-4" id="notificationBell">
                        <i class="fas fa-bell fa-lg"></i>
                        <span class="notification-badge">3</span>
                    </div>
                </div>
                <div class="text-end">
                    <small class="d-block">Koleksi Buku Terbaik</small>
                    <small class="d-block"><?= date('d F Y') ?></small>
                </div>
            </div>
        </div>
    </header>

    <div class="main-content">
        <div class="container py-4">