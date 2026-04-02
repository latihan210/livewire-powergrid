<x-layouts::home :title="__('About')">

    @include('partials.home.heading', [
    'title' => __('About'),
    'imgbg' => asset('assets/img/carousel-1.png')
    ])

    <!-- About Start -->
    <div class="container-fluid bg-white dark:bg-neutral-900 overflow-hidden py-24 px-lg-0">
        <div class="container about px-4 px-lg-0">
            <div class="flex flex-col lg:flex-row items-center gap-8">
                <div class="w-full lg:w-1/2 wow fadeIn" data-wow-delay="0.2s">
                    <div class="position-relative h-100">
                        <img class="w-full h-full object-cover rounded-[2.5rem] shadow-2xl"
                            src="{{ asset('assets/img/about.png') }}" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="w-full lg:w-1/2 wow fadeIn" data-wow-delay="0.4s">
                    <div class="p-lg-5 pe-lg-0 text-center text-lg-start px-4">
                        <h6 class="text-primary mb-4 text-4xl font-extrabold tracking-tight">Tentang Jagad Pesona Buana
                        </h6>
                        <p class="mb-4">Jagad Pesona Buana merupakan perusahaan penjualan langsung yang berfokus pada
                            pengembangan
                            gaya hidup sehat dan sejahtera. Kami hadir untuk menjawab kebutuhan masyarakat modern akan
                            produk perawatan diri, kesehatan, serta peluang usaha yang dapat dijalankan secara fleksibel
                            dan berkelanjungan.</p>
                        <p>Dengan pendekatan yang menggabungkan nilai kemanusiaan, edukasi, dan teknologi digital, Jagad
                            Pesona Buana membangun ekosistem bisnis yang tidak hanya berorientasi pada penjualan, tetapi
                            juga pada pertumbuhan pribadi dan komunitas.</p>
                        <div class="flex flex-wrap gap-4 mt-8 justify-center lg:justify-start">
                            <flux:button href="{{ route('about') }}" variant="primary"
                                class="rounded-full !px-10 !py-3 font-semibold shadow-lg">
                                Kenali Kami</flux:button>
                            <flux:button href="{{ route('opportunity') }}" variant="outline"
                                class="rounded-full !px-10 !py-3 border-2 border-primary text-primary hover:bg-primary/5">
                                Gabung
                                Bersama Kami</flux:button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Visi Misi Start -->
    <div class="container-xxl py-24 bg-neutral-50 dark:bg-neutral-900/50">
        <div class="container px-4">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-4 text-4xl md:text-5xl font-extrabold tracking-tight text-neutral-900 dark:text-white">
                    Visi &amp; Misi Perusahaan</h1>
            </div>
            <div class="flex flex-col lg:flex-row items-center gap-8">
                <div class="w-full lg:w-1/2 wow fadeIn" data-wow-delay="0.1s">
                    <div
                        class="bg-white dark:bg-neutral-800 rounded-[2.5rem] p-10 h-100 shadow-xl shadow-neutral-200/50 dark:shadow-none hover:shadow-2xl hover:-translate-y-3 transition-all duration-500 group border border-neutral-100 dark:border-neutral-700">
                        <div class="flex items-center gap-5 mb-6">
                            <div
                                class="shrink-0 w-16 h-16 flex items-center justify-center bg-primary-50 dark:bg-neutral-700 rounded-2xl group-hover:bg-primary transition-all duration-500">
                                <i class="fa fa-eye  text-2xl text-primary group-hover:text-white"></i>
                            </div>
                            <h3 class="mb-0 text-4xl font-extrabold tracking-tight">Visi Perusahaan</h3>
                        </div>
                        <p class="mb-0">Menjadi perusahaan penjualan langsung modern yang membangun masyarakat sehat
                            secara fisik, seimbang secara energi, dan mandiri secara finansial.</p>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 wow fadeIn" data-wow-delay="0.3s">
                    <div
                        class="bg-white dark:bg-neutral-800 rounded-[2.5rem] p-10 h-100 shadow-xl shadow-neutral-200/50 dark:shadow-none hover:shadow-2xl hover:-translate-y-3 transition-all duration-500 group border border-neutral-100 dark:border-neutral-700">
                        <div class="flex items-center gap-5 mb-6">
                            <div
                                class="shrink-0 w-16 h-16 flex items-center justify-center bg-primary-50 dark:bg-neutral-700 rounded-2xl group-hover:bg-primary transition-all duration-500">
                                <i class="fa fa-bullseye  text-2xl text-primary group-hover:text-white"></i>
                            </div>
                            <h3 class="mb-0 text-4xl font-extrabold tracking-tight">Misi Perusahaan</h3>
                        </div>
                        <p><i class="fa fa-check-circle text-primary me-2"></i>Menyediakan produk perawatan diri dan
                            kesehatan yang berkualitas</p>
                        <p><i class="fa fa-check-circle text-primary me-2"></i>Membangun sistem bisnis penjualan
                            langsung yang etis, transparan, dan berkelanjutan</p>
                        <p><i class="fa fa-check-circle text-primary me-2"></i>Memberikan edukasi motivasi, kesadaran
                            diri, dan pengembangan potensi manusia</p>
                        <p><i class="fa fa-check-circle text-primary me-2"></i>Mengembangkan jaringan distribusi
                            berbasis teknologi digital</p>
                        <p class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i>Menciptakan peluang usaha
                            yang relevan dengan perkembangan zaman</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Visi Misi End -->
</x-layouts::home>