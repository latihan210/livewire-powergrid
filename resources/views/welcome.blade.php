<x-layouts::home :title="__('Home')">

    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative aspect-[16/9] md:aspect-[21/9] overflow-hidden">
            <div class="owl-carousel-item" data-dot="<img src='{{ asset('assets/img/carousel-1.png') }}'>">
                <img class="w-full h-full object-cover" src="{{ asset('assets/img/carousel-1.png') }}"
                    alt="Build Your Healthy Life">
                <div class="owl-carousel-inner bg-gradient-to-r from-black/80 via-black/40 to-transparent">
                    <div class="container h-full">
                        <div class="row justify-content-start align-items-center h-full px-4 md:px-0">
                            <div class="col-12 col-lg-8 text-center text-md-start mt-4">
                                <h1 class="text-white animated slideInDown font-extrabold mb-4 tracking-tight"
                                    style="font-size: clamp(2rem, 7vw, 4.5rem); line-height: 1.1;">
                                    Build Your <span class="text-primary-400">Healthy</span> <br
                                        class="hidden md:block">
                                    and Wealthy Life
                                </h1>
                                <p class="text-white/90 mb-8 animated slideInUp"
                                    style="font-size: clamp(0.9rem, 2vw, 1.15rem); line-height: 1.7;">
                                    Jagad Pesona Buana adalah
                                    perusahaan penjualan langsung berbasis gaya hidup sehat, kesadaran diri,
                                    dan kemakmuran global.
                                </p>
                                <div class="animated slideInUp delay-500 justify-center md:justify-start">
                                    <flux:button href="{{ route('about') }}" variant="primary"
                                        class="rounded-full !px-10 !py-4 shadow-xl shadow-primary-500/30 font-semibold">
                                        Kenali Kami
                                    </flux:button>
                                    <flux:button href="{{ route('opportunity') }}"
                                        class="rounded-full !px-10 !py-4 backdrop-blur-md bg-white/10 text-white border-white/30 hover:bg-white/20 transition-all font-semibold">
                                        Gabung Bersama Kami
                                    </flux:button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item" data-dot="<img src='{{ asset('assets/img/carousel-2.png') }}'>">
                <img class="w-full h-full object-cover" src="{{ asset('assets/img/carousel-2.png') }}" alt="">
                <div class="owl-carousel-inner bg-gradient-to-r from-black/80 via-black/40 to-transparent">
                    <div class="container h-full">
                        <div class="row justify-content-start align-items-center h-full px-4 md:px-0">
                            <div class="col-12 col-lg-8 text-center text-md-start mt-4">
                                <h1 class="text-white animated slideInDown font-extrabold mb-4 tracking-tight"
                                    style="font-size: clamp(2rem, 7vw, 4.5rem); line-height: 1.1;">
                                    Solusi Bisnis <br class="hidden md:block"> <span class="text-primary-400">Masa
                                        Depan</span>
                                </h1>
                                <p class="text-white/90 mb-8 animated slideInUp"
                                    style="font-size: clamp(0.9rem, 2vw, 1.15rem); line-height: 1.7;">
                                    Menggabungkan produk berkualitas tinggi dengan sistem edukasi bisnis modern untuk
                                    pertumbuhan Anda.
                                </p>
                                <div class="animated slideInUp delay-500 justify-center md:justify-start">
                                    <flux:button href="{{ route('about') }}" variant="primary"
                                        class="rounded-full !px-10 !py-4 shadow-xl shadow-primary-500/30 font-semibold">
                                        Kenali Kami
                                    </flux:button>
                                    <flux:button href="{{ route('opportunity') }}"
                                        class="rounded-full !px-10 !py-4 backdrop-blur-md bg-white/10 text-white border-white/30 hover:bg-white/20 transition-all font-semibold">
                                        Gabung Bersama Kami
                                    </flux:button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item" data-dot="<img src='{{ asset('assets/img/carousel-3.png') }}'>">
                <img class="w-full h-full object-cover" src="{{ asset('assets/img/carousel-3.png') }}" alt="">
                <div class="owl-carousel-inner bg-gradient-to-r from-black/80 via-black/40 to-transparent">
                    <div class="container h-full">
                        <div class="row justify-content-start align-items-center h-full px-4 md:px-0">
                            <div class="col-12 col-lg-8 text-center text-md-start mt-4">
                                <h1 class="text-white animated slideInDown font-extrabold mb-4 tracking-tight"
                                    style="font-size: clamp(2rem, 7vw, 4.5rem); line-height: 1.1;">
                                    Komunitas <br class="hidden md:block"> <span class="text-primary-400">Penuh
                                        Pesona</span>
                                </h1>
                                <p class="text-white/90 mb-8 animated slideInUp"
                                    style="font-size: clamp(0.9rem, 2vw, 1.15rem); line-height: 1.7;">
                                    Bergabunglah dengan ribuan orang yang telah memilih jalan hidup lebih sehat dan
                                    mandiri secara finansial.
                                </p>
                                <div class="animated slideInUp delay-500 justify-center md:justify-start">
                                    <flux:button href="{{ route('about') }}" variant="primary"
                                        class="rounded-full !px-10 !py-4 shadow-xl shadow-primary-500/30 font-semibold">
                                        Kenali Kami
                                    </flux:button>
                                    <flux:button href="{{ route('opportunity') }}"
                                        class="rounded-full !px-10 !py-4 backdrop-blur-md bg-white/10 text-white border-white/30 hover:bg-white/20 transition-all font-semibold">
                                        Gabung Bersama Kami
                                    </flux:button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-white dark:bg-neutral-900 overflow-hidden py-24 px-lg-0">
        <div class="container about px-4 px-lg-0">
            <div class="flex flex-col lg:flex-row items-center gap-8">
                <div class="w-full lg:w-1/2 wow fadeIn" data-wow-delay="0.1s" style="min-height: 350px;">
                    <div class="relative h-full px-4 md:px-0 group">
                        <div
                            class="absolute -inset-4 bg-primary-100/50 dark:bg-primary-900/20 rounded-3xl -rotate-3 transition-all group-hover:rotate-0 group-hover:scale-105 duration-500">
                        </div>
                        <img class="w-full h-full object-cover rounded-3xl" src="{{ asset('assets/img/about.png') }}"
                            alt="Tentang Jagad Pesona Buana" loading="lazy">
                    </div>
                </div>
                <div class="w-full lg:w-1/2 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0 text-center text-lg-start px-4">
                        <h6 class="text-primary-600 font-bold text-uppercase mb-3 tracking-[0.2em] text-sm">Tentang Kami
                        </h6>
                        <h1 class="mb-4 display-5 fw-bold">Jagad Pesona Buana</h1>
                        <p class="text-lg text-neutral-600 dark:text-neutral-400 mb-6 leading-relaxed text-md-left">
                            Jagad Pesona Buana merupakan perusahaan penjualan langsung yang
                            berfokus pada pengembangan
                            gaya hidup sehat dan sejahtera. Kami hadir untuk menjawab kebutuhan masyarakat modern akan
                            produk perawatan diri dan peluang usaha fleksibel.
                        </p>
                        <div class="space-y-4 mb-8">
                            <div class="flex items-start gap-3">
                                <div class="bg-primary-100 dark:bg-primary-900/30 rounded-lg text-primary-600">
                                    <i class="fa fa-heart"></i>
                                </div>
                                <p class="text-neutral-500 text-sm">Fokus pada kesehatan dan kesejahteraan holistik.</p>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="bg-primary-100 dark:bg-primary-900/30 rounded-lg text-primary-600">
                                    <i class="fa fa-users"></i>
                                </div>
                                <p class="text-neutral-500 text-sm">Membangun komunitas yang edukatif dan produktif.</p>
                            </div>
                        </div>
                        <div class="animated slideInUp delay-500  justify-center justify-lg-start">
                            <flux:button href="{{ route('about') }}" variant="primary"
                                class="rounded-full !px-10 !py-3 font-semibold shadow-lg">
                                Kenali Kami</flux:button>
                            <flux:button href="{{ route('opportunity') }}" variant="ghost"
                                class="rounded-full !px-10 !py-3 border-2 border-primary text-primary hover:bg-primary/5">
                                Gabung
                                Bersama Kami</flux:button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-24 bg-neutral-50 dark:bg-neutral-900/50">
        <div class="container px-4">
            <div class="text-center mx-auto mb-16 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary-600 font-bold text-uppercase mb-3 tracking-[0.2em] text-sm">Visi &amp; Misi</h6>
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight">Tujuan & Fondasi Kami</h1>
            </div>
            <div class="flex flex-col lg:flex-row items-center gap-8">
                <div class="w-full lg:w-1/2 wow fadeIn" data-wow-delay="0.1s">
                    <div
                        class="bg-white dark:bg-neutral-800 rounded-[2.5rem] p-10 h-100 shadow-xl shadow-neutral-200/50 dark:shadow-none hover:shadow-2xl hover:-translate-y-3 transition-all duration-500 group border border-neutral-100 dark:border-neutral-700">
                        <div class="flex items-center gap-5 mb-6">
                            <div
                                class="shrink-0 w-16 h-16 flex items-center justify-center bg-primary-50 dark:bg-neutral-700 rounded-2xl group-hover:bg-primary transition-all duration-500">
                                <i class="fa fa-eye text-2xl text-primary group-hover:text-white"></i>
                            </div>
                            <h3 class="mb-0 text-2xl font-bold">Visi Perusahaan</h3>
                        </div>
                        <p class="mb-0 text-neutral-500 dark:text-neutral-400 leading-loose">Menjadi perusahaan
                            penjualan langsung modern yang
                            membangun masyarakat sehat
                            secara fisik, seimbang secara energi, dan mandiri secara finansial.</p>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 wow fadeIn" data-wow-delay="0.3s">
                    <div
                        class="bg-white dark:bg-neutral-800 rounded-[2.5rem] p-10 h-100 shadow-xl shadow-neutral-200/50 dark:shadow-none hover:shadow-2xl hover:-translate-y-3 transition-all duration-500 group border border-neutral-100 dark:border-neutral-700">
                        <div class="flex items-center gap-5 mb-6">
                            <div
                                class="shrink-0 w-16 h-16 flex items-center justify-center bg-primary-50 dark:bg-neutral-700 rounded-2xl group-hover:bg-primary transition-all duration-500">
                                <i class="fa fa-bullseye text-2xl text-primary group-hover:text-white"></i>
                            </div>
                            <h3 class="mb-0 text-2xl font-bold">Misi Perusahaan</h3>
                        </div>
                        <ul class="space-y-3 text-neutral-500 dark:text-neutral-400">
                            <li class="flex items-start"><i
                                    class="fa fa-check-circle text-primary-500 mt-1 me-3"></i><span>Produk perawatan &
                                    kesehatan berkualitas</span></li>
                            <li class="flex items-start"><i
                                    class="fa fa-check-circle text-primary-500 mt-1 me-3"></i><span>Sistem bisnis etis &
                                    berkelanjutan</span></li>
                            <li class="flex items-start"><i
                                    class="fa fa-check-circle text-primary-500 mt-1 me-3"></i><span>Edukasi pengembangan
                                    potensi manusia</span></li>
                        </ul>
                        <flux:button variant="primary" href="{{ route('opportunity') }}"
                            class="mt-4 rounded-full !px-10 !py-3 font-semibold shadow-lg">
                            Selengkapnya
                            <i class="fa fa-arrow-right ms-2 text-xs"></i>
                        </flux:button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-24">
        <div class="container px-4">
            <div class="text-center mx-auto mb-16 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary-600 font-bold text-uppercase mb-3 tracking-[0.2em] text-sm">Produk Unggulan</h6>
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight">Inovasi Kesehatan</h1>
            </div>
            <div class="flex flex-col lg:flex-row items-stretch gap-8 justify-center">
                <div class="w-full lg:w-1/3 flex flex-col wow fadeInUp" data-wow-delay="0.3s">
                    <div
                        class="h-full flex flex-col rounded-[2.5rem] overflow-hidden shadow-lg bg-neutral-50 dark:bg-neutral-800/30 border-2 border-neutral-200 dark:border-neutral-700 group">
                        <div class="bg-neutral-100 dark:bg-neutral-700/50 flex items-center justify-center transition-colors group-hover:bg-primary-50"
                            style="height: 220px;">
                            <div class="text-center p-3">
                                <i
                                    class="fa fa-leaf text-5xl text-neutral-300 group-hover:text-primary transition-colors mb-3"></i>
                                <div class="text-xs font-bold text-neutral-400 tracking-tighter uppercase">Segera Hadir
                                </div>
                            </div>
                        </div>
                        <div class="p-8 flex-1 flex flex-col">
                            <h4 class="text-xl font-bold mb-2">Kesehatan</h4>
                            <p class="text-neutral-400 text-sm">Nutrisi pendukung tubuh yang optimal.</p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 flex flex-col wow fadeInUp" data-wow-delay="0.1s">
                    <div
                        class="h-full flex flex-col group rounded-[2.5rem] overflow-hidden shadow-2xl bg-white dark:bg-neutral-800 border border-neutral-100 dark:border-neutral-700">
                        <div class="overflow-hidden flex items-center justify-center bg-neutral-50"
                            style="height: 220px;">
                            <img class="img-fluid transition-transform duration-700 group-hover:scale-110"
                                src="{{ asset('assets/img/lovaura.png') }}" alt="LOVAURA Face Mist">
                        </div>
                        <div class="p-10 pt-6 flex-1 flex flex-col">
                            <h4 class="text-3xl font-bold mb-1">LOVAURA</h4>
                            <p class="text-primary-600 font-bold mb-4 tracking-widest text-xs uppercase">Face Mist Aura
                                Care</p>
                            <p class="text-neutral-500 leading-relaxed mb-6 flex-1">
                                Diciptakan untuk mendukung perawatan kulit dan keseimbangan energi harian Anda.
                            </p>
                            <div>
                                <flux:button href="{{ route('product') }}" variant="primary" class="rounded-full !px-8">
                                    Lihat Detail <i class="fa fa-arrow-right ms-2"></i>
                                </flux:button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 flex flex-col wow fadeInUp" data-wow-delay="0.5s">
                    <div
                        class="h-full flex flex-col rounded-[2.5rem] overflow-hidden shadow-lg bg-neutral-50 dark:bg-neutral-800/30 border-2 border-neutral-200 dark:border-neutral-700 group">
                        <div class="bg-neutral-100 dark:bg-neutral-700/50 flex items-center justify-center transition-colors group-hover:bg-primary-50"
                            style="height: 220px;">
                            <div class="text-center p-3">
                                <i
                                    class="fa fa-coffee text-5xl text-neutral-300 group-hover:text-primary transition-colors mb-3"></i>
                                <div class="text-xs font-bold text-neutral-400 tracking-tighter uppercase">Segera Hadir
                                </div>
                            </div>
                        </div>
                        <div class="p-8 flex-1 flex flex-col">
                            <h4 class="text-xl font-bold mb-2">Minuman</h4>
                            <p class="text-neutral-400 text-sm">Varian kopi dan teh fungsional.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-neutral-50 dark:bg-neutral-900 overflow-hidden py-12 md:py-24 px-lg-0">
        <div class="container feature px-4 px-lg-0">
            <div class="flex flex-col lg:flex-row items-center gap-8">
                <div class="w-full lg:w-1/2 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0 text-center text-lg-start">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 2px;">Inovasi Bisnis</h6>
                        <h1 class="mb-4 display-6 fw-bold">Model Bisnis Hybrid</h1>
                        <p class="mb-4 text-muted leading-relaxed">Jagad Pesona Buana mengembangkan model bisnis hybrid
                            yang
                            menggabungkan metode
                            konvensional dan teknologi digital.</p>
                        <p class="mb-4 text-muted leading-relaxed d-none d-md-block">Pendekatan konvensional dilakukan
                            melalui presentasi one-on-one,
                            table talk,
                            seminar, dan pengembangan komunitas. Sementara itu, pemanfaatan teknologi digital dilakukan
                            melalui media sosial, aplikasi, landing page, dan sistem otomatisasi untuk mendukung
                            efektivitas jaringan.</p>
                        <flux:button href="{{ route('opportunity') }}" variant="primary" class="rounded-full !px-8">
                            Pelajari Lebih Lanjut <i class="fa fa-arrow-right ms-2"></i>
                        </flux:button>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 wow fadeIn" data-wow-delay="0.5s" style="min-height: 350px;">
                    <div class="position-relative">
                        <img class="position-absolute img-fluid w-full h-full rounded-3xl shadow-xl"
                            src="{{ asset('assets/img/feature.png') }}" style="object-fit: cover; left: 0; top: 0;"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-12 md:py-24">
        <div class="container px-4">
            <div class="text-center mx-auto mb-16 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 2px;">Pilar Pertumbuhan</h6>
                <h1 class="mb-4 display-6 fw-bold">Edukasi &amp; Pengembangan</h1>
                <p class="text-muted leading-relaxed">Selain produk, Jagad Pesona Buana menyediakan berbagai pelatihan
                    dan edukasi yang
                    mencakup
                    pengembangan motivasi, kesadaran diri, terapi energi, pengetahuan penjualan langsung profesional,
                    serta digital marketing.</p>
                <flux:button href="{{ route('edukasi') }}" variant="primary" class="mt-2 text-primary">
                    Pelajari Kurikulum Kami <i class="fa fa-arrow-right ms-2"></i>
                </flux:button>
            </div>
            <div class="flex flex-col lg:flex-row items-center gap-8">
                <div class="w-full lg:w-1/4 wow fadeIn" data-wow-delay="0.1s">
                    <div
                        class="bg-white dark:bg-neutral-800 rounded-3xl p-6 text-center shadow-sm border border-neutral-100 dark:border-neutral-700 hover:border-primary/50 transition-all group">
                        <div
                            class="btn-lg-square bg-neutral-100 dark:bg-neutral-700 group-hover:bg-primary rounded-2xl mx-auto mb-4 transition-all">
                            <i class="fa fa-brain text-primary group-hover:text-white fs-3"></i>
                        </div>
                        <h5 class="mb-3 fw-bold">Motivasi</h5>
                        <p class="mb-0 text-muted small leading-relaxed">Pengembangan mental dan emosional untuk fondasi
                            bisnis yang kuat.</p>
                    </div>
                </div>
                <div class="w-full lg:w-1/4 wow fadeIn" data-wow-delay="0.3s">
                    <div
                        class="bg-white dark:bg-neutral-800 rounded-3xl p-6 text-center shadow-sm border border-neutral-100 dark:border-neutral-700 hover:border-primary/50 transition-all group">
                        <div
                            class="btn-lg-square bg-neutral-100 dark:bg-neutral-700 group-hover:bg-primary rounded-2xl mx-auto mb-4 transition-all">
                            <i class="fa fa-bolt text-primary group-hover:text-white fs-3"></i>
                        </div>
                        <h5 class="mb-3 fw-bold">Terapi Energi</h5>
                        <p class="mb-0 text-muted small leading-relaxed">Keseimbangan fisik dan mental untuk performa
                            maksimal dalam kehidupan
                            sehari-hari.</p>
                    </div>
                </div>
                <div class="w-full lg:w-1/4 wow fadeIn" data-wow-delay="0.5s">
                    <div
                        class="bg-white dark:bg-neutral-800 rounded-3xl p-6 text-center shadow-sm border border-neutral-100 dark:border-neutral-700 hover:border-primary/50 transition-all group">
                        <div
                            class="btn-lg-square bg-neutral-100 dark:bg-neutral-700 group-hover:bg-primary rounded-2xl mx-auto mb-4 transition-all">
                            <i class="fa fa-handshake text-primary group-hover:text-white fs-3"></i>
                        </div>
                        <h5 class="mb-3 fw-bold">Direct Selling</h5>
                        <p class="mb-0 text-muted small leading-relaxed">Keterampilan penjualan langsung yang etis,
                            modern, dan profesional.</p>
                    </div>
                </div>
                <div class="w-full lg:w-1/4 wow fadeIn" data-wow-delay="0.7s">
                    <div
                        class="bg-white dark:bg-neutral-800 rounded-3xl p-6 text-center shadow-sm border border-neutral-100 dark:border-neutral-700 hover:border-primary/50 transition-all group">
                        <div
                            class="btn-lg-square bg-neutral-100 dark:bg-neutral-700 group-hover:bg-primary rounded-2xl mx-auto mb-4 transition-all">
                            <i class="fa fa-laptop text-primary group-hover:text-white fs-3"></i>
                        </div>
                        <h5 class="mb-3 fw-bold">Digital Marketing</h5>
                        <p class="mb-0 text-muted small leading-relaxed">Strategi pemasaran digital untuk mengembangkan
                            jaringan bisnis global.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts::home>