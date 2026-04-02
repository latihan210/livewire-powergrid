<x-layouts::home :title="__('Product')">

    @include('partials.home.heading', [
    'title' => __('Product'),
    'imgbg' => asset('assets/img/carousel-3.png')
    ])


    <div class="container py-24">
        <div class="text-center mx-auto mb-16 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary-600 font-bold text-uppercase mb-3 tracking-[0.2em] text-sm">Produk Unggulan</h6>
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight">Produk Jagad Pesona Buana</h1>
        </div>

        <!-- LOVAURA -->
        <div class=" px-4 flex flex-col mb-24 lg:flex-row items-center gap-12 justify-center wow fadeIn"
            data-wow-delay="0.1s">
            <div class="w-full lg:w-1/2 flex flex-col wow fadeInUp">
                <div class="overflow-hidden flex items-center justify-center bg-neutral-50 dark:bg-neutral-800 rounded-[2.5rem] shadow-xl border border-neutral-100 dark:border-neutral-700"
                    style="height: 450px;">
                    <img class="img-fluid transition-transform duration-700 group-hover:scale-110"
                        src="{{ asset('assets/img/lovaura.png') }}" alt="LOVAURA Face Mist Aura Care">
                </div>
            </div>
            <div class="w-full lg:w-1/2 flex flex-col wow fadeInUp">
                <h6 class="text-primary-600 font-bold text-uppercase mb-3 tracking-[0.2em] text-sm">Tersedia Sekarang
                </h6>
                <h1 class="mb-2 display-5 fw-bold">LOVAURA</h1>
                <h4 class="text-primary mb-4">Face Mist Aura Care</h4>
                <p>LOVAURA merupakan produk pertama Jagad Pesona Buana yang dirancang sebagai face mist untuk mendukung
                    perawatan kulit dan kenyamanan diri dalam aktivitas sehari-hari.</p>
                <p>Produk ini menjadi langkah awal Jagad Pesona Buana dalam menghadirkan rangkaian produk gaya hidup
                    sehat
                    dan perawatan diri.</p>
            </div>
        </div>

        <!-- Coming Soon -->
        <div class="text-center mx-auto mb-12 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">Produk Selanjutnya</h6>
            <h2 class="mb-2">Segera Hadir</h2>
            <p>Kami sedang mempersiapkan rangkaian produk baru untuk melengkapi gaya hidup sehat Anda.</p>
        </div>
        <div class="flex flex-col lg:flex-row items-stretch gap-8 justify-center px-4">
            <div class="w-full lg:w-1/2 flex flex-col wow fadeInUp" data-wow-delay="0.1s">
                <div
                    class="service-item rounded-3xl overflow-hidden bg-white dark:bg-neutral-800 shadow-lg border border-neutral-100 dark:border-neutral-700">
                    <div class="bg-neutral-50 dark:bg-neutral-900/50 flex align-items-center justify-content-center"
                        style="height: 240px;">
                        <div class="text-center p-4">
                            <i class="fa fa-leaf fa-4x text-neutral-300 mb-3"></i>
                            <h5 class="text-primary">Coming Soon</h5>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="mb-2 font-bold">Produk Kesehatan</h4>
                        <p class="mb-0">Fiber dan nutrisi pendukung untuk kesehatan tubuh yang optimal.</p>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 flex flex-col wow fadeInUp" data-wow-delay="0.3s">
                <div
                    class="service-item rounded-3xl overflow-hidden bg-white dark:bg-neutral-800 shadow-lg border border-neutral-100 dark:border-neutral-700">
                    <div class="bg-neutral-50 dark:bg-neutral-900/50 flex align-items-center justify-content-center"
                        style="height: 240px;">
                        <div class="text-center p-4">
                            <i class="fa fa-coffee fa-4x text-neutral-300 mb-3"></i>
                            <h5 class="text-primary">Coming Soon</h5>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="mb-2 font-bold">Minuman Kesehatan &amp; Gaya Hidup</h4>
                        <p class="mb-0">Kopi, teh, dan minuman fungsional untuk gaya hidup sehat dan aktif.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts::home>