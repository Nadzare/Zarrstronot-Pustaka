.. ###################
.. What is CodeIgniter
.. ###################

.. CodeIgniter is an Application Development Framework - a toolkit - for people
.. who build web sites using PHP. Its goal is to enable you to develop projects
.. much faster than you could if you were writing code from scratch, by providing
.. a rich set of libraries for commonly needed tasks, as well as a simple
.. interface and logical structure to access these libraries. CodeIgniter lets
.. you creatively focus on your project by minimizing the amount of code needed
.. for a given task.

.. *******************
.. Release Information
.. *******************

.. This repo contains in-development code for future releases. To download the
.. latest stable release please visit the `CodeIgniter Downloads
.. <https://codeigniter.com/download>`_ page.

.. **************************
.. Changelog and New Features
.. **************************

.. You can find a list of all changes for each release in the `user
.. guide change log <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/changelog.rst>`_.

.. *******************
.. Server Requirements
.. *******************

.. PHP version 5.6 or newer is recommended.

.. It should work on 5.3.7 as well, but we strongly advise you NOT to run
.. such old versions of PHP, because of potential security and performance
.. issues, as well as missing features.

.. ************
.. Installation
.. ************

.. Please see the `installation section <https://codeigniter.com/userguide3/installation/index.html>`_
.. of the CodeIgniter User Guide.

.. *******
.. License
.. *******

.. Please see the `license
.. agreement <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst>`_.

.. *********
.. Resources
.. *********

.. -  `User Guide <https://codeigniter.com/docs>`_
.. -  `Contributing Guide <https://github.com/bcit-ci/CodeIgniter/blob/develop/contributing.md>`_
.. -  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
.. -  `Community Forums <http://forum.codeigniter.com/>`_
.. -  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
.. -  `Community Slack Channel <https://codeigniterchat.slack.com>`_

.. Report security issues to our `Security Panel <mailto:security@codeigniter.com>`_
.. or via our `page on HackerOne <https://hackerone.com/codeigniter>`_, thank you.

.. ***************
.. Acknowledgement
.. ***************

.. The CodeIgniter team would like to thank EllisLab, all the
.. contributors to the CodeIgniter project and you, the CodeIgniter user.









# 📚 Zarrstronot Pustaka - Aplikasi Katalog Buku Perpustakaan

Zarrstronot Pustaka adalah aplikasi katalog buku berbasis web yang dikembangkan dengan **CodeIgniter 3**. Aplikasi ini memungkinkan mahasiswa untuk **mencari, melihat detail buku, dan mengelola data buku serta kategori** perpustakaan secara efisien.

---

## 🎯 Deskripsi Singkat

Aplikasi ini dibuat sebagai sarana pembelajaran dan implementasi konsep **MVC**, **relasi database**, **upload file**, dan **pencarian dengan query LIKE** menggunakan **CodeIgniter 3**, **MySQL**, dan **PHP** melalui **Laragon**.

---

## 🧩 Fitur Utama

### 📘 CRUD Buku
- Tambah, edit, hapus, dan tampilkan data buku.
- Setiap buku memiliki gambar sampul, pengarang, dan sinopsis.

### 🗂️ CRUD Kategori
- Pengelolaan kategori buku.
- Setiap buku terhubung ke satu kategori.

### 🔍 Pencarian & Filter
- Cari berdasarkan judul atau pengarang (LIKE Query).
- Filter berdasarkan kategori buku.

### 🖼️ Tampilan Interaktif
- Tampilan daftar buku dalam bentuk grid/card.
- Detail buku lengkap dengan gambar, pengarang, dan sinopsis.

### 📑 Pagination Otomatis
- Navigasi halaman daftar buku menggunakan pagination dari CI3.

---

## 💡 Aspek Pembelajaran

- **Model Relasi Banyak ke Satu** (Banyak buku ke satu kategori).
- **Upload Gambar** dan menyimpannya ke folder `uploads/`.
- **Query LIKE** untuk pencarian fleksibel.
- Penerapan arsitektur **MVC (Model-View-Controller)**.

---

## 🛠️ Teknologi yang Digunakan

| Komponen          | Teknologi                     |
|-------------------|-------------------------------|
| Framework         | CodeIgniter 3                 |
| Server Dev        | Laragon (Apache, PHP 8+)      |
| Basis Data        | MySQL (phpMyAdmin)            |
| Bahasa            | PHP, HTML, CSS, SQL           |
| Frontend Style    | Grid layout (CSS custom)      |
| Upload Gambar     | Folder `uploads/`             |
| Nama Database     | `akapus`                      |

---

## 🗃️ Struktur Direktori MVC

```bash
application/
├── controllers/
│   ├── Books.php           # CRUD Buku
│   ├── Categories.php      # CRUD Kategori
│   └── Search.php          # Pencarian & Filter
│
├── models/
│   ├── Book_model.php      # Model Buku
│   └── Category_model.php  # Model Kategori
│
├── views/
│   ├── books/
│   │   ├── index.php       # Grid daftar buku + search
│   │   ├── detail.php      # Detail buku
│   │   └── form.php        # Form tambah/edit buku
│   ├── categories/
│   │   ├── index.php       # Daftar kategori
│   │   └── form.php        # Form kategori
│   └── templates/
│       ├── header.php      # Header layout
│       └── footer.php      # Footer layout
