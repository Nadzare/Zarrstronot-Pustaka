</div> <!-- Close container from header -->
    </div> <!-- Close main-content -->

    <footer class="footer mt-auto py-4" style="background-color: var(--library-wood); color: white;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="mb-3"><i class="fas fa-info-circle me-2"></i>Informasi</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white" style="opacity: 0.8;">Tentang Kami</a></li>
                        <li class="mb-2"><a href="#" class="text-white" style="opacity: 0.8;">Kebijakan Privasi</a></li>
                        <li><a href="#" class="text-white" style="opacity: 0.8;">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
                
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="mb-3"><i class="fas fa-book-reader me-2"></i>Statistik</h5>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Total Buku:</span>
                        <span class="fw-bold">1,245</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Pengunjung Hari Ini:</span>
                        <span class="fw-bold"><?= rand(50, 150) ?></span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Buku Terpopuler:</span>
                        <span class="fw-bold">Dilan 1991</span>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <h5 class="mb-3"><i class="fas fa-envelope me-2"></i>Hubungi Kami</h5>
                    <form id="subscribeForm">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email Anda" required>
                            <button class="btn" type="submit" style="background-color: var(--accent-green); color: white;">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                    <div class="social-icons">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            
            <hr style="border-color: rgba(255,255,255,0.1); margin: 2rem 0;">
            
            <div class="text-center pt-2">
                <small>&copy; <?= date('Y') ?> Zarrstronot Pustaka. All Rights Reserved.</small>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Interactive notification bell
        document.getElementById('notificationBell').addEventListener('click', function() {
            alert('Anda memiliki 3 notifikasi baru!');
        });
        
        // Form submission
        document.getElementById('subscribeForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Terima kasih telah berlangganan newsletter kami!');
            this.reset();
        });
        
        // Dynamic visitor count (example)
        setInterval(function() {
            const visitorElement = document.querySelector('.footer .d-flex.justify-content-between.mb-2:last-child span.fw-bold');
            if (visitorElement) {
                const current = parseInt(visitorElement.textContent);
                visitorElement.textContent = current + Math.floor(Math.random() * 3);
            }
        }, 5000);
    </script>
</body>
</html>