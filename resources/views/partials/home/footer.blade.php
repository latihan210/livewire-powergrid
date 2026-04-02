<div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn px-4" data-wow-delay="0.1s"
    style=" animation-delay: 0.1s; animation-name: none;">
    <div class="container py-5 m-4">
        <div class="flex flex-col lg:flex-row items-start gap-8">
            <div class="w-full lg:w-1/4">
                <h6 class="text-primary-600 font-bold text-uppercase mb-3 tracking-[0.2em] text-sm">Tentang Kami
                </h6>
                <p class="text-sm text-gray-300">
                    Jagad Pesona Buana adalah perusahaan penjualan langsung berbasis gaya hidup sehat dan sejahtera
                    yang mengintegrasikan produk, edukasi, dan sistem bisnis modern untuk membangun masa depan yang
                    berkelanjutan.
                </p>
            </div>
            <div class="w-full lg:w-1/4">
                <h5 class="text-white mb-4">Alamat</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Green Lake City, Rukan Crown Block E no 21,
                    Cipondoh - Tangerang</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 8123-4567-890</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>admin@jpbuana.com</p>
                <div class="flex items-center gap-3">
                    <flux:button href="#" variant="ghost" size="sm" class="!p-1"><i class="fab fa-facebook-f"></i>
                    </flux:button>
                    <flux:button href="#" variant="ghost" size="sm" class="!p-1"><i class="fab fa-twitter"></i>
                    </flux:button>
                    <flux:button href="#" variant="ghost" size="sm" class="!p-1"><i class="fab fa-linkedin"></i>
                    </flux:button>
                    <flux:button href="#" variant="ghost" size="sm" class="!p-1"><i class="fab fa-youtube"></i>
                    </flux:button>
                </div>
            </div>
            <div class="w-full lg:w-1/4">
                <h5 class="text-white mb-4">Tautan Cepat</h5>
                <a class="btn btn-link active" href="{{ route('home') }}">Home</a>
                <a class="btn btn-link" href="{{ route('about') }}">Tentang Kami</a>
                <a class="btn btn-link" href="{{ route('product') }}">Produk Unggulan</a>
                <a class="btn btn-link" href="{{ route('opportunity') }}">Model Bisnis</a>
                <a class="btn btn-link" href="{{ route('edukasi') }}">Edukasi &amp; Pelatihan</a>
                <a class="btn btn-link" href="{{ route('contact') }}">Kontak &amp; Informasi</a>
                <a class="btn btn-link" href="{{ route('login') }}">Login</a>
            </div>
            <div class="w-full lg:w-1/4">
                <h5 class="text-white mb-4">Produk Kami</h5>
                <div class="flex items-start gap-2">
                    <div class="bg-primary-100 dark:bg-primary-900/30 rounded-lg text-primary-600">
                        <i class="fa fa-spa text-white"></i>
                    </div>
                    <span>LOVAURA – Face Mist Aura Care</span>
                </div>
                <div class="flex items-start gap-2">
                    <div class="bg-primary-100 dark:bg-primary-900/30 rounded-lg text-primary-600">
                        <i class="fa fa-leaf text-white"></i>
                    </div>
                    <span>Produk Kesehatan <small class="text-muted">(Segera Hadir)</small></span>
                </div>
                <div class="flex items-start gap-2">
                    <div class="bg-primary-100 dark:bg-primary-900/30 rounded-lg text-primary-600">
                        <i class="fa fa-coffee text-white"></i>
                    </div>
                    <span>Minuman Kesehatan <small class="text-muted">(Segera Hadir)</small></span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    © <a href="{{ route('home') }}#">
                        {{ config('app.name', 'JPBuana') }}
                    </a>, 2025 All Right Reserved.
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top">
        <i class="bi bi-arrow-up"></i>
    </a>
</div>