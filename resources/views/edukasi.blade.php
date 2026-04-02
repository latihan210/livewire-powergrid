<x-layouts::home :title="__('Edukasi')">

    @include('partials.home.heading', [
    'title' => __('Edukasi'),
    'imgbg' => asset('assets/img/carousel-3.png')
    ])

    <div class="container-fluid bg-neutral-50 dark:bg-neutral-900 overflow-hidden py-24 px-lg-0">
        <div class="container px-4 px-lg-0">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="w-full lg:w-1/2 wow fadeIn" data-wow-delay="0.1s">
                    <div class="relative min-h-[400px]">
                        <img class="img-fluid w-full h-full rounded-3xl shadow-xl"
                            src="{{ asset('assets/img/training.png') }}" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="w-full lg:w-1/2 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0 text-center">
                        <h1 class="mb-4 text-2xl font-bold">Edukasi dan Pengembangan</h1>
                        <p>Selain produk, Jagad Pesona Buana menyediakan berbagai pelatihan dan edukasi yang mencakup
                            pengembangan motivasi, kesadaran diri, terapi energi, pengetahuan penjualan langsung
                            profesional, serta digital marketing.</p>
                        <p>Edukasi ini bertujuan membangun mitra usaha yang memiliki fondasi mental, emosional, dan
                            keterampilan yang seimbang.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-24">
        <div class="container px-4">
            <div class="text-center mx-auto mb-16 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-4 text-2xl font-bold">Program Edukasi &amp; Pelatihan</h1>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="wow fadeIn" data-wow-delay="0.1s">
                    <div
                        class="service-item bg-white dark:bg-neutral-800 rounded-3xl text-center p-8 h-full shadow-lg border border-neutral-100 dark:border-neutral-700 hover:-translate-y-2 transition-all">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="fa fa-brain text-primary text-2xl"></i>
                        </div>
                        <h5 class="mb-3 font-bold">Motivasi &amp; Kesadaran Diri</h5>
                        <p class="mb-0 text-sm text-neutral-500">Pelatihan pengembangan mental dan emosional untuk
                            fondasi bisnis yang kuat dan
                            kehidupan yang lebih bermakna.</p>
                    </div>
                </div>
                <div class="wow fadeIn" data-wow-delay="0.3s">
                    <div
                        class="service-item bg-white dark:bg-neutral-800 rounded-3xl text-center p-8 h-full shadow-lg border border-neutral-100 dark:border-neutral-700 hover:-translate-y-2 transition-all">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="fa fa-bolt text-primary text-2xl"></i>
                        </div>
                        <h5 class="mb-3 font-bold">Terapi Energi</h5>
                        <p class="mb-0 text-sm text-neutral-500">Edukasi terapi energi untuk keseimbangan fisik dan
                            mental dalam kehidupan
                            sehari-hari.</p>
                    </div>
                </div>
                <div class="wow fadeIn" data-wow-delay="0.5s">
                    <div
                        class="service-item bg-white dark:bg-neutral-800 rounded-3xl text-center p-8 h-full shadow-lg border border-neutral-100 dark:border-neutral-700 hover:-translate-y-2 transition-all">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="fa fa-handshake text-primary text-2xl"></i>
                        </div>
                        <h5 class="mb-3 font-bold">Direct Selling Profesional</h5>
                        <p class="mb-0 text-sm text-neutral-500">Pengetahuan dan keterampilan penjualan langsung yang
                            etis, profesional, dan
                            berkelanjutan.</p>
                    </div>
                </div>
                <div class="wow fadeIn" data-wow-delay="0.7s">
                    <div
                        class="service-item bg-white dark:bg-neutral-800 rounded-3xl text-center p-8 h-full shadow-lg border border-neutral-100 dark:border-neutral-700 hover:-translate-y-2 transition-all">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="fa fa-laptop text-primary text-2xl"></i>
                        </div>
                        <h5 class="mb-3 font-bold">Digital Marketing</h5>
                        <p class="mb-0 text-sm text-neutral-500">Strategi pemasaran digital untuk mengembangkan jaringan
                            bisnis secara modern dan
                            efektif.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts::home>